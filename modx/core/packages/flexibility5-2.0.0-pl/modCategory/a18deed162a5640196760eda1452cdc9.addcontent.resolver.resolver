<?php
$sources = array(
    'data' => $modx->getOption('core_path') . 'components/flexibility5/contentResources/',
);

$addContent = $modx->getOption('add_content', $options, false);

/* Add transport.resources if addContent is selected */

if ($addContent) {
  $modx->log(modX::LOG_LEVEL_ERROR, 'addContent is true');
  $resources = include $sources['data'] . 'transport.resources.php';
  foreach ($resources as $resource) {
    $resource->save();
  }
  $modx->log(modX::LOG_LEVEL_ERROR, 'transport.resources done');
}

return true;