<?php
/**
 * templateVars transport file for flexibility5 extra
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 08-31-2015
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
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'listbox',
  'name' => 'flex5.show_slider',
  'caption' => 'Show slider',
  'description' => 'Display a Orbit slider on this page?',
  'elements' => 'Yes==yes||No==no',
  'rank' => 2,
  'display' => 'default',
  'default_text' => 'no',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'false',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'forceSelection' => 'false',
    'listEmptyText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'migx',
  'name' => 'flex5.slider_items',
  'caption' => 'Slider items',
  'description' => 'Create, edit and sort the slider items.',
  'elements' => '',
  'rank' => 1,
  'display' => 'default',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'configs' => '',
    'formtabs' => '[
{"caption":"Slide", "fields": [
    {"field":"title","caption":"Slide title"},
    {"field":"image","caption":"Image","inputTVtype":"image"},
    {"field":"description","caption":"Slide content","inputTVtype":"richtext"}
]}
] ',
    'columns' => '[
{"header": "Slide name", "width": "160", "sortable": "true", "dataIndex": "title"},
{"header": "Image", "width": "50", "sortable": "false", "dataIndex": "image","renderer": "this.renderImage"}
]',
    'btntext' => '',
    'previewurl' => '',
    'jsonvarkey' => '',
    'autoResourceFolders' => 'false',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
