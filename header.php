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
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>