<section class="Testimonial xl-island">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-img.png" class="Testimonial__img">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">

            <!-- Swiper -->
            <div class="swiper-container swiper-testimonials">
                <div class="swiper-wrapper">

                    <?php $testimonials = new WP_Query(['post_type' => 'testimonial', 'posts_per_page' => 4]); ?>
                    <?php  while($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <div class="swiper-slide">
                        <p class="Testimonial__text">
                            <?php echo get_the_content(); ?>
                        </p>
                        <span class="Testimonial__author"><?php the_title(); ?></span>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination-testimonial"></div>
            </div>

            </div>
        </div>
    </div>
</section>