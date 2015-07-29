<?php
/**
* Action file for flexibility5 extra
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
*
* @package flexibility5
*/


abstract class flexibility5ManagerController extends modExtraManagerController {
    /** @var flexibility5 $flexibility5 */
    public $flexibility5 = NULL;

    /**
     * Initializes the main manager controller.
     */
    public function initialize() {
        /* Instantiate the flexibility5 class in the controller */
        $path = $this->modx->getOption('flexibility5.core_path',
                NULL, $this->modx->getOption('core_path') .
                'components/flexibility5/') . 'model/flexibility5/';
        require_once $path . 'flexibility5.class.php';
        $this->flexibility5 = new flexibility5($this->modx);

        /* Optional alternative  - install PHP class as a service */

        /* $this->flexibility5 = $this->modx->getService('flexibility5',
             'flexibility5', $path);*/

        /* Add the main javascript class and our configuration */
        $this->addJavascript($this->flexibility5->config['jsUrl'] .
            'flexibility5.class.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            flexibility5.config = ' . $this->modx->toJSON($this->flexibility5->config) . ';
        });
        </script>');
    }

    /**
     * Defines the lexicon topics to load in our controller.
     *
     * @return array
     */
    public function getLanguageTopics() {
        return array('flexibility5:default');
    }

    /**
     * We can use this to check if the user has permission to see this
     * controller. We'll apply this in the admin section.
     *
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }

    /**
     * The name for the template file to load.
     *
     * @return string
     */
    public function getTemplateFile() {
        return dirname(__FILE__) . '/templates/mgr.tpl';
        // return $this->flexibility5->config['templatesPath'] . 'mgr.tpl';
    }
}

/**
 * The Index Manager Controller is the default one that gets called when no
 * action is present.
 */
class IndexManagerController extends flexibility5ManagerController {
    /**
     * Defines the name or path to the default controller to load.
     *
     * @return string
     */
    public static function getDefaultController() {
        return 'home';
    }
}
