<?php
$title = "Live Events";
include './template/header.php';
?>
<ul class="live_event_list">
    <li>
        <a rel="prettyPhoto['']" href="images/live_events/bigbang_POPUP.png">
            <img src="images/live_events/bigbang_LIVE.jpg" width="195" height="288" alt=""/>
            <div class="opacity">
                <span>Big Bang</span>
            </div>
        </a>
    </li>
    <li>
        <a rel="prettyPhoto['']" href="images/live_events/nickiminaj_POPUP.png">
            <img src="images/live_events/nicki_LIVE.jpg" width="195" height="288" alt=""/>
            <div class="opacity">
                <span>Nicky MinaJ</span>
            </div>
        </a>
    </li>
    <li>
    <li>
        <a rel="prettyPhoto['']" href="images/live_events/shakira_POPUP.png">
            <img src="images/live_events/shakira_LIVE.jpg" width="195" height="288" alt=""/>
            <div class="opacity">
                <span>Shakira</span>
            </div>
        </a>
    </li>
    <li>
        <a rel="prettyPhoto['']" href="images/live_events/katy_POPUP.png">
            <img src="images/live_events/katyperry_LIVE.jpg" width="195" height="288" alt=""/>
            <div class="opacity">
                <span>Katy Perry</span>
            </div>
        </a>
    </li>
    <li>
        <a rel="prettyPhoto['']" href="images/live_events/JeffStar_POPUP.png">
            <img src="images/live_events/jeffstar_LIVE.jpg" width="195" height="288" alt=""/>
            <div class="opacity">
                <span>Jefferee Star</span>
            </div>
        </a>
    </li>
</ul>
<script>
    $('.live_event_list li').hover(function() {
        $(this).find('.opacity').stop().fadeIn(300);
    }, function() {
        $(this).find('.opacity').stop().fadeOut(300);
    });
</script>
<?php
include './template/footer.php';
