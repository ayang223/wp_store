<?php
/*
* Template Name: Aftercare Page
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

  <hr>

<main>
  <div class="container mtb-25">
    <!-- <?php the_content(); ?> -->
    <h2 class="ac-header">Preparation :</h2>
    <hr>
    <p class="ac-p">
      Do NOT DRINK ALCOHOL or CAFFEINE before the procedure (at least 24hrs for alcohol)
      <br>
      <br>
      Do NOT TAKE ADVIL or other blood thinners such a Aspirin, Niacin, Vitamin E and/or Ibuprofen unless medically necessary, 48-72 hrs prior to your procedure. Extra strength Tylenol can be taken if you have low pain tolerance.
      <br>
      <br>
      Highly recommended that you avoid sun tanning 30 days before and after your procedure; this will affect the outcome of the healed colour. If you have been in prescription accutane in the past, you MUST wait at least a year before considering this procedure.
      <br>
      <br>
      Botox should be done 1 month before or 2 weeks after the procedure. Do not have any type of facial/peel 2 weeks prior to treatment.
      <br>
      <br>
      Avoid exercising the day of procedure as this will open up the pores. Please note that you will be more sensitive during your menstrual cycle, try not to book your appointment during this time.
      <br>
      <br>
      No waxing, threading or tinting 2 days before. If there are stray hairs, I can remove them.
    </p>
    <h2 class="ac-header">Aftercare : </h2>
    <hr>
    <h6 class="ac-subheader">Day 1</h6>
    <p class="ac-p">
      If your brows are oozing plasma and/or blood after the procedure, take a wet q-tip and gently wipe away the excess every two hours until bedtime. This will prevent a thick scab from forming. When washing your face, avoid washing in the brow area.
      <br>
      <br>
      Avoid the shower head stream from hiting you directly in the face for the first 4-5 days. Gently pat your brows with a clean towel to ensure the tattoo is completely dry.
    </p>
    <h6 class="ac-subheader">Day 2 - 4</h6>
    <p class="ac-p">
      After day 2, there should be no oozing or blood. Keep them clean and dry and allow them to breathe so they can heal.
      <br>
      <br>
      Avoid excessive sweating for the next few days as the skin is still open. (i.e. gym, working out). Once the area has healed over it is fine to resume exercise.
    </p>
    <h6 class="ac-subheader">Day 4 - 6</h6>
    <p class="ac-p">
      The brow area will be dry and start to scab. You may experience itching and flaking. Apply a thin layer of coconut oil, vaseline, vitamin A & D ointments, or grape seed oil as needed to aid with the flaking and itchiness.
      <br>
      <br>
      Do not pick at scabs or peeling skin during this phase.
    </p>
    <h6 class="ac-subheader">Day 6 - 12</h6>
    <p class="ac-p">
      The scabs will begin to flake off exposing a faint tattoo underneath.
      <br>
      <br>
      The tattoo will look foggy and light in colour, some strokes may seem to have disappeared. The sharpness will return gradually as the dead skin slowly sloughs off over the next couple weeks.
    </p>
    <h6 class="ac-subheader">Day 12- 30</h6>
    <p class="ac-p">
      There is generally a very thin layer of dead skin covering the area at this stage, which is contributing to lack of sharpness however this dead skin will continue to flake off over the next couple weeks.
      <br>
      <br>
      The upper layers of the skin heal faster than the layers below.  Although your tattoo might look great at this point, your skin is still healing underneath.
      </p>
    <h6 class="ac-subheader">DO NOT ...</h6>
    <p class="ac-p">
      Pick, scratch, and peel the scabs . Doing so can cause the pigment to be pulled off. Allow the scabs to fall off naturally.
      <br>
      <br>
      Expose your tattoo to sun for at least 30 days. Once your tattoo has healed, you can apply sunscreen to the area when going out in the sun. Constant exposure to the sun can cause the tattoo to fade prematurely.
      <br>
      <br>
      Get water in the area and around the brows. No swimming, saunas or steam rooms for two weeks. You want the area to stay dry.
      <br>
      <br>
      No moisturizers or makeup on the brow area until wounds are scabbed up
      <br>
      <br>
      Do not apply Polysporin, Vaseline or any product containing Lanolin or healing agents.
    </p>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
