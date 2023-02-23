<?php
/*
 * Plugin Name: Data Table Plugin
 * Description: This plugin adds creates a shortcode that displays data in a table format
 * Version: 1.0
 * Author: Gage Bateman
 */

$plugin_includes = array(
	'/table-builder.php',
);

foreach ($plugin_includes as $file) {
	require_once plugin_dir_path(__FILE__) . 'includes' . $file;
}
