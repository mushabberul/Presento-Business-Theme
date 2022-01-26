<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
	 <div class="row">

		<div class="col-lg-3 col-md-6 footer-contact">
		  <?php
		  	if(is_active_sidebar('footer-about')){
				  dynamic_sidebar('footer-about');
			  }
		  ?>
		</div>

		<div class="col-lg-2 col-md-6 footer-links">
		  <h4><?php _e('Useful Links','presento');?></h4>
		  <?php
		  	wp_nav_menu(array(
				  'theme_location'=>'footer-useful-link',
				  'walker' => new WPDocs_Walker_Nav_Menu()
			  ));
		  ?>
		</div>

		<div class="col-lg-3 col-md-6 footer-links">
		  <h4><?php _e('Our Services','presento');?></h4>
		  <?php
		  	wp_nav_menu(array(
				  'theme_location'=>'footer-our-services',
				  'walker' => new WPDocs_Walker_Nav_Menu()
			  ));
		  ?>
		</div>

		<div class="col-lg-4 col-md-6 footer-newsletter">
		  <?php
		  	if(is_active_sidebar('footer-newsletter')){
				  dynamic_sidebar('footer-newsletter');
			  }
		  ?>
		</div>

	 </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
	 <div class="copyright">
		&copy; <?php
			if(is_active_sidebar('footer-copyright')){
				dynamic_sidebar('footer-copyright');
			}
		?>
	 </div>

  </div>
  <div class="social-links text-center text-md-end pt-3 pt-md-0">
	 <?php
	 	if(is_active_sidebar('footer-social')){
			 dynamic_sidebar('footer-social');
		 }
	 ?>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
wp_footer();
?>

</body>

</html>