<?php
/**
 * Template Name: Home Page
 */
get_header();
?>
  <!-- ======= Hero Section ======= -->
  <?php
  	$bg_image = get_theme_mod( 'hero_section_bg' );
  ?>
  <section id="hero" style='background: url("<?php echo esc_url( $bg_image ); ?>") top center no-repeat; background-size: cover;' class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>
				 <?php
				 	echo get_theme_mod('hero_section_title','Bettter digital experience with Presento');
				 ?>
			 </h1>
          <h2>
			 <?php
				 	echo get_theme_mod('hero_section_description','We are team of talented designers making websites with Bootstrap');
				 ?>
			 </h2>
          <a href="<?php echo get_theme_mod('hero_section_button_link'); ?>" class="btn-get-started scrollto">
			 <?php
				 	echo get_theme_mod('hero_section_button','Get Started');
				 ?>
			 </a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php
              $client_logos = get_theme_mod('client_logos_display');

              foreach($client_logos as $client_logo){
                $client_logo_id = $client_logo['client_logo_link'];
                $client_logo_url = wp_get_attachment_image_src($client_logo_id,array('400','142'));
              ?>
                <div class="swiper-slide"><img src="<?php echo $client_logo_url[0]; ?>" class="img-fluid" alt=""></div>
              <?php
            }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>
                <?php echo get_theme_mod('about_title','Voluptatem dignissimos provident quasi');?>
              </h3>
              <p>
              <?php echo get_theme_mod('about_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit');?>
              </p>
              <a href="<?php echo esc_url_raw( get_theme_mod('about_button_link','#about'));?>" class="about-btn"><span><?php echo get_theme_mod('about_button','About us');?></span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <?php
                  $presento_about_items = get_theme_mod('about_items');
                  foreach($presento_about_items as $presento_about_item){
                    ?>
                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                      <i class="<?php echo $presento_about_item['about_item_icon']; ?>"></i>
                      <h4><?php echo $presento_about_item['about_item_title']; ?></h4>
                      <p><?php echo $presento_about_item['about_item_description']; ?></p>
                  </div>

                   <?php
                  }
                ?>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php
            $presento_counts_items = get_theme_mod('count_items');
            foreach($presento_counts_items as $presento_counts_item){
              ?>
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="<?php echo $presento_counts_item['count_item_icon']; ?>"></i>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $presento_counts_item['count_item_number']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $presento_counts_item['count_item_title']; ?></p>
                </div>
              </div>
              <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('services_title','Services'); ?></h2>
          <p><?php echo get_theme_mod('services_description','Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'); ?></p>
        </div>

        <div class="row">
          <?php
            $presento_services = get_theme_mod('services_items');
            foreach($presento_services as $presento_service){
              ?>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="<?php echo $presento_service['services_item_icon']; ?>"></i>
                    <h4><a href="#"><?php echo $presento_service['services_item_title']; ?></a></h4>
                    <p><?php echo $presento_service['services_item_description']; ?></p>
                  </div>
                </div>
              <?php
            }
          ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('portfolio_title','PORTFOLIOS'); ?></h2>
          <p><?php echo get_theme_mod('portfolio_description','Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'); ?></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">

              <li data-filter="*" class="filter-active"><?php _e('All','presento'); ?></li>
              <?php
              $presento_portfolios = get_theme_mod('portfolios_items');

                foreach($presento_portfolios as $presento_portfolio){
                  $presento_item_title_count = str_word_count($presento_portfolio['portfolios_item_title']);
                  $presento_portfolio_title = $presento_portfolio['portfolios_item_title'];
                  $presento_portfolio_hypen_condition = (2 == $presento_item_title_count) ?  $presento_item_title_replace = str_replace(' ','-',$presento_portfolio_title) : $presento_portfolio['portfolios_item_title'];


                  ?>
                    <li data-filter=".filter-<?php echo $presento_portfolio_hypen_condition; ?>"><?php echo $presento_portfolio['portfolios_item_title']; ?></li>
                  <?php
                }
              ?>


            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php
          foreach($presento_portfolios as $presento_portfolio){
            $presento_image_id = $presento_portfolio['portfolios_item_image'];
            $presento_image_link = wp_get_attachment_image_src($presento_image_id,array('416','312'));

            $presento_item_title_count = str_word_count($presento_portfolio['portfolios_item_title']);
            $presento_portfolio_title = $presento_portfolio['portfolios_item_title'];
            $presento_portfolio_hypen_condition = (2 == $presento_item_title_count) ?  $presento_item_title_replace = str_replace(' ','-',$presento_portfolio_title) : $presento_portfolio['portfolios_item_title'];


        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $presento_portfolio_hypen_condition; ?>">
            <div class="portfolio-wrap">
              <img src="<?php echo $presento_image_link[0]; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $presento_portfolio['portfolios_item_title']; ?></h4>
                <div class="portfolio-links">
                  <a href="<?php echo $presento_image_link[0]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $presento_portfolio['portfolios_item_title']; ?>"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><?php echo get_theme_mod('testimonial_title','Testimonials'); ?></h2>
          <p><?php echo get_theme_mod('testimonial_description','Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'); ?></p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
              $presento_testimonials = get_theme_mod('testimonial_items',true);
              foreach($presento_testimonials as $presento_testimonial):
                $presento_testimonial_image_id = $presento_testimonial['testimonial_item_image'];
                $presento_testimonial_image = wp_get_attachment_image_src($presento_testimonial_image_id);
            ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?php echo $presento_testimonial_image[0]; ?>" class="testimonial-img" alt="">
                  <h3><?php echo $presento_testimonial['testimonial_item_title']; ?></h3>
                  <h4><?php echo $presento_testimonial['testimonial_item_designation']; ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $presento_testimonial['testimonial_item_description']; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <?php endforeach;?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('faq_title','Frequently Asked Questions'); ?></h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">
          <?php
          $presento_faqs = get_theme_mod('faq_items');
          $presento_generate_number = 1;
            foreach($presento_faqs as $presento_faq):
              $presento_generate_number++;
          ?>
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-<?php echo $presento_generate_number; ?>"><?php echo $presento_faq['faq_question']; ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq-<?php echo $presento_generate_number; ?>" class="collapse" data-bs-parent=".faq-list">
              <p>
              <?php echo $presento_faq['faq_ans']; ?>
              </p>
            </div>
          </li>
          <?php endforeach;?>


        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('team_title','TEAM'); ?></h2>
          <p><?php echo get_theme_mod('team_description','Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'); ?></p>
        </div>

        <div class="row">
          <?php
            $presento_teams = get_theme_mod('team_items',true);
            foreach($presento_teams as $presento_team):
              $presento_team_member_id = $presento_team['team_member_image'];
              $presento_team_member_image = wp_get_attachment_image_src($presento_team_member_id,array('306','306'));
          ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?php echo $presento_team_member_image[0]; ?>" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4><?php echo $presento_team['team_member_name']; ?></h4>
                <span><?php echo $presento_team['team_member_designation']; ?></span>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('contact_title','Contact'); ?></h2>
          <p><?php echo get_theme_mod('contact_description','Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'); ?></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3><?php echo get_theme_mod('contact_our_address','Our Address'); ?></h3>
                  <p><?php echo get_theme_mod('contact_address_details','A108 Adam Street, New York, NY 535022'); ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3><?php echo get_theme_mod('contact_mail_us','Email Us'); ?></h3>
                  <p><?php echo get_theme_mod('contact_mail_details','info@example.com'); ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3><?php echo get_theme_mod('contact_call_us','Call Us'); ?></h3>
                  <p><?php echo get_theme_mod('contact_call_details','+1 5589 55488 55'); ?></p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6">
              <?php
                 $presento_contact_form_shortcode = get_theme_mod('contact_form',true);
                 echo do_shortcode($presento_contact_form_shortcode);
              ?>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
  get_footer()
  ?>