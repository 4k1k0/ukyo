<?php get_header(); ?>

<main id="mastwrapper">
  <div class="container">
    
    <h1 class="titulo-os">
      <?php the_title(); ?>
      <?php
        $cat = strtolower(get_the_title());
        switch($cat) {
          case "ios":
            $cat = "apple";
            break;
          case "gnu/linux":
            $cat = "linux";
            break;
          case "mac os":
            $cat = "apple";
            break;
          default:
            break;
        }
        echo "<i class='fa fa-$cat'></i>";
      ?>
    </h1>
    
    <!-- Contenedor de programas -->
    <div id="programas-contenedor">
      
      <!-- Programa individual -->
      <div class="programa-contenedor">
        
        <!-- Logo del programa -->
        <!-- Termina logo del programa -->
        
        <!-- Info del programa -->
        <!-- Termina info del programa -->
        
      </div>
      <!-- Termina programa individual -->
      
    </div>
    <!-- Termina contenedor de programas -->
    
  </div>
</main>

<?php get_footer(); ?>