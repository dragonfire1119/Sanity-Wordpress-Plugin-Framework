<?php
/*
 Plugin Name: Your Plugin Name
 Plugin URI: http://www.your-plugin.com
 Description: Your well written plugin description.
 Author: Your Name
 Version: 1.0
 Author URI: http://www.your-github-account.com/
 */

/*  Copyright 2012  Your Plugin Name  (email : support@youremail.com)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License, version 2, as
 published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 */

// Derive the current path and load up Sanity
$plugin_path = dirname(__FILE__) . '/';
if (class_exists('SanityPluginFramework') != true)
	require_once ($plugin_path . 'framework/sanity.php');

/**
 *		Define your plugin class which extends the SanityPluginFramework
 *		Make sure you skip down to the end of this file, as there are a few
 *		lines of code that are very important.
 */
class ExamplePlugin extends SanityPluginFramework {

	/**
	 *	Some required plugin information
	 */
	var $version = '1.0';

	/**
	 *		Required __construct() function that initalizes the Sanity Framework
	 */
	function __construct() {
		parent::__construct(__FILE__);
	}

	/**
	 *		Run during the activation of the plugin
	 */
	public function activate() {

	}

	/**
	 *		Run during the initialization of Wordpress
	 */
	public function initialize() {

	}

	/**
	 *		Run during the uninstallation of Your WordPress Plugin
	 */
	public function uninstall() {

	}

}

// Initalize the your plugin
$ExamplePlugin = new ExamplePlugin();

// Add an activation hook
register_activation_hook(__FILE__, array(&$ExamplePlugin, 'activate'));

// Run the plugins initialization method
add_action('init', array(&$ExamplePlugin, 'initialize'));

// Add the uninstall hook
add_action(__FILE__, array(&$ExamplePlugin, 'uninstall'));
?>