<?php
/*
* Template Name: contact
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

  <main>
    <div class="container mtb-15">
      <div class="row justify-content-center">
        <div class="col-12 body-main">
          <div class ="pannel">
            <!-- <div class="panel-heading text-center">
              <h1>Contact</h1>
            </div> -->
            <div class="panel-body">
              <div class='div-left'>
                <h2>Ada's Artistry</h2>
                <hr/>
                <p>
                  <a href="https://www.instagram.com/ada.artistry/?hl=en">@ada.artistry </a>
                </p>
                <br>
                <h2>Phone:</h2>
                <hr/>
                <p>
                  778-233-3682
                </p>
                <br>
              </div>
              <div class='div-right'>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
