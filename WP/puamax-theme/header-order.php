<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php
    global $imagePath;
    ?>>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title(''); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper-order">
            <div id="container">
                <div class="header-wrap">
                    <div class="header-order">
                        <a href="#" class="site-banner">
                            <img src="<?php echo $imagePath ?>logo.png"  width="226" height="67" />
                        </a>
                        <img  src="<?php echo $imagePath ?>img-head-product.png" class="image-header-product" />
                        <img src="<?php echo $imagePath ?>head-label.png" class="arrow-right" />
                    </div>
                </div>
