<?php get_header(); ?>

<?php
  if(have_posts()):
  while(have_posts()):
  the_post();
?>

<a href="<?php the_permalink(); ?>">
  <?php the_title(); ?>
</a>
<?php the_content(); ?>

<?php
  endwhile;
  endif;
?>

<?php get_footer(); ?>
