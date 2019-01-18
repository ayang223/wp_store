<?php
/*
* Template Name: Rates Page
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<main>
  <div class="container mtb-15">
    <!-- <div class="panel-heading text-center">
      <h1>Rates</h1>
    </div> -->
    <br />
    <h2>Microblading</h2>
    <p>
      350
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Ombre/Powder</h2>
    <p>
      400
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Combo Brows</h2>
    <p>
      450
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Colour correction</h2>
    <p>
      100
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <p>
      All procedures includes free touch up within 6-8 weeks of initial appointment.
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <br />
    <h2>Touch Up</h2>
    <hr class="wp-block-separator is-style-wide"/>
    <p>
      150 Within 3-6 months
    </p>
    <p>
      200 Within 6-12 months
    </p>
    <p>
      250 Within 1-2 years
    </p>
    <p>
      Full Price After 2 years
    </p>
    <?php the_content(); ?>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
