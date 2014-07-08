<?php
$title = "Home";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include './template/header.php';
?>
<div class="<?php echo $sectionWrapper; ?>">
    <ul class="home-slider">
        <li>
            <img src="images/slider/slide1.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide2.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide3.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide4.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide5.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide6.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide7.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide8.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide9.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
        <li>
            <img src="images/slider/slide10.jpg" width="900" height="600" alt="Slider Images"/>
            <span>text goes here</span>
        </li>
    </ul>
</div>
<?php
include 'template/footer.php';

