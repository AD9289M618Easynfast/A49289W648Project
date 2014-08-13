<?php
/* Template Name: Order */
include 'functions/getPostFields.php';
get_header('content');
get_sidebar('content');
?>
<div>
    <?php include 'form/order-page-form.php'; ?>
</div>
<?php
get_footer('content');
