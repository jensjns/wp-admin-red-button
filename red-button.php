<?php
    /*
        Plugin Name: Red Button
        Plugin URI: http://jensnilsson.nu
        Description: Red button. For use in WordPress admin-pages.
        Version: 1.0
        Author: Jens Nilsson
        Author URI: http://jensnilsson.nu
    */

    function red_button_css() {
        wp_enqueue_style( 'red-button', plugins_url( '/button-red.css', __FILE__ ) );
    }
    add_action('admin_print_styles', 'red_button_css');
?>