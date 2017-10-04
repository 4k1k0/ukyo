<?php
  
  // Taxonomía para aplicaciones móviles
  function apps_taxonomy() {
  	$labels = array(
  		'name'                       => _x( 'Categoría Apps', 'Taxonomy General Name', 'text_domain' ),
  		'singular_name'              => _x( 'Apps', 'Taxonomy Singular Name', 'text_domain' ),
  		'menu_name'                  => __( 'Categoría Apps', 'text_domain' ),
  		'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
  		'parent_item'                => __( 'Elemento padre', 'text_domain' ),
  		'parent_item_colon'          => __( 'Elemento padre:', 'text_domain' ),
  		'new_item_name'              => __( 'Nombre de nueva app', 'text_domain' ),
  		'add_new_item'               => __( 'Agregar nueva categoría', 'text_domain' ),
  		'edit_item'                  => __( 'Editar app', 'text_domain' ),
  		'update_item'                => __( 'Actualizar app', 'text_domain' ),
  		'view_item'                  => __( 'Ver app', 'text_domain' ),
  		'separate_items_with_commas' => __( 'Separar elementos con comas', 'text_domain' ),
  		'add_or_remove_items'        => __( 'Agregar o eliminar elementos', 'text_domain' ),
  		'choose_from_most_used'      => __( 'Elegir de más utilizados', 'text_domain' ),
  		'popular_items'              => __( 'Elementos populares', 'text_domain' ),
  		'search_items'               => __( 'Buscar apps', 'text_domain' ),
  		'not_found'                  => __( 'No encontrada', 'text_domain' ),
  		'no_terms'                   => __( 'No hay apps', 'text_domain' ),
  		'items_list'                 => __( 'Lista de apps', 'text_domain' ),
  		'items_list_navigation'      => __( 'Navegación de lista de apps', 'text_domain' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => true,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => true,
  		'show_in_rest'               => true,
  	);
  	register_taxonomy( 'apps', array( 'android_post_type', 'ios_post_type' ), $args );
  }
  
  add_action( 'init', 'apps_taxonomy', 0 );
  
  /*
  // Taxonomía para software de escritorio
  function software_taxonomy() {
  	$labels = array(
  		'name'                       => _x( 'Categoría Software', 'Taxonomy General Name', 'text_domain' ),
  		'singular_name'              => _x( 'Software', 'Taxonomy Singular Name', 'text_domain' ),
  		'menu_name'                  => __( 'Categoría Software', 'text_domain' ),
  		'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
  		'parent_item'                => __( 'Elemento padre', 'text_domain' ),
  		'parent_item_colon'          => __( 'Elemento padre:', 'text_domain' ),
  		'new_item_name'              => __( 'Nombre de nueva software', 'text_domain' ),
  		'add_new_item'               => __( 'Agregar nueva categoría', 'text_domain' ),
  		'edit_item'                  => __( 'Editar software', 'text_domain' ),
  		'update_item'                => __( 'Actualizar software', 'text_domain' ),
  		'view_item'                  => __( 'Ver software', 'text_domain' ),
  		'separate_items_with_commas' => __( 'Separar elementos con comas', 'text_domain' ),
  		'add_or_remove_items'        => __( 'Agregar o eliminar elementos', 'text_domain' ),
  		'choose_from_most_used'      => __( 'Elegir de más utilizados', 'text_domain' ),
  		'popular_items'              => __( 'Elementos populares', 'text_domain' ),
  		'search_items'               => __( 'Buscar software', 'text_domain' ),
  		'not_found'                  => __( 'No encontrado', 'text_domain' ),
  		'no_terms'                   => __( 'No hay software', 'text_domain' ),
  		'items_list'                 => __( 'Lista de software', 'text_domain' ),
  		'items_list_navigation'      => __( 'Navegación de lista de software', 'text_domain' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => true,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => true,
  		'show_in_rest'               => true,
  	);
  	register_taxonomy( 'apps', array( '_post_type', '_post_type', '_post_type' ), $args );
  }
  
  add_action( 'init', 'software_taxonomy', 0 );
  */
?>