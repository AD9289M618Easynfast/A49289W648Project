<?php

$title = "Contact";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <div class="left-content-contact-wrapper">
        <div class="contact-title">
            <p>CONTACT GERSHON</p>
            <ul class="social-nav">
                <li><a href=""><img src="images/icon/icon-facebook.jpg" /></a></li>
                <li><a href=""><img src="images/icon/icon-tumblr.jpg" /></a></li>
                <li><a href=""><img src="images/icon/icon-twitter.jpg" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="contact-info">
            <p><span class="phone-contact">Phone:</span> 661-713-9386</p>
            <p><span class="email-contact">E-Mail:</span><a href="mailto:photographybygershon@gmail.com">photographybygershon@gmail.com</a></p>
        </div>
    </div>
    <img src="images/contact_03.png" alt="about-gershon-kelman" width="434" height="487" class="right-image-content" />
    <div class="clear"></div>
</div>

<?php

include 'template/footer.php';


