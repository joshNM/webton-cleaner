<section class="Home-intro l-island">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
              <?php the_field('home_introduction'); ?>
              <a href="">About<br> Us</a>
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_commercial.png">
                    <h2>Commercial</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(48); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_contract.png">
                    <h2>Contract</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(40); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_office.png">
                    <h2>Office</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(42); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_industrial.png">
                    <h2>Industrial</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">   
                    <a href="<?php the_permalink(44); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_student.png">
                    <h2>Student Clean</h2>
                    </a>    
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="service-tab" data-aos="fade-up">
                    <a href="<?php the_permalink(46); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_builder.png">
                    <h2>Builders Clean</h2>
                    </a>    
                </div>
            </div>
        </div>
    </div>
</section>