<?php

/**
 * Script to interact with user during flexibility5 package install
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

/**
 * Description: Script to interact with user during flexibility5 package install
 * @package flexibility5
 * @subpackage build
 */

/* The return value from this script should be an HTML form (minus the
 * <form> tags and submit button) in a single string.
 *
 * The form will be shown to the user during install
 *
 * This example presents an HTML form to the user with two input fields
 * (you can have as many as you like).
 *
 * The user's entries in the form's input field(s) will be available
 * in any php resolvers with $modx->getOption('field_name', $options, 'default_value').
 *
 * You can use the value(s) to set system settings, snippet properties,
 * chunk content, etc. based on the user's preferences.
 *
 * One common use is to use a checkbox and ask the
 * user if they would like to install a resource for your
 * component (usually used only on install, not upgrade).
 */

/* This is an example. Modify it to meet your needs.
 * The user's input would be available in a resolver like this:
 *
 * $changeSiteName = (! empty($modx->getOption('change_sitename', $options, ''));
 * $siteName = $modx->getOption('sitename', $options, '').
 *
 * */

$output = '
<div style="width: 100%; display: block; margin-bottom: 14px; float:left;">
<img src="http://flexibility5.mpthemes.com/images/flexibility5_name.jpg" alt="Flexibility 5 logo" style="width: 333px; display: block; float:left;">
</div>
<p style="color: #fff; background-color: #031038; display: block; padding: 5px; text-align: center; display:block; width: 100%;">Always create a backup before you install or update Flexibity 5!</p>
<p style="clear:both">&nbsp;</p>
<h3>Demo content</h3>
<p>Do you want to install demo content?<br>
<strong style="color:#ca0303;">WARNING Could overwrite your excisting content!</strong><br>
<b>DO NOT</b> Select this option if you are upgrading from a older version of Flexibity 5 or your site already had content.</p>
<p>&nbsp;</p>
<input type="checkbox" name="add_content" id="add_content" align="left" style="width:18px; height:18px; float:left; margin-top:12px; margin-right:10px;" />
<label for="add_content" style="margin-top:12px"> Add demo content on install</label>
<hr>
<h3>Choose site name</h3>
<p>Fill in your website name</p>
<p>&nbsp;</p>
<input type="text" name="sitename" id="sitename" value="" align="left" size="40" maxlength="60" />
<input type="checkbox" name="change_sitename" id="change_sitename" align="left" style="width:18px; height:18px; float:left; margin-top:12px; margin-right:10px;" />
<label for="change_sitename"style="margin-top:12px"> Set site name on install</label>
<p>&nbsp;</p>
';


return $output;