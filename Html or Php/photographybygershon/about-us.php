<?php
$title = "About Us";
$sectionWrapper = str_replace(" ", "-", strtolower($title)) . "-content-wrapper";
include 'template/header.php';
?>

<div class="<?php echo $sectionWrapper ?>">
    <img class="img-about-us" src="images/img-about-us.jpg" alt="About Gershon Kelman" width="450" height="336" />
    <div class="content-about-us">
        <h2 class="title">About Gerson Kelman</h2>
        <p>
            Gershon Kelman has been doing freelance photography for 30 years. 
            He has dyslexia and he once came across information about this condition in which he could relate.
            "Dyslexic people are visual, multi-dimensional thinkers. We are intuitive and highly creative, and excel at hands-on learning." 
            This made sense to him since he feels that the only way he can express himself is through the eye of a camera.
        </p>
        <p>
            He always wanted to invent a new form a photography that no one has ever seen before. 
            With weeks of experimenting with colorization on his computer and selecting "out of the box' photos in the city of Los Angeles, 
            where he presently resides,he produced a unique form of photography. 
            His current projects include: reflections,Pop LA, and LA in the Dark.
        </p>
        <p>
            Gershon's current pop photography has been shown in several top galleries in Los Angeles.
        </p>
        <div class="clear"></div>
    </div>
</div>


<?php
include 'template/footer.php';

