<?php
/*
Plugin Name: TablePressResponsive
Description: TablePressResponsive
Version: 0.1
Author: Lataste Théo
License: GPL2
*/


add_action('wp_enqueue_scripts', 'add_files');


function add_files() {
    wp_register_script( 'TablePressResponsive', plugins_url( '/TablePressResponsive.js', __FILE__ ) );
    wp_register_style( 'TablePressResponsive', plugins_url( '/TBresponsive.css', __FILE__ ), array(), '20120208', 'all' );

    wp_enqueue_style( 'TBresponsive', plugin_dir_url( __FILE__ ). '/TBresponsive.css' );
    wp_enqueue_script( 'TablePressResponsive', get_template_directory_uri() . '/TablePressResponsive.js', array(), '1.0.0', true );

}
