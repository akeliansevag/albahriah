<?php get_header(); ?>

<main>
		<!-- SubHeader =============================================== -->
		<section class="header-video-new">
			<div id="hero_video">
				<div>
					<h3><?=get_field("banner_big_text");?></h3>
					 <?=get_field("small_text");?>
					<?php $link = get_field("button"); ?>
					<a target="<?=$link['target']?>" class="button_intro" href="<?=$link['url']?>"><?=$link['title'];?></a>
				</div>
			</div>
			<video poster="<?=get_field("video_poster")?>" autoplay="true" loop="loop" muted="" class="teaser-video-new">
				<source src="<?=get_field("section_1_video")?>" type="video/mp4">
			</video>
		</section><!-- End Header video -->
		<!-- End SubHeader ============================================ -->

		<div id="get_quote">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<h3><?=get_field("section_2_text")?></h3>
					</div>
					<div class="col-lg-2">
						<?php $link = get_field("section_2_button");?>
						<a target="<?=$link['target']?>" href="<?=$link['url']?>" class="btn_quote"><?=$link['title']?></a>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div><!-- End Get quote -->
		<?php $bg = get_field("section_3_background_image");?>
		<div class="promo_full" style="background-image:url('<?=$bg['sizes']['full-image']?>');">
			<div class="promo_full_wp">
				<div style="background-color:rgba(0,0,0,0.4);">
					<h3><strong><?=get_field("section_3_title");?></strong></h3>
					<?=get_field("section_3_description");?>
					<?php 
						$button1 = get_field("section_3_button_1");
						$button2 = get_field("section_3_button_2");
					?>
					<a class="btn_1" target="<?=$button1['target']?>" href="<?=$button1['url']?>"><?=$button1['title'];?></a>
					<a class="btn_1" target="<?=$button2['target']?>" href="<?=$button2['url']?>"><?=$button2['title'];?></a>

				</div>
				
			</div>
				
			
		</div><!-- End bg_content -->

		<div class="promo_full py-5" style="background:none;background-color:#f3f3f3;">
			<div class="text-center">
				<div class="container">
					<h3 style="color:#333333;font-size:48px;"><strong><?=get_field("section_4_title")?></strong></h3>
					<div class="text-justify">
						<?=get_field("section_4_description");?>
					</div>
					
					<?php $button = get_field("section_4_button");?>
					<a target="<?=$button['target']?>" class="button_intro" href="<?=$button['url']?>"><?=$button['title']?></a>

				</div>
				
			</div>
				
			
		</div><!-- End bg_content -->
		
				
			
		</div><!-- End bg_content -->

		<div class="accordion mb-4 container margin_60_35" id="accordionExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  	Legal Disclaimer
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
					    <?=get_field("legal_disclaimer");?>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  	Email Disclaimer
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				      	<?=get_field("email_disclaimer");?>
				      </div>
				    </div>
				  </div>
				  
				</div>
		
		

		

	</main><!-- End main -->
	
<?php get_footer();?>