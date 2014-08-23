<!DOCTYPE html>
<html>
    <head>
        <title>Mining Journal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <style type="text/css">
            .main-menu a {font-size: 17px\0/;}
            .sidebar-wrapper .tab-navigation a {font-size: 10px\0/;}
        </style>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <header>
                <section class="ad-1-placeholder">
                    <figure>
                        <img src="images/site/ad/ad-1.png" width="728" height="90" alt="advert 1"/>
                    </figure>
                </section>

                <section class="logo-wrapper clearfix">
                    <h1 class="site-title goLeft">
                        <figure>
                            <img src="images/site/logo01.png" width="351" height="91" alt="Mining Journal"/>
                        </figure>
                    </h1>
                    <div class="left-content goRight clearfix">
                        <form id="search-form" class="goRight clearfix">
                            <input type="text" placeholder="Search..." />
                            <input type="submit"/>
                        </form>
                        <div class="social-menu-wrapper goRight clearfix">
                            <ul class="user-menu goRight">
                                <li><a href="#">Subscribe</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                            <ul class="subscribe-menu goRight">
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                            <ul class="social-menu goRight">
                                <li><a href="#" target="_blank" class="icon-linkedin"></a></li>
                                <li><a href="#" target="_blank" class="icon-rss"></a></li>
                                <li><a href="#" target="_blank" class="icon-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!--Main Menu-->
                <section class="main-menu-wrapper clearfix">
                    <ul class="main-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">World</a></li>
                        <li><a href="#">Opinion</a></li>
                        <li><a href="#">Finance/Investment</a></li>
                        <li><a href="#">People</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Focus</a></li>
                        <li><a href="#">Commodities</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Print Edition</a></li>
                    </ul>
                </section><!--Main Menu-->

                <!--Sub Menu of Main Menu-->
                <?php if (!isset($isFront)) : ?>
                    <section class="sub-menu-wrapper clearfix">
                        <ul class="sub-main-menu">
                            <li><a href="#">View from the Wes End</a></li>
                            <li><a href="#">From the Capital</a></li>
                            <li><a href="#">Russo's Rules</a></li>
                            <li><a href="#">Miner's right</a></li>
                            <li><a href="#">Humphreys</a></li>
                            <li><a href="#">MJ comments</a></li>
                            <li><a href="#">Expert views</a></li>
                            <li><a href="#">Reader comments</a></li>
                        </ul>
                    </section>
                <?php endif; ?><!--Sub Menu of Main Menu-->

            </header>
            <section id="content-wrapper">