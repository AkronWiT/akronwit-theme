<?php get_header(); ?>

<div class="content-wrapper">
  <div class="content">

  <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>

  </div>
</div>

<?php get_footer(); ?>
