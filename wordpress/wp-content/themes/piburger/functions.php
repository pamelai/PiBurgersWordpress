<?php

   require_once("class-wp-bootstrap-navwalker.php");

   if(function_exists('register_nav_menus')):
      register_nav_menus([
         'nav_header'=>'nav_header'
      ]);

   endif;

   add_theme_support("post-thumbnails");
   add_image_size("thumbnail-menu",250,250,true);

   if(function_exists('register_sidebar')):
      register_sidebar([
         'name'=> 'contacto-sidebar',
         'description'=> 'Sidebar de la sección contacto',
         'class'=> '',
         'before_widget' => '<li>',
         'after_widget'  => '</li>'
      ]);

   endif;
   
   add_action("rest_api_init", "configurar_cors");

   function configurar_cors(){
      remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
  
      add_filter("rest_pre_serve_request", function ($value){
          header('Access-Control-Allow-Origin: *');
          header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
          header('Access-Control-Allow-Credentials: true');
          return $value;
      });

  }
  
  add_action("rest_api_init", "agregar_campos_api");
  
  function agregar_campos_api(){
      register_rest_field("post","thumbnail",
          [
              "get_callback" => "thumbnail_api",
              "update_callback" => null,
              "schema" => null
          ]);
  
  }
  
  function thumbnail_api($post){
      if(has_post_thumbnail($post->ID)):
         return get_the_post_thumbnail_url($post->ID,"thumbnail-menu");
      
      endif;
  }
  