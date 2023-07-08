<?php
    add_action('wp_enqueue_scripts', 'burgerhouse_scripts');

    function burgerhouse_scripts(){
        wp_enqueue_style('burgerhouse-style', get_stylesheet_uri());
        wp_enqueue_script('burgerhouse-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true);
    }
?>