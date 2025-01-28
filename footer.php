<footer>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-md-8">
					<img src="https://albahriah.sevagakelian.com/wp-content/uploads/2023/04/bahriahligosmall.png" height="70" alt="Home Alarms" id="logo_footer">
					<p><?=get_field("theme_footer_description","options");?></p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h3>Discover</h3>
					<ul>
						<li><a href="<?=get_permalink( get_page_by_path( 'about-us' ) )?>">About us</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'underwriting' ) )?>">Underwritting</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'loss-prevention' ) )?>">Loss Prevention</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'claims' ) )?>">Claims</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'security' ) )?>">Security</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'correspondents' ) )?>">Correspondents</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'products' ) )?>">Products</a></li>
						<li><a href="<?=get_permalink( get_page_by_path( 'contact-us' ) )?>">Contact us</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-12" id="contact_bg">
					<h3>Contacts</h3>
					<ul id="contact_details_footer">
						<li id="address_footer"><?=nl2br(get_field("theme_address","options"));?></li>
						<li id="phone_footer"><a href="tel://<?=get_field("theme_phone","options");?>"><?=get_field("theme_phone","options");?></a> / Fax: <span> <?=get_field("theme_fax","options");?></span></li>
						<li id="email_footer"><a href="mailto:<?=get_field("theme_email","options");?>"><?=get_field("theme_email","options");?></a></li>
					</ul>
				</div>
			</div><!-- End row -->	
			<div id="social_footer">
				<ul>
					<li><a href="tel:<?=get_field("theme_phone","options");?>"><i class="icon-phone"></i></a></li>
					<li><a href="mailto:<?=get_field("theme_email","options");?>"><i class="icon-email"></i></a></li>
					
				</ul>
			</div>
		</div><!-- End container -->
		<div id="copy">
			<div class="container">
				© Al Bahriah <?=date("Y")?> - All rights reserved.
			</div>
		</div><!-- End copy -->
	</footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	

<?php wp_footer(); ?>

</body>
</html>
