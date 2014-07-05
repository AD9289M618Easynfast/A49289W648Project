<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php
    global $imagePath;
    global $imageLogoPath;

    global $theTitle;
    global $theSubTitle;

    global $theColumn1Row1;
    global $theColumn1Row2;
    global $theColumn1Row3;
    global $theColumn2Row1;
    global $theColumn2Row2;
    global $theColumn2Row3;
    global $theColumn3Row1;

    global $theImageLeft;
    global $theImageCenter;
    global $theImageRight;
    global $theImageTop;
    global $theImageBottom;

    global $theImageColumn1;
    global $theImageColumn2;
    global $theImageColumn3;
    global $theImageColumn4;

    global $theContentTop;
    global $theContentBottom;

    global $theContentColumn1;
    global $theContentColumn2;
    global $theContentColumn3;
    global $theContentColumn4;

    global $theContentRow1;
    global $theContentRow2;
    global $theContentRow3;
    global $theContentRow4;
    global $theContentRow5;
    global $theContentRow6;
    global $theContentRow7;
    global $theContentRow8;
    global $theContentRow9;
    global $theContentRow10;
    global $theContentRow11;
    global $templatePath;

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