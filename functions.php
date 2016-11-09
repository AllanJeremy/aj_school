<?php

//Import resources
function aj_school_resources()
{
    //Add stylesheets
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri(). '/css/bootstrap.min.css',false,"3.3.7","all" );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    //Add scripts
    wp_enqueue_script( 'jquery.min', get_template_directory_uri().'/js/jquery.min.js', false,'3.3.7', true );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'3.3.7', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array('jquery'),'3.3.7', true );

    //For comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}

//register the aj_school_resources function
add_action( 'wp_enqueue_scripts', 'aj_school_resources' );

//Navigation menus
register_nav_menus( array(
    'secondary_nav'=>__('Secondary Navigation'),
    'primary_nav'=>__('Primary Navigation'),
    'footer_nav'=>__('Footer Section')
));

//Create an excerpt based on content
function generate_custom_excerpt($post=null,$excerpt_length=55,$permalink_name='')
{
   $content =  substr(strip_tags($post->post_content,'<p>'),0,$excerpt_length);
   $permalink = get_permalink($post);
   $permalink_html = "<a href='$permalink'>".$permalink_name."</a>";

   return ($content." ".$permalink_html);
}