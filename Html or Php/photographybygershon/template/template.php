<?php
$title = "Home";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include './template/header.php';
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h1></h1>
</div>
<?php
include 'template/footer.php';

