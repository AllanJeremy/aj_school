<!DOCTYPE html>

<html <?php language_attributes();?>>
<head>

<meta name="charset" content="<?php bloginfo('charset')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php bloginfo('name')?></title>
 <?php wp_head(); ?>
 
</head>
<body <?php body_class();?>>
    <header class="site-header">
        <div class="header-nav col-xs-12">
            <div class='col-xs-4 col-md-2'>
                <a href="<?php get_home_url();?>"><img class="nav-logo" alt="school logo" src="<?php echo get_template_directory_uri().'/media/logo.png'?>"/></a>
            </div>
            <div class='col-xs-8 col-md-6'>
                <h1 id='school-header-text' class='hidden-xs center_text'><a href="<?php get_home_url();?>">SCHOOL NAME</a></h1>
                <h3 id='school-header-text' class='visible-xs center_text'><a href="<?php get_home_url();?>">SCHOOL NAME</a></h3>
                <h3 id='slogan' class='hidden-xs center_text'>School slogan</h3>
            </div>

            
            <nav class="nav-secondary col-xs-12">
                    <br class='visible-xs'/>
                   <?php
                    $args_sec = array("theme_location"=>"secondary_nav");
                    wp_nav_menu( $args_sec );
                   ?>
            </nav>
        </div>
        <nav class="primary-nav col-xs-12">
             
            <!--Mobile Navigation Bar-->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-primary">
      <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
      </div>
            <!--Primary Navigation Bar-->
            <div class='collapse navbar-collapse' id="nav-primary">
            <?php 
                $args_pri = array("theme_location"=>"primary_nav");
                wp_nav_menu($args_pri);
            ?>
            </div>


        </nav>
    </header>
    
    <!--Main site content-->
    <main>
    
    <div class='container'>

