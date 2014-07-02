<?php
query_posts('post_id=64');
while(have_posts()) : the_post();

$postId = 64;
	if(get_the_ID() == $postId){
	
	$theTitle = get_the_title();

	$theSubTitleArray = explode("[subtitle]", get_the_content());

	if(count($theSubTitleArray) > 0 ){
		$theSubTitle = $theSubTitleArray[1];
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
}
endwhile;
?>
 	<h2><?php echo $theTitle; ?></h2>
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