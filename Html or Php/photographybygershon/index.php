<?php
$title = "The Official Website of Gershon Kelman Pop Photographer";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
$textSlider = " &copy; 2014. All Rights Reserved";

include './template/header.php';
?>
<div class="<?php echo $sectionWrapper; ?>">
    <ul class="home-slider">
        <li>
            <img src="images/slider/slide1.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Solo" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide2.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Space Station 2" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide3.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "The Corner" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide4.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Night Gallery" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide5.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Tonic" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide6.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Rent" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide7.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Lithium" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide8.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Tripping" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide9.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Purple Haze" . "&quot;" . $textSlider; ?></span>
        </li>
        <li>
            <img src="images/slider/slide10.jpg" width="900" height="600" alt="Slider Images"/>
            <span><?php echo "&quot;" . "Lowes" . "&quot;" . $textSlider; ?></span>
        </li>
    </ul>
</div>
<?php
include 'template/footer.php';

