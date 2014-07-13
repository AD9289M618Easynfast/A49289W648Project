<?php

$title = "About";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <img src="images/img-about-us.jpg" alt="about-us" width="450" height="336" class="left-image-about-us"/>
    <div class="right-content-about-wrapper">
        <p class="right-title">ABOUT GERSHON KELMAN</p>
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

