<?php
/*
* Template Name: FAQ Page
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<main>
  <div class="container mtb-25">
    <!-- <?php the_content(); ?> -->
    <h2>Frequently Asked Questions</h2>
    <hr>
    <h6 class="faq-subheader">What is microblading?</h6>
    <p class="faq-p">
      Microblading is a form of semi permanent makeup, also referred to as cosmetic tattooing, micro-pigmentation, eyebrow embroidery, feather brows or 3D brows.  It is the procedure of placing colour into the dermal layer of the skin. Pigment is implanted using a pen-like device with a disposable microblade attached, to stroke very thin lines of pigment into the skin to mimic hair where it is lacking in eyebrows or scalp. The result are the most natural looking hair-like strokes, regardless of the amount of hair present. This lasts up to 2 years. 
    </p>
    <h6 class="faq-subheader">What is ombre/powder</h6>
    <p class="faq-p">
      An ombre/powder brow is a form of semi permanent makeup that gives a similar effect to wearing makeup on your eyebrows. The procedure is performed using a micro-pigmentation machine. The results tend to last longer than microblading as the pigment is inserted deeper than the manual method of microblading. This lasts up to 3 years.
    </p>
    <h6 class="faq-subheader">What is microshading/combo brows?</h6>
    <p class="faq-p">
      An ombre/powder brow is a form of semi permanent makeup that gives a similar effect to wearing makeup on your eyebrows. The procedure is performed using a micro-pigmentation machine. The results tend to last longer than microblading as the pigment is inserted deeper than the manual method of microblading. This lasts up to 3 years.
    </p>
    <h6 class="faq-subheader">Am I a good candidate for permanent makeup/microblading?</h6>
    <p class="faq-p">
      You may NOT be a good candidate for permanent makeup/microblading if :
    </p>
    <ul>
      <li class="faq-li">Taking Isoretinoin (Accutane)</li>
      <li class="faq-li">Under the age of 18</li>
      <li class="faq-li">Pregant or Nursing</li>
      <li class="faq-li">Tendency to Keloid scar</li>
      <li class="faq-li">Botox in the brow area which has altered the placement of your brows (Please wait 2 months for the effects to wear off)</li>
      <li class="faq-li">You generaelly don't heal well and develop infections easily</li>
      <li class="faq-li">Serious diseases that can affect your body's healing process such as cancer or autoimmune disorders (Please consult with your physician)</li>
      <li class="faq-li">Bleeding Disorders (please consult with your physician)</li>
    </ul>
    <p class ="faq-p">
      If you are taking any medications that contain blood thinners or affect your body’s ability to heal, please consult with your physician with regards to getting a tattoo. 
    </p>
    <h6 class="faq-subheader">Is the procedure painful?</h6>
    <p class="faq-p">
      Everyone responds differently to anesthetic; depending on the client, the feeling of the procedure has been compared to threading or waxing, while others report feeling barely any pain at all. I use two types of very effective topical anesthetic. We always do our best to make sure you are comfortable. Topical anesthetics used may contain lidocaine, prilocaine, benzocaine, tetracaine and epinephrine. After the procedure, redness and slight swelling in the area is normal.  Clients describe the area feeling similar to a light sunburn. Clients can take Tylenol but not aspirin or ibuprofen.
    </p>
    <h6 class="faq-subheader">How long will the appointment take?  Will I need a consultation?</h6>
    <p class="faq-p">
      Consultation is generally on the same day as the procedure. 1 hour of consultation and brow perfecting and 1 hour of the initial procedure. It will be a total of 2-3 hours for the entire appointment depending on your desired shape and thickness.
    </p>
    <h6 class="faq-subheader">What pigments are used?</h6>
    <p class="faq-p">
      The pigments used in cosmetic tattooing come in a variety of colors that are specially formulated. I use iron oxide pigments; these pigments fade over time as your body will naturally absorb it. They are considered the safest semi-permanent pigments to use for skin.
    </p>
    <h6 class="faq-subheader">How do I know the equipment is clean and sterile?</h6>
    <p class="faq-p">
      My needles are sealed and packaged and opened right before starting the procedure. They are only used for one procedure and then safely discarded. My trays, beds, and other instruments are sterilized before and after every procedure.   
    </p>
    <h6 class="faq-subheader">Are you able to touch up another artist’s work?</h6>
    <p class="faq-p">
      I am able to touch up another artist’s work, but unfortunately it will be full price as the original brow was not done by me and may be even more difficult to correct.
    </p>
    <h6 class="faq-subheader">What is the aftercare process?</h6>
    <p class="faq-p">
      Please refer to my prep and aftercare page. 
    ​  If you still have more questions or inquiries, feel free to email me at adashum.artistry@gmail.com or text me at 778-233-3682!
      (No phone calls please)
    </p>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
