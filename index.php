<?php get_header(); ?>


<div class="content-wrapper dark introduction">
  <div class="content">
    <h1 class="logo-awit"><span class="emphasis">Akron</span> Women in Tech</h1>
  </div>
</div>

<div class="content-wrapper">
  <div class="content">
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
  <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
  
    <div class="pagination-wrapper">
      <div class="btn-nav next"><?php previous_posts_link( 'Next' ); ?></div>
      <div class="btn-nav previous"><?php next_posts_link( 'Previous' ); ?></div>
    </div>
  
  </div>
</div>

<?php get_footer(); ?>