<?php
query_posts('post_id=62');
while(have_posts()) : the_post();

	$postId = 62;
	if(get_the_ID() == $postId){
	
	$theTitle = get_the_title();

	$theSubTitleArray = explode("[subtitle]", get_the_content());

	if(count($theSubTitleArray) > 0 ){
		$theSubTitle = $theSubTitleArray[1];
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

	$theContentRow1Array = explode("[contentrow1]", get_the_content());
	if(count($theContentRow1Array) > 0 ){
		$theContentRow1 = $theContentRow1Array[1];
	}

	$theContentRow2Array = explode("[contentrow2]", get_the_content());
	if(count($theContentRow2Array) > 0 ){
		$theContentRow2 = $theContentRow2Array[1];
	}
}
endwhile;
?>
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