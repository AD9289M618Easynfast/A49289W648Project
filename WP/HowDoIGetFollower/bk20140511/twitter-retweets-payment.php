<?php
/*
 * Template Name: twitter-retweets-payment
 */
?>

<?php get_header(); ?>

<div class="payment-page">

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NJPNNDAR2TW8C">
<input type="hidden" name="country" value="US">
<table>
<tr><td><input type="hidden" name="on0" value="Twitter Retweets Amount">Twitter Retweets Amount</td></tr><tr><td><select name="os0">
	<option value="2,000">2,000 $17,00 USD</option>
	<option value="10,000">10,000 $47,00 USD</option>
	<option value="5,000">5,000 $27,00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="http://howdoigetfollowers.net/wp-content/uploads/2013/11/paypage.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>




<div class="steps">



<p style="opacity: 0.3;">1) Fill In Your Information</p>



<p style="font-weight: bold;">2) Place Your Order</p>



</div>



</div>



<?php get_footer(); ?>