<?php
$title = "Styling";
include './template/header.php';
?>
<ul id="styling_slider">
    <li><img src="images/styling/slides_1.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/styling/slides_2.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/styling/slides_3.png" width="1000" height="500" alt="" /></li>
    <li><img src="images/styling/slides_4.png" width="1000" height="500" alt="" /></li>
    <!--<li><img src="images/styling/slides_5.png" width="1000" height="500" alt="" /></li>-->
</ul>
<script type="text/javascript">
    $('#styling_slider').bxSlider({
        mode: 'fade',
        auto: true,
        autoControls: true
    });
</script>
<?php
include './template/footer.php';
