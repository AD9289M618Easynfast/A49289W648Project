</div>
<div id="footer">
    <img src="images/shadow.png" alt="footer_shadow" width="1000" height="42"/>
    <ul class="footer_nav">
        <li class="have_sub">
            <a>NightLife</a>
            <ul class="footer_sub_nav two_sub_item">
                <li>
                    <a href="entertainment.php">Entertainment</a>
                </li>
                <li>
                    <a href="production-design.php">Production Design</a>
                </li>
            </ul>
        </li>
        <li class="have_sub">
            <a>Artists</a>
            <ul class="footer_sub_nav three_sub_item">
                <li>
                    <a href="artist-development.php">Development</a>
                </li>
                <li>
                    <a href="video.php">Video</a>
                </li>
                <li>
                    <a href="live-event.php">Live</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="tv-film.php">Film & Tv</a>
        </li>
        <li class="have_sub">
            <a>Fashion</a>
            <ul class="footer_sub_nav three_sub_item">
                <li>
                    <a href="uniform.php">Uniform</a>
                </li>
                <li>
                    <a href="costume.php">Costume</a>
                </li>
                <li>
                    <a href="styling.php">Styling</a>
                </li>
            </ul>
        </li>
    </ul>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.footer_nav').children('.have_sub').hover(function() {
                //Find and Hide if there existed menu out.
                if ($(this).find('.sub_active')[0]) {
                    $(this).css('background-image', 'url(images/arrowup.png)');
                    $(this).find('.sub_active').stop().slideToggle('fast');
                    $(this).find('.sub_active').removeClass('sub_active');
                } else {
                    $('.footer_nav').find('.sub_active').parent('.have_sub').css('background-image', 'url(images/arrowup.png)');
                    $('.footer_nav').find('.sub_active').stop().slideToggle('fast');
                    $('.footer_nav').find('.sub_active').removeClass('sub_active');
                    $(this).css('background-image', 'url(images/arrowdown.png)');
                    $(this).find('ul').addClass('sub_active');
                    $(this).find('ul').stop().slideToggle('fast');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("a[rel^='prettyPhoto']").
                    prettyPhoto({
                        theme: 'dark_rounded',
                        social_tools: '',
                        allow_resize: true, /* Resize the photos bigger than viewport. true/false */
                        default_width: 500,
                        default_height: 900});
        });
    </script>
</div>
</div>
</body>
</html>