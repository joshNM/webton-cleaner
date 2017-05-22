<header class="Header">

  <nav class="Main-nav">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <ul class="List List--inline List--margin-right">
            <li><a href="">0113 282 828</a></li>
            <li><a href="">info@webtoncleaningservices.co.uk</a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'List List--inline List--margin-left List--text-right']);
          endif;
          ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- /.Main-nav -->

  <nav class="Secondary-nav island">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.jpg" alt="Webton Cleaners"></a>
        </div>
        <div class="col-sm-9">
          <?php
          if (has_nav_menu('secondary_navigation')) :
            wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'List List--inline List--margin-left']);
          endif;
          ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- /.Secondary-nav -->
    
</header>