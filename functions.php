<?php 
/*
    ===================
    Include scripts
    ===================
*/
function allweltschmerz_scripts_enqueue(){
    wp_enqueue_style('hata', get_template_directory_uri().'/css/404.css', array(), '1.0.0','all');
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

/*
    ====================================
    Custom Post Type Section Function
    ====================================
*/

function allweltschmerz_custom_post_type(){
    $labels = array(
        'name' => 'Project',
        'singular_name' => 'Project',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Project',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Paren Item',

    );

    $args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

    register_post_type('project',$args);
}

add_action('widgets_init','allweltschmerz_custom_post_type');

function allweltschmerz_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' )
	);
	
	register_taxonomy('field', array('project'), $args);
	
	//add new taxonomy NOT hierarchical
	
	register_taxonomy('software', 'project', array(
		'label' => 'Software',
		'rewrite' => array( 'slug' => 'software' ),
		'hierarchical' => false
	) );
	
}
add_action( 'init' , 'allweltschmerz_custom_taxonomies' );

/*
	==========================================
	Custom Term Function
	==========================================
*/
function allweltschmerz_get_terms( $postID, $term ){
	
	$terms_list = wp_get_post_terms($postID, $term); 
	$output = '';
					
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	
	return $output;
	
}

/*
	==========================================
	Get Images From Library
	==========================================
*/

function allweltschmerz_get_experience_logo($attachment_id){
$image_attributes = wp_get_attachment_image_src( $attachment_id, array('80','80') );
if($image_attributes ){
	return '<img 
		src="'.$image_attributes[0].'" 
		width="'.$image_attributes[1].'" 
		height="'.$image_attributes[2].'"
	 	alt="'.get_post_meta($attachment_id, '_wp_attachment_image_alt', true).'" 
	 	style="border-radius:20px;"/>';
}

}

/*
	=========================
	The Excerpt Charlength
	========================
*/

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}

/*
	=========================
	The Excerpt Charlength
	========================
*/
function allweltschmerz_get_tags(){
	$tags = get_tags();
	$html = '';
	foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );

	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'><span class='tag'>";
	$html .= "{$tag->name}</span></a>";
	}
	$html .= '';
	echo $html;
}






