<?php get_header();?>

        
	 <main>
        <div class="container margin_60_35">
        	<div class="row">
                
                <div class="col-lg-12">
                	<div class="row">
						<?php $features = get_field("features");?>
						<?php foreach($features as $feature):?>
							<div class="col-md-4 col-sm-12">
								<div class="box_style_4">
									<h3><i class="icon_pushpin_alt"></i> <?=$feature['title'];?></h3>
									 <?=$feature['description']?>
								</div>
							</div>
						<?php endforeach;?>
                    	
                        </div><!-- End row -->
                    <hr>
                    
                      <div class="accordion mb-4" id="accordionFaq">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     <span class="lead"> <strong>Trading Limits</strong></span>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                      <div class="accordion-body">
                     	<?=get_field("trading_limits");?>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  <span class="lead"> <strong>War Trading Warranties</strong></span>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
                      <div class="accordion-body">
                     	<?=get_field("war_trading_warranties");?>
					  </div>
                    </div>
                  </div>
                  
                </div>
                    
                </div><!-- End col-md-9 -->
                
                
            </div><!-- End row -->
        </div><!-- End container -->
			
	</main><!-- End main -->
<?php get_footer();?>