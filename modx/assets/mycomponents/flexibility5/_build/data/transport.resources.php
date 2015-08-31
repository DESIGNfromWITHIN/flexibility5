<?php
/**
 * resources transport file for flexibility5 extra
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
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array (
  'id' => 1,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Home',
  'longtitle' => '',
  'description' => 'Foundation 5 based template for MODX Revolution. Flexibility 5 is the perfect theme to start Foundation 5 based MODX projects with.',
  'alias' => 'index',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 0,
  'searchable' => true,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/home.content.html'));


$properties = include $sources['data'].'properties/properties.home.resource.php';
$resources[1]->setProperties($properties);
unset($properties);

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array (
  'id' => 2,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Features',
  'longtitle' => '',
  'description' => '',
  'alias' => 'features',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 1,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/features.content.html'));


$properties = include $sources['data'].'properties/properties.features.resource.php';
$resources[2]->setProperties($properties);
unset($properties);

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array (
  'id' => 3,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Contact',
  'longtitle' => '',
  'description' => '',
  'alias' => 'contact',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Contact page',
  'menuindex' => 3,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[3]->setContent(file_get_contents($sources['data'].'resources/contact.content.html'));


$properties = include $sources['data'].'properties/properties.contact.resource.php';
$resources[3]->setProperties($properties);
unset($properties);

$resources[4] = $modx->newObject('modResource');
$resources[4]->fromArray(array (
  'id' => 4,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Search results',
  'longtitle' => '',
  'description' => '',
  'alias' => 'search-results',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 4,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[4]->setContent(file_get_contents($sources['data'].'resources/search_results.content.html'));


$properties = include $sources['data'].'properties/properties.search_results.resource.php';
$resources[4]->setProperties($properties);
unset($properties);

$resources[5] = $modx->newObject('modResource');
$resources[5]->fromArray(array (
  'id' => 5,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Error page',
  'longtitle' => '',
  'description' => '',
  'alias' => 'error-page',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 5,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[5]->setContent(file_get_contents($sources['data'].'resources/error_page.content.html'));


$properties = include $sources['data'].'properties/properties.error_page.resource.php';
$resources[5]->setProperties($properties);
unset($properties);

$resources[6] = $modx->newObject('modResource');
$resources[6]->fromArray(array (
  'id' => 6,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Site offline',
  'longtitle' => '',
  'description' => '',
  'alias' => 'site-offline',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 6,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[6]->setContent(file_get_contents($sources['data'].'resources/site_offline.content.html'));


$properties = include $sources['data'].'properties/properties.site_offline.resource.php';
$resources[6]->setProperties($properties);
unset($properties);

$resources[7] = $modx->newObject('modResource');
$resources[7]->fromArray(array (
  'id' => 7,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Not allowed',
  'longtitle' => '',
  'description' => '',
  'alias' => 'not-allowed',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 7,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[7]->setContent(file_get_contents($sources['data'].'resources/not_allowed.content.html'));


$properties = include $sources['data'].'properties/properties.not_allowed.resource.php';
$resources[7]->setProperties($properties);
unset($properties);

$resources[8] = $modx->newObject('modResource');
$resources[8]->fromArray(array (
  'id' => 8,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Thank you',
  'longtitle' => '',
  'description' => '',
  'alias' => 'thank-you',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 8,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[8]->setContent(file_get_contents($sources['data'].'resources/thank_you.content.html'));


$properties = include $sources['data'].'properties/properties.thank_you.resource.php';
$resources[8]->setProperties($properties);
unset($properties);

$resources[9] = $modx->newObject('modResource');
$resources[9]->fromArray(array (
  'id' => 9,
  'type' => 'document',
  'contentType' => 'text/xml',
  'pagetitle' => 'Sitemap',
  'longtitle' => '',
  'description' => '',
  'alias' => 'sitemap',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => false,
  'template' => 0,
  'menuindex' => 9,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 2,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[9]->setContent(file_get_contents($sources['data'].'resources/sitemap.content.html'));


$properties = include $sources['data'].'properties/properties.sitemap.resource.php';
$resources[9]->setProperties($properties);
unset($properties);

$resources[10] = $modx->newObject('modResource');
$resources[10]->fromArray(array (
  'id' => 10,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Features',
  'longtitle' => '',
  'description' => '',
  'alias' => 'features',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 1,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[10]->setContent(file_get_contents($sources['data'].'resources/features.content.html'));


$properties = include $sources['data'].'properties/properties.features.resource.php';
$resources[10]->setProperties($properties);
unset($properties);

$resources[11] = $modx->newObject('modResource');
$resources[11]->fromArray(array (
  'id' => 11,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Fully configured',
  'longtitle' => '',
  'description' => '',
  'alias' => 'fully-configured',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 0,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[11]->setContent(file_get_contents($sources['data'].'resources/fully_configured.content.html'));


$properties = include $sources['data'].'properties/properties.fully_configured.resource.php';
$resources[11]->setProperties($properties);
unset($properties);

$resources[12] = $modx->newObject('modResource');
$resources[12]->fromArray(array (
  'id' => 12,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Easy to use and update',
  'longtitle' => '',
  'description' => '',
  'alias' => 'easy-to-use-and-update',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Basic page',
  'menuindex' => 1,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
), '', true, true);
$resources[12]->setContent(file_get_contents($sources['data'].'resources/easy_to_use_and_update.content.html'));


$properties = include $sources['data'].'properties/properties.easy_to_use_and_update.resource.php';
$resources[12]->setProperties($properties);
unset($properties);

return $resources;
