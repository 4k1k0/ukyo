<?php get_header(); ?>

<main id="mastwrapper">
  <div class="container">
    
    <h1 class="titulo-os">
      <?php the_title(); ?>
      <?php
        $cat = strtolower(get_the_title());
        $pagina = $cat;
        switch($cat) {
          case "ios":
            $pagina = $cat;
            $cat = "apple";
            break;
          case "gnu/linux":
            $cat = "linux";
            $pagina = $cat;
            break;
          case "mac os":
            $pagina = "mac";
            $cat = "apple";
            break;
        }
        $pagina = $pagina . "_post_type";
        echo "<i class='fa fa-$cat'></i>";
      ?>
    </h1>
    
    <!-- Contenedor de programas -->
    <div class="programas-contenedor">
      
      <!-- Comienza loop de categorías -->
      <?php
        $args = array(
          'orderby' => 'name',
          'parent' => 0,
          'taxonomy' => 'apps',
          'field' => 'slug'
        );
        $categorias = get_categories( $args );
        foreach ( $categorias as $categoria ) {
          $catName = $categoria->name;
          $catId = get_cat_ID( $catName); 
      ?>
      
          <!-- Categoría -->
          <h3 class="programas-categoria">
            <?php echo $catName; ?>
          </h3>
          <!-- Termina categoría -->
          
          <!-- Comienza loop de programas -->  
          <?php
            $args = array(
              'cat' => $catId,
              'post_type' => $pagina,
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC',
            );
            $query = new WP_Query($args);
            while($query->have_posts()) : $query->the_post();
          ?>
          
          <!-- Programa individual -->
          <div class="programa-contenedor">
              
            <!-- Logo del programa -->
            <div class="programa-logo col-md-2">
              <div class="row">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
            <!-- Termina logo del programa -->
            
            <!-- Info del programa -->
            <div class="programa-info col-md-10">
              <p>
                Nombre: <?php the_title(); ?>
              </p>
              <p>
                Licencia: <?php the_field('licencia'); ?>
              </p>
              <p>
                <a href="<?php the_field('sitio_web'); ?>" target="_blank">
                  Sitio web
                </a>
              </p>
              <div class="programa-descripcion">
                <?php the_content(); ?>
              </div>
            </div>
            <!-- Termina info del programa -->
            
          </div>
          <!-- Termina programa individual -->
          
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
          <!-- Termina loop de programas -->
          
      <?php
        }
      ?>
      <!-- Termina loop de categorías -->     
      
    </div>
    <!-- Termina contenedor de programas -->
    
  </div>
</main>

<?php get_footer(); ?>