<?php

while(have_posts()) : the_post();
	
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

	/**
	 * Template 2
	 */
	$theImageLeftArray = explode("[imageleft]", get_the_content());
	if(count($theImageLeftArray) > 0 ){
		$theImageLeft = $theImageLeftArray[1];
	}

	$theImageCenterArray = explode("[imagecenter]", get_the_content());
	if(count($theImageCenterArray) > 0 ){
		$theImageCenter = $theImageCenterArray[1];
	}

	$theImageRightArray = explode("[imageright]", get_the_content());
	if(count($theImageRightArray) > 0 ){
		$theImageRight = $theImageRightArray[1];
	}

	$theContentTopArray = explode("[contenttop]", get_the_content());
	if(count($theContentTopArray) > 0 ){
		$theContentTop = $theContentTopArray[1];
	}

	$theContentBottomArray = explode("[contentbottom]", get_the_content());
	if(count($theContentBottomArray) > 0 ){
		$theContentBottom = $theContentBottomArray[1];
	}

	/**
	 * Template 3
	 */
	$theImageTopArray = explode("[imagetop]", get_the_content());
	if(count($theImageTopArray) > 0 ){
		$theImageTop = $theImageTopArray[1];
	}

	$theImageBottomArray = explode("[imagebottom]", get_the_content());
	if(count($theImageBottomArray) > 0 ){
		$theImageBottom= $theImageBottomArray[1];
	}

	/**
	 * Template 4
	 */
	$theImageColumn1Array = explode("[imagecolumn1]", get_the_content());
	if(count($theImageColumn1Array) > 0 ){
		$theImageColumn1 = $theImageColumn1Array[1];
	}

	$theImageColumn2Array = explode("[imagecolumn2]", get_the_content());
	if(count($theImageColumn2Array) > 0 ){
		$theImageColumn2 = $theImageColumn2Array[1];
	}

	$theImageColumn3Array = explode("[imagecolumn3]", get_the_content());
	if(count($theImageColumn3Array) > 0 ){
		$theImageColumn3 = $theImageColumn3Array[1];
	}

	$theImageColumn4Array = explode("[imagecolumn4]", get_the_content());
	if(count($theImageColumn4Array) > 0 ){
		$theImageColumn4 = $theImageColumn4Array[1];
	}

	$theContentColumn1Array = explode("[contentcolumn1]", get_the_content());
	if(count($theContentColumn1Array) > 0 ){
		$theContentColumn1 = $theContentColumn1Array[1];
	}

	$theContentColumn2Array = explode("[contentcolumn2]", get_the_content());
	if(count($theContentColumn2Array) > 0 ){
		$theContentColumn2 = $theContentColumn2Array[1];
	}

	$theContentColumn3Array = explode("[contentcolumn3]", get_the_content());
	if(count($theContentColumn3Array) > 0 ){
		$theContentColumn3 = $theContentColumn3Array[1];
	}

	$theContentColumn4Array = explode("[contentcolumn4]", get_the_content());
	if(count($theContentColumn4Array) > 0 ){
		$theContentColumn4 = $theContentColumn4Array[1];
	}

	/**
	 * Template 5
	 */
	$theContentRow1Array = explode("[contentrow1]", get_the_content());
	if(count($theContentRow1Array) > 0 ){
		$theContentRow1 = $theContentRow1Array[1];
	}

	$theContentRow2Array = explode("[contentrow2]", get_the_content());
	if(count($theContentRow2Array) > 0 ){
		$theContentRow2 = $theContentRow2Array[1];
	}

	$theContentRow3Array = explode("[contentrow3]", get_the_content());
	if(count($theContentRow3Array) > 0 ){
		$theContentRow3 = $theContentRow3Array[1];
	}

	$theContentRow4Array = explode("[contentrow4]", get_the_content());
	if(count($theContentRow4Array) > 0 ){
		$theContentRow4 = $theContentRow4Array[1];
	}

	$theContentRow5Array = explode("[contentrow5]", get_the_content());
	if(count($theContentRow5Array) > 0 ){
		$theContentRow5 = $theContentRow5Array[1];
	}

	$theContentRow6Array = explode("[contentrow6]", get_the_content());
	if(count($theContentRow6Array) > 0 ){
		$theContentRow6 = $theContentRow6Array[1];
	}

	$theContentRow7Array = explode("[contentrow7]", get_the_content());
	if(count($theContentRow7Array) > 0 ){
		$theContentRow7 = $theContentRow7Array[1];
	}

	$theContentRow8Array = explode("[contentrow8]", get_the_content());
	if(count($theContentRow8Array) > 0 ){
		$theContentRow8 = $theContentRow8Array[1];
	}

	$theContentRow9Array = explode("[contentrow9]", get_the_content());
	if(count($theContentRow9Array) > 0 ){
		$theContentRow9 = $theContentRow9Array[1];
	}

	$theContentRow10Array = explode("[contentrow10]", get_the_content());
	if(count($theContentRow10Array) > 0 ){
		$theContentRow10 = $theContentRow10Array[1];
	}

	$theContentRow11Array = explode("[contentrow11]", get_the_content());
	if(count($theContentRow11Array) > 0 ){
		$theContentRow11 = $theContentRow11Array[1];
	}

	/**
	 * Template 6
	 */
	$theColumn1Row1t6Array = explode("[column1row3t6]", get_the_content());
	if(count($theColumn1Row1t6Array) > 0 ){
		$theColumn1Row1t6 = $theColumn1Row1t6Array[1];
	}

	$theColumn1Row2t6Array = explode("[column1row3t6]", get_the_content());
	if(count($theColumn1Row2t6Array) > 0 ){
		$theColumn1Row2t6 = $theColumn1Row2t6Array[1];
	}

	$theColumn1Row3t6Array = explode("[column1row3t6]", get_the_content());
	if(count($theColumn1Row3t6Array) > 0 ){
		$theColumn1Row3t6 = $theColumn1Row3t6Array[1];
	}

	$theColumn2Row1t6Array = explode("[column2row1t6]", get_the_content());
	if(count($theColumn2Row1Array) > 0 ){
		$theColumn2Row1t6 = $theColumn2Row1Array[1];
	}

	$theColumn2Row2t6Array = explode("[column2row2t6]", get_the_content());
	if(count($theColumn2Row2t6Array) > 0 ){
		$theColumn2Row2t6 = $theColumn2Row2t6Array[1];
	}
	
	$theColumn2Row3t6Array = explode("[column2row3t6]", get_the_content());
	if(count($theColumn2Row3t6Array) > 0 ){
		$theColumn2Row3t6 = $theColumn2Row3t6Array[1];
	}
endwhile;
?>