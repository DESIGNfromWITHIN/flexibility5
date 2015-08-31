<?php
/**
* Resource resolver  for flexibility5 extra.
* Sets template, parent, and (optionally) TV values
*
* Copyright 2015 by Menno Pietersen info@mpthemes.com
* Created on 08-31-2015
*
 * flexibility5 is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * flexibility5 is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * flexibility5; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
* @package flexibility5
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists('checkFields')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(',', $required);
        foreach ($fields as $field) {
            if (! isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, '[Resource Resolver] Missing field: ' . $field);
                return false;
            }
        }
        return true;
    }
}
if($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = array (
                0 =>  array (
                  'pagetitle' => 'Home',
                  'parent' => '0',
                  'template' => 'Basic page',
                  'tvValues' =>  array (
                    'flex5.show_slider' => 'yes',
                    'flex5.slider_items' => '[{"MIGX_id":"1","title":"Slide 1","image":"assets\\/components\\/flexibility5\\/img\\/slider\\/andromeda-orbit.jpg","description":"<p>Slide 1 content.<\\/p>"},{"MIGX_id":"2","title":"Slide 2","image":"assets\\/components\\/flexibility5\\/img\\/slider\\/launch-orbit.jpg","description":"<p>Slide 2&nbsp;content.<\\/p>"},{"MIGX_id":"3","title":"Slide 3","image":"assets\\/components\\/flexibility5\\/img\\/slider\\/satelite-orbit.jpg","description":"<p>Slide 3&nbsp;content.<\\/p>"}]',
                  ),
                ),
                1 =>  array (
                  'pagetitle' => 'Features',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                2 =>  array (
                  'pagetitle' => 'Contact',
                  'parent' => '0',
                  'template' => 'Contact page',
                  'tvValues' =>  array (
                    'flex5.form_to_email_adress' => 'your@email.com',
                  ),
                ),
                3 =>  array (
                  'pagetitle' => 'Search results',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                4 =>  array (
                  'pagetitle' => 'Error page',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                5 =>  array (
                  'pagetitle' => 'Site offline',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                6 =>  array (
                  'pagetitle' => 'Not allowed',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                7 =>  array (
                  'pagetitle' => 'Thank you',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                8 =>  array (
                  'pagetitle' => 'Sitemap',
                  'parent' => '0',
                  'template' => 0,
                ),
                9 =>  array (
                  'pagetitle' => 'Features',
                  'parent' => '0',
                  'template' => 'Basic page',
                ),
                10 =>  array (
                  'pagetitle' => 'Fully configured',
                  'parent' => 'Features',
                  'template' => 'Basic page',
                ),
                11 =>  array (
                  'pagetitle' => 'Easy to use and update',
                  'parent' => 'Features',
                  'template' => 'Basic page',
                ),
            );

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (! checkFields('pagetitle,parent,template', $fields)) {
                        continue;
                    }
                    $resource = $modx->getObject('modResource', array('pagetitle' => $fields['pagetitle']));
                    if (! $resource) {
                        continue;
                    }
                    if ($fields['template'] == 'default') {
                        $resource->set('template', $modx->getOption('default_template'));
                    } else {
                        $templateObj = $modx->getObject('modTemplate', array('templatename' => $fields['template']));
                        if ($templateObj) {
                            $resource->set('template', $templateObj->get('id'));
                        } else {
                            $modx->log(modX::LOG_LEVEL_ERROR, '[Resource Resolver] Could not find template: ' . $fields['template']);
                        }
                    }
                    if (!empty($fields['parent'])) {
                        if ($fields['parent'] != 'default') {
                            $parentObj = $modx->getObject('modResource', array('pagetitle' => $fields['parent']));
                            if ($parentObj) {
                                $resource->set('parent', $parentObj->get('id'));
                            } else {
                                $modx->log(modX::LOG_LEVEL_ERROR, '[Resource Resolver] Could not find parent: ' . $fields['parent']);
                            }
                        }
                    }

                    if (isset($fields['tvValues'])) {
                        foreach($fields['tvValues'] as $tvName => $value) {
                            $resource->setTVValue($tvName, $value);
                        }

                    }
                    $resource->save();
                }

            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;