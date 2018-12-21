<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<!-- add navbar -->
<?php include_once('modules/nav.php'); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">

    </div>
  </div>

<main>
<?php the_title(); ?>
<?php the_content(); ?>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
