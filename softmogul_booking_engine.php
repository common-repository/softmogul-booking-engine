<?php
/*
Plugin Name: Softmogul Booking Engine
Plugin URI: https://softmogul.com
Description: Plugin to connect to Softmogul Booking Engine
Author: Softmogul
Version: 1.0
Author URI: https://softmogul.com
*/




function soft_mogul_booking_window(){
    $softmogul_token = get_option('softmogul_token');
    if(!empty($softmogul_token)){
        wp_enqueue_script( 'softmogul-booking-engine', plugin_dir_url( __FILE__ ). '/js/softmogul_booking_engine.js', array(), 4.9, TRUE);
        wp_add_inline_script( 'softmogul-booking-engine', 'var softmogul_token = "'.$softmogul_token.'";', 'before' );
    }
}

add_action('wp_enqueue_scripts', 'soft_mogul_booking_window');


function softmogul_admin_panel() {
    include('softmogul_booking_engine_admin.php');
}

function softmogul_admin_actions() {
    add_menu_page("Softmogul Booking Engine", "Softmogul Booking Engine", 1, "Softmogul Booking Engine", "softmogul_admin_panel");
}

add_action('admin_menu', 'softmogul_admin_actions');