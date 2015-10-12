<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>

<div class="content-wrapper">
  <div class="content">

    <h2 class="title"><?php the_title(); ?></h2>

    <div class="" style="width: 75%;">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>

    <?php $custom_query = new WP_Query( array('category_name' => 'press') ); while($custom_query->have_posts()) : $custom_query->the_post(); ?>
      <div class="post-wrapper">
    		<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="alignleft">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php } ?>
        <?php the_excerpt(); ?>
      </div>
    <?php endwhile; wp_reset_postdata(); // reset the query ?>

  </div>
</div>

<?php get_footer(); ?>
