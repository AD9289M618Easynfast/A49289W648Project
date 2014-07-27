<?php

global $imagePath;
while (have_posts()) : the_post();

    //Template 1
    $template1 = '';
    $template1Array = explode("[template-1]", get_the_content());
    if (count($template1Array) > 0) {
        $template1 = $template1Array[1];
    }

    if (trim($template1) == '') {
        $template1 = '<div class="content-confirm-order">
        <h1 class="confirm-title">Your Order Has Been Confirmed!</h1>
        <div class="confirm-number">
            <p>Your web confirmation number is: <span class="bold-text">00000000</span> </p>
            <a href="#"><img src="' . $imagePath . 'button-click-here.png" width="204" height="38" /></a>
        </div>
        <div class="address-wrapper">
            <div class="billing-address">
                <dl>
                    <dt><h2>Billing Address</h2></dt>
                    <dd>123456</dd>
                    <dd>ABC STREET</dd>
                    <dd>US. 11100</dd>
                </dl>
            </div>
            <div class="shipping-address">
                <dl>
                    <dt><h2>Shipping Address</h2></dt>
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
                        <img src="' . $imagePath . 'img-confirm-product.png" width="98" height="129" />
                        <dl>
                            <dt><h2>Premium Garcinia Extract</h2></dt>
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
                <li class="place-new-order"><a href="#"><img src="' . $imagePath . 'button-place-new.png" width="204" height="38" /></a></li>
                <li class="total-price">$0.00</li>
                <li class="total-text">TOTAL</li>

            </ul>
        </div>
        <div class="content-footer">
            <ul>
                <li class="confirm-card"><img src="' . $imagePath . 'img-confirm-card.png" width="489" height="32" /></li>
                <li class="money-back-logo"><img src="' . $imagePath . 'icon-money.png" width="86" height="86" /></li>
                <li class="money-back-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </li>
            </ul>
        </div>
    </div>';
    }
endwhile;
?>

