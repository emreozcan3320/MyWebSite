<?php 

function allweltschmerz_scripts_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'css/app.css', array(), '1.0.0','all');
    wp_enqueue_script('customjs', get_template_directory_uri().'css/app.css', array(), '1.0.0',true);
}

add_action('wp_enqueue_scripts','allweltschmerz_scripts_enqueue');

function allweltschmerz_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Haader Navigation');
    register_nav_menu('secondary','Footer Navigation');
}

add_action('init','allweltschmerz_theme_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','videos'));