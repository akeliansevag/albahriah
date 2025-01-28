<?php get_header();?>
<main>
	<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<?php $slider = get_field("about_us_slider");?>
				<?php foreach($slider as $key => $slide):?>
					<div class="owl-slide cover background-image" data-background="url('<?=$slide['image']['sizes']['full-image']?>')">
						<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<div class="container">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-lg-6 static">
										<div class="slide-text white">
											<h2 class="owl-slide-animated owl-slide-title"><?=$slide['title']?></h2>
											<p class="owl-slide-animated owl-slide-subtitle">
												<?=$slide['description']?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>										
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->
		<div class="container margin_60">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="intro">
                       
                        <h2><?=get_field("section_2_title");?></h2>
						<div class="lead text-justify">
							<?=get_field("section_2_description");?>
						</div>
                        
                    </div>
                </div>
            </div><!-- End row -->
			<br>
			<div class="row">
                
                <div class="col-lg-12">
                	<div class="row">
						<?php $members = get_field("members"); ?>
						<?php foreach($members as $key=>$member):?>
							<div class="col-md-6 col-sm-12">
								<div class="box_style_4">
									<h3><?=$member['title']?></h3>
									<?=$member['description'];?>
								</div>
							</div>
						<?php endforeach;?>
                    	
                    
                  
                    </div><!-- End row -->
				</div>
			</div>
		</div><!-- End container -->

	</main><!-- End main -->
<?php get_footer();?>