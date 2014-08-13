<?php
$title = "Gershon Private Collection";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include 'template/header.php';
$imgCopyRight = " - Gershon Kelman © 2014";
?>
<div class="<?php echo $sectionWrapper; ?>">
    <h2 class="portfolio-title"><span>Gershon's:</span>Private Collections</h2>

    <ul class="image-gallery">
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-1-large.jpg">
                <img src="images/portfolio/private-collection/img-1.jpg" width="300"  alt="I Only Have Eyes for You<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-2-large.jpg">
                <img src="images/portfolio/private-collection/img-2.png" width="300"  alt="Roy's on Route 66<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-3-large.jpg">
                <img src="images/portfolio/private-collection/img-3.jpg" width="300"  alt="Lithium<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-4-large.jpg">
                <img src="images/portfolio/private-collection/img-4.jpg" width="300"  alt="Outside my Window<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-5-large.jpg">
                <img src="images/portfolio/private-collection/img-5.png" width="300"  alt="Laid Off<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-6-large.jpg">
                <img src="images/portfolio/private-collection/img-6.jpg" width="300"  alt="The Last Walk<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
        <li>
            <a rel="prettyPhoto[private-collection]" href="images/portfolio/private-collection/img-7-large.jpg">
                <img src="images/portfolio/private-collection/img-7.jpg" width="300"  alt="Man on the Train<?php echo $imgCopyRight; ?>"/>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<?php
include 'template/footer.php';

