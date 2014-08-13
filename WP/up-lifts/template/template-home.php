<?php
/* Template Name: Home */

include 'home-template-fields.php';

global $imagePath;
global $template1;
global $template2;
global $template3;
global $template4;
global $template5;
global $template6;

get_header();
?>
<div class="signup-wrapper">
    <!--template 1-->
    <div class="template-1-wrapper">
        <?php echo $template1 ?>
    </div>
    <!--end template 1-->
    <div class="signup-placeholder">
        <!--content for subscription form-->
        <div class="widget-placement">
            <?php dynamic_sidebar('home-widget'); ?>
            <div class="signup-form">
                <div class="signup-header">
                    <img src="<?php echo $imagePath; ?>bg/bg-where-do-you-want-top.png"/>
                </div>
                <div class="signup-center">
                    <?php dynamic_sidebar('signup-widget'); ?>
                </div>
                <div class="signup-footer">
                    <img src="<?php echo $imagePath; ?>bg/bg-where-do-you-want-bottom2.png"/>
                </div>
            </div>
        </div>
        <!-- end content for subscription-->
    </div>
    <div class="clear"></div>
</div>
</div>

<!--template 2 3-->
<div class="template-2-3-wrapper">
    <!--template 2-->
    <div class="template-2-wrapper">
        <?php echo $template2 ?>
    </div>
    <!--end template 2-->

    <!--template 3-->
    <div class="template-3-wrapper">
        <?php echo $template3 ?>
    </div>
    <!--end template 3-->
</div>
<!--end template 2 3-->
<div class="clear"></div>

<!--template 4-->
<div class="template-4-wrapper">
    <?php echo $template4 ?>
</div>
<!--end template 4-->

<!--template 5-->
<div class="template-5-wrapper">
    <?php echo $template5 ?>
</div>
<!--end template 5-->

<!--template 6-->
<div class="template-6-wrapper">
    <?php echo $template6 ?>
</div>
<!--end template 6-->
<?php
get_footer();
