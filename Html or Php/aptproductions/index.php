<?php
$is_front_page = TRUE;
include './template/header.php';
?>
<ul id="index_slider">
    <li><img src="images/slides/slide1.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide2.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide3.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide4.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide5.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide6.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide7.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide8.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide9.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide10.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide11.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide12.png" width="1000" height="500" alt="" /></li>
</ul>
<script type="text/javascript">
    $('#index_slider').bxSlider({
        mode: 'fade',
        auto: true,
        autoControls: true
    });
</script>
<?php
include './template/footer.php';
