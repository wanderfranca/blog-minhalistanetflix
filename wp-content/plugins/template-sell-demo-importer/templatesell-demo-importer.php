<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
Plugin Name: Template Sell Demo Importer
Description: Install One Click Demo Import Plugin First. Import the demos of Template Sell own Product. The activated themes demo data will show under Appearance > Import Demo Data. 
Version:     1.0.1
Author:      Template Sell 
Author URI:  http://www.templatesell.com
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: templatesell-demo-importer
*/

/**
 * Check the required theme is installed and activated or not.
 */
$templatesell_themes_name = wp_get_theme(); // gets the current theme

/**
 * Condition for Polite Demo Import.
*/
if ( 'Polite' == $templatesell_themes_name->name || 'Polite' == $templatesell_themes_name->parent_theme ) {

    require plugin_dir_path( __FILE__ ) . '/polite-dummy-data/polite-dummy-data.php';
}
/**
 * Condition for Prefer Demo Import.
*/
if ( 'Prefer' == $templatesell_themes_name->name || 'Prefer' == $templatesell_themes_name->parent_theme ) {

	 require plugin_dir_path( __FILE__ ) . '/prefer-dummy-data/prefer-dummy-data.php';
}

/**
 * Condition for Intimate Demo Import.
*/
if ( 'Intimate' == $templatesell_themes_name->name || 'Intimate' == $templatesell_themes_name->parent_theme ) {

	 require plugin_dir_path( __FILE__ ) . '/intimate-dummy-data/intimate-dummy-data.php';
}

/**
 * Condition for Intimate Demo Import.
*/
if ( 'Docile' == $templatesell_themes_name->name || 'Docile' == $templatesell_themes_name->parent_theme ) {

	 require plugin_dir_path( __FILE__ ) . '/docile-dummy-data/docile-dummy-data.php';
}