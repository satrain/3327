<?php
    function enqueue_styles_and_scripts() {
		$ver = '3.3.4';
        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
        wp_enqueue_style('main');

        wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $ver, 'all');
        wp_enqueue_style('style');

        wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), $ver, 'all');
        wp_enqueue_style('contact');

        wp_register_style('aboutus', get_template_directory_uri() . '/assets/css/about.css', array(), $ver, 'all');
        wp_enqueue_style('aboutus');

        wp_register_style('privacypolicy', get_template_directory_uri() . '/assets/css/privacy-policy.css', array(), $ver, 'all');
        wp_enqueue_style('privacypolicy');

        wp_register_style('projects', get_template_directory_uri() . '/assets/css/projects.css', array(), $ver, 'all');
        wp_enqueue_style('projects');

        wp_register_script('indexjs', get_template_directory_uri() . '/assets/js/index.js', array(), 1, 1, 1);
        wp_enqueue_script('indexjs');

        wp_register_script('jqueryjs', get_template_directory_uri() . '/assets/js/jquery-animation.js', array(), 1, 1, 1);
        wp_enqueue_script('jqueryjs');
    }

    add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
?>