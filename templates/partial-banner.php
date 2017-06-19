<section class="Banner">

    <!-- Swiper -->
    <div class="swiper-container swiper-banner">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('banner') ):
                while ( have_rows('banner') ) : the_row();
                $bannerArr = get_sub_field('banner_image');
            ?>
                <div class="swiper-slide">
                    <a href="<?php the_sub_field('link') ?>">
                    <img src="<?php echo $bannerArr['url']; ?>" alt="<?php echo $bannerArr['alt']; ?>" title="<?php echo $bannerArr['title']; ?>">
                    </a>
                </div>
            <?php
                endwhile;
            else :
                 while ( have_rows('default_banners', 'option') ) : the_row();
                $defaultbannerArr = get_sub_field('banner_image');
            ?>
                    <div class="swiper-slide">
                        <a href="<?php the_sub_field('link') ?>">
                        <img src="<?php echo $defaultbannerArr['url']; ?>" alt="<?php echo $defaultbannerArr['alt']; ?>" title="<?php echo $defaultbannerArr['title']; ?>">
                        </a>
                    </div>
            <?php
                 endwhile;
            endif;
            ?>

        </div>
    </div>

</section>