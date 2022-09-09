<?php
    function queue_css(){
        wp_register_style('style', get_template_directory_uri().'/style.css');
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts', 'queue_css');
?>