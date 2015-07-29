<?php
/**
 * CMP class file for flexibility5 extra
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


 class flexibility5 {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $config;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;
        $corePath = $modx->getOption('flexibility5.core_path',null,
            $modx->getOption('core_path').'components/flexibility5/');
        $assetsUrl = $modx->getOption('flexibility5.assets_url',null,
            $modx->getOption('assets_url').'components/flexibility5/');

        $this->config = array_merge(array(
            'corePath' => $corePath,
            'chunksPath' => $corePath.'elements/chunks/',
            'modelPath' => $corePath.'model/',
            'processorsPath' => $corePath.'processors/',
            'templatesPath' => $corePath . 'templates/',

            'assetsUrl' => $assetsUrl,
            'connector_url' => $assetsUrl.'connector.php',
            'cssUrl' => $assetsUrl.'css/',
            'jsUrl' => $assetsUrl.'js/',
        ),$config);

        $this->modx->addPackage('flexibility5',$this->config['modelPath']);
        if ($this->modx->lexicon) {
            $this->modx->lexicon->load('flexibility5:default');
        }
    }

    /**
     * Initializes flexibility5 based on a specific context.
     *
     * @access public
     * @param string $ctx The context to initialize in.
     * @return string The processed content.
     */
    public function initialize($ctx = 'mgr') {
        $output = '';
        switch ($ctx) {
            case 'mgr':
                if (!$this->modx->loadClass('flexibility5.request.flexibility5ControllerRequest',
                    $this->config['modelPath'],true,true)) {
                        return 'Could not load controller request handler.';
                }
                $this->request = new flexibility5ControllerRequest($this);
                $output = $this->request->handleRequest();
                break;
        }
        return $output;
    }
}