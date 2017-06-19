<section class="Clients l-island">
    <div class="container">
        <h2>Clients</h2>

        <div class="swiper-container swiper-clients">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('clients', 'option') ):
                    while ( have_rows('clients', 'option') ) : the_row();
                    $img = get_sub_field('client_logo');
                ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt']; ?>" title="<?php echo $img['title']; ?>">
                    </div>
                <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</section>