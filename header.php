<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
 	wp_head();
  ?>

</head>

<body <?php body_class(); ?>>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
		<?php if(!has_custom_logo()):?>
				<h1 class="logo me-auto">
					<a href="<?php home_url('/'); ?>">
						<?php bloginfo('name');?><span>.</span>
				</a>
			</h1>
		<?php else:?>
			<a href="<?php home_url('/'); ?>" class="logo me-auto">
				<?php the_custom_logo();?>
			</a>
		<?php endif;?>
      <?php
			get_template_part('template-parts/common/navigation');
		?>

      <a href="#about" class="get-started-btn scrollto"><?php _e('Get Started','presento');?></a>
    </div>
  </header><!-- End Header -->