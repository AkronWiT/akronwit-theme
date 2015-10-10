<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="//use.typekit.net/hne7ced.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="<?php bloginfo('template_url')?>/assets/javascript/script.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-64003940-1', 'auto');
    ga('send', 'pageview');
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="content-wrapper navigation">
  <div class="content">

    <h1 class="logo-text"><a href="/">AkronWiT</a></h1>

    <?php wp_nav_menu(array('menu' => 'main', 'menu_class' => 'menu-items')); ?>

  </div>
</div>
