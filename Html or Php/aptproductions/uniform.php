<?php
$title = "Uniform";
include './template/header.php';
?>
<ul id="uniform_slider">
    <li><img src="images/slides/slides_uniform1.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slides_uniform2.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slides_uniform3.jpg" width="1000" height="500" alt="" /></li>
    <!--<li><img src="images/slides/slides_uniform4.jpg" width="1000" height="500" alt="" /></li>-->
    <li><img src="images/slides/slides_uniform5.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slides_uniform6.jpg" width="1000" height="500" alt="" /></li>
</ul>
<script type="text/javascript">
    $('#uniform_slider').bxSlider({
        mode: 'fade',
        auto: true,
        autoControls: true
    });
</script>
<?php
include './template/footer.php';

