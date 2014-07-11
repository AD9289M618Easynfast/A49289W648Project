<?php

$title = "Contact";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <div class="left-content-contact-wrapper">
        <img src="images/contact_02.png" alt="about-gershon-kelman" width="313" height="115" class="left-content-title" />
        <div class="contact-info">
            <p><span class="phone-contact">Phone:</span> 661-713-9386</p>
            <p><span class="email-contact">E-Mail:</span><a href="mailto:photographybygershon@gmail.com">photographybygershon@gmail.com</a></p>
        </div>
    </div>
    <div class="right-content-about-wrapper">
        <img src="images/contact_03.png" alt="about-gershon-kelman" width="434" height="487" class="right-content" />
    </div>
    <div class="clear"></div>
</div>


