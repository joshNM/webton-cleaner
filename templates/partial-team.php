<section class="Team xl-island">
     <img class="team-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-overlay.png">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <?php $teamImg = get_field('image', 'option') ?>
                <img data-aos="fade-right" data-aos-duration="1000" class="team-img" src="<?php echo $teamImg['url'] ?>" alt="<?php echo $teamImg['alt']; ?>" title="<?php echo $teamImg['title']; ?>">

            </div>
            <div class="col-sm-12 col-md-6 team-info" data-aos="fade-up" data-aos-duration="1000">
                <?php the_field('content', 'option') ?>
            </div>
        </div>
    </div>
</section>