<?php 

function zboomMusic_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("menus");

 
        register_nav_menus(
          array(
            'primary_menu' => __( 'Primary Menu', 'zBoom_Music' ),
            'footer_menu' => __( 'Footer Menu', 'zBoom_Music' ),
          )
        );
     

}

add_action('after_setup_theme', 'zboomMusic_setup' );



?>