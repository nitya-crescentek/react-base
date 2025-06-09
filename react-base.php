<?php
/**
 * Plugin Name:       React Base
 * Description:       A base plugin for React development in WordPress.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Author
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       react_base
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'PLUGIN_VERSION', '1.0.0' );
define( 'PLUGIN_BASE_PATH', plugin_dir_path( __FILE__ ) );


class ReactBase {

    public function __construct() {
        // Load the main class
        require_once PLUGIN_BASE_PATH . 'classes/Main.php';
        require_once PLUGIN_BASE_PATH . 'classes/Shortcode.php';
        
        // Initialize the main class
        $main = new \ReactBase\Classes\Main();
        // Initialize the shortcode class
        $shortcode = new \ReactBase\Classes\Shortcode();
    }
}

// Initialize the plugin
$react_base = new ReactBase();
