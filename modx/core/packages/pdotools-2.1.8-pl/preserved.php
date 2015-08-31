<?php return array (
  '2b573eb70c8d8f883ddc1a56ed87fe44' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdotools',
    ),
    'object' => 
    array (
      'name' => 'pdotools',
      'path' => '{core_path}components/pdotools/',
      'assets_path' => '',
    ),
  ),
  'b26cbd4f8000db516fd4e4d5c8bf87c0' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdoTools.class',
    ),
    'object' => 
    array (
      'key' => 'pdoTools.class',
      'value' => 'pdotools.pdotools',
      'xtype' => 'textfield',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '71a1058bc84d7460f2859fbd4f27aeb3' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdoFetch.class',
    ),
    'object' => 
    array (
      'key' => 'pdoFetch.class',
      'value' => 'pdotools.pdofetch',
      'xtype' => 'textfield',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6d6d5e258f04bb95a5e93e9813f5db6c' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdoParser.class',
    ),
    'object' => 
    array (
      'key' => 'pdoParser.class',
      'value' => 'pdotools.pdoparser',
      'xtype' => 'textfield',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '43223656735760f3a49959ba20f417b9' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_default',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_default',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4af384f8fb5c0a5bff76cddac817b7a0' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_parser',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_parser',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3265a7ed491425f7597cc6c1f6538dc7' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_php',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_php',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4017879147efd0217b020f9fee7dbebf' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_modx',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_modx',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd6f430b4b0c47a085fe4d6b35e0f75e3' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_options',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_options',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cf25005142f6310768e9d05606eb3508' => 
  array (
    'criteria' => 
    array (
      'key' => 'pdotools_fenom_cache',
    ),
    'object' => 
    array (
      'key' => 'pdotools_fenom_cache',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'pdotools',
      'area' => 'pdotools_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '82b938895df294a756552ed7aed86101' => 
  array (
    'criteria' => 
    array (
      'category' => 'pdoTools',
    ),
    'object' => 
    array (
      'id' => 3,
      'parent' => 0,
      'category' => 'pdoTools',
    ),
  ),
  '2069611e1d5aa9b1f9d5724f2e3154d7' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoResources',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoResources',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:47:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"pdotools_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"returnIds";a:7:{s:4:"name";s:9:"returnIds";s:4:"desc";s:23:"pdotools_prop_returnIds";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"pdotools_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:22:"pdotools_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"pdotools_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:11:"publishedon";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"sortbyTV";a:7:{s:4:"name";s:8:"sortbyTV";s:4:"desc";s:22:"pdotools_prop_sortbyTV";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"sortbyTVType";a:7:{s:4:"name";s:12:"sortbyTVType";s:4:"desc";s:26:"pdotools_prop_sortbyTVType";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"pdotools_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"sortdirTV";a:7:{s:4:"name";s:9:"sortdirTV";s:4:"desc";s:23:"pdotools_prop_sortdirTV";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"pdotools_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:20:"pdotools_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:19:"pdotools_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"pdotools_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:21:"pdotools_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:28:"pdotools_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:24:"pdotools_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"prepareTVs";a:7:{s:4:"name";s:10:"prepareTVs";s:4:"desc";s:24:"pdotools_prop_prepareTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:24:"pdotools_prop_processTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:22:"pdotools_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"tv.";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"tvFilters";a:7:{s:4:"name";s:9:"tvFilters";s:4:"desc";s:23:"pdotools_prop_tvFilters";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:21:"tvFiltersAndDelimiter";a:7:{s:4:"name";s:21:"tvFiltersAndDelimiter";s:4:"desc";s:35:"pdotools_prop_tvFiltersAndDelimiter";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:",";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:20:"tvFiltersOrDelimiter";a:7:{s:4:"name";s:20:"tvFiltersOrDelimiter";s:4:"desc";s:34:"pdotools_prop_tvFiltersOrDelimiter";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"||";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"pdotools_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"pdotools_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:24:"pdotools_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"hideContainers";a:7:{s:4:"name";s:14:"hideContainers";s:4:"desc";s:28:"pdotools_prop_hideContainers";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:21:"pdotools_prop_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:3:"idx";a:7:{s:4:"name";s:3:"idx";s:4:"desc";s:17:"pdotools_prop_idx";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"first";a:7:{s:4:"name";s:5:"first";s:4:"desc";s:19:"pdotools_prop_first";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"last";a:7:{s:4:"name";s:4:"last";s:4:"desc";s:18:"pdotools_prop_last";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplFirst";a:7:{s:4:"name";s:8:"tplFirst";s:4:"desc";s:22:"pdotools_prop_tplFirst";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplLast";a:7:{s:4:"name";s:7:"tplLast";s:4:"desc";s:21:"pdotools_prop_tplLast";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"tplOdd";a:7:{s:4:"name";s:6:"tplOdd";s:4:"desc";s:20:"pdotools_prop_tplOdd";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"pdotools_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"wrapIfEmpty";a:7:{s:4:"name";s:11:"wrapIfEmpty";s:4:"desc";s:25:"pdotools_prop_wrapIfEmpty";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"totalVar";a:7:{s:4:"name";s:8:"totalVar";s:4:"desc";s:22:"pdotools_prop_totalVar";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"total";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:23:"pdotools_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"tplCondition";a:7:{s:4:"name";s:12:"tplCondition";s:4:"desc";s:26:"pdotools_prop_tplCondition";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplOperator";a:7:{s:4:"name";s:11:"tplOperator";s:4:"desc";s:25:"pdotools_prop_tplOperator";s:4:"type";s:4:"list";s:7:"options";a:10:{i:0;a:2:{s:4:"text";s:11:"is equal to";s:5:"value";s:2:"==";}i:1;a:2:{s:4:"text";s:15:"is not equal to";s:5:"value";s:2:"!=";}i:2;a:2:{s:4:"text";s:9:"less than";s:5:"value";s:1:"<";}i:3;a:2:{s:4:"text";s:21:"less than or equal to";s:5:"value";s:2:"<=";}i:4;a:2:{s:4:"text";s:24:"greater than or equal to";s:5:"value";s:2:">=";}i:5;a:2:{s:4:"text";s:8:"is empty";s:5:"value";s:5:"empty";}i:6;a:2:{s:4:"text";s:12:"is not empty";s:5:"value";s:6:"!empty";}i:7;a:2:{s:4:"text";s:7:"is null";s:5:"value";s:4:"null";}i:8;a:2:{s:4:"text";s:11:"is in array";s:5:"value";s:7:"inarray";}i:9;a:2:{s:4:"text";s:10:"is between";s:5:"value";s:7:"between";}}s:5:"value";s:2:"==";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"conditionalTpls";a:7:{s:4:"name";s:15:"conditionalTpls";s:4:"desc";s:29:"pdotools_prop_conditionalTpls";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"select";a:7:{s:4:"name";s:6:"select";s:4:"desc";s:20:"pdotools_prop_select";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:22:"toSeparatePlaceholders";a:7:{s:4:"name";s:22:"toSeparatePlaceholders";s:4:"desc";s:36:"pdotools_prop_toSeparatePlaceholders";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"loadModels";a:7:{s:4:"name";s:10:"loadModels";s:4:"desc";s:24:"pdotools_prop_loadModels";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"scheme";a:7:{s:4:"name";s:6:"scheme";s:4:"desc";s:20:"pdotools_prop_scheme";s:4:"type";s:4:"list";s:7:"options";a:6:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:14:"System default";}i:1;a:2:{s:5:"value";i:-1;s:4:"text";s:25:"-1 (relative to site_url)";}i:2;a:2:{s:5:"value";s:4:"full";s:4:"text";s:40:"full (absolute, prepended with site_url)";}i:3;a:2:{s:5:"value";s:3:"abs";s:4:"text";s:39:"abs (absolute, prepended with base_url)";}i:4;a:2:{s:5:"value";s:4:"http";s:4:"text";s:38:"http (absolute, forced to http scheme)";}i:5;a:2:{s:5:"value";s:5:"https";s:4:"text";s:40:"https (absolute, forced to https scheme)";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"useWeblinkUrl";a:7:{s:4:"name";s:13:"useWeblinkUrl";s:4:"desc";s:27:"pdotools_prop_useWeblinkUrl";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
      'content' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '8d6ef34e888ff1aad915cd148e590c3a' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoUsers',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoUsers',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$class = \'modUser\';
$profile = \'modUserProfile\';
$member = \'modUserGroupMember\';

// Start building "Where" expression
$where = array();
if (empty($showInactive)) {$where[$class.\'.active\'] = 1;}
if (empty($showBlocked)) {$where[$profile.\'.blocked\'] = 0;}

// Add users profiles and groups
$innerJoin = array(
	$profile => array(\'alias\' => $profile, \'on\' => "$class.id = $profile.internalKey"),
);

// Filter by users, groups and roles
$tmp = array(
	\'users\' => array(
		\'class\' => $class,
		\'name\' => \'username\',
		\'join\' => $class.\'.id\',
	),
	\'groups\' => array(
		\'class\' => \'modUserGroup\',
		\'name\' => \'name\',
		\'join\' => $member.\'.user_group\',
	),
	\'roles\' => array(
		\'class\' => \'modUserGroupRole\',
		\'name\' => \'name\',
		\'join\' => $member.\'.role\',
	)
);
foreach ($tmp as $k => $p) {
	if (!empty($$k)) {
		$$k = array_map(\'trim\', explode(\',\', $$k));
		${$k.\'_in\'} = ${$k.\'_out\'} = $fetch_in = $fetch_out = array();
		foreach ($$k as $v) {
			if (is_numeric($v)) {
				if ($v[0] == \'-\') {${$k.\'_out\'}[] = abs($v);}
				else {${$k.\'_in\'}[] = abs($v);}
			}
			else {
				if ($v[0] == \'-\') {$fetch_out[] = $v;}
				else {$fetch_in[] = $v;}
			}
		}

		if (!empty($fetch_in) || !empty($fetch_out)) {
			$q = $modx->newQuery($p[\'class\'], array($p[\'name\'].\':IN\' => array_merge($fetch_in, $fetch_out)));
			$q->select(\'id,\'.$p[\'name\']);
			$tstart = microtime(true);
			if ($q->prepare() && $q->stmt->execute()) {
				$modx->queryTime += microtime(true) - $tstart;
				$modx->executedQueries++;
				while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
					if (in_array($row[$p[\'name\']], $fetch_in)) {
						${$k.\'_in\'}[] = $row[\'id\'];
					}
					else {
						${$k.\'_out\'}[] = $row[\'id\'];
					}
				}
			}
		}

		if (!empty(${$k.\'_in\'})) {
			$where[$p[\'join\'].\':IN\'] = ${$k.\'_in\'};
		}
		if (!empty(${$k.\'_out\'})) {
			$where[$p[\'join\'].\':NOT IN\'] = ${$k.\'_out\'};
		}
	}
}

if (!empty($groups_in) || !empty($groups_out) || !empty($roles_in) || !empty($roles_out)) {
	$innerJoin[$member] = array(\'alias\' => $member, \'on\' => "$class.id = $member.member");
}

// Fields to select
$select = array(
	$class => implode(\',\', array_keys($modx->getFieldMeta($class)))
	,$profile => implode(\',\', array_keys($modx->getFieldMeta($profile)))
);

// Add custom parameters
foreach (array(\'where\',\'innerJoin\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => $class.\'.id\',
	\'sortdir\' => \'ASC\',
	\'fastMode\' => false,
	\'return\' => !empty($returnIds) ? \'ids\' : \'chunks\',
	\'disableConditions\' => true
);

if (!empty($users_in) && (empty($scriptProperties[\'sortby\']) || $scriptProperties[\'sortby\'] == $class.\'.id\')) {
	$scriptProperties[\'sortby\'] = "find_in_set(`$class`.`id`,\'".implode(\',\', $users_in)."\')";
	$scriptProperties[\'sortdir\'] = \'\';
}

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoUsersLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoUsers.log\', $log);
	return $output;
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:30:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"pdotools_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"returnIds";a:7:{s:4:"name";s:9:"returnIds";s:4:"desc";s:23:"pdotools_prop_returnIds";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"pdotools_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:22:"pdotools_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"pdotools_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"modUser.id";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"pdotools_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"pdotools_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:20:"pdotools_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"pdotools_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:20:"pdotools_prop_groups";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"roles";a:7:{s:4:"name";s:5:"roles";s:4:"desc";s:19:"pdotools_prop_roles";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"users";a:7:{s:4:"name";s:5:"users";s:4:"desc";s:19:"pdotools_prop_users";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"showInactive";a:7:{s:4:"name";s:12:"showInactive";s:4:"desc";s:26:"pdotools_prop_showInactive";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showBlocked";a:7:{s:4:"name";s:11:"showBlocked";s:4:"desc";s:25:"pdotools_prop_showBlocked";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:3:"idx";a:7:{s:4:"name";s:3:"idx";s:4:"desc";s:17:"pdotools_prop_idx";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"first";a:7:{s:4:"name";s:5:"first";s:4:"desc";s:19:"pdotools_prop_first";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"last";a:7:{s:4:"name";s:4:"last";s:4:"desc";s:18:"pdotools_prop_last";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplFirst";a:7:{s:4:"name";s:8:"tplFirst";s:4:"desc";s:22:"pdotools_prop_tplFirst";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplLast";a:7:{s:4:"name";s:7:"tplLast";s:4:"desc";s:21:"pdotools_prop_tplLast";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"tplOdd";a:7:{s:4:"name";s:6:"tplOdd";s:4:"desc";s:20:"pdotools_prop_tplOdd";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"pdotools_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"wrapIfEmpty";a:7:{s:4:"name";s:11:"wrapIfEmpty";s:4:"desc";s:25:"pdotools_prop_wrapIfEmpty";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"totalVar";a:7:{s:4:"name";s:8:"totalVar";s:4:"desc";s:22:"pdotools_prop_totalVar";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"total";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"tplCondition";a:7:{s:4:"name";s:12:"tplCondition";s:4:"desc";s:26:"pdotools_prop_tplCondition";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplOperator";a:7:{s:4:"name";s:11:"tplOperator";s:4:"desc";s:25:"pdotools_prop_tplOperator";s:4:"type";s:4:"list";s:7:"options";a:10:{i:0;a:2:{s:4:"text";s:11:"is equal to";s:5:"value";s:2:"==";}i:1;a:2:{s:4:"text";s:15:"is not equal to";s:5:"value";s:2:"!=";}i:2;a:2:{s:4:"text";s:9:"less than";s:5:"value";s:1:"<";}i:3;a:2:{s:4:"text";s:21:"less than or equal to";s:5:"value";s:2:"<=";}i:4;a:2:{s:4:"text";s:24:"greater than or equal to";s:5:"value";s:2:">=";}i:5;a:2:{s:4:"text";s:8:"is empty";s:5:"value";s:5:"empty";}i:6;a:2:{s:4:"text";s:12:"is not empty";s:5:"value";s:6:"!empty";}i:7;a:2:{s:4:"text";s:7:"is null";s:5:"value";s:4:"null";}i:8;a:2:{s:4:"text";s:11:"is in array";s:5:"value";s:7:"inarray";}i:9;a:2:{s:4:"text";s:10:"is between";s:5:"value";s:7:"between";}}s:5:"value";s:2:"==";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"conditionalTpls";a:7:{s:4:"name";s:15:"conditionalTpls";s:4:"desc";s:29:"pdotools_prop_conditionalTpls";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"select";a:7:{s:4:"name";s:6:"select";s:4:"desc";s:20:"pdotools_prop_select";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:22:"toSeparatePlaceholders";a:7:{s:4:"name";s:22:"toSeparatePlaceholders";s:4:"desc";s:36:"pdotools_prop_toSeparatePlaceholders";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdousers.php',
      'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$class = \'modUser\';
$profile = \'modUserProfile\';
$member = \'modUserGroupMember\';

// Start building "Where" expression
$where = array();
if (empty($showInactive)) {$where[$class.\'.active\'] = 1;}
if (empty($showBlocked)) {$where[$profile.\'.blocked\'] = 0;}

// Add users profiles and groups
$innerJoin = array(
	$profile => array(\'alias\' => $profile, \'on\' => "$class.id = $profile.internalKey"),
);

// Filter by users, groups and roles
$tmp = array(
	\'users\' => array(
		\'class\' => $class,
		\'name\' => \'username\',
		\'join\' => $class.\'.id\',
	),
	\'groups\' => array(
		\'class\' => \'modUserGroup\',
		\'name\' => \'name\',
		\'join\' => $member.\'.user_group\',
	),
	\'roles\' => array(
		\'class\' => \'modUserGroupRole\',
		\'name\' => \'name\',
		\'join\' => $member.\'.role\',
	)
);
foreach ($tmp as $k => $p) {
	if (!empty($$k)) {
		$$k = array_map(\'trim\', explode(\',\', $$k));
		${$k.\'_in\'} = ${$k.\'_out\'} = $fetch_in = $fetch_out = array();
		foreach ($$k as $v) {
			if (is_numeric($v)) {
				if ($v[0] == \'-\') {${$k.\'_out\'}[] = abs($v);}
				else {${$k.\'_in\'}[] = abs($v);}
			}
			else {
				if ($v[0] == \'-\') {$fetch_out[] = $v;}
				else {$fetch_in[] = $v;}
			}
		}

		if (!empty($fetch_in) || !empty($fetch_out)) {
			$q = $modx->newQuery($p[\'class\'], array($p[\'name\'].\':IN\' => array_merge($fetch_in, $fetch_out)));
			$q->select(\'id,\'.$p[\'name\']);
			$tstart = microtime(true);
			if ($q->prepare() && $q->stmt->execute()) {
				$modx->queryTime += microtime(true) - $tstart;
				$modx->executedQueries++;
				while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
					if (in_array($row[$p[\'name\']], $fetch_in)) {
						${$k.\'_in\'}[] = $row[\'id\'];
					}
					else {
						${$k.\'_out\'}[] = $row[\'id\'];
					}
				}
			}
		}

		if (!empty(${$k.\'_in\'})) {
			$where[$p[\'join\'].\':IN\'] = ${$k.\'_in\'};
		}
		if (!empty(${$k.\'_out\'})) {
			$where[$p[\'join\'].\':NOT IN\'] = ${$k.\'_out\'};
		}
	}
}

if (!empty($groups_in) || !empty($groups_out) || !empty($roles_in) || !empty($roles_out)) {
	$innerJoin[$member] = array(\'alias\' => $member, \'on\' => "$class.id = $member.member");
}

// Fields to select
$select = array(
	$class => implode(\',\', array_keys($modx->getFieldMeta($class)))
	,$profile => implode(\',\', array_keys($modx->getFieldMeta($profile)))
);

// Add custom parameters
foreach (array(\'where\',\'innerJoin\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => $class.\'.id\',
	\'sortdir\' => \'ASC\',
	\'fastMode\' => false,
	\'return\' => !empty($returnIds) ? \'ids\' : \'chunks\',
	\'disableConditions\' => true
);

if (!empty($users_in) && (empty($scriptProperties[\'sortby\']) || $scriptProperties[\'sortby\'] == $class.\'.id\')) {
	$scriptProperties[\'sortby\'] = "find_in_set(`$class`.`id`,\'".implode(\',\', $users_in)."\')";
	$scriptProperties[\'sortdir\'] = \'\';
}

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoUsersLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoUsers.log\', $log);
	return $output;
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  'c751075b117756f7f3139dfff28a9c7b' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoCrumbs',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoCrumbs',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
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
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:30:{s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"pdotools_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:22:"pdotools_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"from";a:7:{s:4:"name";s:4:"from";s:4:"desc";s:18:"pdotools_prop_from";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:2:"to";a:7:{s:4:"name";s:2:"to";s:4:"desc";s:16:"pdotools_prop_to";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"pdotools_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"exclude";a:7:{s:4:"name";s:7:"exclude";s:4:"desc";s:21:"pdotools_prop_exclude";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"pdotools_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"&nbsp;&rarr;&nbsp;";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:24:"pdotools_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"prepareTVs";a:7:{s:4:"name";s:10:"prepareTVs";s:4:"desc";s:24:"pdotools_prop_prepareTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:24:"pdotools_prop_processTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:22:"pdotools_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"tv.";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"pdotools_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"pdotools_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:24:"pdotools_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"hideContainers";a:7:{s:4:"name";s:14:"hideContainers";s:4:"desc";s:28:"pdotools_prop_hideContainers";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"pdotools_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:46:"@INLINE <a href="[[+link]]">[[+menutitle]]</a>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplCurrent";a:7:{s:4:"name";s:10:"tplCurrent";s:4:"desc";s:24:"pdotools_prop_tplCurrent";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:35:"@INLINE <span>[[+menutitle]]</span>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"tplMax";a:7:{s:4:"name";s:6:"tplMax";s:4:"desc";s:20:"pdotools_prop_tplMax";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:36:"@INLINE <span>&nbsp;...&nbsp;</span>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplHome";a:7:{s:4:"name";s:7:"tplHome";s:4:"desc";s:21:"pdotools_prop_tplHome";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"pdotools_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:50:"@INLINE <div class="breadcrumbs">[[+output]]</div>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"wrapIfEmpty";a:7:{s:4:"name";s:11:"wrapIfEmpty";s:4:"desc";s:25:"pdotools_prop_wrapIfEmpty";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showCurrent";a:7:{s:4:"name";s:11:"showCurrent";s:4:"desc";s:25:"pdotools_prop_showCurrent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"showHome";a:7:{s:4:"name";s:8:"showHome";s:4:"desc";s:22:"pdotools_prop_showHome";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showAtHome";a:7:{s:4:"name";s:10:"showAtHome";s:4:"desc";s:24:"pdotools_prop_showAtHome";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"hideSingle";a:7:{s:4:"name";s:10:"hideSingle";s:4:"desc";s:24:"pdotools_prop_hideSingle";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"direction";a:7:{s:4:"name";s:9:"direction";s:4:"desc";s:23:"pdotools_prop_direction";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ltr";s:4:"text";s:19:"Left To Right (ltr)";}i:1;a:2:{s:5:"value";s:3:"rtl";s:4:"text";s:19:"Right To Left (rtl)";}}s:5:"value";s:3:"ltr";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"scheme";a:7:{s:4:"name";s:6:"scheme";s:4:"desc";s:20:"pdotools_prop_scheme";s:4:"type";s:4:"list";s:7:"options";a:6:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:14:"System default";}i:1;a:2:{s:5:"value";i:-1;s:4:"text";s:25:"-1 (relative to site_url)";}i:2;a:2:{s:5:"value";s:4:"full";s:4:"text";s:40:"full (absolute, prepended with site_url)";}i:3;a:2:{s:5:"value";s:3:"abs";s:4:"text";s:39:"abs (absolute, prepended with base_url)";}i:4;a:2:{s:5:"value";s:4:"http";s:4:"text";s:38:"http (absolute, forced to http scheme)";}i:5;a:2:{s:5:"value";s:5:"https";s:4:"text";s:40:"https (absolute, forced to https scheme)";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"useWeblinkUrl";a:7:{s:4:"name";s:13:"useWeblinkUrl";s:4:"desc";s:27:"pdotools_prop_useWeblinkUrl";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
      'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
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
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  'f25830f2c4b040f85e520c4fc6234f43' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoField',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoField',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:12:{s:2:"id";a:7:{s:4:"name";s:2:"id";s:4:"desc";s:16:"pdotools_prop_id";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"field";a:7:{s:4:"name";s:5:"field";s:4:"desc";s:19:"pdotools_prop_field";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:9:"pagetitle";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"prepareTVs";a:7:{s:4:"name";s:10:"prepareTVs";s:4:"desc";s:24:"pdotools_prop_prepareTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:24:"pdotools_prop_processTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:27:"pdotools_prop_field_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:3:"top";a:7:{s:4:"name";s:3:"top";s:4:"desc";s:17:"pdotools_prop_top";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"topLevel";a:7:{s:4:"name";s:8:"topLevel";s:4:"desc";s:22:"pdotools_prop_topLevel";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"default";a:7:{s:4:"name";s:7:"default";s:4:"desc";s:27:"pdotools_prop_field_default";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"output";a:7:{s:4:"name";s:6:"output";s:4:"desc";s:26:"pdotools_prop_field_output";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"ultimate";a:7:{s:4:"name";s:8:"ultimate";s:4:"desc";s:22:"pdotools_prop_ultimate";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdofield.php',
      'content' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  'b2de21ff56469175cfaf566b2f283bc9' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoSitemap',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoSitemap',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

// Default variables
if (empty($tpl)) {$tpl = "@INLINE \\n<url>\\n\\t<loc>[[+url]]</loc>\\n\\t<lastmod>[[+date]]</lastmod>\\n\\t<changefreq>[[+update]]</changefreq>\\n\\t<priority>[[+priority]]</priority>\\n</url>";}
if (empty($tplWrapper)) {$tplWrapper = "@INLINE <?xml version=\\"1.0\\" encoding=\\"[[++modx_charset]]\\"\\n<urlset xmlns=\\"[[+schema]]\\">\\n[[+output]]\\n</urlset>";}
if (empty($sitemapSchema)) {$sitemapSchema = \'http://www.sitemaps.org/schemas/sitemap/0.9\';}
if (empty($outputSeparator)) {$outputSeparator = "\\n";}

// Convert parameters from GoogleSiteMap if exists
if (!empty($itemTpl)) {$tpl = $itemTpl;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($allowedtemplates)) {$scriptProperties[\'templates\'] = $allowedtemplates;}
if (!empty($maxDepth)) {$scriptProperties[\'depth\'] = $maxDepth;}
if (isset($hideDeleted)) {$scriptProperties[\'showDeleted\'] = !$hideDeleted;}
if (isset($published)) {$scriptProperties[\'showUnpublished\'] = !$published;}
if (isset($searchable)) {$scriptProperties[\'showUnsearchable\'] = !$searchable;}
if (!empty($googleSchema)) {$sitemapSchema = $googleSchema;}
if (!empty($excludeResources)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeResources));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}
if (!empty($excludeChildrenOf)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeChildrenOf));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'parents\'])) {
			$scriptProperties[\'parents\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'parents\'] = \'-\'.$v;
		}
	}
}
if (!empty($startId)) {
	if (!empty($scriptProperties[\'parents\'])) {
		$scriptProperties[\'parents\'] .= \',\'.$startId;
	}
	else {
		$scriptProperties[\'parents\'] = $startId;
	}
}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($sortDir)) {$scriptProperties[\'sortdir\'] = $sortDir;}
if (!empty($priorityTV)) {
	if (!empty($scriptProperties[\'includeTVs\'])) {
		$scriptProperties[\'includeTVs\'] .= \',\'.$priorityTV;
	}
	else {
		$scriptProperties[\'includeTVs\'] = $priorityTV;
	}
}
if (!empty($itemSeparator)) {$outputSeparator = $itemSeparator;}
//---


$class = \'modResource\';
$where = array();
if (empty($showHidden)) {
	$where[] = array(
		$class.\'.hidemenu\' => 0,
		\'OR:\'.$class.\'.class_key:IN\' => array(\'Ticket\',\'Article\')
	);
}
if (empty($context)) {
	$scriptProperties[\'context\'] = $modx->context->key;
}

$select = array($class => \'id,editedon,createdon,context_key,class_key\');
if (!empty($useWeblinkUrl)) {$select[$class] .= \',content\';}
// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class.\'.menuindex\',
	\'sortdir\' => \'ASC\',
	\'return\' => \'data\',
	\'scheme\' => \'full\',
	\'limit\' => 0,
	//\'checkPermissions\' => \'load\',
	\'fastMode\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$now = time();
$output = array();
foreach ($rows as $row) {
	if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
		$row[\'url\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
			? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
			: $row[\'content\'];
	}
	else {
		$row[\'url\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
	}

	$time = !empty($row[\'editedon\'])
		? $row[\'editedon\']
		: $row[\'createdon\'];
	$row[\'date\'] = date(\'Y-m-d\', $time);

	$datediff = floor(($now - $time) / 86400);
	if ($datediff <= 1) {
		$row[\'priority\'] = \'1.0\';
		$row[\'update\'] = \'daily\';
	} elseif (($datediff > 1) && ($datediff <= 7)) {
		$row[\'priority\'] = \'0.75\';
		$row[\'update\'] = \'weekly\';
	} elseif (($datediff > 7) && ($datediff <= 30)) {
		$row[\'priority\'] = \'0.50\';
		$row[\'update\'] = \'weekly\';
	} else {
		$row[\'priority\'] = \'0.25\';
		$row[\'update\'] = \'monthly\';
	}

	if (!empty($priorityTV) && !empty($row[$priorityTV])) {
		$row[\'priority\'] = $row[$priorityTV];
	}
	/* add item to output */
	$output[] = preg_replace(\'/\\[\\[.*?\\]\\]/\', \'\', $pdoFetch->parseChunk($tpl, $row));
}
$pdoFetch->addTime(\'Rows processed\');

$output = implode($outputSeparator, $output);
$output = $pdoFetch->getChunk($tplWrapper, array(
	\'schema\' => $sitemapSchema,
	\'output\' => $output,
	\'items\' => $output
));
$pdoFetch->addTime(\'Rows wrapped\');

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoSitemapLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($forceXML)) {
	header("Content-Type:text/xml");
	echo $output;
	@session_write_close();
	exit();
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:21:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"pdotools_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:145:"@INLINE <url>
	<loc>[[+url]]</loc>
	<lastmod>[[+date]]</lastmod>
	<changefreq>[[+update]]</changefreq>
	<priority>[[+priority]]</priority>
</url>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"pdotools_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:110:"@INLINE <?xml version="1.0" encoding="[[++modx_charset]]"?>
<urlset xmlns="[[+schema]]">
[[+output]]
</urlset>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"templates";a:7:{s:4:"name";s:9:"templates";s:4:"desc";s:23:"pdotools_prop_templates";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:21:"pdotools_prop_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:19:"pdotools_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"pdotools_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:24:"pdotools_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"sitemapSchema";a:7:{s:4:"name";s:13:"sitemapSchema";s:4:"desc";s:27:"pdotools_prop_sitemapSchema";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:43:"http://www.sitemaps.org/schemas/sitemap/0.9";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"pdotools_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"hideUnsearchable";a:7:{s:4:"name";s:16:"hideUnsearchable";s:4:"desc";s:30:"pdotools_prop_hideUnsearchable";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:23:"pdotools_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:21:"pdotools_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"pdotools_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"menuindex";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"pdotools_prop_sortdir";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"asc";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:24:"pdotools_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"prepareTVs";a:7:{s:4:"name";s:10:"prepareTVs";s:4:"desc";s:24:"pdotools_prop_prepareTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:24:"pdotools_prop_processTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"pdotools_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"forceXML";a:7:{s:4:"name";s:8:"forceXML";s:4:"desc";s:22:"pdotools_prop_forceXML";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"useWeblinkUrl";a:7:{s:4:"name";s:13:"useWeblinkUrl";s:4:"desc";s:27:"pdotools_prop_useWeblinkUrl";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdositemap.php',
      'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

// Default variables
if (empty($tpl)) {$tpl = "@INLINE \\n<url>\\n\\t<loc>[[+url]]</loc>\\n\\t<lastmod>[[+date]]</lastmod>\\n\\t<changefreq>[[+update]]</changefreq>\\n\\t<priority>[[+priority]]</priority>\\n</url>";}
if (empty($tplWrapper)) {$tplWrapper = "@INLINE <?xml version=\\"1.0\\" encoding=\\"[[++modx_charset]]\\"\\n<urlset xmlns=\\"[[+schema]]\\">\\n[[+output]]\\n</urlset>";}
if (empty($sitemapSchema)) {$sitemapSchema = \'http://www.sitemaps.org/schemas/sitemap/0.9\';}
if (empty($outputSeparator)) {$outputSeparator = "\\n";}

// Convert parameters from GoogleSiteMap if exists
if (!empty($itemTpl)) {$tpl = $itemTpl;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($allowedtemplates)) {$scriptProperties[\'templates\'] = $allowedtemplates;}
if (!empty($maxDepth)) {$scriptProperties[\'depth\'] = $maxDepth;}
if (isset($hideDeleted)) {$scriptProperties[\'showDeleted\'] = !$hideDeleted;}
if (isset($published)) {$scriptProperties[\'showUnpublished\'] = !$published;}
if (isset($searchable)) {$scriptProperties[\'showUnsearchable\'] = !$searchable;}
if (!empty($googleSchema)) {$sitemapSchema = $googleSchema;}
if (!empty($excludeResources)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeResources));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}
if (!empty($excludeChildrenOf)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeChildrenOf));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'parents\'])) {
			$scriptProperties[\'parents\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'parents\'] = \'-\'.$v;
		}
	}
}
if (!empty($startId)) {
	if (!empty($scriptProperties[\'parents\'])) {
		$scriptProperties[\'parents\'] .= \',\'.$startId;
	}
	else {
		$scriptProperties[\'parents\'] = $startId;
	}
}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($sortDir)) {$scriptProperties[\'sortdir\'] = $sortDir;}
if (!empty($priorityTV)) {
	if (!empty($scriptProperties[\'includeTVs\'])) {
		$scriptProperties[\'includeTVs\'] .= \',\'.$priorityTV;
	}
	else {
		$scriptProperties[\'includeTVs\'] = $priorityTV;
	}
}
if (!empty($itemSeparator)) {$outputSeparator = $itemSeparator;}
//---


$class = \'modResource\';
$where = array();
if (empty($showHidden)) {
	$where[] = array(
		$class.\'.hidemenu\' => 0,
		\'OR:\'.$class.\'.class_key:IN\' => array(\'Ticket\',\'Article\')
	);
}
if (empty($context)) {
	$scriptProperties[\'context\'] = $modx->context->key;
}

$select = array($class => \'id,editedon,createdon,context_key,class_key\');
if (!empty($useWeblinkUrl)) {$select[$class] .= \',content\';}
// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class.\'.menuindex\',
	\'sortdir\' => \'ASC\',
	\'return\' => \'data\',
	\'scheme\' => \'full\',
	\'limit\' => 0,
	//\'checkPermissions\' => \'load\',
	\'fastMode\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$now = time();
$output = array();
foreach ($rows as $row) {
	if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
		$row[\'url\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
			? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
			: $row[\'content\'];
	}
	else {
		$row[\'url\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
	}

	$time = !empty($row[\'editedon\'])
		? $row[\'editedon\']
		: $row[\'createdon\'];
	$row[\'date\'] = date(\'Y-m-d\', $time);

	$datediff = floor(($now - $time) / 86400);
	if ($datediff <= 1) {
		$row[\'priority\'] = \'1.0\';
		$row[\'update\'] = \'daily\';
	} elseif (($datediff > 1) && ($datediff <= 7)) {
		$row[\'priority\'] = \'0.75\';
		$row[\'update\'] = \'weekly\';
	} elseif (($datediff > 7) && ($datediff <= 30)) {
		$row[\'priority\'] = \'0.50\';
		$row[\'update\'] = \'weekly\';
	} else {
		$row[\'priority\'] = \'0.25\';
		$row[\'update\'] = \'monthly\';
	}

	if (!empty($priorityTV) && !empty($row[$priorityTV])) {
		$row[\'priority\'] = $row[$priorityTV];
	}
	/* add item to output */
	$output[] = preg_replace(\'/\\[\\[.*?\\]\\]/\', \'\', $pdoFetch->parseChunk($tpl, $row));
}
$pdoFetch->addTime(\'Rows processed\');

$output = implode($outputSeparator, $output);
$output = $pdoFetch->getChunk($tplWrapper, array(
	\'schema\' => $sitemapSchema,
	\'output\' => $output,
	\'items\' => $output
));
$pdoFetch->addTime(\'Rows wrapped\');

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoSitemapLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($forceXML)) {
	header("Content-Type:text/xml");
	echo $output;
	@session_write_close();
	exit();
}
else {
	return $output;
}',
    ),
  ),
  'efad1cac612b8e98571b8ca4b3403be2' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoNeighbors',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoNeighbors',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {$id = $modx->resource->id;}
if (empty($limit)) {$limit = 1;}
if (!isset($outputSeparator)) {$outputSeparator = "\\n";}
$fastMode = !empty($fastMode);

$class = \'modResource\';
$resource = ($id == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $id);
if (!$resource) {return \'\';}

// We need to determine ids of neighbors
$params = $scriptProperties;
$params[\'select\'] = \'id\';
$params[\'limit\'] = 0;
if (!empty($parents)) {
	$parents = array_map(\'trim\', explode(\',\', $parents));
	if (!in_array($resource->parent, $parents)) {
		$parents[] = $resource->parent;
	}
	$key = array_search($resource->parent * -1, $parents);
	if ($key !== false) {
		unset($parents[$key]);
	}
	$params[\'parents\'] = implode(\',\', $parents);
	$ids = $pdoFetch->getCollection(\'modResource\', array(), $params);
	unset($scriptProperties[\'parents\']);
}
else {
	$ids = $pdoFetch->getCollection(\'modResource\', array(\'parent\' => $resource->parent), $params);
}

$found = false;
$prev = $next = array();
foreach ($ids as $v) {
	if ($v[\'id\'] == $id) {
		$found = true;
		continue;
	}
	elseif (!$found) {
		$prev[] = $v[\'id\'];
	}
	else {
		$next[] = $v[\'id\'];
		if (count($next) >= $limit) {
			break;
		}
	}
}
$prev = array_splice($prev, $limit * -1);
if (!empty($loop)) {
	if (!count($prev)) {
		$v = end($ids);
		$prev[] = $v[\'id\'];
	}
	else {
		if (!count($next)) {
			$v = reset($ids);
			$next[] = $v[\'id\'];
		}
	}
}
$ids = array_merge($prev, $next, array($resource->parent));
$pdoFetch->addTime(\'Found ids of neighbors: \' . implode(\',\', $ids));

// Query conditions
$where = array($class.\'.id:IN\' => $ids);

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
if (empty($includeContent) && empty($useWeblinkUrl)) {
	$key = array_search(\'content\', $resourceColumns);
	unset($resourceColumns[$key]);
}
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	//\'groupby\' => $class.\'.id\',
	\'sortby\' => $class.\'.menuindex\',
	\'sortdir\' => \'ASC\',
	\'return\' => \'data\',
	\'limit\' => 0,
	\'totalVar\' => \'pdoneighbors.total\',
);

// Merge all properties and run!
unset($scriptProperties[\'limit\']);
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);

$rows = $pdoFetch->run();
$prev = array_flip($prev);
$next = array_flip($next);

$output = array(\'prev\' => array(), \'up\' => array(), \'next\' => array());
foreach ($rows as $row) {
	if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}
	if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
		$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
			? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
			: $row[\'content\'];
	}
	else {
		$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
	}

	if (isset($prev[$row[\'id\']])) {
		$output[\'prev\'][] = !empty($tplPrev)
			? $pdoFetch->getChunk($tplPrev, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
	elseif (isset($next[$row[\'id\']])) {
		$output[\'next\'][] = !empty($tplNext)
			? $pdoFetch->getChunk($tplNext, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
	else {
		$output[\'up\'][] = !empty($tplUp)
			? $pdoFetch->getChunk($tplUp, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoNeighborsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

foreach ($output as &$row) {
	$row = implode($outputSeparator, $row);
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = !empty($tplWrapper)
		? $pdoFetch->getChunk($tplWrapper, $output, $fastMode)
		: $pdoFetch->getChunk(\'\', $output);
	$output .= $log;

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:26:{s:2:"id";a:7:{s:4:"name";s:2:"id";s:4:"desc";s:16:"pdotools_prop_id";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:29:"pdotools_prop_neighbors_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"pdotools_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"menuindex";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"pdotools_prop_sortdir";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"asc";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:19:"pdotools_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplPrev";a:7:{s:4:"name";s:7:"tplPrev";s:4:"desc";s:21:"pdotools_prop_tplPrev";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:84:"@INLINE <span class="link-prev"><a href="[[+link]]">&larr; [[+menutitle]]</a></span>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"tplUp";a:7:{s:4:"name";s:5:"tplUp";s:4:"desc";s:19:"pdotools_prop_tplUp";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:82:"@INLINE <span class="link-up">&uarr; <a href="[[+link]]">[[+menutitle]]</a></span>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplNext";a:7:{s:4:"name";s:7:"tplNext";s:4:"desc";s:21:"pdotools_prop_tplNext";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:84:"@INLINE <span class="link-next"><a href="[[+link]]">[[+menutitle]] &rarr;</a></span>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:34:"pdotools_prop_neighbors_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:62:"@INLINE <div class="neighbors">[[+prev]][[+up]][[+next]]</div>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"pdotools_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"pdotools_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:24:"pdotools_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"hideContainers";a:7:{s:4:"name";s:14:"hideContainers";s:4:"desc";s:28:"pdotools_prop_hideContainers";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:22:"toSeparatePlaceholders";a:7:{s:4:"name";s:22:"toSeparatePlaceholders";s:4:"desc";s:36:"pdotools_prop_toSeparatePlaceholders";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:21:"pdotools_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"pdotools_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"pdotools_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:22:"pdotools_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:24:"pdotools_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"prepareTVs";a:7:{s:4:"name";s:10:"prepareTVs";s:4:"desc";s:24:"pdotools_prop_prepareTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"processTVs";a:7:{s:4:"name";s:10:"processTVs";s:4:"desc";s:24:"pdotools_prop_processTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:22:"pdotools_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"tv.";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"scheme";a:7:{s:4:"name";s:6:"scheme";s:4:"desc";s:20:"pdotools_prop_scheme";s:4:"type";s:4:"list";s:7:"options";a:6:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:14:"System default";}i:1;a:2:{s:5:"value";i:-1;s:4:"text";s:25:"-1 (relative to site_url)";}i:2;a:2:{s:5:"value";s:4:"full";s:4:"text";s:40:"full (absolute, prepended with site_url)";}i:3;a:2:{s:5:"value";s:3:"abs";s:4:"text";s:39:"abs (absolute, prepended with base_url)";}i:4;a:2:{s:5:"value";s:4:"http";s:4:"text";s:38:"http (absolute, forced to http scheme)";}i:5;a:2:{s:5:"value";s:5:"https";s:4:"text";s:40:"https (absolute, forced to https scheme)";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"useWeblinkUrl";a:7:{s:4:"name";s:13:"useWeblinkUrl";s:4:"desc";s:27:"pdotools_prop_useWeblinkUrl";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"loop";a:7:{s:4:"name";s:4:"loop";s:4:"desc";s:18:"pdotools_prop_loop";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoneighbors.php',
      'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {$id = $modx->resource->id;}
if (empty($limit)) {$limit = 1;}
if (!isset($outputSeparator)) {$outputSeparator = "\\n";}
$fastMode = !empty($fastMode);

$class = \'modResource\';
$resource = ($id == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $id);
if (!$resource) {return \'\';}

// We need to determine ids of neighbors
$params = $scriptProperties;
$params[\'select\'] = \'id\';
$params[\'limit\'] = 0;
if (!empty($parents)) {
	$parents = array_map(\'trim\', explode(\',\', $parents));
	if (!in_array($resource->parent, $parents)) {
		$parents[] = $resource->parent;
	}
	$key = array_search($resource->parent * -1, $parents);
	if ($key !== false) {
		unset($parents[$key]);
	}
	$params[\'parents\'] = implode(\',\', $parents);
	$ids = $pdoFetch->getCollection(\'modResource\', array(), $params);
	unset($scriptProperties[\'parents\']);
}
else {
	$ids = $pdoFetch->getCollection(\'modResource\', array(\'parent\' => $resource->parent), $params);
}

$found = false;
$prev = $next = array();
foreach ($ids as $v) {
	if ($v[\'id\'] == $id) {
		$found = true;
		continue;
	}
	elseif (!$found) {
		$prev[] = $v[\'id\'];
	}
	else {
		$next[] = $v[\'id\'];
		if (count($next) >= $limit) {
			break;
		}
	}
}
$prev = array_splice($prev, $limit * -1);
if (!empty($loop)) {
	if (!count($prev)) {
		$v = end($ids);
		$prev[] = $v[\'id\'];
	}
	else {
		if (!count($next)) {
			$v = reset($ids);
			$next[] = $v[\'id\'];
		}
	}
}
$ids = array_merge($prev, $next, array($resource->parent));
$pdoFetch->addTime(\'Found ids of neighbors: \' . implode(\',\', $ids));

// Query conditions
$where = array($class.\'.id:IN\' => $ids);

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
if (empty($includeContent) && empty($useWeblinkUrl)) {
	$key = array_search(\'content\', $resourceColumns);
	unset($resourceColumns[$key]);
}
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	//\'groupby\' => $class.\'.id\',
	\'sortby\' => $class.\'.menuindex\',
	\'sortdir\' => \'ASC\',
	\'return\' => \'data\',
	\'limit\' => 0,
	\'totalVar\' => \'pdoneighbors.total\',
);

// Merge all properties and run!
unset($scriptProperties[\'limit\']);
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);

$rows = $pdoFetch->run();
$prev = array_flip($prev);
$next = array_flip($next);

$output = array(\'prev\' => array(), \'up\' => array(), \'next\' => array());
foreach ($rows as $row) {
	if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}
	if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
		$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
			? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $pdoFetch->config[\'scheme\'])
			: $row[\'content\'];
	}
	else {
		$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $pdoFetch->config[\'scheme\']);
	}

	if (isset($prev[$row[\'id\']])) {
		$output[\'prev\'][] = !empty($tplPrev)
			? $pdoFetch->getChunk($tplPrev, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
	elseif (isset($next[$row[\'id\']])) {
		$output[\'next\'][] = !empty($tplNext)
			? $pdoFetch->getChunk($tplNext, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
	else {
		$output[\'up\'][] = !empty($tplUp)
			? $pdoFetch->getChunk($tplUp, $row, $fastMode)
			: $pdoFetch->getChunk(\'\', $row);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoNeighborsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

foreach ($output as &$row) {
	$row = implode($outputSeparator, $row);
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = !empty($tplWrapper)
		? $pdoFetch->getChunk($tplWrapper, $output, $fastMode)
		: $pdoFetch->getChunk(\'\', $output);
	$output .= $log;

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '4b15b5d9befcf7f73b4ec4abd4786d30' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoPage',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoPage',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {$pageVarKey = \'page\';}
if (empty($pageNavVar)) {$pageNavVar = \'page.nav\';}
if (empty($pageCountVar)) {$pageCountVar = \'pageCount\';}
if (empty($totalVar)) {$totalVar = \'total\';}
if (empty($page)) {$page = 1;}
if (empty($pageLimit)) {$pageLimit = 5;} else {$pageLimit = (integer) $pageLimit;}
if (!isset($plPrefix)) {$plPrefix = \'\';}
if (!empty($scriptProperties[\'ajaxMode\'])) {$scriptProperties[\'ajax\'] = 1;}

// Convert parameters from getPage if exists
if (!empty($namespace)) {$plPrefix = $namespace;}
if (!empty($pageNavTpl)) {$scriptProperties[\'tplPage\'] = $pageNavTpl;}
if (!empty($pageNavOuterTpl)) {$scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;}
if (!empty($pageActiveTpl)) {$scriptProperties[\'tplPageActive\'] = $pageActiveTpl;}
if (!empty($pageFirstTpl)) {$scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;}
if (!empty($pagePrevTpl)) {$scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;}
if (!empty($pageNextTpl)) {$scriptProperties[\'tplPageNext\'] = $pageNextTpl;}
if (!empty($pageLastTpl)) {$scriptProperties[\'tplPageLast\'] = $pageLastTpl;}
if (!empty($pageSkipTpl)) {$scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;}
if (!empty($pageNavScheme)) {$scriptProperties[\'scheme\'] = $pageNavScheme;}
if (!empty($cache_expires)) {$scriptProperties[\'cacheTime\'] = $cache_expires;}
//---

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
	return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoPage = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoPage = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoPage from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
	$pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
	$properties = $snippet->get(\'properties\');
	if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
		unset($scriptProperties[\'frontend_js\']);
	}
	if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
		unset($scriptProperties[\'frontend_css\']);
	}
}

// Page
if (isset($_REQUEST[$pageVarKey]) && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
	return $pdoPage->redirectToFirst($isAjax);
}
elseif (!empty($_REQUEST[$pageVarKey])) {
	$page = (integer) $_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;

// Limit
if (isset($_REQUEST[\'limit\'])) {
	if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
		$scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
	}
	else {
		unset($_GET[\'limit\']);
		return $pdoPage->redirectToFirst($isAjax);
	}
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
	$scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
	? (int)$scriptProperties[\'offset\']
	: 0;
$scriptProperties[\'offset\'] = $page > 1
	? $scriptProperties[\'limit\'] * ($page - 1) + $offset
	: $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
	$scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
	? $pdoPage->pdoTools->getCache($scriptProperties)
	: array();

if (empty($data)) {
	if ($object = $modx->getObject(\'modSnippet\', array(\'name\' => $scriptProperties[\'element\']))) {
		$object->setCacheable(false);

		if (!empty($toPlaceholder)) {
			$object->process($scriptProperties);
			$output = $modx->getPlaceholder($toPlaceholder);
		}
		else {
			$output = $object->process($scriptProperties);
		}
	}
	else {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pdoPage] Could not load element "\'.$scriptProperties[\'element\'].\'"\');
		return \'\';
	}
	/** Pagination */
	$total = (int)$modx->getPlaceholder($totalVar);
	$pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
		? ceil(($total - $offset) / $scriptProperties[\'limit\'])
		: 0;

	// Redirect to start if somebody specified incorrect page
	if ($page > 1 && $page > $pageCount) {
		return $pdoPage->redirectToFirst($isAjax);
	}
	elseif (!empty($pageCount) && $pageCount > 1) {
		$pagination = array(
			\'first\' => $page > 1 && !empty($tplPageFirst)
				? $pdoPage->makePageLink($url, 1, $tplPageFirst)
				: \'\',
			\'prev\' => $page > 1 && !empty($tplPagePrev)
				? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
				: \'\',
			\'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
				? $pdoPage->buildModernPagination($page, $pageCount, $url)
				: $pdoPage->buildClassicPagination($page, $pageCount, $url),
			\'next\' => $page < $pageCount && !empty($tplPageNext)
				? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
				: \'\',
			\'last\' => $page < $pageCount && !empty($tplPageLast)
				? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
				: \'\',
		);

		if (!empty($pageCount)) {
			foreach (array(\'first\',\'prev\',\'next\',\'last\') as $v) {
				$tpl = \'tplPage\'.ucfirst($v).\'Empty\';
				if (!empty(${$tpl}) && empty($pagination[$v])) {
					$pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
				}
			}
		}

		if (!empty($setMeta) && !$isAjax) {
			if ($page > 1) {
				$modx->regClientStartupHTMLBlock(\'<link rel="prev" href="\' . $pdoPage->makePageLink($url, $page - 1) . \'"/>\');
			}
			if ($page < $pageCount) {
				$modx->regClientStartupHTMLBlock(\'<link rel="next" href="\' . $pdoPage->makePageLink($url, $page + 1) . \'"/>\');
			}
		}

		$pagination = !empty($tplPageWrapper)
			? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
			: $pdoPage->pdoTools->parseChunk(\'\', $pagination);
	}

	$data = array(
		\'output\' => $output,
		$pageVarKey => $page,
		$pageCountVar => $pageCount,
		$pageNavVar => $pagination,
		$totalVar => $total,
	);
	if ($cache) {
		$pdoPage->pdoTools->setCache($data, $scriptProperties);
	}
}

if ($isAjax) {
	if ($pageNavVar != \'pagination\') {
		$data[\'pagination\'] = $data[$pageNavVar];
		unset($data[$pageNavVar]);
	}
	if ($pageCountVar != \'pages\') {
		$data[\'pages\'] = (int)$data[$pageCountVar];
		unset($data[$pageCountVar]);
	}
	if ($pageVarKey != \'page\') {
		$data[\'page\'] = (int)$data[$pageVarKey];
		unset($data[$pageVarKey]);
	}
	if ($totalVar != \'total\') {
		$data[\'total\'] = (int)$data[$totalVar];
		unset($data[$totalVar]);
	}

	@session_write_close();
	exit($modx->toJSON($data));
}
else {
	$modx->setPlaceholders($data, $plPrefix);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $data[\'output\']);
	}
	else {
		return $data[\'output\'];
	}
}',
      'locked' => 0,
      'properties' => 'a:38:{s:8:"plPrefix";a:7:{s:4:"name";s:8:"plPrefix";s:4:"desc";s:22:"pdotools_prop_plPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"pdotools_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"maxLimit";a:7:{s:4:"name";s:8:"maxLimit";s:4:"desc";s:22:"pdotools_prop_maxLimit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:100;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:20:"pdotools_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"page";a:7:{s:4:"name";s:4:"page";s:4:"desc";s:18:"pdotools_prop_page";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"pageVarKey";a:7:{s:4:"name";s:10:"pageVarKey";s:4:"desc";s:24:"pdotools_prop_pageVarKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"page";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"totalVar";a:7:{s:4:"name";s:8:"totalVar";s:4:"desc";s:22:"pdotools_prop_totalVar";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"page.total";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"pageLimit";a:7:{s:4:"name";s:9:"pageLimit";s:4:"desc";s:23:"pdotools_prop_pageLimit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:5;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"element";a:7:{s:4:"name";s:7:"element";s:4:"desc";s:21:"pdotools_prop_element";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:12:"pdoResources";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"pageNavVar";a:7:{s:4:"name";s:10:"pageNavVar";s:4:"desc";s:24:"pdotools_prop_pageNavVar";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"page.nav";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"pageCountVar";a:7:{s:4:"name";s:12:"pageCountVar";s:4:"desc";s:26:"pdotools_prop_pageCountVar";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"pageCount";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplPage";a:7:{s:4:"name";s:7:"tplPage";s:4:"desc";s:21:"pdotools_prop_tplPage";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:52:"@INLINE <li><a href="[[+href]]">[[+pageNo]]</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"tplPageWrapper";a:7:{s:4:"name";s:14:"tplPageWrapper";s:4:"desc";s:28:"pdotools_prop_tplPageWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:113:"@INLINE <div class="pagination"><ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul></div>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"tplPageActive";a:7:{s:4:"name";s:13:"tplPageActive";s:4:"desc";s:27:"pdotools_prop_tplPageActive";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:67:"@INLINE <li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"tplPageFirst";a:7:{s:4:"name";s:12:"tplPageFirst";s:4:"desc";s:26:"pdotools_prop_tplPageFirst";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:75:"@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_first]]</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplPageLast";a:7:{s:4:"name";s:11:"tplPageLast";s:4:"desc";s:25:"pdotools_prop_tplPageLast";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:74:"@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_last]]</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplPagePrev";a:7:{s:4:"name";s:11:"tplPagePrev";s:4:"desc";s:25:"pdotools_prop_tplPagePrev";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:64:"@INLINE <li class="control"><a href="[[+href]]">&laquo;</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplPageNext";a:7:{s:4:"name";s:11:"tplPageNext";s:4:"desc";s:25:"pdotools_prop_tplPageNext";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:64:"@INLINE <li class="control"><a href="[[+href]]">&raquo;</a></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplPageSkip";a:7:{s:4:"name";s:11:"tplPageSkip";s:4:"desc";s:25:"pdotools_prop_tplPageSkip";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:50:"@INLINE <li class="disabled"><span>...</span></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:17:"tplPageFirstEmpty";a:7:{s:4:"name";s:17:"tplPageFirstEmpty";s:4:"desc";s:31:"pdotools_prop_tplPageFirstEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:65:"@INLINE <li class="disabled"><span>[[%pdopage_first]]</span></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"tplPageLastEmpty";a:7:{s:4:"name";s:16:"tplPageLastEmpty";s:4:"desc";s:30:"pdotools_prop_tplPageLastEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:64:"@INLINE <li class="disabled"><span>[[%pdopage_last]]</span></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"tplPagePrevEmpty";a:7:{s:4:"name";s:16:"tplPagePrevEmpty";s:4:"desc";s:30:"pdotools_prop_tplPagePrevEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:54:"@INLINE <li class="disabled"><span>&laquo;</span></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"tplPageNextEmpty";a:7:{s:4:"name";s:16:"tplPageNextEmpty";s:4:"desc";s:30:"pdotools_prop_tplPageNextEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:54:"@INLINE <li class="disabled"><span>&raquo;</span></li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"cache";a:7:{s:4:"name";s:5:"cache";s:4:"desc";s:19:"pdotools_prop_cache";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:23:"pdotools_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:3600;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"cacheAnonymous";a:7:{s:4:"name";s:14:"cacheAnonymous";s:4:"desc";s:28:"pdotools_prop_cacheAnonymous";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:4:"ajax";a:7:{s:4:"name";s:4:"ajax";s:4:"desc";s:18:"pdotools_prop_ajax";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"ajaxMode";a:7:{s:4:"name";s:8:"ajaxMode";s:4:"desc";s:22:"pdotools_prop_ajaxMode";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:4:"text";s:4:"None";s:5:"value";s:0:"";}i:1;a:2:{s:4:"text";s:7:"Default";s:5:"value";s:7:"default";}i:2;a:2:{s:4:"text";s:6:"Scroll";s:5:"value";s:6:"scroll";}i:3;a:2:{s:4:"text";s:6:"Button";s:5:"value";s:6:"button";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"ajaxElemWrapper";a:7:{s:4:"name";s:15:"ajaxElemWrapper";s:4:"desc";s:29:"pdotools_prop_ajaxElemWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"#pdopage";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"ajaxElemRows";a:7:{s:4:"name";s:12:"ajaxElemRows";s:4:"desc";s:26:"pdotools_prop_ajaxElemRows";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"#pdopage .rows";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:18:"ajaxElemPagination";a:7:{s:4:"name";s:18:"ajaxElemPagination";s:4:"desc";s:32:"pdotools_prop_ajaxElemPagination";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"#pdopage .pagination";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"ajaxElemLink";a:7:{s:4:"name";s:12:"ajaxElemLink";s:4:"desc";s:26:"pdotools_prop_ajaxElemLink";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"#pdopage .pagination a";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"ajaxElemMore";a:7:{s:4:"name";s:12:"ajaxElemMore";s:4:"desc";s:26:"pdotools_prop_ajaxElemMore";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"#pdopage .btn-more";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"ajaxTplMore";a:7:{s:4:"name";s:11:"ajaxTplMore";s:4:"desc";s:25:"pdotools_prop_ajaxTplMore";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:75:"@INLINE <button class="btn btn-default btn-more">[[%pdopage_more]]</button>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"frontend_js";a:7:{s:4:"name";s:11:"frontend_js";s:4:"desc";s:25:"pdotools_prop_frontend_js";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"[[+assetsUrl]]js/pdopage.js";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"frontend_css";a:7:{s:4:"name";s:12:"frontend_css";s:4:"desc";s:26:"pdotools_prop_frontend_css";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"[[+assetsUrl]]css/pdopage.css";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"setMeta";a:7:{s:4:"name";s:7:"setMeta";s:4:"desc";s:21:"pdotools_prop_setMeta";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdopage.php',
      'content' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {$pageVarKey = \'page\';}
if (empty($pageNavVar)) {$pageNavVar = \'page.nav\';}
if (empty($pageCountVar)) {$pageCountVar = \'pageCount\';}
if (empty($totalVar)) {$totalVar = \'total\';}
if (empty($page)) {$page = 1;}
if (empty($pageLimit)) {$pageLimit = 5;} else {$pageLimit = (integer) $pageLimit;}
if (!isset($plPrefix)) {$plPrefix = \'\';}
if (!empty($scriptProperties[\'ajaxMode\'])) {$scriptProperties[\'ajax\'] = 1;}

// Convert parameters from getPage if exists
if (!empty($namespace)) {$plPrefix = $namespace;}
if (!empty($pageNavTpl)) {$scriptProperties[\'tplPage\'] = $pageNavTpl;}
if (!empty($pageNavOuterTpl)) {$scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;}
if (!empty($pageActiveTpl)) {$scriptProperties[\'tplPageActive\'] = $pageActiveTpl;}
if (!empty($pageFirstTpl)) {$scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;}
if (!empty($pagePrevTpl)) {$scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;}
if (!empty($pageNextTpl)) {$scriptProperties[\'tplPageNext\'] = $pageNextTpl;}
if (!empty($pageLastTpl)) {$scriptProperties[\'tplPageLast\'] = $pageLastTpl;}
if (!empty($pageSkipTpl)) {$scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;}
if (!empty($pageNavScheme)) {$scriptProperties[\'scheme\'] = $pageNavScheme;}
if (!empty($cache_expires)) {$scriptProperties[\'cacheTime\'] = $cache_expires;}
//---

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
	return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoPage = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoPage = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoPage from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
	$pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
	$properties = $snippet->get(\'properties\');
	if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
		unset($scriptProperties[\'frontend_js\']);
	}
	if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
		unset($scriptProperties[\'frontend_css\']);
	}
}

// Page
if (isset($_REQUEST[$pageVarKey]) && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
	return $pdoPage->redirectToFirst($isAjax);
}
elseif (!empty($_REQUEST[$pageVarKey])) {
	$page = (integer) $_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;

// Limit
if (isset($_REQUEST[\'limit\'])) {
	if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
		$scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
	}
	else {
		unset($_GET[\'limit\']);
		return $pdoPage->redirectToFirst($isAjax);
	}
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
	$scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
	? (int)$scriptProperties[\'offset\']
	: 0;
$scriptProperties[\'offset\'] = $page > 1
	? $scriptProperties[\'limit\'] * ($page - 1) + $offset
	: $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
	$scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
	? $pdoPage->pdoTools->getCache($scriptProperties)
	: array();

if (empty($data)) {
	if ($object = $modx->getObject(\'modSnippet\', array(\'name\' => $scriptProperties[\'element\']))) {
		$object->setCacheable(false);

		if (!empty($toPlaceholder)) {
			$object->process($scriptProperties);
			$output = $modx->getPlaceholder($toPlaceholder);
		}
		else {
			$output = $object->process($scriptProperties);
		}
	}
	else {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pdoPage] Could not load element "\'.$scriptProperties[\'element\'].\'"\');
		return \'\';
	}
	/** Pagination */
	$total = (int)$modx->getPlaceholder($totalVar);
	$pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
		? ceil(($total - $offset) / $scriptProperties[\'limit\'])
		: 0;

	// Redirect to start if somebody specified incorrect page
	if ($page > 1 && $page > $pageCount) {
		return $pdoPage->redirectToFirst($isAjax);
	}
	elseif (!empty($pageCount) && $pageCount > 1) {
		$pagination = array(
			\'first\' => $page > 1 && !empty($tplPageFirst)
				? $pdoPage->makePageLink($url, 1, $tplPageFirst)
				: \'\',
			\'prev\' => $page > 1 && !empty($tplPagePrev)
				? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
				: \'\',
			\'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
				? $pdoPage->buildModernPagination($page, $pageCount, $url)
				: $pdoPage->buildClassicPagination($page, $pageCount, $url),
			\'next\' => $page < $pageCount && !empty($tplPageNext)
				? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
				: \'\',
			\'last\' => $page < $pageCount && !empty($tplPageLast)
				? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
				: \'\',
		);

		if (!empty($pageCount)) {
			foreach (array(\'first\',\'prev\',\'next\',\'last\') as $v) {
				$tpl = \'tplPage\'.ucfirst($v).\'Empty\';
				if (!empty(${$tpl}) && empty($pagination[$v])) {
					$pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
				}
			}
		}

		if (!empty($setMeta) && !$isAjax) {
			if ($page > 1) {
				$modx->regClientStartupHTMLBlock(\'<link rel="prev" href="\' . $pdoPage->makePageLink($url, $page - 1) . \'"/>\');
			}
			if ($page < $pageCount) {
				$modx->regClientStartupHTMLBlock(\'<link rel="next" href="\' . $pdoPage->makePageLink($url, $page + 1) . \'"/>\');
			}
		}

		$pagination = !empty($tplPageWrapper)
			? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
			: $pdoPage->pdoTools->parseChunk(\'\', $pagination);
	}

	$data = array(
		\'output\' => $output,
		$pageVarKey => $page,
		$pageCountVar => $pageCount,
		$pageNavVar => $pagination,
		$totalVar => $total,
	);
	if ($cache) {
		$pdoPage->pdoTools->setCache($data, $scriptProperties);
	}
}

if ($isAjax) {
	if ($pageNavVar != \'pagination\') {
		$data[\'pagination\'] = $data[$pageNavVar];
		unset($data[$pageNavVar]);
	}
	if ($pageCountVar != \'pages\') {
		$data[\'pages\'] = (int)$data[$pageCountVar];
		unset($data[$pageCountVar]);
	}
	if ($pageVarKey != \'page\') {
		$data[\'page\'] = (int)$data[$pageVarKey];
		unset($data[$pageVarKey]);
	}
	if ($totalVar != \'total\') {
		$data[\'total\'] = (int)$data[$totalVar];
		unset($data[$totalVar]);
	}

	@session_write_close();
	exit($modx->toJSON($data));
}
else {
	$modx->setPlaceholders($data, $plPrefix);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $data[\'output\']);
	}
	else {
		return $data[\'output\'];
	}
}',
    ),
  ),
  'c0e9d82a85dee40c692ef50b9662d5dd' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoMenu',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoMenu',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:51:{s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"pdotools_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:22:"pdotools_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"level";a:7:{s:4:"name";s:5:"level";s:4:"desc";s:19:"pdotools_prop_level";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:21:"pdotools_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"displayStart";a:7:{s:4:"name";s:12:"displayStart";s:4:"desc";s:26:"pdotools_prop_displayStart";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:23:"pdotools_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"templates";a:7:{s:4:"name";s:9:"templates";s:4:"desc";s:23:"pdotools_prop_templates";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:21:"pdotools_prop_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"cache";a:7:{s:4:"name";s:5:"cache";s:4:"desc";s:19:"pdotools_prop_cache";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:23:"pdotools_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:3600;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:14:"cacheAnonymous";a:7:{s:4:"name";s:14:"cacheAnonymous";s:4:"desc";s:28:"pdotools_prop_cacheAnonymous";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"plPrefix";a:7:{s:4:"name";s:8:"plPrefix";s:4:"desc";s:22:"pdotools_prop_plPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"wf.";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:24:"pdotools_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"pdotools_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"pdotools_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:18:"previewUnpublished";a:7:{s:4:"name";s:18:"previewUnpublished";s:4:"desc";s:32:"pdotools_prop_previewUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"hideSubMenus";a:7:{s:4:"name";s:12:"hideSubMenus";s:4:"desc";s:26:"pdotools_prop_hideSubMenus";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"useWeblinkUrl";a:7:{s:4:"name";s:13:"useWeblinkUrl";s:4:"desc";s:27:"pdotools_prop_useWeblinkUrl";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"pdotools_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"pdotools_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"menuindex";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"pdotools_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:20:"pdotools_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"rowIdPrefix";a:7:{s:4:"name";s:11:"rowIdPrefix";s:4:"desc";s:25:"pdotools_prop_rowIdPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"firstClass";a:7:{s:4:"name";s:10:"firstClass";s:4:"desc";s:24:"pdotools_prop_firstClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"first";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"lastClass";a:7:{s:4:"name";s:9:"lastClass";s:4:"desc";s:23:"pdotools_prop_lastClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"last";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"hereClass";a:7:{s:4:"name";s:9:"hereClass";s:4:"desc";s:23:"pdotools_prop_hereClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"active";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"parentClass";a:7:{s:4:"name";s:11:"parentClass";s:4:"desc";s:25:"pdotools_prop_parentClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"rowClass";a:7:{s:4:"name";s:8:"rowClass";s:4:"desc";s:22:"pdotools_prop_rowClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"outerClass";a:7:{s:4:"name";s:10:"outerClass";s:4:"desc";s:24:"pdotools_prop_outerClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"innerClass";a:7:{s:4:"name";s:10:"innerClass";s:4:"desc";s:24:"pdotools_prop_innerClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"levelClass";a:7:{s:4:"name";s:10:"levelClass";s:4:"desc";s:24:"pdotools_prop_levelClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"selfClass";a:7:{s:4:"name";s:9:"selfClass";s:4:"desc";s:23:"pdotools_prop_selfClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"webLinkClass";a:7:{s:4:"name";s:12:"webLinkClass";s:4:"desc";s:26:"pdotools_prop_webLinkClass";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplOuter";a:7:{s:4:"name";s:8:"tplOuter";s:4:"desc";s:22:"pdotools_prop_tplOuter";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:41:"@INLINE <ul[[+classes]]>[[+wrapper]]</ul>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"pdotools_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:95:"@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"tplParentRow";a:7:{s:4:"name";s:12:"tplParentRow";s:4:"desc";s:26:"pdotools_prop_tplParentRow";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"tplParentRowHere";a:7:{s:4:"name";s:16:"tplParentRowHere";s:4:"desc";s:30:"pdotools_prop_tplParentRowHere";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:7:"tplHere";a:7:{s:4:"name";s:7:"tplHere";s:4:"desc";s:21:"pdotools_prop_tplHere";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplInner";a:7:{s:4:"name";s:8:"tplInner";s:4:"desc";s:22:"pdotools_prop_tplInner";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"tplInnerRow";a:7:{s:4:"name";s:11:"tplInnerRow";s:4:"desc";s:25:"pdotools_prop_tplInnerRow";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:12:"tplInnerHere";a:7:{s:4:"name";s:12:"tplInnerHere";s:4:"desc";s:26:"pdotools_prop_tplInnerHere";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:18:"tplParentRowActive";a:7:{s:4:"name";s:18:"tplParentRowActive";s:4:"desc";s:32:"pdotools_prop_tplParentRowActive";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:17:"tplCategoryFolder";a:7:{s:4:"name";s:17:"tplCategoryFolder";s:4:"desc";s:31:"pdotools_prop_tplCategoryFolder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplStart";a:7:{s:4:"name";s:8:"tplStart";s:4:"desc";s:22:"pdotools_prop_tplStart";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:55:"@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:16:"checkPermissions";a:7:{s:4:"name";s:16:"checkPermissions";s:4:"desc";s:30:"pdotools_prop_checkPermissions";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"hereId";a:7:{s:4:"name";s:6:"hereId";s:4:"desc";s:20:"pdotools_prop_hereId";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:19:"pdotools_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"select";a:7:{s:4:"name";s:6:"select";s:4:"desc";s:20:"pdotools_prop_select";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:6:"scheme";a:7:{s:4:"name";s:6:"scheme";s:4:"desc";s:20:"pdotools_prop_scheme";s:4:"type";s:4:"list";s:7:"options";a:6:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:14:"System default";}i:1;a:2:{s:5:"value";i:-1;s:4:"text";s:25:"-1 (relative to site_url)";}i:2;a:2:{s:5:"value";s:4:"full";s:4:"text";s:40:"full (absolute, prepended with site_url)";}i:3;a:2:{s:5:"value";s:3:"abs";s:4:"text";s:39:"abs (absolute, prepended with base_url)";}i:4;a:2:{s:5:"value";s:4:"http";s:4:"text";s:38:"http (absolute, forced to http scheme)";}i:5;a:2:{s:5:"value";s:5:"https";s:4:"text";s:40:"https (absolute, forced to https scheme)";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"pdotools_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:13:"countChildren";a:7:{s:4:"name";s:13:"countChildren";s:4:"desc";s:27:"pdotools_prop_countChildren";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
      'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  'd22d0cafe6b0e3ea9a7f558b1411d0ae' => 
  array (
    'criteria' => 
    array (
      'name' => 'pdoTitle',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'pdoTitle',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($outputSeparator)) {$outputSeparator = \' / \';}
if (empty($titleField)) {$titleField = \'longtitle\';}
if (!empty($limit)) {$limit = (int) $limit;}
if (empty($limit)) {$limit = 3;}
if (!isset($pageVarKey)) {$pageVarKey = \'page\';}
if (!isset($queryVarKey)) {$queryVarKey = \'query\';}
if (empty($tplPages)) {$tplPages = \'@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]\';}
if (empty($tplSearch)) {$tplSearch = \'@INLINE «[[+mse2_query]]»\';}
if (empty($minQuery)) {$minQuery = 3;}
if (empty($id)) {$id = $modx->resource->id;}
if (empty($cacheKey)) {$cacheKey = \'title_crumbs\';}
if (!isset($cacheTime)) {$cacheTime = 0;}
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoTools = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoTools = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoTools from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$modx->lexicon->load(\'pdotools:pdopage\');

/** @var modResource $resource */
$resource = ($id == $modx->resource->id)
	? $modx->resource
	: $modx->getObject(\'modResource\', $id);
if (!$resource) {return \'\';}

$title = array();
$pagetitle = trim($resource->get($titleField));
if (empty($pagetitle)) {
	$pagetitle = $resource->get(\'pagetitle\');
}

// Add search request if exists
if (!empty($_GET[$queryVarKey]) && strlen($_GET[$queryVarKey]) >= $minQuery && !empty($tplSearch)) {
	$pagetitle .= \' \' . $pdoTools->getChunk($tplSearch, array(
		$queryVarKey => $modx->stripTags($_GET[$queryVarKey])
	));
}
$title[] = $pagetitle;

// Add pagination if exists
if (!empty($_GET[$pageVarKey]) && !empty($tplPages)) {
	$title[] = $pdoTools->getChunk($tplPages, array(
		\'page\' => intval($_GET[$pageVarKey])
	));
}

// Add parents
$cacheKey = $resource->getCacheKey() . \'/\' . $cacheKey;
$cacheOptions = array(\'cache_key\' => $modx->getOption(\'cache_resource_key\', null, \'resource\'));
$crumbs = \'\';
if (empty($cache) || !$crumbs = $modx->cacheManager->get($cacheKey, $cacheOptions)) {
	$crumbs = $modx->runSnippet(\'pdoCrumbs\', array(
		\'to\' => $resource->id,
		\'limit\' => $limit,
		\'outputSeparator\' => $outputSeparator,
		\'showHome\' => 0,
		\'showAtHome\' => 0,
		\'showCurrent\' => 0,
		\'direction\' => \'rtl\',
		\'tpl\' => \'@INLINE [[+menutitle]]\',
		\'tplCurrent\' => \'@INLINE [[+menutitle]]\',
		\'tplMax\' => \'\',
		\'tplHome\' => \'\',
		\'tplWrapper\' => \'@INLINE [[+output]]\',
	));
}
if (!empty($crumbs)) {
	if (!empty($cache)) {
		$modx->cacheManager->set($cacheKey, $crumbs, $cacheTime, $cacheOptions);
	}
	$title[] = $crumbs;
}

if (!empty($registerJs)) {
	$config = array(
		\'separator\' => $outputSeparator,
		\'tpl\' => str_replace(array(\'[[+\', \']]\'), array(\'{\', \'}\'), $pdoTools->getChunk($tplPages))
	);
	$modx->regClientStartupScript(\'<script type="text/javascript">pdoTitle = \' . $modx->toJSON($config) . \';</script>\', true);
}

return implode($outputSeparator, $title);',
      'locked' => 0,
      'properties' => 'a:12:{s:2:"id";a:7:{s:4:"name";s:2:"id";s:4:"desc";s:16:"pdotools_prop_id";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"pdotools_prop_title_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:3;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"titleField";a:7:{s:4:"name";s:10:"titleField";s:4:"desc";s:24:"pdotools_prop_titleField";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"longtitle";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:5:"cache";a:7:{s:4:"name";s:5:"cache";s:4:"desc";s:25:"pdotools_prop_title_cache";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:23:"pdotools_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"tplPages";a:7:{s:4:"name";s:8:"tplPages";s:4:"desc";s:22:"pdotools_prop_tplPages";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:68:"@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"pageVarKey";a:7:{s:4:"name";s:10:"pageVarKey";s:4:"desc";s:24:"pdotools_prop_pageVarKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"page";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:9:"tplSearch";a:7:{s:4:"name";s:9:"tplSearch";s:4:"desc";s:23:"pdotools_prop_tplSearch";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"@INLINE «[[+mse2_query]]»";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:11:"queryVarKey";a:7:{s:4:"name";s:11:"queryVarKey";s:4:"desc";s:25:"pdotools_prop_queryVarKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"query";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:8:"minQuery";a:7:{s:4:"name";s:8:"minQuery";s:4:"desc";s:22:"pdotools_prop_minQuery";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:3;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:35:"pdotools_prop_title_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:" / ";s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}s:10:"registerJs";a:7:{s:4:"name";s:10:"registerJs";s:4:"desc";s:24:"pdotools_prop_registerJs";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"pdotools:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdotitle.php',
      'content' => '/** @var array $scriptProperties */
if (empty($outputSeparator)) {$outputSeparator = \' / \';}
if (empty($titleField)) {$titleField = \'longtitle\';}
if (!empty($limit)) {$limit = (int) $limit;}
if (empty($limit)) {$limit = 3;}
if (!isset($pageVarKey)) {$pageVarKey = \'page\';}
if (!isset($queryVarKey)) {$queryVarKey = \'query\';}
if (empty($tplPages)) {$tplPages = \'@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]\';}
if (empty($tplSearch)) {$tplSearch = \'@INLINE «[[+mse2_query]]»\';}
if (empty($minQuery)) {$minQuery = 3;}
if (empty($id)) {$id = $modx->resource->id;}
if (empty($cacheKey)) {$cacheKey = \'title_crumbs\';}
if (!isset($cacheTime)) {$cacheTime = 0;}
$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoTools = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoTools = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoTools from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$modx->lexicon->load(\'pdotools:pdopage\');

/** @var modResource $resource */
$resource = ($id == $modx->resource->id)
	? $modx->resource
	: $modx->getObject(\'modResource\', $id);
if (!$resource) {return \'\';}

$title = array();
$pagetitle = trim($resource->get($titleField));
if (empty($pagetitle)) {
	$pagetitle = $resource->get(\'pagetitle\');
}

// Add search request if exists
if (!empty($_GET[$queryVarKey]) && strlen($_GET[$queryVarKey]) >= $minQuery && !empty($tplSearch)) {
	$pagetitle .= \' \' . $pdoTools->getChunk($tplSearch, array(
		$queryVarKey => $modx->stripTags($_GET[$queryVarKey])
	));
}
$title[] = $pagetitle;

// Add pagination if exists
if (!empty($_GET[$pageVarKey]) && !empty($tplPages)) {
	$title[] = $pdoTools->getChunk($tplPages, array(
		\'page\' => intval($_GET[$pageVarKey])
	));
}

// Add parents
$cacheKey = $resource->getCacheKey() . \'/\' . $cacheKey;
$cacheOptions = array(\'cache_key\' => $modx->getOption(\'cache_resource_key\', null, \'resource\'));
$crumbs = \'\';
if (empty($cache) || !$crumbs = $modx->cacheManager->get($cacheKey, $cacheOptions)) {
	$crumbs = $modx->runSnippet(\'pdoCrumbs\', array(
		\'to\' => $resource->id,
		\'limit\' => $limit,
		\'outputSeparator\' => $outputSeparator,
		\'showHome\' => 0,
		\'showAtHome\' => 0,
		\'showCurrent\' => 0,
		\'direction\' => \'rtl\',
		\'tpl\' => \'@INLINE [[+menutitle]]\',
		\'tplCurrent\' => \'@INLINE [[+menutitle]]\',
		\'tplMax\' => \'\',
		\'tplHome\' => \'\',
		\'tplWrapper\' => \'@INLINE [[+output]]\',
	));
}
if (!empty($crumbs)) {
	if (!empty($cache)) {
		$modx->cacheManager->set($cacheKey, $crumbs, $cacheTime, $cacheOptions);
	}
	$title[] = $crumbs;
}

if (!empty($registerJs)) {
	$config = array(
		\'separator\' => $outputSeparator,
		\'tpl\' => str_replace(array(\'[[+\', \']]\'), array(\'{\', \'}\'), $pdoTools->getChunk($tplPages))
	);
	$modx->regClientStartupScript(\'<script type="text/javascript">pdoTitle = \' . $modx->toJSON($config) . \';</script>\', true);
}

return implode($outputSeparator, $title);',
    ),
  ),
);