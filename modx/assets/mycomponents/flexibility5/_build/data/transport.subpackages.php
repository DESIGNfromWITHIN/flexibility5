<?php
/**
 * Subpackage transport file for flexibility5 extra
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 07-29-2015
 *
 * @package flexibility5
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/** Package in subpackages
 *
 * @var modX $modx
 * @var modPackageBuilder $builder
 * @var array $sources
 * @package articles
 */
$subpackages = array (
  'ace' => 'ace-1.5.1-pl',
  'clientconfig' => 'clientconfig-1.3.1-pl',
  'formit' => 'formit-2.2.7-pl',
  'getresources' => 'getresources-1.6.1-pl',
  'migx' => 'migx-2.9.4-pl',
  'pdotools' => 'pdotools-2.0.5-pl',
  'pthumb' => 'pthumb-2.3.3-pl',
  'seopro' => 'seopro-1.0.3-pl',
  'simplesearch' => 'simplesearch-1.9.2-pl',
  'stercseo' => 'stercseo-1.1.1-pl',
  'switch' => 'switch-1.1.0-pl',
  'tinymcerte' => 'tinymcerte-1.0.0-beta',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle = $builder->createVehicle(array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ), $spAttr);
    $vehicle->validate('php',array(
        'source' => $sources['validators'].'validate.'.$name.'.php'
    ));
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'].'packages/resolve.'.$name.'.php'
    ));
    $builder->putVehicle($vehicle);
}
return true;
