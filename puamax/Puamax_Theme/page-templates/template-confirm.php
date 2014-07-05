<?php 
/*
Template Name: Confirm Template
*/
get_header(); 
 global $imagePath;
?>
<div class="content-confirm-order">
                    <p class="confirm-title">Your Order Has Been Confirmed!</p>
                    <div class="confirm-number">
                       <p>Your web confirmation number is: <span>00000000</span> </p>
                       <a href="#"><img src="<?php echo  $imagePath; ?>button-click-here.png" width="204" height="38" /></a>
                   </div>
                   <div class="address-wrapper">
                       <div class="billing-address">
                           <dl>
                               <dt>Billing Address</dt>
                               <dd>Text Here</dd>
                               <dd>Text Here</dd>
                               <dd>Text Here</dd>
                           </dl>
                       </div>
                       <div class="shipping-address">
                           <dl>
                               <dt>Shipping Address</dt>
                               <dd>Text Here</dd>
                           </dl>
                       </div>
                   </div>
                   <div class="product-order-wrapper">
                       <table class="confirm-order-product" border="1">
                           <tr>
                               <th class="qty-column-head">Qty</th>
                               <th class="descip-column-head">Description</th>
                               <th class="total-column-head">Total</th>
                           </tr>
                           <tr class="confirm-order-details">
                               <td class="qty-column-detail">
                                   <p>1</p>
                               </td>
                               <td class="descip-column-detail">
                                   <img src="<?php echo  $imagePath; ?>img-confirm-product.png" width="98" height="129" />
                                   <dl>
                                       <dt>Premium Garcinia Extract</dt>
                                       <dd>- Fat Burner</dd>
                                       <dd>- Lose Weight</dd>
                                       <dd>- Feel Great</dd>
                                       <dd>- All Natural</dd>
                                   </dl>    
                               </td>
                               <td class="total-column-detail"><p>$0.00</p></td>
                           </tr>
                       </table>
                       <div class="confirm-order-footer">
                            <table>
                                <tr>
                                    <td class="order-footer-title">Subtotal: </td>
                                    <td class="order-footer-content"><p>$0.00</p></td>
                                </tr>
                                <tr>
                                    <td class="order-footer-title"><span>(National, State and Local Taxes)</span>  Tax: </td>
                                    <td><p>$0.00</p></td>
                                </tr>
                                <tr>
                                    <td class="order-footer-title"><span>(USPS - 1st Class)</span>Shipping: </td>
                                    <td><p>$0.00</p></td>
                                </tr>
                            </table>
                       </div>
                   </div>
                   <div class="billing-price-wrapper">
                    <ul>
                       <li class="place-new-order"><a href="#"><img src="<?php echo  $imagePath; ?>button-place-new.png" width="204" height="38" /></a></li>
                       <li class="total-price">$0.00</li>
                       <li class="total-text">TOTAL</li>
                       
                   </ul>
               </div>
               <div class="content-footer">
                   <ul>
                       <li class="confirm-card"><img src="<?php echo  $imagePath; ?>img-confirm-card.png" width="489" height="32" /></li>
                       <li class="money-back-logo"><img src="<?php echo  $imagePath; ?>icon-money.png" width="86" height="86" /></li>
                       <li class="money-back-text"><p>Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-HereText-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-Here Text-HereText-Here Text-Here Text-Here Text-Here </p></li>
                   </ul>
               </div>
           </div>
<?php get_footer(); ?>