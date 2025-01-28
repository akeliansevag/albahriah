<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Favicons-->
	<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/img/favicon2.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?=get_template_directory_uri()?>/img/apple-touch-icon.png">


	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div><!-- End Preload -->

	<div class="layer"></div><!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-none d-lg-block">
						<!--<span id="tag_line">Al-Bahriah Insurance & Reinsurance SAL</span>-->
						<a href="<?=home_url();?>"><img class="top-header-logo" src="<?=get_field("theme_main_logo","options");?>" /></a>
					</div>
					<div class="col-md-6 d-flex justify-content-end align-items-end">
						<ul id="top_links">
							<li><a href="tel://<?=get_field("theme_phone","options");?>" id="phone_top"><?=get_field("theme_phone","options");?></a>
								<span class="top-location"><i class="icon-location"></i>BEIRUT - LEBANON</span></li>
							<li class="d-md-inline"><a class="top-search" href="<?=get_permalink( get_page_by_path( 'vessel-search' ) )?>"><i class="icon-search"></i>SEARCH VESSELS</a></li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div class="row d-flex align-items-center pt-3 pb-3">
				<div class="col-lg-2 col-6">
					<!--<div id="logo">
						<a href="<?=home_url();?>"><img src="https://albahriah.sevagakelian.com/wp-content/uploads/2023/04/bfull2.png" alt="Home Alarms"></a>
					</div>-->
					<a class="menu-search" href="<?=get_permalink( get_page_by_path( 'vessel-search' ) )?>"><i class="icon-search"></i>VESSEL SEARCH</a>
				</div>
				<nav class="col-lg-10 col-6 position-relative">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="https://al-bahriah.com/wp-content/uploads/2023/04/blackheadercenterednew.png" alt="Al-Bahriah Logo">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
						<ul>				
							<li><a href="<?=get_permalink( get_page_by_path( 'about-us' ) )?>">ABOUT</a></li>
                            <li><a href="<?=get_permalink( get_page_by_path( 'underwriting' ) )?>">UNDERWRITING</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'loss-prevention' ) )?>">LOSS PREVENTION</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'claims' ) )?>">CLAIMS</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'security' ) )?>">SECURITY</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'correspondents' ) )?>">CORRESPONDENTS</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'products' ) )?>">PRODUCTS</a></li>
							<li><a href="<?=get_permalink( get_page_by_path( 'contact-us' ) )?>">CONTACT US</a></li>
						</ul>
					</div><!-- End main-menu -->
				</nav>
			</div>
		</div><!-- container -->
	</header><!-- End Header -->
	<?php if(!get_field("disable_header")):?>
		<?php 
			$banner_image = get_field("banner_image");
		?>
		<section class="parallax_window_in short" data-parallax="scroll" data-image-src="<?= $banner_image ? $banner_image['sizes']['inner-pages'] : "" ?>" data-natural-width="1400" data-natural-height="350">
			<?php if(get_field("page_subtitle")):?>
				<div class="page-subtitle">
					<div class="container">
						<p>
							<i>"<?=get_field("page_subtitle");?>"</i>
						</p>	
					</div>
					
				</div>
			<?php endif;?>

			<div id="sub_content_in">
				<div class="container">
					<?=  get_field("page_title") ? "<h1>".get_field("page_title")."</h1>" : ""; ?>
					<p>
						
					</p>
				</div>
			</div>
		</section><!-- End section -->
	<?php endif;?>
	