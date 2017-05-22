<?php while (have_posts()) : the_post(); ?>
    <div class="container l-island text-area-cms">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

