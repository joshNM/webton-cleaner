<?php get_template_part('templates/partial', 'banner'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="Single-item island">
  <div class="container">
    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</div>
<?php endwhile; ?>
<?php get_template_part('templates/partial', 'social'); ?>
<?php get_template_part('templates/partial', 'contact'); ?>