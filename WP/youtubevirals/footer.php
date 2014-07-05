<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- widget 1 start -->
<?php if (is_front_page()) { ?>
    <div class="serveic">
        <?php dynamic_sidebar('Customers Love Us 1'); ?>
        <div class="clear"></div>
    </div>
    <!-- widget 1 end -->
    <!-- widget 2 start -->
    <div class="pera">
            <?php dynamic_sidebar('Customers Love Us 2'); ?>    

        <div class="clear"></div>
    </div>
<?php } ?>

<?php if (is_page('views')) { ?>
    <div class="serveic">
        <?php dynamic_sidebar('Services Bottom Area'); ?>    
    </div>
<?php }
?>
    <?php if(!is_front_page()){ ?>
    <div class="pera">
        <?php dynamic_sidebar('How To order'); ?>  
        <div class="clear"></div>
    </div>

<?php } ?>
<!-- widget 2 end -->





<div class="foter">
                <div class="fot-link">
                    <h1>About Us</h1>
                    <?php wp_nav_menu(array('theme_location'  => 'primary','menu'=>'contact us','container' => '')); ?>
                </div>

                <div class="fot-link">
                    <h1>Quick Links</h1>
                    <?php wp_nav_menu(array('theme_location'  => 'primary','menu'=>'quick links','container' => '')); ?>
                </div>

                <div class="fot-link2">
                    <h1>Other Ways To Connect</h1>
                    <ul>
                        <li><a href="#"><img src="http://youtubevirals.com/wp-content/uploads/2014/04/twitter.png " width=75 height=75></a></li>
                        <li><a href="#"><img src="http://youtubevirals.com/wp-content/uploads/2014/04/facebook-logo.png " width=75 height=75></a></li>                
                    </ul>
                    <p>Designed By Awex Soultion</p>
                </div>

                <div class="clear"></div>
            </div>


            <div class="clear"></div>
        </div>

        <div class="fot-bg">
            <div class="fot">
                <p>YouTubeVirals.com © 2014. All Rights Reserved.</p>
                <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/visa.png" alt="" /></a>
            </div>
        </div>
</div>
<?php wp_footer(); ?>
</body>
</html>