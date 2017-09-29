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
    // General
    wp_register_style(
      'general',
      get_template_directory_uri() . '/assets/css/general.css'
    );
    // Header
    wp_register_style(
      'header',
      get_template_directory_uri() . '/assets/css/header.css'
    );
    // Page
    wp_register_style(
      'page',
      get_template_directory_uri() . '/assets/css/page.css'
    );
    // Footer
    wp_register_style(
      'footer',
      get_template_directory_uri() . '/assets/css/footer.css'
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
    wp_enqueue_style('page');
    wp_enqueue_style('footer');
  }
  
  // Android Post Type
  function android_post_type() {
    $labels = array(
      'name'                  => _x( 'Aplicaciones Android', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Aplicación Android', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'Android', 'text_domain' ),
  		'name_admin_bar'        => __( 'Android', 'text_domain' ),
  		'archives'              => __( 'Aplicaciones', 'text_domain' ),
  		'attributes'            => __( 'Atributos de aplicaciones', 'text_domain' ),
  		'parent_item_colon'     => __( 'Elemento padre:', 'text_domain' ),
  		'all_items'             => __( 'Todas las aplicaciones', 'text_domain' ),
  		'add_new_item'          => __( 'Añadir nueva aplicación', 'text_domain' ),
  		'add_new'               => __( 'Añadir nueva aplicación', 'text_domain' ),
  		'new_item'              => __( 'Nueva aplicación', 'text_domain' ),
  		'edit_item'             => __( 'Editar aplicación', 'text_domain' ),
  		'update_item'           => __( 'Actualizar aplicación', 'text_domain' ),
  		'view_item'             => __( 'Ver aplicación', 'text_domain' ),
  		'view_items'            => __( 'Ver aplicaciones', 'text_domain' ),
  		'search_items'          => __( 'Buscar aplicaciones', 'text_domain' ),
  		'not_found'             => __( 'No encontrada', 'text_domain' ),
  		'not_found_in_trash'    => __( 'No encontrada en la papelera', 'text_domain' ),
  		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
  		'set_featured_image'    => __( 'Poner imagen destacada', 'text_domain' ),
  		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
  		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
  		'insert_into_item'      => __( 'Añadir a aplicación', 'text_domain' ),
  		'uploaded_to_this_item' => __( 'Subido a esta aplicación', 'text_domain' ),
  		'items_list'            => __( 'Lista de aplicaciones', 'text_domain' ),
  		'items_list_navigation' => __( 'Navegar lista de aplicaciones', 'text_domain' ),
  		'filter_items_list'     => __( 'Filtrar lista de aplicaciones', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'Aplicación Android', 'text_domain' ),
  		'description'           => __( 'Aplicaciones de Android', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom_fields', ),
  		'taxonomies'            => array( 'category', 'post_tag' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,		
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  		'show_in_rest'          => true,
  	);
  	register_post_type( 'android_post_type', $args );
  }
  add_action( 'init', 'android_post_type', 0 );
  
  // iOS Post Type
  function ios_post_type() {
    $labels = array(
      'name'                  => _x( 'Aplicaciones iOS', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Aplicación iOS', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'iOS', 'text_domain' ),
  		'name_admin_bar'        => __( 'iOS', 'text_domain' ),
  		'archives'              => __( 'Aplicaciones', 'text_domain' ),
  		'attributes'            => __( 'Atributos de aplicaciones', 'text_domain' ),
  		'parent_item_colon'     => __( 'Elemento padre:', 'text_domain' ),
  		'all_items'             => __( 'Todas las aplicaciones', 'text_domain' ),
  		'add_new_item'          => __( 'Añadir nueva aplicación', 'text_domain' ),
  		'add_new'               => __( 'Añadir nueva aplicación', 'text_domain' ),
  		'new_item'              => __( 'Nueva aplicación', 'text_domain' ),
  		'edit_item'             => __( 'Editar aplicación', 'text_domain' ),
  		'update_item'           => __( 'Actualizar aplicación', 'text_domain' ),
  		'view_item'             => __( 'Ver aplicación', 'text_domain' ),
  		'view_items'            => __( 'Ver aplicaciones', 'text_domain' ),
  		'search_items'          => __( 'Buscar aplicaciones', 'text_domain' ),
  		'not_found'             => __( 'No encontrada', 'text_domain' ),
  		'not_found_in_trash'    => __( 'No encontrada en la papelera', 'text_domain' ),
  		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
  		'set_featured_image'    => __( 'Poner imagen destacada', 'text_domain' ),
  		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
  		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
  		'insert_into_item'      => __( 'Añadir a aplicación', 'text_domain' ),
  		'uploaded_to_this_item' => __( 'Subido a esta aplicación', 'text_domain' ),
  		'items_list'            => __( 'Lista de aplicaciones', 'text_domain' ),
  		'items_list_navigation' => __( 'Navegar lista de aplicaciones', 'text_domain' ),
  		'filter_items_list'     => __( 'Filtrar lista de aplicaciones', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'Aplicación iOS', 'text_domain' ),
  		'description'           => __( 'Aplicaciones de iOS', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom_fields', ),
  		'taxonomies'            => array( 'category', 'post_tag' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,		
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  		'show_in_rest'          => true,
  	);
  	register_post_type( 'ios_post_type', $args );
  }
  add_action( 'init', 'ios_post_type', 0 );
  
?>
