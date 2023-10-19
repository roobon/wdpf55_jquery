<?php 

function ficonsu_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'ficonsu' ),
        'top_menu'  => __( 'Top Menu', 'ficonsu' ),
        'footer_menu'  => __( 'Footer Menu', 'ficonsu' ),
    ) );
}

add_action('after_setup_theme' , 'ficonsu_setup');


/**
 * Add a sidebar.
 */
function ficonsu_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar-1', 'ficonsu' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		 'before_widget' => '<div class="widget widget_search margin-bottom-55">',
		 'after_widget'  => '</li>',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</div>',
	) );





    

        //  add_filter('use_widgets_block_editor', '__return_false');






    register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'ficonsu' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
		// 'after_widget'  => '</li>',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer-1', 'ficonsu' ),
		'id'            => 'Footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="widget widget_text padding-left-7">',
		'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => __( 'Main Sidebar-2', 'ficonsu' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		 'before_widget' => '<div class="widget widget_instagram margin-bottom-48">',
		 'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'ficonsu_sidebars' );




$labels = array(
    'name'                  => _x( 'Services', 'Post type general name', 'Service' ),
    'singular_name'         => _x( 'Service', 'Post type singular name', 'Service' ),


);
$args = array(
    'labels'             => $labels ,
    'description'        => 'Service custom Post type',
    'public'             => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
);

register_post_type( 'Services', $args );


function short_content (){
    $txt =  get_the_excerpt() ;
    $limit =  substr($txt,0,100);
    $limit .= "...";
    echo $limit ;
}

flush_rewrite_rules(false) ;