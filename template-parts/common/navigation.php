<nav id="navbar" class="navbar order-last order-lg-0">
        <?php
		  	$presento_main_menu = wp_nav_menu(array(
				  'theme_location'=>'main-menu',
				  'echo'=>false,
			  ));
			  $presento_main_menu = str_replace('menu-item-has-children','menu-item-has-children dropdown',$presento_main_menu);
			  echo wp_kses_post( $presento_main_menu);
		  ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->