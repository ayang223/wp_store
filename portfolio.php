<?php
/*
* Template Name: portfolio
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<main>
  <div class="container mtb-15">
    <div class='portfolio-content'>
      <?php the_content(); ?>
    </div>

  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
