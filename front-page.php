<?php get_header(); ?>

<?php

$main_hero_banner = get_field('main_hero_banner');

$second_hero_banner = get_field('secondary_hero_banner');

$first_three_col = get_field('first_section_of_three');
$first_three_col_section_one = $first_three_col['section_one_content'];
$first_three_col_section_two = $first_three_col['section_two_content'];
$first_three_col_section_three = $first_three_col['section_three_content'];

$cta_buttons = get_field('buttons');

$second_three_col = get_field('second_section_of_three');
$second_three_col_section_one = $second_three_col['section_one_content'];
$second_three_col_section_two = $second_three_col['section_two_content'];
$second_three_col_section_three = $second_three_col['section_three_content'];

?>

<body>
    <div class="wrapper">
        <div class="grid">
            <div class="container">
				<div class="col-1 hmBanner1">
					<div id="BannerCollectionDisplay1_bannerCollectionPanel">
    
				<a href='<?php echo $main_hero_banner['main_hero_link']; ?>' class="Banner theme1">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $main_hero_banner['main_hero_description']; ?></span>
						<span class="bannerTitle"><?php echo $main_hero_banner['main_hero_title']; ?></span>
						<span class="bannerView transition"><?php echo $main_hero_banner['main_hero_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?> ?>?width=640&quality=60&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?>?width=828&quality=60&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?>?width=1534&quality=60&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?>?width=1408&quality=60&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?>?width=1440&quality=85&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $main_hero_banner['main_hero_image']; ?>?width=1920&quality=85&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<<?php echo $main_hero_banner['main_hero_image']; ?>?width=1920&quality=85&mode=crop&format=jpg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        

</div>
				</div>
			</div>
		</div>
	</div>

    <div class="wrapper bg1">
        <div class="fixed grid">
            <div class="container">
				<div class="col-1 hmBanner3">
					<div id="BannerCollectionDisplay2_bannerCollectionPanel">
	
    
				<a href='<?php echo $first_three_col_section_one['section_one_content_link']; ?>' class="Banner theme1">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $first_three_col_section_one['section_one_content_description']; ?></span>
						<span class="bannerTitle"><?php echo $first_three_col_section_one['section_one_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $first_three_col_section_one['section_one_content_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $first_three_col_section_one['section_one_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        
				<a href='<?php echo $first_three_col_section_two['section_two_content_link']; ?>' class="Banner theme2">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $first_three_col_section_two['section_two_content_description']; ?></span>
						<span class="bannerTitle"><?php echo $first_three_col_section_two['section_two_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $first_three_col_section_two['section_two_content_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $first_three_col_section_two['section_two_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        
				<a href='<?php echo $first_three_col_section_three['section_three_content_link']; ?>' class="Banner theme3">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $first_three_col_section_three['section_three_content_description']; ?></span>
						<span class="bannerTitle"><?php echo $first_three_col_section_three['section_three_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $first_three_col_section_three['section_three_content_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>g?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $first_three_col_section_three['section_three_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        

</div>
				</div>
			</div>
		</div>
	</div>
	
    <div class="wrapper">
        <div class="grid fixed">
            <div class="container">	
				<div class="col-1 hmCalltoActions centralise">
					<div class="ctaGrid">
						<a href="<?php echo $cta_buttons['button_one']['url']; ?>" target="_blank" style='display:'>
							<h3><?php echo $cta_buttons['button_one']['title']; ?></h3>
						</a>
						<a href="<?php echo $cta_buttons['button_two']['url']; ?>" style='display:'>
							<h3><?php echo $cta_buttons['button_two']['title']; ?></h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="wrapper">
        <div class="grid">
            <div class="container">				
				<div class="col-1 hmBanner2">
					
				</div>
			</div>
		</div>
	</div>
    <div class="wrapper">
        <div class="fixed grid">
            <div class="container">
				<div class="col-1 hmBannerBrands">
					<div id="BannerCollectionDisplayBrands_bannerCollectionPanel">
	                
	           <?php 
	           $sponsor_repeater = get_field('sponsor_images');
	           
	           if( $sponsor_repeater ) {
                    foreach( $sponsor_repeater as $sponsor ) {
                        $sponsor_logo = $sponsor['sponsor_logo'];
                        $sponsor_url = $sponsor['sponsor_url'];
                        echo '<a href="'.$sponsor_url.'" target="_blank" class="Banner theme1">';
                        echo '<div class="bannerTxtCtr">
    						<span class="bannerDesc"></span>
    						<span class="bannerTitle"></span>
    						<span class="bannerView transition"></span>
					    </div>';
                        echo '<div class="photo">
						<div class="css-image-320" style="background:url('.$sponsor_logo.'?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('.$sponsor_logo.'?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('.$sponsor_logo.'?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('.$sponsor_logo.'?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('.$sponsor_logo.'?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('.$sponsor_logo.'?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('.$sponsor_logo.'?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff") no-repeat center center;"></div>	
					</div>
				</a>   ';
                    }
                }
	           ?>

</div>
				</div>
				<div class="col-1 ctrPad16 social">
					<div class="centralise social">
					<?php if (in_array('facebook', get_field('social_media')) ) { ?>   
						<a title="Tracs | Thurstaston Bike Shop & Hire Facebook"
							class="facebook" style='display:'
							rel="noopener"
							target="_blank"
							href='https://www.facebook.com/thurstastonbikes/'>
						</a>
				    <?php } ?>
				    <?php if (in_array('twitter', get_field('social_media')) ) { ?>
						<a title="Tracs | Thurstaston Bike Shop & Hire Twitter"
							class="twitter" style='display:'
							rel="noopener"
							target="_blank"
							href='https://twitter.com/tracsdelamere'>
						</a>
					<?php } ?>
				    <?php if (in_array('instagram', get_field('social_media')) ) { ?>
						<a title="Tracs | Thurstaston Bike Shop & Hire Instagram"
							class="instagram"
							style='display:'
							rel="noopener"
							target="_blank"
							href='https://www.instagram.com/tracsthurstaston/'>
						</a>
					<?php } ?>
					<?php if (in_array('pintrest', get_field('social_media')) ) { ?>
						<a title="Tracs | Thurstaston Bike Shop & Hire Pinterest"
							class="pinterest"
							style='display:none'
							rel="noopener"
							target="_blank"
							href=''>
						</a>
					<?php } ?>
					<?php if (in_array('youtube', get_field('social_media')) ) { ?>
						<a title="Tracs | Thurstaston Bike Shop & Hire YouTube"
							class="youtube"
							style='display:none'
							rel="noopener"
							target="_blank"
							href=''>
						</a>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <div class="wrapper bg1">
        <div class="fixed grid">
            <div class="container">
				<div class="col-1 hmBanner3">
					<div id="BannerCollectionDisplay3_bannerCollectionPanel">
	
    
				<a href='<?php echo $second_three_col_section_one['section_one_content_link']; ?>' target="_blank" class="Banner theme1">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $second_three_col_section_one['section_one_content_description']; ?></span>
						<span class="bannerTitle1"><?php echo $second_three_col_section_one['section_one_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $second_three_col_section_one['section_one_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $second_three_col_section_one['section_one_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        
				<a href='<?php echo $second_three_col_section_two['section_two_content_link']; ?>' class="Banner theme2">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $second_three_col_section_two['section_two_content_description']; ?></span>
						<span class="bannerTitle1"><?php echo $second_three_col_section_two['section_two_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $second_three_col_section_two['section_two_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $second_three_col_section_two['section_two_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        
				<a href='<?php echo $second_three_col_section_three['section_three_content_link']; ?>' target="_blank" class="Banner theme3">
					<div class="bannerTxtCtr">
						<span class="bannerDesc"><?php echo $second_three_col_section_three['section_three_content_description']; ?></span>
						<span class="bannerTitle1"><?php echo $second_three_col_section_three['section_three_content_title']; ?></span>
						<span class="bannerView transition"><?php echo $second_three_col_section_three['section_three_button_text']; ?></span>
					</div>
					<div class="photo">
						<div class="css-image-320 " style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=640&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
                        <div class="css-image-414" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=828&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-767" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=1534&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1024" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=1408&quality=60&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1440" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=1440&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-1800" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>
						<div class="css-image-4k" style="background:url('<?php echo $second_three_col_section_three['section_three_content_image']; ?>?width=1920&quality=85&mode=crop&format=jpeg&bgcolor=ffffff') no-repeat center center;"></div>	
					</div>
				</a>   
        

</div>
				</div>
			</div>
		</div>
	</div>
	
    


<a href="#devInfoPopper" style="display:none;" class="ErrorPopUp">Click me trigger</a>        <div style="display: none">            <div id="devInfoPopper" class="fbox">                <div class="alert info"  style="display:none;">                    <strong id="devPopInfoTitle">Info Main Title</strong>                    <p id="devPopInfoMsg">My message <a href="javascript:void(0);" onclick="$.fancybox.close();">Close</a></p>                </div>                <div class="alert notice" style="display:none;">                    <strong id="devPopNoticeTitle">Notice Main Title</strong>                    <p id="devPopNoticeMsg">My message <a href="javascript:void(0);" onclick="$.fancybox.close();">Close</a></p>                </div>                <div class="alert success" style="display:none;">                    <strong id="devPopSuccessTitle">Success Main Title</strong>                    <p id="devPopSuccessMsg">My message <a href="javascript:void(0);" onclick="$.fancybox.close();">Close</a></p>                </div>                <div class="alert error" style="display:none;">                    <strong id="devPopErrorTitle"> Error Main Title</strong>                    <p id="devPopErrorMsg">My message <a href="javascript:void(0);" onclick="$.fancybox.close();">Close</a></p>                </div>            </div>        </div> 

</body>

<?php get_footer(); ?>