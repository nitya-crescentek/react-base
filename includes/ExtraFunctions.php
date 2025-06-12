<?php

// Extra Functions

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function get_sample_table_data() {
    // Sample columns for the table
    $columns = ['ID', 'Name', 'Age'];

    // Sample rows data
    $rows = [
        [1, 'John Doe', 28],
        [2, 'Jane Smith', 34],
        [3, 'Sam Johnson', 25],
    ];

    // Return data as a JSON object
    return [
        'columns' => $columns,
        'rows' => $rows,
    ];
}


