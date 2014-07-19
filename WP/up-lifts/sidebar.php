<?php
/**
 * The Sidebar template for our theme
 *
 *
 * @package WordPress
 * @subpackage Uplifts
 * @author EasynFast.net
 */
?>

<?php if (is_active_sidebar('uplifts-sidebar-1')) : ?>
    <div class="signup-wrapper">
        <div>
            <?php dynamic_sidebar(''); ?>  
        </div>
        <div class="clear"></div>
    </div>
    <div class="template-2-3-wrapper">
        <?php dynamic_sidebar('uplifts-sidebar-1'); ?>
    </div><!-- #secondary -->
    <div class="clear"></div>
    <?php dynamic_sidebar('uplifts-sidebar-2'); ?>
<?php endif; ?>