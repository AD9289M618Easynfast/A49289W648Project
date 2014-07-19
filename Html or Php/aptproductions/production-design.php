<?php
$title = "Production Design";
include './template/header.php';
?>
<ul id="production_slider">
    <li><img src="images/slides/slide1_productiondesign.jpg" width="1000" height="500" alt="" /></li>
    <!--<li><img src="images/slides/slide2_productiondesign.jpg" width="1000" height="500" alt="" /></li>-->
    <li><img src="images/slides/slide3_productiondesign.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide4_productiondesign.jpg" width="1000" height="500" alt="" /></li>
</ul>
<script type="text/javascript">
    $('#production_slider').bxSlider({
        mode: 'fade',
        auto: true,
        autoControls: true
    });
</script>
<?php
include './template/footer.php';

