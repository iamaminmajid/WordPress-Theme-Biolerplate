<?php
function THEMENAME_adding_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js');
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/bower_components/themify-icons/css/themify-icons.css');
    wp_enqueue_style('themify-icons-override', get_template_directory_uri() . '/css/themify-icons.css');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'THEMENAME_adding_scripts');

//TODO: Future change for automated builds planned and this will change for that.
//TODO: Support automated bower builds as in example at https://github.com/lykmapipo/themify-icons