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
        <meta name="keywords" content="youtubevirals, how to get youtube views, youtube views, youtube likes, buy youtube likes, buy youtube views,Buy High Retention YouTube Views, youtube views, buy youtube views, cheap youtube views, buy cheap youtube views, high retention views">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" type="image/png" href="http://youtubevirals.com/wp-content/uploads/2014/04/youtubevirals_favicon.png"/>
        <link rel="stylesheet" type="text/css" href="http://youtubevirals.com/wp-content/themes/youtube2014/zbaoanhle.css"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/testimonials.js"></script>

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-49680959-1', 'youtubevirals.com');
            ga('send', 'pageview');

        </script>

    </head>

    <body <?php body_class(); ?>>

        <!-- begin olark code -->
        <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark || (function(c) {
                var f = window, d = document, l = f.location.protocol == "https:" ? "https:" : "http:", z = c.name, r = "load";
                var nt = function() {
                    f[z] = function() {
                        (a.s = a.s || []).push(arguments)
                    };
                    var a = f[z]._ = {
                    }, q = c.methods.length;
                    while (q--) {
                        (function(n) {
                            f[z][n] = function() {
                                f[z]("call", n, arguments)
                            }
                        })(c.methods[q])
                    }
                    a.l = c.loader;
                    a.i = nt;
                    a.p = {
                        0: +new Date};
                    a.P = function(u) {
                        a.p[u] = new Date - a.p[0]
                    };
                    function s() {
                        a.P(r);
                        f[z](r)
                    }
                    f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
                    var ld = function() {
                        function p(hd) {
                            hd = "head";
                            return["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
                        }
                        var i = "body", m = d[i];
                        if (!m) {
                            return setTimeout(ld, 100)
                        }
                        a.P(1);
                        var j = "appendChild", h = "createElement", k = "src", n = d[h]("div"), v = n[j](d[h](z)), b = d[h]("iframe"), g = "document", e = "domain", o;
                        n.style.display = "none";
                        m.insertBefore(n, m.firstChild).id = z;
                        b.frameBorder = "0";
                        b.id = z + "-loader";
                        if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                            b.src = "javascript:false"
                        }
                        b.allowTransparency = "true";
                        v[j](b);
                        try {
                            b.contentWindow[g].open()
                        } catch (w) {
                            c[e] = d[e];
                            o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                            b[k] = o + "void(0);"
                        }
                        try {
                            var t = b.contentWindow[g];
                            t.write(p());
                            t.close()
                        } catch (x) {
                            b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
                        }
                        a.P(2)
                    };
                    ld()
                };
                nt()
            })({
                loader: "static.olark.com/jsclient/loader0.js", name: "olark", methods: ["configure", "extend", "declare", "identify"]});
            /* custom configuration goes here (www.olark.com/documentation) */
            olark.identify('3882-133-10-7664');/*]]>*/</script><noscript><a href="https://www.olark.com/site/3882-133-10-7664/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
        <!-- end olark code -->
        <div class="wrappp">
            <div class="header">
                <div class="head">
                    <div class="logo"><a href="#"><img src="http://youtubevirals.com/wp-content/uploads/2014/05/logo1_new.png" alt="" /></a></div>
                    <div class="srch">
                        <input type="text"  />
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/images/btn.png" alt="" /></a>
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
                    <?php wp_nav_menu(array("theme_location" => "primary", "menu" => "main_nav", "container_class" => "cssmenu", "container" => "div")); ?>
                </div><div class="clear"></div>
                <?php
                if (is_front_page()) {
                    if (function_exists('soliloquy')) {
                        soliloquy('main-slider', 'slug');
                    }
                    ?>
                    <!--            <div class="banner">
                                    <img src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="" />
                                    <div class="clear"></div>
                                </div>-->
                <?php } ?>

                <div class="clear"></div>

