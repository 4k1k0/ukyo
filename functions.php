<?php
  
  // Añadir Menús
  add_theme_support('menus');

  // Añadir Imagen Destacada
  add_theme_support('post-thumbnails');

  // Registrar scripts y hojas de estilo
  add_action(
    'wp_enqueue_scripts',
    'registrar_archivos',
    1
  );
  function registrar_archivos() {
    // Bootstrap
    wp_register_style(
      'bootstrap',
      get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css'
    );
    // Font Awesome
    wp_register_style(
      'font-awesome',
      get_template_directory_uri() . '/assets/css/font-awesome.min.css'
    );
    // Header
    wp_register_style(
      'header',
      get_template_directory_uri() . '/assets/css/header.css'
    );
  }

  // Añadir los scripts y hojas de estilo
  add_action(
    'wp_enqueue_scripts',
    'agregar_archivos'
  );
  function agregar_archivos() {
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('header');
  }

?>
