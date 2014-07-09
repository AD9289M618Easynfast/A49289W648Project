<?php

$title = "About";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <div class="left-content-about-wrapper">
        <img src="images/about_02.png" alt="about-us" width="460" height="343" class="left-image-about-us"/>
    </div>
    <div class="right-content-about-wrapper">
        <img src="images/about_03.png" alt="about-gershon-kelman" width="439" height="66" class="right-content-title" />
        <p class="right-content">
            Gershon Kelman has been doing freelance photography for 30 years. 
            He has dyslexia and he once came across information about this condition in which he could relate.<br />
            "Dyslexic people are visual, multi-dimensional thinkers. We are intuitive and highly creative, and excel at hands-on learning." 
            This made sense to him since he feels that the only way he can express himself is through the eye of a camera.<br/><br/>
            He always wanted to invent a new form a photography that no one has ever seen before. 
            With weeks of experimenting with colorization on his computer and selecting "out of the box' photos in the city of Los Angeles, 
            where he presently resides,he produced a unique form of photography. 
            His current projects include: reflections,Pop LA, and LA in the Dark.<br /><br />
            Gershon's current pop photography has been shown in several top galleries in Los Angeles.
        </p>
        <div class="clear"></div>
    </div>
</div>


<?php

include 'template/footer.php';

