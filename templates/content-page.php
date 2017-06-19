<?php while (have_posts()) : the_post(); ?>
<div class="l-island text-area-cms">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>
                    <div id="page-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-page' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
            <div class="col-md-9">
                 <?php the_content(); ?>
            </div>
        </div>
       
    </div>
</div>
<?php endwhile; ?>

