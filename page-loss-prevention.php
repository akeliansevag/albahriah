<?php get_header();?>
  	 <main>
        <div class="container margin_60_35">
        <div class="accordion mb-4" id="accordionFaq">
            <?php 
              $section_1_items = get_field("section_1_items");
            ?>
            <?php if($section_1_items):?>
                <?php foreach($section_1_items as $key=>$s1):?>
                  <?php 
                    $newclass = "collapsed";
                    $expanded = "false";
                    $showclass = "";
                    if($key==0){
                      $newclass = "";
                      $expanded = "true";
                      $showclass = "show";
                    }
                  ?>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-<?=$key?>">
                        <button class="accordion-button <?=$newclass?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?=$key?>" aria-expanded="<?=$expanded?>" aria-controls="collapse-<?=$key?>">
                         <?=$s1['title'];?>
                        </button>
                      </h2>
                      <div id="collapse-<?=$key?>" class="accordion-collapse collapse <?=$showclass;?>" aria-labelledby="heading-<?=$key?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                          <?=$s1['description'];?>
                        </div>
                      </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
          
             </div>
                <hr>

        	<div class="row">
                
                <div class="col-lg-12">
                	<div class="row">
                      <?php 
                        $section_2_items = get_field("section_2_items");
                        if($section_2_items):
                      ?>
                      <?php foreach($section_2_items as $key=>$s2):?>

                    	  <div class="col-md-4 col-sm-12">
                        	<div class="box_style_4">
                        		<h3><?= $s2['icon'] ? "<img src='".$s2['icon']['sizes']['icon']."' />" : "" ?>  <?=$s2['title'];?></h3>
                                <p><?=$s2['description'];?></p>
                            </div>
                        </div>

                      <?php endforeach;?>
                      <?php endif;?>
                    </div><!-- End row -->
                    
                
                    
                </div><!-- End col-md-9 -->
                
                
            </div><!-- End row -->
        </div><!-- End container -->
			
	</main><!-- End main -->
<?php get_footer();?>