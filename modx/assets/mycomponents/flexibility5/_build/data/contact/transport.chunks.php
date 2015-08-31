<?php
/**
 * chunks transport file for flexibility5 extra
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
/* @var xPDOObject[] $chunks */


$chunks = array();

$chunks[1] = $modx->newObject('modChunk');
$chunks[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'form_email_tpl',
  'description' => '',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[1]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/components/flexibility5/chunks/contact/flex5.form_email_tpl.html'));

$chunks[2] = $modx->newObject('modChunk');
$chunks[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'name' => 'flex5.contact_form',
  'description' => '',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[2]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/components/flexibility5/chunks/contact/flex5.contact_form.html'));

return $chunks;
