<?php

namespace ReactBase\Classes;

if( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


class Shortcode {

    /**
     * Constructor
     */
    public function __construct() {
        // Register the shortcode
        add_shortcode( 'frontend_shortcode', [ $this, 'render_shortcode' ] );
        add_shortcode( 'react_table', [ $this, 'react_table_shortcode' ] );
        add_shortcode( 'cirtifigate', [ $this, 'react_cirtifigate' ] );
    }

    /**
     * Render the shortcode.
     *
     * @param array $atts Shortcode attributes.
     * @return string Rendered output.
     */
    public function render_shortcode() {
        ob_start();

        include PLUGIN_BASE_PATH . 'templates/hello_world.php';

        return ob_get_clean();
    }


    public function react_table_shortcode(){

        return '<div id="react-table"></div>';
    }

    public function react_cirtifigate(){

        return '<div id="student-cirtifigate"></div>';
    }
}