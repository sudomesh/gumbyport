<?php

	//Set the content width based on the theme's design and stylesheet.
	 if ( ! isset( $content_width ) )
		$content_width = 767; /* pixels */


	if ( ! function_exists( 'gp_theme_setup' ) ) :
	function gp_theme_setup() {

		//Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		//Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		//Register A WordPress Nav Menu
		register_nav_menus( array(
			'primary' => ( 'Primary Menu' ),
		) );

	}
	endif;
	add_action( 'after_setup_theme', 'gp_theme_setup' );



	//Register A Sidebar Widget
	function gp_widgets_init() {
	    register_sidebar( array(
	        'name' => ( 'Right Sidebar' ),
	        'description'   => 'The Right sidebar',
	        'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h5 class="widget-title"> ',
	        'after_title' => ' </h5>',
	    ) );
	}
	add_action( 'widgets_init', 'gp_widgets_init' );

	//Walker Class - This add support for the dropdown menu in the Gumbyframework
	class Walker_Page_Custom extends Walker_Nav_menu{

		function start_lvl(&$output, $depth){
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"dropdown\"><ul>\n";
		}

		function end_lvl(&$output , $depth){
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul></div>\n";
		}
	}
