<?php get_header(); ?>

<div class="content-wrapper dark introduction">
  <div class="content">
    <h1 class="logo-awit"><span class="emphasis">Akron</span> Women in Tech</h1>
  </div>
</div>

<div class="content-wrapper">
  <div class="content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
    
  </div>
</div>

<?php get_footer(); ?>