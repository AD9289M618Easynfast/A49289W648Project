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
        <style>
            #wrapper {
                background-color: #608de0;
                background-image: url("<?php echo $imagePath; ?>bg/bg-content-bottom.png");
                background-position: center bottom;
                background-repeat: repeat-x;
                box-shadow: 0 0 11px black;
                margin: 0 auto;
                min-height: 1500px;
                padding: 35px 0;
                width: 788px;
            }
        </style>
    </head>

    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="header">
                <div class="logo-wrapper">
                    <img alt="logo" src="<?php echo $imageLogoPath ?>logo.png" width="181" height="62"/>
                    <h1 class="title"><img src="<?php echo $imagePath ?>title-head.png" alt="title" width="421" height="47"/></h1>
                </div>
            </div>
            <div id="content">