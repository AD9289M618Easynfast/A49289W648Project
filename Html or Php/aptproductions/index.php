<?php
$is_front_page = TRUE;
include './template/header.php';
?>
<ul id="index_slider">
    <li>
        <a rel="prettyPhoto[vimeo]" href="http://vimeo.com/100787944?width=600&height=400">
            <img src="images/slides/video-slide.jpg" width="1000" height="500" alt="" />
        </a>
    </li>
    <li><img src="images/slides/slide1.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide2.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide3.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide4.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide5.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide6.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide7.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide8.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide9.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide10.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide11.jpg" width="1000" height="500" alt="" /></li>
    <li><img src="images/slides/slide12.jpg" width="1000" height="500" alt="" /></li>
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
