<?php

  // Añadir Menús
  add_theme_support('menus');

  // Añadir Imagen Destacada
  add_theme_support('post-thumbnails');

  // Insertar Imagen Destacada
  function imagen_destacada($clases = "", $img = "assets/img/destacada.jpg") {
    if ( has_post_thumbnail() ):
      if ( $clases == "" )
        the_post_thumbnail('post-thumbnail');
      else
        the_post_thumbnail('post-thumbnail', ['class' => $clases]);
    else:
      $ruta = get_template_directory_uri();
      if ( $clases == "" )
        echo "<img src='$ruta/$img'>";
      else
        echo "<img class='$clases' src='$ruta/$img'>";
    endif;
  }

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
    // General
    wp_register_style(
      'general',
      get_template_directory_uri() . '/assets/css/general.css'
    );
    // Header
    wp_register_style(
      'header',
      get_template_directory_uri() . '/assets/css/header.min.css'
    );
    // Index
    wp_register_style(
      'index',
      get_template_directory_uri() . '/assets/css/index.css'
    );
    // Page
    wp_register_style(
      'page',
      get_template_directory_uri() . '/assets/css/page.min.css'
    );
    // Footer
    wp_register_style(
      'footer',
      get_template_directory_uri() . '/assets/css/footer.css'
    );
    // Menu Mobile Script
    wp_register_script(
      'menu-mobile',
      get_template_directory_uri() . '/assets/js/menu-mobile.js'
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
    wp_enqueue_style('general');
    wp_enqueue_style('header');
    wp_enqueue_style('index');
    wp_enqueue_style('page');
    wp_enqueue_style('footer');
    wp_enqueue_script('menu-mobile');
  }

  // Incluir Post Types
  include('functions-post-types.php');

  // Incluir Taxonomias
  include('functions-taxonomies.php');

?>
