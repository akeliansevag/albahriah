<?php get_header();?>
<main>
    <div class="container margin_60">
    
        <div class="row">
            <div class="col-md-6">
                <?php 
                    $image = get_field("content_image");
                    if($image):
                ?>
                    <img src="<?=$image['url']?>" alt="" class="img-fluid">
                <?php endif;?>
            </div>
            <div class="col-md-6">
                <div class="the-content">
                    <?=the_content();?>
                   
                </div>
            </div>
        </div><!-- End row -->
        
    </div><!-- End container -->

</main><!-- End main -->
<?php get_footer();?>