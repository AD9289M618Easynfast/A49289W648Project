<?php
/*
 * Template Name: twitter-followers-payment
 */
?>

<?php get_header(); ?>

<div class="payment-page">

<h1>Select your amount of Twitter Followers and CheckOut!</h1><br><br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PJMTQZUZGKLLY">
<input type="hidden" name="country" value="US">
<table>
<tr><td><input type="hidden" name="on0" value="Twitter Followers Amount">Twitter Followers Amount</td></tr><tr><td><select name="os0">
	<option value="10,000">10,000 $27,00 USD</option>
	<option value="20,000">20,000 $37,00 USD</option>
	<option value="40,000">40,000 $62,00 USD</option>
	<option value="100,000">100,000 $147,00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="http://howdoigetfollowers.net/wp-content/uploads/2013/11/paypage.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<br><br><br>


<div class="steps">

<p style="opacity: 0.3;">1) Fill In Your Information</p>

<p style="font-weight: bold;">2) Place Your Order</p>

</div>

</div>


<img src="http://howdoigetfollowers.net/wp-content/uploads/2013/11/TwitterFollowers-Payments-Badges-New1b.jpg"/><img src="http://howdoigetfollowers.net/wp-content/uploads/2013/11/86a0ba353004e.png"height="120" width="120"><img src="http://howdoigetfollowers.net/wp-content/uploads/2013/10/guarantee41.jpg" height="100" width="100">


<?php get_footer(); ?>