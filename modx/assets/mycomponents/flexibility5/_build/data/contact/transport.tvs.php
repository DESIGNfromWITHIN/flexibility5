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
  'type' => 'email',
  'name' => 'flex5.form_to_email_adress',
  'caption' => 'Email to adress',
  'description' => '',
  'elements' => '',
  'rank' => 1,
  'display' => 'default',
  'default_text' => 'info@youremail.com',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'false',
    'maxLength' => '',
    'minLength' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'resourcelist',
  'name' => 'flex5.form_redirec_to_page',
  'caption' => 'Thank you page',
  'description' => '',
  'elements' => '',
  'rank' => 2,
  'display' => 'default',
  'default_text' => '12',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => '0',
    'showNone' => '0',
    'parents' => '',
    'depth' => '10',
    'includeParent' => '1',
    'limitRelatedContext' => '0',
    'where' => '',
    'limit' => '0',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
