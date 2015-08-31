<?php

$modx->addPackage('clientconfig', MODX_CORE_PATH . 'components/clientconfig/model/');

$flexibility5SiteSettings = $modx->getObject('cgGroup', array('label' => 'Site settings'));
if (!$flexibility5SiteSettings) { 
  $flexibility5SiteSettings = $modx->newObject('cgGroup');
  $flexibility5SiteSettings->fromArray(array(
    'label' => 'Site settings',
    'sortorder' => '10',
    'description' => 'General settings'
  ));
  $flexibility5SiteSettings->save();
}

$menu_type = $modx->getObject('cgSetting', array('key' => 'flex5.menu_type'));
if (!$menu_type) { 
  $menu_type = $modx->newObject('cgSetting');
  $menu_type->fromArray(array(
    'key' => 'flex5.menu_type',
    'label' => 'Main navigation type',
    'xtype' => 'modx-combo',
    'description' => 'Select the main menu type.',
    'is_required' => '1',
    'sortorder' => '1',
    'options' => 'top-bar==top-bar||off-canvas==off-canvas',
    'value' => 'top-bar',
    'group' => $flexibility5SiteSettings->get("id")
  ));
  $menu_type->save();
}

$topbaralign = $modx->getObject('cgSetting', array('key' => 'flex5.top-bar-align'));
if (!$topbaralign) { 
  $topbaralign = $modx->newObject('cgSetting');
  $topbaralign->fromArray(array(
    'key' => 'flex5.top-bar-align',
    'label' => 'Main navigation alignment',
    'xtype' => 'modx-combo',
    'description' => 'Should the main menu be align to the left or right?',
    'is_required' => '1',
    'sortorder' => '2',
    'options' => 'Left==left||Right==right',
    'value' => 'right',
    'group' => $flexibility5SiteSettings->get("id")
  ));
  $topbaralign->save();
}

$topbartitle = $modx->getObject('cgSetting', array('key' => 'flex5.top-bar-title'));
if (!$topbartitle) { 
  $topbartitle = $modx->newObject('cgSetting');
  $topbartitle->fromArray(array(
    'key' => 'flex5.top-bar-title',
    'label' => 'Main navigation site name',
    'xtype' => 'modx-combo',
    'description' => 'Show the site name when using the top-bar main navigation?',
    'is_required' => '1',
    'sortorder' => '3',
    'options' => 'Yes==yes||No==no',
    'value' => 'yes',
    'group' => $flexibility5SiteSettings->get("id")
  ));
  $topbartitle->save();
}

$favicon = $modx->getObject('cgSetting', array('key' => 'flex5.favicon'));
if (!$favicon) { 
  $favicon = $modx->newObject('cgSetting');
  $favicon->fromArray(array(
    'key' => 'flex5.favicon',
    'label' => 'Favicon',
    'xtype' => 'modx-panel-tv-image',
    'description' => 'Select the image to use as the site Favicon (.ico)',
    'is_required' => '0',
    'sortorder' => '4',
    'value' => 'assets/components/flexibility5/img/site/favicon.ico',
    'group' => $flexibility5SiteSettings->get("id")
  ));
  $menu_type->save();
}

$footer_content = $modx->getObject('cgSetting', array('key' => 'flex5.footer_content'));
if (!$footer_content) { 
  $footer_content = $modx->newObject('cgSetting');
  $footer_content->fromArray(array(
    'key' => 'flex5.footer_content',
    'label' => 'Footer content',
    'xtype' => 'richtext',
    'description' => 'The content in the footer.',
    'is_required' => '0',
    'sortorder' => '5',
    'value' => 'Flexibility 5 © 2015 - Made by <a href="http://mpthemes.com" target="_blank">MPThemes</a>',
    'group' => $flexibility5SiteSettings->get("id")
  ));
  $footer_content->save();
}

$setSiteName = $modx->getOption('change_sitename', $options, false);
if ($setSiteName) {
  $siteName = $modx->getOption('sitename', $options);
  $modx->log(xPDO::LOG_LEVEL_INFO,'Setting site name to: ' . $siteName);
  $setting = $modx->getObject('modSystemSetting','site_name');
  $setting->set('value', $siteName);
  $setting->save();
}

return true;