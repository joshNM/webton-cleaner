<div class="News-items">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php $articles = new WP_Query(['post_type' => 'project']); ?>
                <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                <article>
                    <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span><?php echo get_the_date(); ?></span>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink() ?>">Read more</a>
                </article>  
                <?php endwhile; ?>
            </div>
            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'sidebar-news' ) ) : ?>
                    <div id="page-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-news' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>