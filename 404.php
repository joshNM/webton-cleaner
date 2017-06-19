<?php get_template_part('templates/partial', 'banner'); ?>
<div class="404 island" data-aos="fade-right" data-aos-duration="1000">
    <div class="container">
         <?php get_template_part('templates/page', 'header'); ?>

        <div class="alert alert-warning">
          <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
        </div>

        <?php get_search_form(); ?>       
    </div>
</div>

