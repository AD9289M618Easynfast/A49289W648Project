<?php
query_posts('post_id=68');
while(have_posts()) : the_post();
	
	$postId = 68;
	if(get_the_ID() == $postId){

	$theTitle = get_the_title();
	/**
	 * Template 6
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

	$theColumn1Row3Array = explode("[column1row3]", get_the_content());
	if(count($theColumn1Row3Array) > 0 ){
		$theColumn1Row3 = $theColumn1Row3Array[1];
	}
	
	$theColumn2Row3Array = explode("[column2row3]", get_the_content());
	if(count($theColumn2Row3Array) > 0 ){
		$theColumn2Row3 = $theColumn2Row3Array[1];
	}
}
endwhile;
?>
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