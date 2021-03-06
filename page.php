<?php get_header(); ?>

<main id="mastwrapper">
  <div class="container">

    <h1 class="titulo-os">
      <?php the_title(); ?>
      <?php
        $cat = strtolower(get_the_title());
        $pagina = $cat;
        switch($cat) {
          case "android":
            $pagina = $cat;
            $taxonomia = "apps";
            break;
          case "ios":
            $pagina = $cat;
            $taxonomia = "apps";
            $cat = "apple";
            break;
          case "gnu/linux":
            $cat = "linux";
            $pagina = $cat;
            $taxonomia = "software";
            break;
          case "mac os":
            $pagina = "mac";
            $cat = "apple";
            $taxonomia = "software";
            break;
          case "windows":
            $taxonomia = "software";
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
          'taxonomy' => $taxonomia,
          'field' => 'slug'
        );

        $categorias = get_categories( $args );
        foreach ( $categorias as $categoria ) {
          $catName = $categoria->name;
          $catSlug = $categoria->slug;
      ?>

          <!-- Comienza loop de programas -->
          <?php
            $args = array(
              'post_type' => $pagina,
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => $taxonomia,
                  'field' => 'slug',
                  'terms' => $catSlug,
                ),
              ),
            );
            $query = new WP_Query($args);
            $contador = 0;
            if ( have_posts() ) :
            while($query->have_posts()) : $query->the_post();
          ?>

          <!-- Categoría -->
          <h3 class="programas-categoria">
            <?php
              $contador++;
              if ( $contador == 1 )
                echo $catName; ?>
          </h3>
          <!-- Termina categoría -->

          <!-- Programa individual -->
          <div class="programa-contenedor">

            <!-- Logo del programa -->
            <div class="programa-logo col-sm-4 col-md-2">
              <div class="row">
                <?php imagen_destacada(); ?>
              </div>
            </div>
            <!-- Termina logo del programa -->

            <!-- Info del programa -->
            <div class="programa-info col-sm-8 col-md-10">
              <p>
                Nombre: <?php the_title(); ?>
              </p>
              <p>
                Licencia: <?php the_field('licencia'); ?>
              </p>
              <p>
                <?php
                  $url = get_field('sitio_web');
                  if ( $url != "" ) {
                    echo "<a href='$url' target='_blank'>Sitio web</a>";
                  }
                ?>
                <?php
                  $url = get_field('git');
                  $github = "github";
                  $gitlab = "gitlab";

                  if ( $url != "" ) {
                    if ( strpos($url, $github) !== false ) {
                      echo "<a href='$url' class='fa fa-github' target='_blank'></a>";
                    } else if ( strpos($url, $gitlab) !== false ) {
                      echo "<a href='$url' class='fa fa-gitlab' target='_blank'></a>";
                    } else {
                      echo "<a href='$url' class='fa fa-git-square' target='_blank'></a>";
                    }
                  }
                ?>
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
            endif;
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
