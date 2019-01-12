<?php 
/*
    ===================
    Include scripts
    ===================
*/
function allweltschmerz_scripts_enqueue(){
    wp_enqueue_style('time-line', get_template_directory_uri().'/css/time-line.css', array(), '1.0.0','all');
    wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css', array(), '1.0.0','all');
    wp_enqueue_style('app', get_template_directory_uri().'/css/app.css', array(), '1.0.0','all');
    wp_enqueue_script('appjs', get_template_directory_uri().'/css/app.js', array(), '1.0.0',true);
}

add_action('wp_enqueue_scripts','allweltschmerz_scripts_enqueue');

/*
    ===================
    Activate  Menus
    ===================
*/
function allweltschmerz_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Haader Navigation');
    register_nav_menu('secondary','Footer Navigation');
}

add_action('init','allweltschmerz_theme_setup');

/*
    ========================
    Theme Support Function
    ========================
*/
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','videos'));

/*
    ========================
    Sidebar Function
    ========================
*/

function allweltschmerz_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','allweltschmerz_widget_setup');

/*
    ====================================================
    Remove Wordpress version from wp_head() Function
    ====================================================
*/

function allweltschmerz_remove_version(){
    return '';
}

add_filter('the_generator','allweltschmerz_remove_version');


