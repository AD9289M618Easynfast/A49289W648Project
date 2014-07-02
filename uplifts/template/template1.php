<?php
query_posts('post_id=58');
while(have_posts()) : the_post();
	
	$postId = 58;
	if(get_the_ID() == $postId){
		$theTitle = get_the_title();

		$theSubTitleArray = explode("[subtitle]", get_the_content());

		if(count($theSubTitleArray) > 0 ){
			$theSubTitle = $theSubTitleArray[1];
		}
		/**
	 	* Template 1
	 	*/
		$theColumn1Row1Array = explode("[column1row1]", get_the_content());
		if(count($theColumn1Row1Array) > 0 ){
			$theColumn1Row1 = $theColumn1Row1Array[1];
		}

	$theColumn1Row2Array = explode("[column1row2]", get_the_content());
	if(count($theColumn1Row2Array) > 0 ){
		$theColumn1Row2 = $theColumn1Row2Array[1];
	}

	$theColumn2Row1Array = explode("[column2row1]", get_the_content());
	if(count($theColumn2Row1Array) > 0 ){
		$theColumn2Row1 = $theColumn2Row1Array[1];
	}

	$theColumn2Row2Array = explode("[column2row2]", get_the_content());
	if(count($theColumn2Row2Array) > 0 ){
		$theColumn2Row2 = $theColumn2Row2Array[1];
	}

	$theColumn3Row1Array = explode("[column3row1]", get_the_content());
	if(count($theColumn3Row1Array) > 0 ){
		$theColumn3Row1 = $theColumn3Row1Array[1];
	}
	}
endwhile;
?>
<!--template 1-->
                    <div class="template-1-wrapper">
                        <h2><?php echo $theTitle; ?></h2>
                        <ul>
                            <!--col 1-->
                            <li>
                                <p>
                                    <?php echo $theColumn1Row1; ?>
                                </p>
                                <p>
                                     <?php echo $theColumn1Row2;?>
                                </p>
                            </li>
                            <!--end col 1-->

                            <!--col 2--> 
                            <li>
                                <p>
                                     <?php echo $theColumn2Row1; ?>
                                </p>
                                <p>
                                     <?php echo $theColumn2Row2; ?>
                                </p>
                            </li>
                            <!--end col 2-->

                            <!--col 3-->
                            <li>
                                <p>
                                     <?php echo $theColumn3Row1; ?>
                                </p>
                            </li>
                            <!--end col 3-->
                        </ul>
                    </div>
                    <!--end template 1-->