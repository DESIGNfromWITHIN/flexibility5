<?php
/**
 * Category resolver  for flexibility5 extra.
 * Sets Category Parent
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 07-29-2015
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
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, '[Category Resolver] Missing field: ' . $field);
                return false;
            }
        }
        return true;
    }
}
if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = array (
                'Flexibility 5' =>  array (
                  'category' => 'Flexibility 5',
                  'parent' => '',
                ),
                'Contact' =>  array (
                  'category' => 'Contact',
                  'parent' => 'Flexibility 5',
                ),
                'Navigation' =>  array (
                  'category' => 'Navigation',
                  'parent' => 'Flexibility 5',
                ),
                'Sections' =>  array (
                  'category' => 'Sections',
                  'parent' => 'Flexibility 5',
                ),
                'Slider' =>  array (
                  'category' => 'Slider',
                  'parent' => 'Flexibility 5',
                ),
            );

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields('category,parent', $fields)) {
                        continue;
                    }
                    $categoryObj = $modx->getObject('modCategory', array('category' => $fields['category']));
                    if (!$categoryObj) {
                        continue;
                    }
                    $parentObj = $modx->getObject('modCategory', array('category' => $fields['parent']));
                        if ($parentObj) {
                            $categoryObj->set('parent', $parentObj->get('id'));
                        }
                    $categoryObj->save();
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;