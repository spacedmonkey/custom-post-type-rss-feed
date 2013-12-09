<?php
/**
 * Custom Post Type RSS feed
 *
 * A very simply plugin that add rss feeds for custom post types that have the archives set to true
 *
 * @package   Custom_Post_Type_RSS_Feeds
 * @author    Jonathan Harris <jon@computingcorner.co.uk>
 * @license   GPL-2.0+
 * @link      http://www.jonathandavidharris.co.uk
 * @copyright 2013 Jonathan Harris
 *
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Post Type RSS feed
 * Plugin URI:        http://www.jonathandavidharris.co.uk/scripts/custom-post-type-rss-feeds/#main
 * Description: 	  A very simply plugin that add rss feeds for custom post types that have the archives set to true
 * Version:           2.0.0
 * Revision Date: 	  NOV 19, 2013
 * Requires at least: WP 3.2.1
 * Tested up to:	  WP 3.4.1
 * Author: 			  Jonathan Harris
 * Author URI: 		  http://www.jonthandavidharris.co.uk/
 * Text Domain:       custom-post-type-rss-feeds-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * Network: true
 * GitHub Plugin URI: https://github.com/spacedmonkey/Custom-Post-type-rss-feed
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/


require_once( plugin_dir_path( __FILE__ ) . '/public/class-custom-post-type-rss-feed.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'Custom_Post_Type_RSS_Feeds', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Custom_Post_Type_RSS_Feeds', 'deactivate' ) );

/*
 * On plugin loaded, start up the class
 */
add_action( 'plugins_loaded', array( 'Custom_Post_Type_RSS_Feeds', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/


/*
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . '/admin/class-custom-post-type-rss-feed-admin.php' );
	
	add_action( 'plugins_loaded', array( 'Custom_Post_Type_RSS_Feeds_Admin', 'get_instance' ) );

}
