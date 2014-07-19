<!DOCTYPE html>
<html>
    <head>
        <title><?php
            if (isset($title)) {
                echo $title . " | ";
            }
            ?>Apt9Productions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="noindex,nofollow">
        <link type="text/css" rel="stylesheet" href="css/zbaoanhle_style.css"/>
        <link type="text/css" rel="stylesheet" href="css/jquery.bxslider.css"/>
        <link type="text/css" rel="stylesheet" href="css/prettyPhoto.css"/>
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    </head>
    <body>
        <script type="text/javascript" src="http://lib.easynfast.net/enfpreload/enfpreload.min.js"></script>
        <div id="wrapper">
            <div id="header">
                <a href="./">
                    <img src="images/apt9_header.png" alt="atp9_header" width="980" height="164" />
                </a>
                <ul class="social_nav">
                    <li>
                        <a href="http://twitter.com/tastemaker9" target="blank"><img src="images/social_btns_01.png" alt="" width="42" height="40"/></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/apt9productions" target="blank"><img src="images/social_btns_02.png" alt="" width="42" height="40"/></a>
                    </li>
                    <li>
                        <a href="http://instagram.com/tastemaker9" target="blank"><img src="images/social_btns_04.png" alt="" width="42" height="40"/></a>
                    </li>
                    <li>
                        <a href="mailto:Admin@apt9productions.com"><img src="images/social_btns_03.png" alt="" width="42" height="40"/></a>
                    </li>
                </ul>
                <div class="main_nav_wrapper">
                    <ul class="main_nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="company.php">Company</a>
                        </li>
                        <li>
                            <a href="clients.php">Clients</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content_wrapper" <?php
            if (isset($specialFlag)) {
                echo "class='" . str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
            }
            ?>
                 >
                     <?php if (!isset($is_front_page)) { ?>
                    <div class="content_header">
                        <h1 class="<?php echo str_replace(" ", "_", strtolower($title)) . "_header_content"; ?>"><?php echo $title; ?></h1>
                        <div class="line"></div>
                    </div>
                    <?php
                }