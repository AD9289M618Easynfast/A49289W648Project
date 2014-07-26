<?php
$title = "Miami In The Dark";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include 'template/header.php';
$imgCopyRight = " - Gershon Kelman © 2014";
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h2 class="portfolio-title"><span>Miami:</span>In The Dark</h2>

    <ul class="image-gallery">
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-1-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-1.jpg" width="300"  alt="Slow Night<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-2-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-2.jpg" width="300"  alt="Fog<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-3-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-3.jpg" width="300"  alt="Vendor<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-4-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-4.jpg" width="300"  alt="One for the Road<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-5-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-5.jpg" width="300"  alt="Time Square in the Dark<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-6-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-6.jpg" width="300"  alt="Product of New York<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-7-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-7.jpg" width="300"  alt="Tonic<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[miami-in-the-dark]" href="images/portfolio/miami-in-the-dark/img-8-large.jpg">
                <img src="images/portfolio/miami-in-the-dark/img-8.jpg" width="300"  alt="NY Taxi Driver<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php
include 'template/footer.php';

