<?php
query_posts('post_id=60');
while(have_posts()) : the_post();
	
	$postId = 60;
	if(get_the_ID() == $postId){
	$theTitle = get_the_title();

	$theSubTitleArray = explode("[subtitle]", get_the_content());

	if(count($theSubTitleArray) > 0 ){
		$theSubTitle = $theSubTitleArray[1];
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
}
endwhile;
?>

<div class="template-2-wrapper">
    <h2><?php echo $theTitle; ?></h2>
    <img src="<?php echo $imagePath;echo $theImageLeft; ?>" alt="template 2 images" width="168" height="200"/>
    <div class="template-2-content">
    <p><?php echo $theContentTop; ?></p>
    <img src="<?php echo $imagePath;echo $theImageCenter; ?>" alt="template image" width="89" height="132"/>
    <img src="<?php echo $imagePath;echo $theImageRight; ?>" alt="template image" width="89" height="132"/>
    </div>
    <div class="clear"></div>
    <p><?php echo $theContentBottom; ?></p>
</div>