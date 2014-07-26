<?php
/* 
 * Template Name: Home Puamax 
 */
global $imagePath;
include 'home-template-field.php';
global $template1;
global $template2;
global $template3;
global $template4;
global $template5;
global $template6;
get_header();
?>
<div id="wrapper-home">
            <div class="header-home">
                <div class="header-content">
                    <?php echo $template1; ?>
                </div>
            </div>
            <div class="content-1">
                <?php echo $template2; ?>
            </div>
            <div class="content-2">
                <?php echo $template3; ?>
            </div>
            <div class="content-3">
                <?php echo $template4; ?>
            </div>
            <div class="content-4">
                <?php echo $template5; ?>
            </div>
            <div class="content-5">
               <?php echo $template6; ?>
            </div>
    
<?php
get_footer();
?>
