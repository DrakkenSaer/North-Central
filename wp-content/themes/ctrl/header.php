<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
<title><?php global $page, $paged;
  wp_title( '|', true, 'right' );
  bloginfo( 'name' );
  $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | ". $site_description;?>
</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>
 <!--[if lt IE 8]>
  <p style="background:#000; color:#fff; font-size:17px;">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="container-fluid nopad">
    <header id="hero" class="clearfix col-xs-12 buffer-padding-10" style="background:url(/wp-content/uploads/2016/07/hero-green.jpg) 50% 50% no-repeat; background-size:cover;">
      <div class="col-md-3 col-xs-12 logo text-center">
        <div class="buffer-margin-40">
          <a href="<?php bloginfo('wpurl');?>" class="text-dark-blue">
            <strong class="bold up buffer-padding-5">North Central</strong>
            <em class="bold up">Pharmacy</em>
          </a>
        </div>
      </div>
  
      <div class="col-md-9 col-xs-12 tools">
        <div class="social">
          <?php $sms = get_field('social_media_profiles', 'option'); foreach ($sms as $sm) { ?>
            <a href="<?php echo $sm['url']; ?>"><span class="fa <?php echo $sm['icon']; ?>"></span></a>
          <?php } ?>
        </div>
        <div class="hours">
          <a href="tel:972-540-9900">(972) 540-9900</a>
          <a href="#">Directions</a>
          <a href="#">Hours</a>
        </div>
        <nav>
          <?php
            $args = array(
              'theme_location' => 'header',
              'menu_class' => 'nav nav-pills up bold kern'
            );
  
            wp_nav_menu($args); 
          ?>
        </nav>
      </div>
  
      <div class="clearfix"></div>
  
      <div class="col-md-6 hero-intro">
        <h1 class="h1 title">We are a first-name basis type of pharmacy.</h1>
        <p>And now offering the newest pharmacy technology in the heart of McKinney, Texas.</p>
      </div>
    </header>
    <div id="navbar" class="col-xs-12 buffer-margin-50 no-margin-top">
      <div class="page-stock" style="background:url(/wp-content/uploads/2016/07/mortar-1.png) bottom right no-repeat; background-size:contain;"></div>
      <div class="col-md-6 col-xs-6">
        <h2 class="text-white buffer-padding-25">Locally owned & operated and proud to be part of your health management team</h2>
      </div>
    </div>
  </div>