<?php 
/*
	===================
	incule Scripts
	===================
*/

	function awsome_script_eqnuenue(){

			
			wp_enqueue_style( 'boostapCss', get_stylesheet_directory_uri() . '/css/bootstrap.min.css',array(),'1.0.1','all');
			wp_enqueue_style( 'awsomecss', get_stylesheet_directory_uri() . '/css/awsome.css',array(),'1.0.1','all');
			
			wp_enqueue_script( 'awsomejs', get_stylesheet_directory_uri() . '/js/awsome.js',array(),'1.0.1',true);
			wp_enqueue_script( 'boostrapJs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js',array(),'1.0.1',true);
			
			wp_enqueue_script( 'jquery' ,true);
	}

add_action( 'wp_enqueue_scripts','awsome_script_eqnuenue' );

add_theme_support( 'post-thumbnails' );
function awsome_theme_setup(){
	
	add_theme_support('menus');
	register_nav_menu( "primary", "Primary Header Navigatison" );
	register_nav_menu( "secondary", "Footer Navigatison menu" );

}

add_action("init","awsome_theme_setup");
add_theme_support(  "post-formats", array ('aside','image','video'));