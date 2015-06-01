<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="content-wrapper dark introduction">
  <div class="content">
    <p>Hello, we are </p>
    <h1 class="logo-awit"><span class="emphasis">Akron</span> Women in Tech</h1>
    <p>Women learning code</p>
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
    <img src="<?php bloginfo( 'template_url' ); ?>/img/photo-what_we_do.jpg" alt="Photo of coffee and cookies" class="photo" />
  </div>
</div>

<div class="content-wrapper dark group-counts">
  <div class="content">
    <h2 class="title visually-hidden">Counts</h2>
    <p class="count"><span class="number">34</span> Members</p>
    <p class="count is-last"><span class="number">1</span> Meetup</p>
  </div>
</div>

<div class="content-wrapper our-sponsors">
  <div class="content">
    <h2 class="title">Our Sponsors</h2>
    <div class="logo-wrapper">
      <a href="http://osctechlab.com" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-osc_tech_lab.png" alt=" OSC Tech Lab Logo" class="logo logo-osc-tech-lab" /></a>
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

<div class="content-wrapper dark content-contact-us">
  <div class="content">
    <h2 class="title visually-hidden">Contact Us</h2>
    <?php echo do_shortcode( '[contact-form-7 title="Contact Us"]' ); ?>
  </div>
</div>


<script>

//  $.ajax({
//    url: 'http://api.meetup.com/topics.json/?callback=gotIt&page=1&key=ABDE12456AB2324445',
//    url: 'https://api.meetup.com/2/members?&sign=true&photo-host=public&group_urlname=Akron-Women-In-Tech&page=20',
//    dataType: 'json',
//    success: function(data) {      
//      //console.log(data.meta.total_count);
//      console.log(data);
//    },
//    error: function() {
//      return false;
//    }
//  });

</script>

<?php get_footer(); ?>