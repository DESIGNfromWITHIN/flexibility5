<?php
/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption('pdoFetch.class', null, 'pdotools.pdofetch', true);
if ($pdoClass = $modx->loadClass($fqn, '', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . 'components/pdotools/model/', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, 'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".');
	return false;
}
$pdoFetch->addTime('pdoTools loaded');

if (!isset($from) || $from == '') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($direction)) {$direction = 'ltr';}
if ($outputSeparator == '&nbsp;&rarr;&nbsp;' && $direction == 'rtl') {$outputSeparator = '&nbsp;&larr;&nbsp;';}
if ($limit == '') {$limit = 10;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties['tpl'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption('siteStart', $scriptProperties, $modx->getOption('site_start'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return '';
}

$class = $modx->getOption('class', $scriptProperties, 'modResource');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where['published'] = 1;}
if (empty($showHidden)) {$where['hidemenu'] = 0;}
if (empty($showDeleted)) {$where['deleted'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where['isfolder'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = 'Could not build breadcrumbs to resource "'.$to.'"';
	return '';
}

$parents = $modx->getParentIds($resource->id, $limit, array('context' => $resource->get('context_key')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where['id:IN'] = $ids;

if (!empty($exclude)) {
	$where['id:NOT IN'] = array_map('trim', explode(',', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(',',$resourceColumns));

// Add custom parameters
foreach (array('where','select') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime('Conditions prepared');

// Default parameters
$default = array(
	'class' => $class,
	'where' => $modx->toJSON($where),
	'select' => $modx->toJSON($select),
	'groupby' => $class.'.id',
	'sortby' => "find_in_set(`$class`.`id`,'".implode(',', $ids)."')",
	'sortdir' => '',
	'return' => 'data',
	'totalVar' => 'pdocrumbs.total',
	'disableConditions' => true
);

// Merge all properties and run!
$pdoFetch->addTime('Query parameters ready');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == 'ltr') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row['class_key'] == 'modWebLink') {
			$row['link'] = is_numeric(trim($row['content'], '[]~ '))
				? $modx->makeUrl(intval(trim($row['content'], '[]~ ')), '', '', $pdoFetch->config['scheme'])
				: $row['content'];
		}
		else {
			$row['link'] = $modx->makeUrl($row['id'], $row['context_key'], '', $pdoFetch->config['scheme']);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array('idx' => $pdoFetch->idx++)
		);
		if (empty($row['menutitle'])) {$row['menutitle'] = $row['pagetitle'];}

		if ($row['id'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row['id'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row['id'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? '<pre>'.$pdoFetch->getChunk('', $row).'</pre>'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime('Chunks processed');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime('The only result was hidden, because the parameter "hideSingle" activated');
	$output = array();
}

$log = '';
if ($modx->user->hasSessionContext('mgr') && !empty($showLog)) {
	$log .= '<pre class="pdoCrumbsLog">' . print_r($pdoFetch->getTime(), 1) . '</pre>';
}

if (!empty($toSeparatePlaceholders)) {
	$output['log'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == 'ltr')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array('output' => $output, 'crumbs' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
