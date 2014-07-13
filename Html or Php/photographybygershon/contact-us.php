<?php
$title = "Contact Us";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <div class="content-contact-us-wrapper">
        <div class="contact-title-wrapper">
            <h2 class="title">Contact Gerson Kelman</h2>
            <ul class="social-nav">
                <li><a href=""><img src="images/icon/icon-facebook.jpg" /></a></li>
                <li><a href=""><img src="images/icon/icon-tumblr.jpg" /></a></li>
                <li><a href=""><img src="images/icon/icon-twitter.jpg" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="contact-info">
            <p>
                <span class="phone-contact">Phone:</span>661-713-9386
            </p>
            <p>
                <span class="email-contact">E-Mail:</span>
                <a href="mailto:photographybygershon@gmail.com">photographybygershon@gmail.com</a>
            </p>
        </div>
    </div>
    <img class="img-contact-us" src="images/img-contact-us.png" alt="Contact Us Image" width="434" height="487"/>
    <div class="clear"></div>
</div>

<?php
include 'template/footer.php';


