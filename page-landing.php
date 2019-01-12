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
    <div class="container-a container mtb-25">
      <br>
      <?php the_content(); ?>
      <br>
    </div>
  </div>

<main>
  <div class="container mtb-25">
  </div>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

</body>
</html>
