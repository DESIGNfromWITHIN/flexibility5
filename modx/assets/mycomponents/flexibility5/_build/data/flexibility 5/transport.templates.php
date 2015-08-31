<?php
/**
 * templates transport file for flexibility5 extra
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
/* @var xPDOObject[] $templates */


$templates = array();

$templates[1] = $modx->newObject('modTemplate');
$templates[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'templatename' => 'Contact page',
  'description' => '',
  'icon' => '',
  'template_type' => 0,
  'properties' => 
  array (
  ),
), '', true, true);
$templates[1]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/components/flexibility5/templates/flexibility5.contact_page.html'));

$templates[2] = $modx->newObject('modTemplate');
$templates[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'templatename' => 'Basic page',
  'description' => '',
  'icon' => '',
  'template_type' => 0,
  'properties' => 
  array (
  ),
), '', true, true);
$templates[2]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/components/flexibility5/templates/flexibility5.basic_page.html'));

return $templates;
