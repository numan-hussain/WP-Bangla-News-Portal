<?php
     // remove cache in dev site
     if(site_url()=="http://localhost/myfiles/wp-local"){
          define("VERSION", time());
     }else {
          define("VERSION", wp_get_theme()->get("VERSION"));
     }


     load_theme_textdomain("wp-news"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");                   
     add_theme_support("custom-background");      
     add_theme_support( "custom-header" );            

 

require get_template_directory() . '/inc/wp-news_assets.php';