<section class="Social xl-island">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                <?php require_once(get_template_directory().'/facebook.php'); ?>
                <?php  
                    for ($i=0; $i < 10; $i++) :
                        if ($feed['data'][$i]['message']) :
                            echo $feed['data'][$i]['message'];
                            echo '<br><br>';
                            break;
                            // return;
                        endif;
                    endfor;
                ?>
            </div>
            <div class="col-sm-4 col-md-4">
                <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                <?php get_template_part('templates/partial', 'twitter'); ?>
            </div>
            <div class="col-sm-4 col-md-4">
                <div><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
                <?php $news = new WP_Query(['post_type' => 'post']); ?>
                <?php while($news->have_posts()) : $news->the_post(); ?>
                    <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                    <?php break; ?>
                <?php endwhile; ?>
    
            </div>
        </div>
    </div>
</section>