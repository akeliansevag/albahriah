<?php get_header();?>
	      <main>
        <div class="container margin_60_35">
        	<div class="row">
                
            <div class="col-lg-9">
                	
              <div id="map">
              <?=get_field("map");?>
              </div><!-- end map-->
              
               <hr>
                    
               <?=do_shortcode('[contact-form-7 html_id="contactform" id="6" title="Contact us"]');?>
           </div><!-- End col-md-9 -->
                
           <div class="col-lg-3">
                	<div class="box_style_2">
                        <h5 class="mt-2">Address</h5>
                            <ul>
                                <li><?=get_field("theme_address","options");?></li>
                            </ul>
                             <h5>Contacts</h5>
                            <ul>
                                 <li><strong>Phone</strong><br><a href="tel://<?=get_field("theme_phone","options");?>"><?=get_field("theme_phone","options");?></a></li>
                            	 <li><strong>Fax</strong><br><span><?=get_field("theme_fax","options");?></span></li>
                                
                                <li><strong>Email</strong><br><a href="mailto:<?=get_field("theme_email","options");?>"><?=get_field("theme_email","options");?></a></li>
                                
                            </ul>
                    </div>
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
	</main><!-- End main -->
<?php get_footer();?>