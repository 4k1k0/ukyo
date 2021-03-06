<?php
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
      'taxonomies'            => array( 'apps' ),
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
      'taxonomies'            => array( 'apps' ),
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
  
  // Linux Post Type
  function linux_post_type() {
    $labels = array(
      'name'                  => _x( 'Programas Linux', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Programa Linux', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Linux', 'text_domain' ),
      'name_admin_bar'        => __( 'Linux', 'text_domain' ),
      'archives'              => __( 'Programas', 'text_domain' ),
      'attributes'            => __( 'Atributos de Programas', 'text_domain' ),
      'parent_item_colon'     => __( 'Elemento padre:', 'text_domain' ),
      'all_items'             => __( 'Todas las Programas', 'text_domain' ),
      'add_new_item'          => __( 'Añadir nuevo Programa', 'text_domain' ),
      'add_new'               => __( 'Añadir nuevo Programa', 'text_domain' ),
      'new_item'              => __( 'Nueva Programa', 'text_domain' ),
      'edit_item'             => __( 'Editar Programa', 'text_domain' ),
      'update_item'           => __( 'Actualizar Programa', 'text_domain' ),
      'view_item'             => __( 'Ver Programa', 'text_domain' ),
      'view_items'            => __( 'Ver Programas', 'text_domain' ),
      'search_items'          => __( 'Buscar Programas', 'text_domain' ),
      'not_found'             => __( 'No encontrado', 'text_domain' ),
      'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
      'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
      'set_featured_image'    => __( 'Poner imagen destacada', 'text_domain' ),
      'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
      'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
      'insert_into_item'      => __( 'Añadir a Programa', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Subido a esta Programa', 'text_domain' ),
      'items_list'            => __( 'Lista de Programas', 'text_domain' ),
      'items_list_navigation' => __( 'Navegar lista de Programas', 'text_domain' ),
      'filter_items_list'     => __( 'Filtrar lista de Programas', 'text_domain' ),
    );
    $args = array(
      'label'                 => __( 'Programa Linux', 'text_domain' ),
      'description'           => __( 'Programas de Linux', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom_fields', ),
      'taxonomies'            => array( 'software' ),
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
    register_post_type( 'linux_post_type', $args );
  }
  add_action( 'init', 'linux_post_type', 0 );
  
    // Windows Post Type
  function windows_post_type() {
    $labels = array(
      'name'                  => _x( 'Programas Windows', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Programa Windows', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Windows', 'text_domain' ),
      'name_admin_bar'        => __( 'Windows', 'text_domain' ),
      'archives'              => __( 'Programas', 'text_domain' ),
      'attributes'            => __( 'Atributos de Programas', 'text_domain' ),
      'parent_item_colon'     => __( 'Elemento padre:', 'text_domain' ),
      'all_items'             => __( 'Todas las Programas', 'text_domain' ),
      'add_new_item'          => __( 'Añadir nuevo Programa', 'text_domain' ),
      'add_new'               => __( 'Añadir nuevo Programa', 'text_domain' ),
      'new_item'              => __( 'Nueva Programa', 'text_domain' ),
      'edit_item'             => __( 'Editar Programa', 'text_domain' ),
      'update_item'           => __( 'Actualizar Programa', 'text_domain' ),
      'view_item'             => __( 'Ver Programa', 'text_domain' ),
      'view_items'            => __( 'Ver Programas', 'text_domain' ),
      'search_items'          => __( 'Buscar Programas', 'text_domain' ),
      'not_found'             => __( 'No encontrado', 'text_domain' ),
      'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
      'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
      'set_featured_image'    => __( 'Poner imagen destacada', 'text_domain' ),
      'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
      'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
      'insert_into_item'      => __( 'Añadir a Programa', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Subido a esta Programa', 'text_domain' ),
      'items_list'            => __( 'Lista de Programas', 'text_domain' ),
      'items_list_navigation' => __( 'Navegar lista de Programas', 'text_domain' ),
      'filter_items_list'     => __( 'Filtrar lista de Programas', 'text_domain' ),
    );
    $args = array(
      'label'                 => __( 'Programa Windows', 'text_domain' ),
      'description'           => __( 'Programas de Windows', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom_fields', ),
      'taxonomies'            => array( 'software' ),
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
    register_post_type( 'windows_post_type', $args );
  }
  add_action( 'init', 'windows_post_type', 0 );
  
    // MacOS Post Type
  function mac_post_type() {
    $labels = array(
      'name'                  => _x( 'Programas MacOS', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Programa MacOS', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'MacOS', 'text_domain' ),
      'name_admin_bar'        => __( 'MacOS', 'text_domain' ),
      'archives'              => __( 'Programas', 'text_domain' ),
      'attributes'            => __( 'Atributos de Programas', 'text_domain' ),
      'parent_item_colon'     => __( 'Elemento padre:', 'text_domain' ),
      'all_items'             => __( 'Todas las Programas', 'text_domain' ),
      'add_new_item'          => __( 'Añadir nuevo Programa', 'text_domain' ),
      'add_new'               => __( 'Añadir nuevo Programa', 'text_domain' ),
      'new_item'              => __( 'Nueva Programa', 'text_domain' ),
      'edit_item'             => __( 'Editar Programa', 'text_domain' ),
      'update_item'           => __( 'Actualizar Programa', 'text_domain' ),
      'view_item'             => __( 'Ver Programa', 'text_domain' ),
      'view_items'            => __( 'Ver Programas', 'text_domain' ),
      'search_items'          => __( 'Buscar Programas', 'text_domain' ),
      'not_found'             => __( 'No encontrado', 'text_domain' ),
      'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
      'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
      'set_featured_image'    => __( 'Poner imagen destacada', 'text_domain' ),
      'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
      'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
      'insert_into_item'      => __( 'Añadir a Programa', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Subido a esta Programa', 'text_domain' ),
      'items_list'            => __( 'Lista de Programas', 'text_domain' ),
      'items_list_navigation' => __( 'Navegar lista de Programas', 'text_domain' ),
      'filter_items_list'     => __( 'Filtrar lista de Programas', 'text_domain' ),
    );
    $args = array(
      'label'                 => __( 'Programa MacOS', 'text_domain' ),
      'description'           => __( 'Programas de MacOS', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom_fields', ),
      'taxonomies'            => array( 'software' ),
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
    register_post_type( 'mac_post_type', $args );
  }
  add_action( 'init', 'mac_post_type', 0 );
?>
