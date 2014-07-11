<?php
$title = "Mailing";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <div class="left-content-mailing-wrapper">
        <img src="images/mailinglist_02.png" alt="about-gershon-kelman" width="376" height="66" class="left-content-title" />
        <div class="mailing-info">
            <p>Enter your email below, to join the mailing list, and let us know how you heard about Gershon Kelman.</p>
            <p><iframe src="http://www.foxyform.com/form.php?id=438992&sec_hash=23840be752f" width="350px" height="333px" frameborder="0"></iframe> </p>
        </div>
    </div>
    <div class="right-content-mailing-wrapper">
        <img src="images/mailinglist_03.png" alt="about-gershon-kelman" width="475" height="526" class="right-content" />
    </div>
    <div class="clear"></div>
</div>


