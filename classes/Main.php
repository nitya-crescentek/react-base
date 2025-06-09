<?php

namespace ReactBase\Classes;


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


/**
 * Main Class for ReactBase Plugin
 */
class Main {

    /**
     * Constructor
     */
    public function __construct() {
        // Initialize the plugin
        $this->init();
    }

    /**
     * Initialize the plugin
     */
    public function init() {

        // Add admin menu
        add_action( 'admin_menu', [ $this, 'react_base_init_menu' ] );

        // Enqueue scripts and styles
        add_action( 'admin_enqueue_scripts', [ $this, 'react_base_admin_enqueue_scripts' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'react_base_admin_enqueue_scripts' ] );
    }

    /**
     * Init Admin Menu.
     *
     * @return void
     */
    public function react_base_init_menu() {
        add_menu_page(
            __( 'React Settings', 'react_base' ),
            __( 'React Settings', 'react_base' ),
            'manage_options',
            'react_base',
            [ $this, 'react_base_admin_page' ],
            'dashicons-admin-generic',
            '2.1'
        );
    }

    /**
     * Init Admin Page.
     *
     * @return void
     */
    public function react_base_admin_page() {
        require_once PLUGIN_BASE_PATH . 'admin/settings.php';
    }

    /**
     * Enqueue scripts and styles.
     *
     * @return void
     */
    public function react_base_admin_enqueue_scripts() {
        $plugin_url = plugin_dir_url( __FILE__ );
        wp_enqueue_style( 'react_base-style', $plugin_url . '../build/index.css' );
        wp_enqueue_script( 'react_base-script', $plugin_url . '../build/index.js', [ 'wp-element', 'wp-i18n', 'react-jsx-runtime' ], PLUGIN_VERSION, true );
    }
}
