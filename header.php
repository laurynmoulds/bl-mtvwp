<?php
/**
 * The header template file.
 * @package PaperCuts
 * @since PaperCuts 1.0.0
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $papercuts_options_db; ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" /> 
  <meta name="viewport" content="width=device-width" />  
  <title><?php wp_title( '|', true, 'right' ); ?></title>  
<?php if ($papercuts_options_db['papercuts_favicon_url'] != ''){ ?>
  <link rel="shortcut icon" href="<?php echo esc_url($papercuts_options_db['papercuts_favicon_url']); ?>" />
<?php } ?>
<?php wp_head(); ?>  
</head>
 
<body <?php body_class(); ?> id="wrapper">
  <div class="header row">
    <div class="container">
    <!-- Top menu, phone # and hours -->
      <div class="top-nav">
        <?php if ( has_nav_menu( 'top-navigation' ) ) { wp_nav_menu( array( 'menu_id'=>'top-nav', 'theme_location'=>'top-navigation', 'container_class'=>'col-lg-7 col-md-7 col-sm-7 col-xs-7' ) ); } ?>
        <div class="phone-hours col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <h4><a href="tel:14062954109">1.406.295.4109</a></h4>
          <h5>9am-5pm M-F Mountain Time</h5>
        </div><!-- end phone-hours-->
      </div> <!-- end top-nav -->

    <div class="logo-container col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <?php if ( $papercuts_options_db['papercuts_logo_url'] == '' ) { ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
        <?php } else { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="header-logo" src="<?php echo esc_url($papercuts_options_db['papercuts_logo_url']); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
        <?php } ?>
    </div>
      
    <div class="header-message col-lg-5 col-md-5 col-sm-5 col-xs-12">
      <h3>Free Shipping on Orders Over $99!*</h3>
      <h5>*On Parts Orders in the Continental U.S. Only.</h5>
    </div><!-- end col-lg-4 -->

    <div class="cart-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
      
      <div class="cart-wrapper">
        <p>
          Your Cart <i class="glyphicon glyphicon-play"></i> 
          <span class="items">3 Items</span>: 
          <span class="total"><b>$62.00</b></span>
          <span class="cart"></span>
        </p>
      </div> <!-- end cart-container-->

      <div class="header-search">
        <?php if ( $papercuts_options_db['papercuts_display_search_form'] != 'Hide' && !is_page_template('template-landing-page.php') ) { 
          get_search_form();
        } ?>
      </div>
    </div> <!-- end container-->
  </div> <!-- end row-->

  <div class="row">
    <div class="container">
      <div class="nav-wrapper">
        <nav id="site-navigation" class="navbar navbar-default main-navigation" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <?php
            wp_nav_menu( array(
              'theme_location'    =>'main-navigation',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse sidebar-offcanvas',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
        </nav>
                <!-- #site-navigation --> </div>
      <?php //wp_nav_menu( array( 'menu_id'=>'nav',  ) ); ?>
    </div> <!-- end container-->
  </div> <!-- end row-->

  <div class="container">
    <div id="main-content">
    <div id="content">
    
    <?php if ( is_home() || is_front_page() ) { ?>
      <?php if ( get_header_image() != '' && $papercuts_options_db['papercuts_display_header_image'] != 'Everywhere except Homepage' ) { ?>
        <div class="header-image-wrapper"><div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div></div>
      <?php 
        }  
      } else { ?>
      <?php if ( get_header_image() != '' && $papercuts_options_db['papercuts_display_header_image'] != 'Only on Homepage' ) { ?>
          <div class="header-image-wrapper"><div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div></div>
      <?php } 
      } ?> 