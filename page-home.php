<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- SMW adding meetup api counts to webpage -->
<script>
  $.ajax({
	type:'GET',
	url:'https://api.meetup.com/2/groups?offset=0&format=json&group_urlname=Akron-Women-In-Tech&only=members&callback=jQuery1113014036352676339447_1436571834493&photo-host=public&page=20&radius=25.0&fields=&order=id&desc=false&_=1436571834494&sig_id=45621862&sig=193eedf432bb623f60d8a47ece16bca89d4abcdd',
	dataType: 'jsonp',
	success: function(data, status, request){

	  $('#members').html(data.results[0].members);
	}
  });

  $.ajax({
	type:'GET',
	url:'https://api.meetup.com/2/events?offset=0&format=json&limited_events=False&group_urlname=Akron-Women-In-Tech&photo-host=public&page=20&fields=&order=time&status=past%2Cupcoming&desc=false&sig_id=45621862&sig=994063bada2de80f9daac68a008e9ff5899f9b51',
	dataType: 'jsonp',
	success: function(data, status, request){
	  
	  $('#events').html(data.meta.total_count);
	}
  });
</script>

<!-- INTRODUCTION -->
<div id="our-goal-wrapper" class="content-wrapper dark introduction">
  <div class="content">
    <?php if ( get_post_meta($post->ID, 'what_we_do', true) ) { ?>
      <div id="our-goal" class="goal-wrapper"><p class="our-goal"><?php the_field('what_we_do'); ?></p></div>
    <?php } ?>
  </div>
</div>

<div class="content-wrapper what-we-do">
  <div class="content">
    <div class="text">
      <h2 class="title">What We Do</h2>
<?php if ( get_post_meta($post->ID, 'what_we_do', true) ) { ?>
      <p><?php the_field('what_we_do'); ?></p>
<?php } ?>
    </div>
    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/photo-what_we_do.jpg" alt="Photo of coffee and cookies" class="photo" />
  </div>
</div>

<div class="content-wrapper dark group-counts">
  <div class="content">
    <h2 class="title visually-hidden">Counts</h2>
    <p class="count"><span class="number" id="members">194</span> Members</p>
    <p class="count is-last"><span class="number" id="events">20</span> Meetups</p>
  </div>
</div>

<div class="content-wrapper our-sponsors">
  <div class="content">
    <h2 class="title">Our Sponsors</h2>
    <div class="logo-wrapper">
    <?php if( have_rows('sponsor_logos') ): ?>
      <?php while ( have_rows('sponsor_logos') ) : the_row(); ?>
      <a href="<?php the_sub_field('url'); ?>" target="_blank" title="<?php the_sub_field('name'); ?>"><img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?> Logo" class="logo " /></a>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</div>

<div class="content-wrapper dark content-quote">
  <div class="content">
    <h2 class="title visually-hidden">Quote</h2>
    <p class="quote"><span class="symbol">&ldquo;</span>
<?php if ( get_post_meta($post->ID, 'quote', true) ) { ?>
      <?php the_field('quote'); ?>
<?php } ?>
<?php if ( get_post_meta($post->ID, 'quote_source', true) ) { ?>
      <span class="name"><?php the_field('quote_source'); ?></span>
<?php } ?>
    </p>
  </div>
</div>

<div class="content-wrapper content-connect">
  <div class="content">
    <h2 class="title">Connect</h2>
    <ul class="list-items">
<?php if ( get_post_meta($post->ID, 'twitter_url', true) ) { ?>
      <li class="item"><a href="<?php the_field('twitter_url'); ?>" target="_blank" class="fa fa-twitter-square"></a></li>
<?php } ?>
<?php if ( get_post_meta($post->ID, 'facebook_url', true) ) { ?>
      <li class="item"><a href="<?php the_field('facebook_url'); ?>" target="_blank" class="fa fa-facebook-square"></a></li>
<?php } ?>
    </ul>
  </div>
</div>

<?php get_footer(); ?>
