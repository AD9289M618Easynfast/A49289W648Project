<?php
$title = "Austin In The Dark";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include 'template/header.php';
$imgCopyRight = " - Gershon Kelman © 2014";
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h2 class="portfolio-title"><span>Downtown Austin:</span>In the Dark</h2>

    <ul class="image-gallery">
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-1-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-1.jpg" width="300"  alt="Volunteer<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-2-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-2.jpg" width="300"  alt="Affinity<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-3-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-3.jpg" width="300"  alt="Solo<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-4-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-4.jpg" width="300"  alt="Positive Aura<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-5-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-5.jpg" width="300"  alt="Gyro<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[downtown-austin-in-the-dark]" href="images/portfolio/downtown-austin-in-the-dark/img-6-large.jpg">
                <img src="images/portfolio/downtown-austin-in-the-dark/img-6.jpg" width="300"  alt="GK Break<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php
include 'template/footer.php';

