<?php
/*
 * Template Name: Checkout Puamax 
 */
global $imagePath;
include 'checkout-template-field.php';
global $template1;
global $template2;
get_header("order");
?>
<div class="content-wrap">
    <div class="content-wrap-left">
        <?php echo $template1; ?>
    </div>
    <div class="content-wrap-right">
        <?php echo $template2; ?>
    </div>
</div>
<?php
get_footer("order");
?>