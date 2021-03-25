<?php

  function raisetech_script(){
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '4.7.0' );
    wp_enqueue_style( 'raisetech', get_template_directory_uri(  ). '/css/raisetech.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'raisetech_script' );