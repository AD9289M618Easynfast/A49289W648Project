<?php

global $imagePath;
while (have_posts()) : the_post();

    //Template 1
    $template1Array = explode("[template-1]", get_the_content());
    $template1 = $template1Array[1];

    if ($template1 == null || $template1 == "") {
        $template1 = '
                    <div class="header-content-left">
                        <a href="#">
                            <img src="' . $imagePath . 'logo.png" alt="puamax for the active mail" class="header-logo" width="226" height="67" />
                        </a>
                    </div>
                    <div class="header-content-right">
                        <div class="verifies">
                            <img src="' . $imagePath . 'header-check.png" alt="VeriSign-Secured" width="87" height="43" />
                            <img src="' . $imagePath . 'header-virut.png" alt="McAfeeSecure" width="87" height="43" />
                        </div>
                        <div class="order-panel">
                            <table class="order-form">
                                <tr>
                                    <td class="label">First Name:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">First Name:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">Last Name:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">Street Address:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">City:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">Zip Code:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">State:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">Phone:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                                <tr>
                                    <td class="label">Email:</td>
                                    <td class="input-text"><input type="text" name="first-name" /></td>
                                </tr>
                            </table>
                            <a href="#">
                                <img src="' . $imagePath . 'button-order-now.png" alt="button-order-now" width="260" height="69" class="btn-order-now"/>
                            </a>
                            <div class="key-promise">100% Safe and Secure Connections</div>
                        </div>
                    </div>
                    <img src="' . $imagePath . 'head-label.png" alt="head-label" class="header-label-top" width="140" height="137"/>
                    <img src="' . $imagePath . 'header-arrow.png" alt="header-arrow" class="header-arrow" width="713" height="230" />';
    }
    //Template 2
    $template2Array = explode("[template-2]", get_the_content());
    $template2 = $template2Array[1];

    if ($template2 == null || $template2 == "") {
        $template2 = '
                <img src="' . $imagePath . 'ss1-img-1.png" alt="puamax natural" width="500" height="460" class="ss1-img-1"/>
                <div class="work-how">
                    <img src="' . $imagePath . 'ss1-title.png" alt="how does puamax work" width="332" height="112" class="ss1-title"/>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="line-horizental"></div>
                <div class="inside-puamax">
                    <ul class="inside-puamax-list">
                        <li class="line-2">
                            <div class="left-content">
                                <img src="' . $imagePath . 'ss1-product-1.png" alt="puamax ginseng" class="ss1-product-1" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                            <div class="right-content">
                                <img src="' . $imagePath . 'ss1-product-2.png" alt="puamax wolfberry" class="ss1-product-2" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                        </li>
                        <li class="line-2">
                            <div class="left-content">
                                <img src="' . $imagePath . 'ss1-product-3.png" alt="puamax achyranthes root" class="ss1-product-3" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                            <div class="right-content">
                                <img src="' . $imagePath . 'ss1-product-4.png" alt="puamax baizhu" class="ss1-product-4" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                        </li>
                        <li class="line-3">
                            <div class="left-content">
                                <img src="' . $imagePath . 'ss1-product-5.png" alt="puamax cardamom" class="ss1-product-5" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                            <div class="middle-content">
                                <img src="' . $imagePath . 'ss1-product-6.png" alt="puamax kaffir lime" class="ss1-product-6" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                            <div class="right-content">
                                <img src="' . $imagePath . 'ss1-product-7.png" alt="puamax bitter orange" class="ss1-product-7" width="169" height="132" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>';
    }
    //Template 3
    $template3Array = explode("[template-3]", get_the_content());
    $template3 = $template3Array[1];

    if ($template3 == null || $template3 == "") {
        $template3 = '
                <div class="content-2-title"><div>
				SCIENTIFICALLY VALIDATED AND CLINICALLY PROVEN TO INCREASE ENERGY
				</div></div>
                <div class="content-2-inside">
                    <div class="content-detail">
                        <img src="' . $imagePath . 'ss2-img-1.png" alt="ss2-img-1" width="362" height="442" class="ss2-img-1"/>
                        <img src="' . $imagePath . 'ss2-img-2.png" alt="testosterone-chart" width="247" height="225" class="ss2-img-2" />
                        <div class="testosterone-detail">
                            <img src="' . $imagePath . 'ss2-h3.png" alt="ss2-h3" width="337" height="35" class="testosterone-detail-title" />
                            <p class="sub-title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>';
    }

    //Template 4
    $template4Array = explode("[template-4]", get_the_content());
    $template4 = $template4Array[1];

    if ($template4 == null || $template4 == "") {
        $template4 = '
                <div class="content-3-title"><div>WHAT OUR CUSTOMERS SAY ABOUT OUR PRODUCT</div></div>
                <div class="content-3-inside">

                    <ul class="customer-said-list">
                        <li>
                            <p class="customer-img"><img src="'. $imagePath .'ss3-img-1.png" alt="ss3-img-1" width="139" height="152" /></p>
                            <p class="customer-said">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <span class="cus-name">Mark Smith</span>
                                Lorem ipsum</p>
                            <p class="clear">

                            </p>
                        </li>
                        <li>
                            <p class="customer-img"><img src="'. $imagePath .'ss3-img-2.png" alt="ss3-img-2" width="139" height="152" /></p>
                            <p class="customer-said">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <span class="cus-name">Mark Smith</span>
                                Lorem ipsum</p>
                            <p class="clear">

                            </p>

                        </li>
                        <li>
                            <p class="customer-img"><img src="'. $imagePath .'ss3-img-3.png" alt="ss3-img-3" width="139" height="152" /></p>
                            <p class="customer-said">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <span class="cus-name">Mark Smith</span>
                                Lorem ipsum</p>
                            <p class="clear">

                            </p>
                        </li>
                    </ul>
                </div>';
    }
    //Template 5
    $template5Array = explode("[template-5]", get_the_content());
    $template5 = $template5Array[1];

    if ($template5 == null || $template5 == "") {
        $template5 = '
                <div class="content-4-left">
                    <img src="' . $imagePath . 'header-check.png" alt="VeriSign-Secured" width="87" height="43" />
                    <img src="' . $imagePath . 'header-virut.png" alt="McAfeeSecure" width="87" height="43" />
                </div>
                <div class="content-4-right">
                    <div class="order-panel">
                        <table class="order-quatify">
                            <tr>
                                <td class="quatify-input-1" colspan="2"><span>First Name:</span><input type="text" name="firstName" /></td>
                            </tr>
                            <tr>
                                <td class="quatify-input-2"><span>Weight:</span><input type="text" name="weight" /></td>
                                <td class="quatify-input-2"><span>Goal Weight:</span><input type="text" name="goldWeight" /></td>
                            </tr>
                            <tr>
                                <td class="quatify-input-3"><span>Height:</span>
                                    <select name="height-ft">
                                        <option value="5">5 ft.</option>
                                    </select>
                                    <select name="height-in">
                                        <option value="0">0 in.</option>
                                    </select></td>
                                <td class="quatify-input-2"><span>Age:</span>
                                    <select name="age">
                                        <option value="0">Choose</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="quatify-input-2"><span>Current Physique:</span>
                                    <select name="currentPhycique">
                                        <option value="0">Average, Normal</option>
                                    </select></td>
                                <td class="quatify-input-2"><span>What type of physique do<br /> you want to achieve</span>
                                    <select name="typePhycique">
                                        <option value="0">Fit, Lean</option>
                                    </select></td>
                            </tr>
                            <tr>

                                <td class="quatify-input-1" colspan="2"><input type="checkbox" name="accept" />
                                    Yes!I am ready to do what it take to improve my body</td>
                            </tr>
                        </table>
                        <a href="#">
                            <img src="' . $imagePath . 'ss4-form-button.png" alt="button-order-now" width="451" height="69" class="btn-order-now"/>
                        </a>
                    </div>
                </div>';
    }

    //Template 6
    $template6Array = explode("[template-6]", get_the_content());
    $template6 = $template6Array[1];

    if ($template6 == null || $template6 == "") {
        $template6 = '
                <img src="' . $imagePath . 'ss5-img.png" class="ss5-img" alt="ss5-img" width="965" height="475" />
                <img src="' . $imagePath . 'ss5-arrow.png" class="ss5-arrow" alt="ss5-arrow" width="713" height="137" />
                <div class="content-5-inside">
                    <a href="#"><img src="' . $imagePath . 'button-order-now.png" alt="button-order-now" width="260" height="69" class="button-order-now" /> </a>
                </div>';
    }


endwhile;

