<?php
$title = "Porfolio";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include './template/header.php';

$imagePath = 'images/portfolio/';
?>
<div class="<?php echo $sectionWrapper; ?>">
    <ul class="portfolio-list">
        <li>
            <img src="images/portfolio/la-in-the-dark.jpg"/>
            <div>
                <h3>LA in the dark</h3>
                <a href="portfolio-la-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/ny-in-the-dark.jpg"/>
            <div>
                <h3>NY in the dark</h3>
                <a href="portfolio-ny-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/tel-aviv-in-the-dark.jpg"/>
            <div>
                <h3>Tel Aviv in the dark</h3>
                <a href="portfolio-tel-aviv-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/downtown-austin-in-the-dark.jpg"/>
            <div>
                <h3>Downtown Austin in the dark</h3>
                <a href="portfolio-downtown-austin-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/la-pop-art.jpg"/>
            <div>
                <h3>LA Pop art</h3>
                <a href="portfolio-pop-art.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/la-reflections.jpg"/>
            <div>
                <h3>LA Reflections</h3>
                <a href="portfolio-la-reflections.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/private-collection.jpg"/>
            <div>
                <h3>Private Collection</h3>
                <a href="portfolio-gershon-private-collections.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/miami-in-the-dark.jpg"/>
            <div>
                <h3>Miami in the dark</h3>
                <a href="portfolio-miami-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/san-francisco-in-the-dark.jpg"/>
            <div>
                <h3>San Francisco in the dark</h3>
                <a href="portfolio-san-francisco-in-the-dark.php">View Gallery</a>
            </div>
        </li>
    </ul>
</div>
<?php
include 'template/footer.php';

