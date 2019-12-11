<?php
function load_stylesheet() 
{  
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_register_style('stylesheet', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
 wp_enqueue_style('stylesheet');
 wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
 wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');

}
add_action('wp_enqueue_scripts', 'load_stylesheet');
function add_supports()
{
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
}
add_action('after_setup_theme', 'add_supports');

register_nav_menus( 
    array( 'top-menu'=>__('Top Menu', 'site-theme'),
    ) 
);

function codex_widgets_init(){
    register_sidebar(array(
        'name' =>__( 'Main Sidebar' , 'wpb'),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

    ));
}
add_action('widgets_init' , 'codex_widgets_init');

?>
