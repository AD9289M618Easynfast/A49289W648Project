<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" type="image/png" href="http://youtubevirals.com/wp-content/uploads/2014/04/youtubevirals_favicon.png"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <script language="javascript" type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/testimonials.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49680959-1', 'youtubevirals.com');
  ga('send', 'pageview');

</script>

    </head>

    <body <?php body_class(); ?>>
        <div class="wrappp">
        <div class="header">
            <div class="head">
                <div class="logo"><a href="#"><img src="http://youtubevirals.com/wp-content/uploads/2014/04/logo1.png" alt="" /></a></div>
                <div class="srch">
                    <input type="text"  />
                    <a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/images/btn.png" alt="" /></a>
                </div>
                <!--
                <div class="nav">
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">FAQS</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>-->
                <?php wp_nav_menu(array("theme_location"=>"primary","menu"=>"main_nav", "container_class"=>"cssmenu","container"=>"div")); ?>
            </div><div class="clear"></div>
            <?php if(is_front_page()) { 
if ( function_exists( 'soliloquy' ) ) { soliloquy( 'main-slider', 'slug' ); }
?>
<!--            <div class="banner">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/banner.png" alt="" />
                <div class="clear"></div>
            </div>-->
            <?php } ?>

            <div class="clear"></div>

