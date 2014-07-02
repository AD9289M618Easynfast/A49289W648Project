<?php
query_posts('post_id=66');
while(have_posts()) : the_post();
	
	$postId = 66;
	if(get_the_ID() == $postId){
	$theTitle = get_the_title();

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
}
endwhile;
?>
<h2><?php echo $theTitle ?></h2>
                <img class="arrow-right" src="<?php echo $imagePath;echo $theImageBottom ?>" alt="arrow right" width="62" height="138"/>
                <img src="<?php echo $imagePath;echo $theImageTop ?>" width="181" height="177" alt="template image"/>
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