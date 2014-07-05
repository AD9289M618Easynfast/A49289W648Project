<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php
global $imagePath;
global $imageLogoPath;
?>
<!--template 7-->
<div class="template-7-wrapper">
    <img class="arrow-left" src="<?php echo $imagePath ?>arrow-left.png" alt="arrow left" width="62" height="138"/>
    <img class="arrow-right" src="<?php echo $imagePath ?>arrow-right.png" alt="arrow right" width="62" height="138"/>
    <h2>
        <a class="smoothscroll" href="#header">
            <img src="<?php echo $imagePath ?>banner-footer.png" alt="footer banner" width="768" height="146"/>
        </a>
    </h2>
</div>
<!--end template 7-->
<!--footer-->
<div id="footer">
    <ul class="footer-nav">
        <li><a href="#">Refund And Exchange Policy</a></li>
        <li><a href="#">Terms and Condition</a></li>
        <li><a href="#">Privacy Policy</a></li>
    </ul>
    <p>
        UPLIFTS Inc Costa Mesa, CA 92625<br/>
        Copyright &copy; 2013-2014
    </p>
</div>

<!--end footer-->

<?php wp_footer(); ?>
</body>
</html>