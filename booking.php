<?php
/*
* Template Name: Booking Page
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


<main>
  <div class="container mtb-15">
    <!-- <div class="panel-heading text-center">
      <h1>Booking</h1>
    </div> -->
    <br>
    <h2>Deposits:</h2>
    <p>
      All appointments require a <strong>NON-REFUNDABLE</strong> $50 deposit towards the full procedure. If you wish to reschedule your appointment, you must notify me 72 hours prior to your initial appointment. Failure to do so will result in the forfeiture of your deposit.
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Cancellation/no shows:</h2>
    <p>
      Cancellations/no shows will result in losing your NON-REFUNDABLE $50 deposit. Please contact me at least 72 hours before your appointment if you’d like to reschedule to avoid forfeiture of your deposit. This is to ensure our time is respected.
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Late:</h2>
    <p>
      If you are more than 15 minutes late we will have to reschedule due to the fact that I have appointments back to back and do not want to rush through appointments.
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <h2>Rescheduling:</h2>
    <p>
      There is a cancellation/rescheduling fee of $50. I am usually very booked so please try to stick to our scheduled appointment or give me a 72 hours notice.
    </p>
    <hr class="wp-block-separator is-style-wide"/>
    <?php the_content(); ?>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
