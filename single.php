<?php get_header(); ?>

<div class="content-wrapper">
  <div class="content">

    <h2><?php the_title(); ?></h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
