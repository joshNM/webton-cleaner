<div class="Intro xl-island">
    <div class="container">
        <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>