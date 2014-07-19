<?php

while (have_posts()) : the_post();
    //Template 1
    $template1Array = explode("[template-1]", get_the_content());
    $template1 = $template1Array[1];

    if ($template1 == "") {
        $template1 = '<h2>Get A Lift In YOUR Life</h2>
        <ul>
            <!--col 1-->
            <li>
                <p>
                    Just slip UpLifts Instant Height Insoles into your shoes and stand up a taller new you!
                </p>
                <p>
                    Imagine how much happier youd be if you were just 2 inches taller.
                </p>
            </li>
            <!--end col 1-->

            <!--col 2--> 
            <li>
                <p>
                    Your self-esteem would soar and everybody’s opinion of you would reach new heights.So stop coming up short and start to stand tall right now!
                </p>
                <p>
                    Imagine! You can decide to live as a taller person today.
                </p>
            </li>
            <!--end col 2-->

            <!--col 3-->
            <li>
                <p>
                    Just order your pair of UPLIFTS today.
                </p>
            </li>
            <!--end col 3-->
        </ul>';
    }


    //Template 2
    $template2Array = explode("[template-2]", get_the_content());
    $template2 = $template2Array[1];

    if ($template2 == "") {
        $template2 = '<h2>2 inches taller in 2 minutes</h2>
        <img src="images/image-product.png" alt="template 2 images" width="168" height="200"/>
        <div class="template-2-content">
            <p>Look at the difference 2 inches of additional height will make in your life!...</p>
            <img src="images/image-1.jpg" alt="template image" width="89" height="132"/>
            <img src="images/image-2.jpg" alt="template image" width="89" height="132"/>
        </div>
        <div class="clear"></div>
        <p>It is the easy way to step up to a taller new you right now!</p>';
    }

    //Template 3
    $template3Array = explode("[template-3]", get_the_content());
    $template3 = $template3Array[1];

    if ($template3 == "") {
        $template3 = '<h2>Height In Tenseltown:</h2>
        <h3>Hollywood\'s secret is out!</h3>
        <div>
        <img src = "images/image-3.jpg" width = "56" height = "81" alt = "template images"/>
        <img src = "images/image-4.jpg" width = "56" height = "81" alt = "template images"/>
        </div>
        <p>
        Stars make a livelihood from being taller...<br/>
        A number of well-known celebrities often add a couple of extra inches to their physique before visiting the red carpet, and one of the easiest techniques these guys use to stand a bit taller is thru wearing thicker shoe lifts. In fact, some of Hollywood\'s most well-known leading men can often be seen in stature-strengthening height insoles.
        </p>';
    }

    //Template 4
    $template4Array = explode("[template-4]", get_the_content());
    $template4 = $template4Array[1];

    if ($template4 == "") {
        $template4 = '<h2>Height insoles in the media</h2>
    <h3>All over the media, the buzz is about lifts</h3>

    <ul>
        <li>
            <img src="images/logo/logo-cbsnews.png" alt="logo 1"/>
            <p>
                At the end of the day, we all have our own insecurities. And if your guy wants a little height, he is not alone. Some of the hottest stars in Hollywood, too, have lifted themselves up.
                Once while cleaning up my apartment, I picked up a pair of my boyfriend’s shoes and realized they were unusually heavy. When I looked inside, I realized the insoles were at least three inches thick. From the outside, they looked completely normal.
            </p>
        </li>
        <li>
            <img src="images/logo/logo-esquire.png" alt="logo 1"/>
            <p>
                At the end of the day, we all have our own insecurities. And if your guy wants a little height, he is not alone. Some of the hottest stars in Hollywood, too, have lifted themselves up.
                Once while cleaning up my apartment, I picked up a pair of my boyfriend’s shoes and realized they were unusually heavy. When I looked inside, I realized the insoles were at least three inches thick. From the outside, they looked completely normal.
            </p>
        </li>
        <li>
            <img src="images/logo/logo-foxsnew.png" alt="logo 1"/>
            <p>
                At the end of the day, we all have our own insecurities. And if your guy wants a little height, he is not alone. Some of the hottest stars in Hollywood, too, have lifted themselves up.
                Once while cleaning up my apartment, I picked up a pair of my boyfriend’s shoes and realized they were unusually heavy. When I looked inside, I realized the insoles were at least three inches thick. From the outside, they looked completely normal.
            </p>
        </li>
        <li>
            <img src="images/logo/logo-k9.png" alt="logo 1"/>
            <p>
                At the end of the day, we all have our own insecurities. And if your guy wants a little height, he is not alone. Some of the hottest stars in Hollywood, too, have lifted themselves up.
                Once while cleaning up my apartment, I picked up a pair of my boyfriend’s shoes and realized they were unusually heavy. When I looked inside, I realized the insoles were at least three inches thick. From the outside, they looked completely normal.
            </p>
        </li>
    </ul>';
    }

    //Template 5
    $template5Array = explode("[template-5]", get_the_content());
    $template5 = $template5Array[1];

    if ($template5 == "") {
        $template5 = '<h2>Why UPLIFTS Work: The Science Behind a Secret</h2>
    <img class="arrow-right" src="images/arrow-right.png" alt="arrow right" width="62" height="138"/>
    <img src="images/image-5.jpg" width="181" height="177" alt="template image"/>
    <p>
        UPLIFTS are also made with a special walking on air comfort material. So you not only stand tall because of the new pride you experience. You will actually feel as though youre actually walking on air.
    </p>
    <p>
        So UPLIFTS not only provide an instant height increase. They also provide a psychological boost!
    </p>
    <p>
        UPLIFTS Instant Height Insoles are the revolutionary new way to give yourself an instantaneous height increase simply by placing them in any of your shoes. They are designed to provide you with 2 inches of additional height. Many people feel even taller.
    </p>
    <p>
        And they are completely undetectable.
    </p>
    <p>
        Enjoy Greater Success on All Occasions<br/>
        Step-Ups can help you achieve greater success whether you are at school, at work, <br/>
        shopping, or just having fun.
    </p>
    <p>
        <br/>
        Enjoy Greater Success in Relationships<br/>
        Studies reveal that height is an enormous factor in dating preferences.<br/>
        In fact, many people consider height the major factor in<br/>
        sexual attractiveness.
    </p>';
    }

    //Template 6
    $template6Array = explode("[template-6]", get_the_content());
    $template6 = $template6Array[1];

    if ($template6 == "") {
        $template6 = '<h2>Satisfied Users OF UPLIFTS SPEAK OUT</h2>
    <div class="template-6-list-wrapper">
        <ul>
            <li>
                <p>
                    UPLIFTS totally changed my life. I cant tell you what it is meant to me to be taller. I feel like a whole new person! Rodney D, Washington, DC
                </p>
            </li>
            <li>
                <p>
                    The most amazing thing is that UPLIFTS changed the way I think about myself instantly. After I put them in my shoes and stood up for the first time, I realized how tall I suddenly was and fell like a completely different person. Larry K, Atlanta, GA
                </p>
            </li>
            <li>
                <p>
                    I have always been jealous of models. They’re always so tall and slender. But I am a short girl. So I decided to give UPLIFTS a try. I’m sold! I put them on and started to walk around, feeling like a model myself! Now, I can’t stop standing in front of the mirror admiring myself. Nancy P, Los Angels, CA
                </p>
            </li>
        </ul>
        <ul>
            <li>
                <p>
                    UPLIFTS totally changed my life. I cant tell you what it is meant to me to be taller. I feel like a whole new person! Rodney D, Washington, DC
                </p>
            </li>
            <li>
                <p>
                    The most amazing thing is that UPLIFTS changed the way I think about myself instantly. After I put them in my shoes and stood up for the first time, I realized how tall I suddenly was and fell like a completely different person. Larry K, Atlanta, GA
                </p>
            </li>
            <li>
                <p>
                    I have always been jealous of models. They’re always so tall and slender. But I am a short girl. So I decided to give UPLIFTS a try. I’m sold! I put them on and started to walk around, feeling like a model myself! Now, I can’t stop standing in front of the mirror admiring myself. Nancy P, Los Angels, CA
                </p>
            </li>
        </ul>
        <div class="clear"></div>
    </div>';
    }
endwhile;
