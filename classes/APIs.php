<?php

namespace ReactBase\Classes;


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


class APIs {

    /**
     * Constructor
     */
    public function __construct() {
        // Initialize the APIs
        $this->init();
    }

    /**
     * Initialize the APIs
     */
    public function init() {
        // Add API endpoints or other initialization code here
        add_action( 'rest_api_init', [ $this, 'register_api_endpoints' ] );

    }

    /**
     * Register API Endpoints. /wp-json/react-base/v1/data
     *
     * @return void
     */
    public function register_api_endpoints() {
        
        // die("TEST");

        register_rest_route( 'react-base/v1', '/data', [
            'methods'  => 'GET',
            'callback' => [ $this, 'get_data' ],
            'permission_callback' => '__return_true',
        ] );


        register_rest_route( 'react-base/v1', '/table-data', [
            'methods'  => 'GET',
            'callback' => [ $this, 'get_table_data' ],
            'permission_callback' => '__return_true',
        ] );
        
    }

    /**
     * Get Data Callback.
     *
     * @return WP_REST_Response
     */
    public function get_data() {
        $data = [
            'message' => __( 'Hello from React Base API!', 'react_base' ),
        ];
        return rest_ensure_response( $data );
    }


    public function get_table_data() {
        $data = [
            'columns' => ['Dessert (100g serving)', 'Calories', 'Fat (g)', 'Carbs (g)', 'Protein (g)'],
            'rows'    => [
                ['Frozen yoghurt', 159, 6, 24, 4],
                ['Ice cream sandwich', 237, 9, 37, 4.3],
                ['Eclair', 262, 16, 24, 6],
                ['Cupcake', 305, 3.7, 67, 4.3],
                ['Gingerbread', 356, 16, 49, 3.9],
            ],
        ];

        return rest_ensure_response($data);
    }
}