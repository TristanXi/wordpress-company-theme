<?php

/**
 * 使用后台设置框架optionsframework,现在不使用它
 */
//if (!function_exists('optionsframework_init')){
//    define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri().'/inc/');
//    require_once dirname(__FILE__).'/inc/options-framework.php';
//}

require_once('theme-options.php');

add_theme_support( 'post-thumbnails' );


/*****Sidebars!******/

if ( function_exists( 'register_sidebar' ) ) {

register_sidebar( array (
'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
'id' => 'primary-widget-area',
'description' => __( 'The primary widget area', 'dir' ),
'before_widget' => '<div class="w cil_p l">',
    'after_widget' => "</div>",
'before_title' => '<div class="lili lile">',
    'after_title' => '</div>',
) );
}



add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'main' => 'Main Nav'
        )
    );
}


?>