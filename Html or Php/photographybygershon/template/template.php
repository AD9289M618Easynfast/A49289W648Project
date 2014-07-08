<?php
$title = "Home";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include './template/header.php';
?>
<div class="<?php echo $sectionWrapper; ?>">
</div>
<?php
include 'template/footer.php';

