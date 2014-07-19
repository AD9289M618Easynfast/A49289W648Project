<?php
$title = "Costume";
include './template/header.php';
?>
<ul class="costume_logoList">
    <li class="create_logo">
        <img class="normal" src="images/entertainment/create_logo.jpg" alt=""/>
        <img class="hover" src="images/entertainment/create_logoOVER.png" alt=""/>
    </li>
    <li class="emerson_logo">
        <img class="normal" src="images/entertainment/emerson_logo.png" alt=""/>
        <img class="hover" src="images/entertainment/emerson_logoOVER.png" alt=""/>
    </li>
    <li class="bootsy_bellows_logo">
        <img class="normal" src="images/entertainment/bootsy_bellows_logo.png" alt=""/>
        <img class="hover" src="images/entertainment/bootsy_bellows_logoOVER.png" alt=""/>
    </li>
    <li class="hooray_henry_logo">
        <img class="normal" src="images/entertainment/hooray_henry_logo.png" alt=""/>
        <img class="hover" src="images/entertainment/hooray_henry_logoOVER.png" alt=""/>
    </li>
    <li class="greystone_logo">
        <img class="normal" src="images/entertainment/greystone_logo.png" alt=""/>
        <img class="hover" src="images/entertainment/greystone_logoOVER.png" alt=""/>
    </li>
    <li class="hyde_Logo">
        <img class="normal" src="images/entertainment/hyde_Logo.png" alt=""/>
        <img class="hover" src="images/entertainment/hyde_LogoOVER.png" alt=""/>
    </li>
</ul>

<div class="costumeSlider_wrapper">

    <div class="create_sliderWrapper activeSlide">
        <ul id="create_slider">
            <li><img src="images/costume/createSlide/costume_create1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create2.png" width="1000" height="500" alt="" /></li>
            <!--<li><img src="images/costume/createSlide/costume_create3.png" width="1000" height="500" alt="" /></li>-->
            <li><img src="images/costume/createSlide/costume_create4.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create5.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create6.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create7.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create8.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/createSlide/costume_create9.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>

    <div class="emerson_sliderWrapper">
        <ul id="emerson_slider">
            <li><img src="images/costume/emersonSlide/costume_emerson1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/emersonSlide/costume_emerson2.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/emersonSlide/costume_emerson3.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/emersonSlide/costume_emerson4.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/emersonSlide/costume_emerson5.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>

    <div class="bootsy_sliderWrapper">
        <ul id="bootsy_slider">
            <li><img src="images/costume/bootsySlide/costume_bootsy1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy2.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy3.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy4.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy5.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy6.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/bootsySlide/costume_bootsy7.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>

    <div class="hooray_sliderWrapper">
        <ul id="hooray_slider">
            <li><img src="images/costume/hooraySlide/costume_hooray1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hooraySlide/costume_hooray2.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>

    <div class="greystone_sliderWrapper">
        <ul id="greystone_slider">
            <li><img src="images/costume/greystoneSlide/costume_greystone1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/greystoneSlide/costume_greystone2.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/greystoneSlide/costume_greystone3.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/greystoneSlide/costume_greystone4.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>

    <div class="hyde_sliderWrapper">
        <ul id="hyde_slider">
            <li><img src="images/costume/hydeSlide/costume_hyde1.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde2.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde3.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde4.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde5.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde6.png" width="1000" height="500" alt="" /></li>
            <li><img src="images/costume/hydeSlide/costume_hyde7.png" width="1000" height="500" alt="" /></li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $('#create_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
    $('#emerson_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
    $('#bootsy_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
    $('#hooray_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
    $('#greystone_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
    $('#hyde_slider').bxSlider({mode: 'fade', auto: true, autoControls: true});
</script>

<script>
    $('.costume_logoList li').hover(function() {
        $(this).find('.normal').fadeOut('fast');
        $(this).find('.hover').fadeIn('fast');
    }, function() {
        $(this).find('.hover').fadeOut('fast');
        $(this).find('.normal').fadeIn('fast');
    });
</script>

<script>
    $('.create_logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.create_sliderWrapper').fadeIn('fast');
        $('.create_sliderWrapper').addClass('activeSlide');
    });
    $('.emerson_logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.emerson_sliderWrapper').fadeIn('fast');
        $('.emerson_sliderWrapper').addClass('activeSlide');
    });
    $('.bootsy_bellows_logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.bootsy_sliderWrapper').fadeIn('fast');
        $('.bootsy_sliderWrapper').addClass('activeSlide');
    });
    $('.hooray_henry_logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.hooray_sliderWrapper').fadeIn('fast');
        $('.hooray_sliderWrapper').addClass('activeSlide');
    });
    $('.greystone_logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.greystone_sliderWrapper').fadeIn('fast');
        $('.greystone_sliderWrapper').addClass('activeSlide');
    });
    $('.hyde_Logo').click(function() {
        $('.costumeSlider_wrapper').find('.activeSlide').fadeOut('fast');
        $('.costumeSlider_wrapper').find('.activeSlide').removeClass('activeSlide');
        $('.costumeSlider_wrapper').find('.hyde_sliderWrapper').fadeIn('fast');
        $('.hyde_sliderWrapper').addClass('activeSlide');
    });
</script>
<?php
include './template/footer.php';




