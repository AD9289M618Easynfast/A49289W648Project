<?php
$title = "Porfolio";
$sectionWrapper = str_replace(" ", "_", strtolower($title)) . "_content_wrapper'";
include './template/header.php';

$imagePath = 'images/portfolio/';
?>
<div class="<?php echo $sectionWrapper; ?>">
    <ul class="portfolio-list">
        <li>
            <img src="images/portfolio/la-in-the-dark.png"/>
            <div>
                <h3>LA in the dark</h3>
                <a href="la-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/ny-in-the-dark.png"/>
            <div>
                <h3>NY in the dark</h3>
                <a href="ny-in-the-dark.php">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/tel-aviv-in-the-dark.png"/>
            <div>
                <h3>Tel Aviv in the dark</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/downtown-austin-in-the-dark.png"/>
            <div>
                <h3>Downtown Austin in the dark</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/la-pop-art.png"/>
            <div>
                <h3>LA Pop art</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/la-reflections.png"/>
            <div>
                <h3>LA Reflections</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/private-collection.jpg"/>
            <div>
                <h3>Private Collection</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/miami-in-the-dark.png"/>
            <div>
                <h3>Miami in the dark</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
        <li>
            <img src="images/portfolio/san-francisco-in-the-dark.png"/>
            <div>
                <h3>San Francisco in the dark</h3>
                <a href="#">View Gallery</a>
            </div>
        </li>
    </ul>
</div>
<?php
include 'template/footer.php';

