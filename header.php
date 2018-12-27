<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo WP_THEME_URL; ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo WP_THEME_URL; ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo WP_THEME_URL; ?>/css/revistadr.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Changa One:400,400italic","Bungee Shade:regular:latin,latin-ext","Bungee Hairline:regular:latin,latin-ext"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo WP_THEME_URL; ?>/images/revista-dr-favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo WP_THEME_URL; ?>/images/revista-dr-marca-minimal_1.png" rel="apple-touch-icon">
  <script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-70752209-1'], ['_trackPageview']);(function() {  var ga = document.createElement('script');  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
  <style>
  html:after {
    display: none !important;
  }
  figure.w-richtext-align-fullwidth {
    margin: 30px 0;
  }
  figure figcaption {
    font-size: 12px;
	line-height: 1.4em;
  }
  figure.w-richtext-align-fullwidth figcaption {
    text-align: left;
  }
  blockquote {
  	padding: 0 20px;
  }
  blockquote em:last-child {
	font-size: 75%;
    margin-top: 0.5em;
    line-height: 1.4em;
    display: block;
  }
  iframe {
    border: 0;
  }
</style>
</head>
<body>
  <div class="site-header">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
      <div class="w-container">
        <a href="<?php echo WP_SITE_URL; ?>" class="navbar-brand w-nav-brand">
          <img src="<?php echo WP_THEME_URL; ?>/images/revista-dr-marca-minimal.png" width="100" alt="">
        </a>
        <nav role="navigation" class="w-nav-menu">
          
          <?php
            wp_nav_menu(array(
              'items_wrap' => '%3$s',
              'walker' => new Webflow_Walker(),
              'container' => false,
              'menu_class' => '',
              'theme_location' => 'main-menu',
              'fallback_cb' => false
            ));
          ?>

        </nav>
        <div class="menu-button w-nav-button">
          <div class="menu-button-icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>