<section class="Contact l-island">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2>Contact Us</h2>
                <?php if(is_page(15)) : ?>
                    <?php  
                        $contactPG = get_post(15); 
                        $excerpt = $contactPG->post_content;
                    ?>
                    <p><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <?php if(!is_page(15)) : ?>
                    <ul>
                        <li><?php the_field('phone_number', 'option') ?></li>
                        <li><a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></li>
                    </ul>
                <?php endif; ?>
       
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Enquire Online</h2>
                <?php echo do_shortcode('[contact-form-7 id="58" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>  