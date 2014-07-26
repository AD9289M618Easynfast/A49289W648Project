<?php
$title = "La Pop Art";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include 'template/header.php';
$imgCopyRight = " - Gershon Kelman © 2014";
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h2 class="portfolio-title"><span>LA:</span>Pop Art</h2>

    <ul class="image-gallery">
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-1-large.jpg">
                <img src="images/portfolio/la-pop-art/img-1.jpg" width="300"  alt="Slow Night<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-2-large.jpg">
                <img src="images/portfolio/la-pop-art/img-2.jpg" width="300"  alt="Fog<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-3-large.jpg">
                <img src="images/portfolio/la-pop-art/img-3.jpg" width="300"  alt="Vendor<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-4-large.jpg">
                <img src="images/portfolio/la-pop-art/img-4.jpg" width="300"  alt="One for the Road<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-5-large.jpg">
                <img src="images/portfolio/la-pop-art/img-5.jpg" width="300"  alt="Time Square in the Dark<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-6-large.jpg">
                <img src="images/portfolio/la-pop-art/img-6.jpg" width="300"  alt="Product of New York<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-7-large.jpg">
                <img src="images/portfolio/la-pop-art/img-7.jpg" width="300"  alt="Tonic<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-8-large.jpg">
                <img src="images/portfolio/la-pop-art/img-8.jpg" width="300"  alt="NY Taxi Driver<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-9-large.jpg">
                <img src="images/portfolio/la-pop-art/img-9.jpg" width="300"  alt="Crossover<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[la-pop-art]" href="images/portfolio/la-pop-art/img-10-large.jpg">
                <img src="images/portfolio/la-pop-art/img-10.jpg" width="300"  alt="Visions<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php
include 'template/footer.php';

