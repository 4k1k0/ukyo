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
    /*
    // Nombre
    wp_register_style( 'nombre', get_template_directory_uri() . '/assets/css/archivo.css' );
     */
  }

  // Añadir los scripts y hojas de estilo
  add_action(
    'wp_enqueue_scripts',
    'agregar_archivos'
  );
  function agregar_archivos() {
    /*
     // Nombre 
     wp_enqueue_style('nombre');
    */
  }

?>
