<?php 
/*
Template Name: Home Template
*/
get_header(); ?>
             <div class="content-wrap-left">
                 <div class="package-area">
                     <div class="package-area-top">
                        <img class="check-box" src="<?php echo  $imagePath; ?>checkbox.jpg" />
                        <p>Test Here</p>
                        <img class="free-shipping-bt" src="<?php echo  $imagePath; ?>button-free-shipping.png" />
                    </div>
                    <div class="package-area-content">
                    	<img src="<?php echo  $imagePath; ?>img-box-product1.png" width="405" height="141" />
                        <div>
                        	<p>Best Selling Package</p>
                            <p>5 Month Monster Plan</p>
                            <img src="<?php echo  $imagePath; ?>price-148.png" width="98" height="49" />
                            <a href="#">
                            	<img src="<?php echo  $imagePath; ?>button-select-package.png" width="171" height="38" />
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="package-area">
                	<div class="package-area-top">
                     <img class="check-box" src="<?php echo  $imagePath; ?>checkbox.jpg" />
                     <p>Test Here</p>
                     <img class="free-shipping-bt" src="<?php echo  $imagePath; ?>button-free-shipping.png" />
                 </div>
                 <div class="package-area-content">
                     <img src="<?php echo  $imagePath; ?>img-box-product2.png" width="405" height="141" />
                     <div>
                         <p>Best Selling Package</p>
                         <p>5 Month Monster Plan</p>
                         <img src="<?php echo  $imagePath; ?>price-98.png" width="98" height="49" />
                         <a href="#">
                             <img src="<?php echo  $imagePath; ?>button-select-package.png" width="171" height="38" />
                         </a>
                     </div>
                 </div>
             </div>
             <div class="package-area">
                 <div class="package-area-top">
                     <img class="check-box" src="<?php echo  $imagePath; ?>checkbox.jpg" />
                     <p>Test Here</p>
                     <img class="free-shipping-bt" src="<?php echo  $imagePath; ?>button-free-shipping.png" />
                 </div>
                 <div class="package-area-content">
                     <img src="<?php echo  $imagePath; ?>img-box-product3.png" width="146" height="141" class="one-product"/>
                     <div>
                         <p>Best Selling Package</p>
                         <p>5 Month Monster Plan</p>
                         <img src="<?php echo  $imagePath; ?>price-48.png" width="98" height="49" />
                         <a href="#">
                             <img src="<?php echo  $imagePath; ?>button-select-package.png" width="171" height="38" />
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="content-wrap-right">
            <img src="<?php echo  $imagePath; ?>title-payment.png" />
            <p class="content-right-title">Pay with a Credit or Debit Card</p>
            <table class="table-order-payment">
             <tr>
                 <td class="first-column">We Accept:</td>
                 <td colspan="2" class="second-column"><img src="<?php echo  $imagePath; ?>img-payment-card.png" width="203" height="30" /></td>
             </tr>
             <tr>
                 <td class="first-column">Card Type:</td>
                 <td colspan="2" class="second-column">
                    <select class="full-row">
                     <option>Text Here</option>
                 </select>
             </td>
         </tr>
         <tr>
             <td class="first-column">CC #:</td>
             <td colspan="2" class="second-column">
                <input type="text" class="full-row"/>
            </td>
        </tr>
        <tr>
         <td class="first-column">Exp. Date:</td>
         <td colspan="2" class="second-column">
            <select class="date-class">
             <option>Text Here</option>
         </select>
         <select class="date-class">
             <option>Text Here</option>
         </select>
     </td>
 </tr>
 <tr>
     <td class="first-column">CVV:</td>
     <td colspan="2" class="cvv-input second-column">
        <input type="text" />
        <a href="#">what is this ?</a>
    </td>
</tr>
</table>
<a href="#" class="button-order"><img src="<?php echo  $imagePath; ?>button-order-now.png" width="260" height="69" /> 
</a>
<p class="text-safe">100% Safety And Secure Connection</p>
<div class="content-right-footer">
 <img src="<?php echo  $imagePath; ?>img-payment-anivirut.png" width="272" height="182" />
</div>
</div>
<?php get_footer(); ?>