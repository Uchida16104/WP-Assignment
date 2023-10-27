<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap">
	<?php if ( is_home() ) : ?>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@100;200;300;400;500;600;700;800;900&display=swap">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>" />
	<?php if ( is_home() ) : ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css?<?php echo date('Ymd-Hi'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css?<?php echo date('Ymd-Hi'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" />
	<?php else : ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page.css?<?php echo date('Ymd-Hi'); ?>" />
	<?php endif;?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<?php if ( is_home() || is_front_page() ) : ?>
    	<title><?php bloginfo('name'); ?></title>
	<?php else : ?>
 	  	<title> <?php wp_title(); ?>｜でこぼこ文化祭<?php bloginfo('name'); ?></title>
	<?php endif; ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<?php wp_head(); ?>
	
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal-default-theme.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/remodal.css?<?php echo date('Ymd-Hi'); ?>" />

</head>

<body class="<?php
$postData = get_post();
//スラッグ
$slug = $postData->post_name;

$type = $postData->post_type;
//作成途中
if($slug == "business"):
	echo "p-business ";
elseif($slug == "comingsoon"||$slug == "recruit"):
	echo "p-information ";
elseif($slug == "company"):
	echo "p-company ";
elseif($slug == "contact"):
	echo "p-contact ";
elseif($slug == "qa"):
	echo "p-qa ";
elseif(is_archive()):
	if(in_category("works")):
		echo "p-works ";
	elseif(in_category("information")):
		echo "p-information ";
	endif;
else:
	if(in_category("works")):
		echo "p-information-detail p-works p-works-detail";
	elseif(in_category("information")):
		echo "p-information-detail";
	endif;
endif;
?>">
<header class="header-wrapper">
	<div class="container">
		<!-- <div class="header-container"> -->
			<!-- <div class="header header-content"> -->
				<!-- <a href="<?php echo home_url(); ?>/" class="logo"><img alt="" class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" /></a> -->
				<!-- <div class="header-menu"> -->
					<!-- <div></div> -->
					<!-- <div></div> -->
				<!-- </div> -->
			<!-- </div> -->
			<!-- <nav class="header-navigation" id="header-navigation"> -->
				<!-- <div class="header-navigation-list" id="header-navigation-list"> -->
					<!-- <ul> -->
					<?php //wp_nav_menu( array(
					// 'theme_location'=>'place_global',
					// 'container' =>'',
					// 'menu_class' =>'',
					// 'items_wrap' => '%3$s',//<ul>を出力しない
					// ));?>
						<!-- <li><a href="#about">コンテストについて</a></li> -->
						<!-- <li><a href="#award">受賞作品</a></li> -->
						<!-- <li><a href="#works">全作品</a></li> -->
					<!-- </ul> -->
				<!-- </div> -->
			<!-- </nav> -->
		<!-- </div> -->
		<!-- <div class="r_menu">
			<div class="icons">
				<a href="<?php echo home_url(); ?>/cooperator/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/ico01.svg"></a>
				<a href="https://www.rh-navi.jp/recruit_pack/kobayashi/index" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/ico02.svg"></a>
			</div>
			<a href="" class="tel"><img src="<?php echo get_template_directory_uri(); ?>/img/common/tel.svg"></a>
		</div> -->
	</div>
</header>