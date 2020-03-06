<?php
     // remove cache in dev site
     if(site_url()=="http://localhost/myfiles/wp-local"){
          define("VERSION", time());
     }else {
          define("VERSION", wp_get_theme()->get("VERSION"));
     }

     function wpNewsPortal_after_done(){
          load_theme_textdomain("wpNewsPortal"); 
          add_theme_support("post-thumbnails"); 
          add_theme_support("title-tag");                   
          add_theme_support("custom-background");      
          add_theme_support( "custom-header" );     
         
         
          $wpNewsPortal_custom_header_details = array(
               'header-text'         => true,
               'default-text-color'  => '#dd9933',
               'width'               => 1200,
               'height'              => 600,
               'flex-height'         => true,
               'flex-width'          => true,
       
           );
           add_theme_support("custom-header", $_custom_header_details);       

     }

require get_template_directory() . '/inc/wp-news_assets.php';