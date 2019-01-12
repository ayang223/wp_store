<div class='container'>
  <!-- Logo -->
  <!-- <header class ='banner-img'>
    <a class="header" href="<?php echo home_url(); ?>">
      <img id ='header-img' src ='<?php bloginfo('template_directory'); ?>/img/ada-logo2.png'/>
    </a> -->
    <!-- mobile view -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class = container-fluid>
        <div class='navbar-header'>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!-- navbar content -->
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav mx-auto nav-fill w-100">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <a class="header" href="<?php echo home_url(); ?>">
        <img id ='header-img' src ='<?php bloginfo('template_directory'); ?>/img/ada-logo2.png'/>
      </a>

  </header>
</div>
