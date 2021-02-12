<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

 <!-- Default stylesheets-->
    <link href="<?php echo get_template_directory_uri();?>/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo get_template_directory_uri();?>/css/colors/default.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
          </div>
          
          <?php 
        $args=array(
                     'theme_location'=>'top'  ,
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse',
                       'container_id' => 'custom-collapse',
                       'menu_class' => 'nav navbar-nav navbar-right'
                      );
                       wp_nav_menu( $args);     
                       ?> 

            
        </div>
      </nav>

       <div class="main">
       <?php if(is_home() || is_front_page()){?>
        <section class="module bg-dark-60 shop-page-header" data-background="<?php echo get_template_directory_uri();?>/images/product-page-bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Shop Products</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
          </div>
        </section>
        <?php } ?>