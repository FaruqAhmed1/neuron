<?php 

if ( ! function_exists( 'neuron_setup' ) ) :
    
    function neuron_setup() {
    
        load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        //manage Title
        add_theme_support( 'title-tag' );
    
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu','neuron' ),
            
        ) );
    
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        add_theme_support( 'custom-logo', array(
            'height' => 480,
            'width'  => 720,
        ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

    }
    endif; 
    add_action( 'after_setup_theme', 'neuron_setup' );


function neuron_enqueue_scripts(){
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(),'1.0.0' , 'all');	
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(),'1.0.0' , 'all');	
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(),'1.0.0' , 'all');	
    wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(),'1.0.0' , 'all');	
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(),'1.0.0' , 'all');
    wp_enqueue_style( 'neuron-style', get_stylesheet_uri() );	

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'),'1.0.0' , true );
    wp_enqueue_script( 'neuron-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),'1.0.0' , true );
}
add_action( 'wp_enqueue_scripts','neuron_enqueue_scripts' );


function neuron_custom_posts() {

   $labels = array(

      'name'                     => __( 'Slides', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Slide', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
   );
   $args = array(
      'labels'     => $labels,
      'public'     => false,
      'show_ui'    => true,
      'supports'   => array( 'title', 'editor', 'revisions','custom-fields','thumbnail','page-attributes' ),

   );

   register_post_type( 'slide', $args );
}
add_action( 'init', 'neuron_custom_posts' );
