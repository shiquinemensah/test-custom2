<?php

//stylesheet
function shiquinestyle_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('customtest', get_template_directory_uri() . "/style.css" , array(), $version, 'all');
}

add_action ('wp_enqueue_scripts', 'shiquinestyle_register_styles');



// script files
function shiquinestyle_register_scripts(){

    wp_enqueue_script('customtest-jscript', get_template_directory_uri() . '/main.js', array(), true );
    
}

add_action ('wp_enqueue_scripts', 'shiquinestyle_register_scripts');



?>