<section class="Home-intro l-island">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
              <?php the_field('home_introduction'); ?>
              <a class="special" href="<?php the_permalink(7); ?>">About<br> Us</a>
              <div class="seperator"></div>
            </div>
            <div class="offset-md-1 col-sm-12 col-md-3">
                <?php the_field('home_sidebar'); ?>
            </div>
        </div>
    </div>
</section>

<section class="Home-service-icons l-south-coast">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(38); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_commercial.png" alt="Webton Commercial Service" title="Webton Commercial Service">
                    <h2>Commercial</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(48); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_contract.png" alt="Webton Contract Service" title="Webton Contract Service">
                    <h2>Contract</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(40); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_office.png" alt="Webton Office Service" title="Webton Office Service">
                    <h2>Office</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(42); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_industrial.png" alt="Webton Industrial Service" title="Webton Industrial Service">
                    <h2>Industrial</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">   
                    <a href="<?php the_permalink(44); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_student.png" alt="Webton Student Clean Service" title="Webton Student Clean Service">
                    <h2>Student Clean</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(46); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_builder.png" alt="Webton Builders Clean Service" title="Webton Builders Clean Service">
                    <h2>Builders Clean</h2>
                    </a>    
                </div>
            </div>
        </div>
    </div>
</section>