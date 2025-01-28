<?php get_header();?>
<main>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="intro">
                    <h2><?=get_field("section_1_title");?></h2>
                    <p class="lead text-justify">
                        <?=str_replace(['<p>', '</p>'], '', get_field("section_1_description"));?>
                    </p>
                    <?php 
                        $image = get_field("section_1_image");
                    ?>
                    <p><img src="<?=$image['url']?>" alt="" class="img-fluid"></p>
                </div>
            </div>
        </div><!-- End row -->
        <br>
        <hr>
        <br>
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
                        		<?php if($s2['icon']):?>
                                    <h3><?= $s2['icon'] ? "<img src='".$s2['icon']['sizes']['icon']."' />" : "" ?>  <?=$s2['title'];?></h3>
                                <?php endif;?>
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