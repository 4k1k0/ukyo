<?php get_header(); ?>

<?php
  if(have_posts()):
  while(have_posts()):
  the_post();
?>

<main id="mastwrapper">
  <div class="container">
    <article class="articulo-individual">
      <header class="articulo-cabecera">
        <hgroup>
          <h1>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1>
        </hgroup>
      </header>
      <?php
        if ( has_post_thumbnail() ) :
          the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive-thumbnail']);
        endif;
      ?>
      <?php the_content(); ?>
    </article>
  </div>
</main>

<?php
  endwhile;
  endif;
?>

<?php get_footer(); ?>
