<?php
    function enqueue_styles_and_scripts() {
        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
        wp_enqueue_style('main');

        wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
        wp_enqueue_style('style');

        wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), 1, 'all');
        wp_enqueue_style('contact');

        wp_register_style('aboutus', get_template_directory_uri() . '/assets/css/about.css', array(), 1, 'all');
        wp_enqueue_style('aboutus');

        wp_register_style('privacypolicy', get_template_directory_uri() . '/assets/css/privacy-policy.css', array(), 1, 'all');
        wp_enqueue_style('privacypolicy');

        wp_register_style('projects', get_template_directory_uri() . '/assets/css/projects.css', array(), 1, 'all');
        wp_enqueue_style('projects');

        wp_register_script('indexjs', get_template_directory_uri() . '/assets/js/index.js', array(), 1, 1, 1);
        wp_enqueue_script('indexjs');

        wp_register_script('jqueryjs', get_template_directory_uri() . '/assets/js/jquery-animation.js', array(), 1, 1, 1);
        wp_enqueue_script('jqueryjs');
    }

    add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
?>