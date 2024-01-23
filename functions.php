<?php

/* 
    My theme Function 
*/ 

// Theme Title
add_theme_support('title-tag');


// Theme css and jquery add

function append_css_js_calling(){

    wp_enqueue_style( 'append', get_stylesheet_uri()); 

    wp_register_style('main',get_template_directory_uri().'/css/main.css',array(),'1.0.0','all');
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'v4.0.0','all');
    wp_enqueue_style( 'main'); 
    wp_enqueue_style( 'bootstrap'); 


    // jquery add
    wp_enqueue_script("jQuery");
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js/',array(),'v5.3.2','true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js/',array(),'v5.3.2','true');

};


add_action("wp_enqueue_scripts","append_css_js_calling");