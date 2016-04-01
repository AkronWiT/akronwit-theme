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

  <script type="text/javascript">
      function _gaLt(event) {

          /* If GA is blocked or not loaded then don't track */
          if (!ga.hasOwnProperty("loaded") || ga.loaded != true) {
              return;
          }

          var el = event.srcElement || event.target;

          /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
          while (el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)) {
              el = el.parentNode;
          }

          /* if a link has been clicked */
          if (el && el.href) {

              var link = el.href;

              /* Only if it is an external link */
              if (link.indexOf(location.host) == -1 && !link.match(/^javascript\:/i)) {
                  /* Is target set and not _(self|parent|top)? */
                  var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;

                  var hbrun = false; // tracker has not yet run

                  /* HitCallback to open link in same window after tracker */
                  var hitBack = function() {
                      /* run once only */
                      if (hbrun) return;
                      hbrun = true;
                      window.location.href = link;
                  };

                  /* If target opens a new window then just track */
                  if (el.target && !el.target.match(/^_(self|parent|top)$/i)) {
                      ga(
                          "send", "event", "Outgoing Links", link,
                          document.location.pathname + document.location.search
                      );
                  } else {
                      /* send event with callback */
                      ga(
                          "send", "event", "Outgoing Links", link,
                          document.location.pathname + document.location.search, {
                              "hitCallback": hitBack
                          }
                      );

                      /* Run hitCallback if GA takes too long */
                      setTimeout(hitBack, 1000);

                      /* Prevent standard click */
                      event.preventDefault ? event.preventDefault() : event.returnValue = !1;
                  }
              }

          }
      }

      /* Attach the event to all clicks in the document after page has loaded */
      var w = window;
      w.addEventListener ? w.addEventListener("load", function() {
          document.body.addEventListener("click", _gaLt, !1)
      }, !1) : w.attachEvent && w.attachEvent("onload", function() {
          document.body.attachEvent("onclick", _gaLt)
      });
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
