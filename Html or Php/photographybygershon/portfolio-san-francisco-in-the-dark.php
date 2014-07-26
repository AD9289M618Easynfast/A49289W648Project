<?php
$title = "San Francisco In The Dark";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include 'template/header.php';
$imgCopyRight = " - Gershon Kelman © 2014";
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h2 class="portfolio-title"><span>San Francisco:</span>In The Dark</h2>

    <ul class="image-gallery">
        <li>
            <a rel="prettyPhoto[san-francisco-in-the-dark]" href="images/portfolio/san-francisco-in-the-dark/img-1-large.jpg">
                <img src="images/portfolio/san-francisco-in-the-dark/img-1.jpg" width="300"  alt="Slow Night<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[san-francisco-in-the-dark]" href="images/portfolio/san-francisco-in-the-dark/img-2-large.jpg">
                <img src="images/portfolio/san-francisco-in-the-dark/img-2.jpg" width="300"  alt="Fog<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[san-francisco-in-the-dark]" href="images/portfolio/san-francisco-in-the-dark/img-3-large.jpg">
                <img src="images/portfolio/san-francisco-in-the-dark/img-3.jpg" width="300"  alt="Vendor<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[san-francisco-in-the-dark]" href="images/portfolio/san-francisco-in-the-dark/img-4-large.jpg">
                <img src="images/portfolio/san-francisco-in-the-dark/img-4.jpg" width="300"  alt="One for the Road<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[san-francisco-in-the-dark]" href="images/portfolio/san-francisco-in-the-dark/img-5-large.jpg">
                <img src="images/portfolio/san-francisco-in-the-dark/img-5.jpg" width="300"  alt="Time Square in the Dark<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php
include 'template/footer.php';

