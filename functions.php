<?php
    function queue_css(){
        wp_register_style('style', get_template_directory_uri().'/style.css', [], '1.0.0');
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', [], '1.0.0');
    }
    function queue_script(){
        if(is_page(13)){
            wp_register_script('cursos', get_template_directory_uri().'/js/addCourseSectionAnimation.js', [], '1.0.0');
            wp_enqueue_script('cursos', get_template_directory_uri().'/js/addCourseSectionAnimation.js', [], '1.0.0');
        }
        if(is_page(133)){
            wp_register_script('cursosjs', get_template_directory_uri().'/js/front-page.js', [], '1.0.0');
            wp_enqueue_script('cursosjs', get_template_directory_uri().'/js/front-page.js', [], '1.0.0');
        }   
    }
    add_action('wp_enqueue_scripts', 'queue_css');
    add_action('wp_enqueue_scripts', 'queue_script');
?>