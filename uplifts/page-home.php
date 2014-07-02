<?php
include_once "homeSupport.php";
get_header();
?>
 <div class="signup-wrapper">
                    <!--template 1-->
                    <div class="template-1-wrapper">
                        <h2><?php echo $theTitle ?></h2>
                        <ul>
                            <!--col 1-->
                            <li>
                                <p>
                                    <?php echo $theColumn1Row1 ?>
                                </p>
                                <p>
                                     <?php echo $theColumn1Row2 ?>
                                </p>
                            </li>
                            <!--end col 1-->

                            <!--col 2--> 
                            <li>
                                <p>
                                     <?php echo $theColumn2Row1 ?>
                                </p>
                                <p>
                                     <?php echo $theColumn2Row2 ?>
                                </p>
                            </li>
                            <!--end col 2-->

                            <!--col 3-->
                            <li>
                                <p>
                                     <?php echo $theColumn3Row1 ?>
                                </p>
                            </li>
                            <!--end col 3-->
                        </ul>
                    </div>
                    <!--end template 1-->
                    <div class="signup-placeholder">
                        <!--content for subscription form-->

                        <!-- end content for subscription-->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!--template 2 3-->
            <div class="template-2-3-wrapper">
                <!--template 2-->
                <div class="template-2-wrapper">
                    <h2><?php echo $theTitle ?></h2>
                    <img src="<?php echo $imagePath;echo $theImageLeft ?>" alt="template 2 images" width="168" height="200"/>
                    <div class="template-2-content">
                        <p><?php echo $theContentTop ?></p>
                        <img src="<?php echo $imagePath;echo $theImageCenter ?>" alt="template image" width="89" height="132"/>
                        <img src="<?php echo $imagePath;echo $theImageRight ?>" alt="template image" width="89" height="132"/>
                    </div>
                    <div class="clear"></div>
                    <p><?php echo $theContentBottom ?></p>
                </div>
                <!--end template 2-->

                <!--template 3-->
                <div class="template-3-wrapper">
                    <h2><?php echo $theTitle ?></h2>
                    <h3><?php echo $theSubTitle ?></h3>
                    <div>
                        <img src="<?php echo $imagePath;echo $theImageTop ?>" width="56" height="81" alt="template images"/>
                        <img src="<?php echo $imagePath;echo $theImageBottom ?>" width="56" height="81" alt="template images"/>
                    </div>
                    <p>
                        <?php echo $theContentRow1 ?><br/>
                        <?php echo $theContentRow2 ?>
                    </p>
                </div>
                <!--end template 3-->
            </div>
            <!--end template 2 3-->
            <div class="clear"></div>

            <!--template 4-->
            <div class="template-4-wrapper">
                <h2><?php echo $theTitle ?></h2>
                <h3><?php echo $theSubTitle ?></h3>

                <ul>
                    <li>
                        <img src="<?php echo $imageLogoPath;echo $theImageColumn1 ?>" alt="logo 1"/>
                        <p>
                            <?php echo $theContentColumn1 ?>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo $imageLogoPath;echo $theImageColumn2 ?>" alt="logo 1"/>
                        <p>
                            <?php echo $theContentColumn2 ?>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo $imageLogoPath;echo $theImageColumn3 ?>" alt="logo 1"/>
                        <p>
                            <?php echo $theContentColumn3 ?>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo $imageLogoPath;echo $theImageColumn4 ?>" alt="logo 1"/>
                        <p>
                            <?php echo $theContentColumn4 ?>
                        </p>
                    </li>
                </ul>
            </div>
            <!--end template 4-->

            <!--template 5-->
            <div class="template-5-wrapper">
                <h2><?php echo $theTitle ?></h2>
                <img class="arrow-right" src="<?php echo $imagePath;echo $theImageTop ?>" alt="arrow right" width="62" height="138"/>
                <img src="<?php echo $imagePath;echo $theImageBottom ?>" width="181" height="177" alt="template image"/>
                <p>
                    <?php echo $theContentRow1 ?>
                </p>
                <p>
                    <?php echo $theContentRow2 ?>
                </p>
                <p>
                    <?php echo $theContentRow3 ?>
                </p>
                <p>
                    <?php echo $theContentRow4 ?>
                </p>
                <p>
                    <?php echo $theContentRow5 ?><br/>
                    <?php echo $theContentRow6 ?><br/>
                    <?php echo $theContentRow7 ?>
                </p>
                <p>
                    <br/>
                    <?php echo $theContentRow8 ?><br/>
                    <?php echo $theContentRow9 ?><br/>
                    <?php echo $theContentRow10 ?><br/>
                    <?php echo $theContentRow11 ?>
                </p>
            </div>
            <!--end template 5-->

            <!--template 6-->
            <div class="template-6-wrapper">
                <h2><?php echo $theTitle ?></h2>
                <div class="template-6-list-wrapper">
                    <ul>
                        <li>
                            <p>
                                <?php echo $theColumn1Row1 ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo $theColumn1Row2 ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo $theColumn1Row3 ?>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <?php echo $theColumn2Row1 ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo $theColumn2Row2 ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo $theColumn2Row3 ?>
                            </p>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!--end template 6-->
<?php
get_footer();

?>
