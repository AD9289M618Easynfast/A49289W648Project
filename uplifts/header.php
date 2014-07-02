<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php
    global $imagePath;
    global $imageLogoPath;
    ?>>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="header">
                <div class="logo-wrapper">
                    <img alt="logo" src="<?php echo $imageLogoPath ?>logo.png" width="181" height="62"/>
                    <h1 class="title"><img src="<?php echo $imagePath ?>title-head.png" alt="title" width="421" height="47"/></h1>
                </div>
                <div class="clear"></div>
                <div class="banner-wrapper">
                    <div class="slogan-holder">
                        <h2>Be 2 Inches Taller For The Rest Of Your Life</h2>
                        <h3>Add Height & Elevate Your Confidence To A Whole New Level</h3>
                    </div>
                    <img class="floating-offer" src="<?php echo $imagePath ?>limited-act-now.png" alt="limited offer, act now" width="153" height="120"/>
                    <?php wp_nav_menu(array('menu' => 'main-nav', 'menu_class' => 'main-nav', 'container' => '')); ?>
                </div>