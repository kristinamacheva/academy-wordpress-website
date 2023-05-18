<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
    get_header();
?>	
<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
						<?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">За нас</h1>
							<ul>
								<li>
									<a class="active" href="<?php echo home_url(); ?>">Начало</a>
								</li>
								<li>За нас</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-60 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<?php 
									$image = get_field('infoimg');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
    									echo wp_get_attachment_image( $image, $size );
									}
								?>
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15">
							<div class="sec-title">
								<div class="sub-title blue"><?php the_field('info'); ?></div>
								<h2 class="title mb-17"><?php the_field('infoheading'); ?></h2>
								<div class="bold-text mb-22"><?php the_field('infosubheading'); ?></div>
								<div class="desc"><?php the_content(); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- Counter Section Start -->
			<div id="rs-counter" class="rs-counter style2-about pt-10 md-pt-10">
				<div class="container">
					<div class="row couter-area">
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/counter/bg1.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count kplus"><?php the_field('infoboxonetext'); ?></h2>
									<h4 class="title mb-0"><?php the_field('infoboxoneheading'); ?></h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/counter/bg2.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count"><?php the_field('infoboxtwotext'); ?></h2>
									<h4 class="title mb-0"><?php the_field('infoboxtwoheading'); ?></h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/counter/bg3.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count percent"><?php the_field('infoboxthreetext'); ?></h2>
									<h4 class="title mb-0"><?php the_field('infoboxthreeheading'); ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter Section End -->

			<!-- About Section Start -->
			<div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="<?php bloginfo('template_directory'); ?>/assets/images/about/history.png" alt="About Image">
							</div>
                            <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-idea"></i></span><?php the_field('taboneshort'); ?></a>
                                </li>
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-document"></i></span><?php the_field('tabtwoshort'); ?></a>
                                </li>
                                <li class="nav-item tab-btns single-history last-item">
                                    <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span><?php the_field('tabthreeshort'); ?></a>
                                </li>
                            </ul>
						</div>
						<div class="offset-lg-1"></div>
						<div class="col-lg-5">
							<div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title"><?php the_field('taboneheading'); ?></h2>
                                        <div class="desc"><?php the_field('tabonetext'); ?></div>
                                    </div>
                                    <div class="tab-img">
                                        <?php 
											$image = get_field('taboneimage');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
											if( $image ) {
    											echo wp_get_attachment_image( $image, $size );
											}
										?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title"><?php the_field('tabtwoheading'); ?></h2>
                                        <div class="desc"><?php the_field('tabtwotext'); ?></div>
                                    </div>
                                    <div class="tab-img">
                                        <?php 
											$image = get_field('tabtwoimage');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
											if( $image ) {
    											echo wp_get_attachment_image( $image, $size );
											}
										?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title"><?php the_field('tabthreeheading'); ?></h2>
                                        <div class="desc"><?php the_field('tabthreetext'); ?></div>
                                    </div>
                                    <div class="tab-img">
                                        <?php 
											$image = get_field('tabthreeimage');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
											if( $image ) {
    											echo wp_get_attachment_image( $image, $size );
											}
										?>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs">
                        
                    </div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- Team Section Start -->
            <div id="rs-team" class="rs-team style1 gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30">
                        <div class="sub-title primary">Лектори</div>
                        <h2 class="title mb-0">Екипът на IMG „IT ACADEMY“</h2>
                    </div>
                    <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">

                        <?php query_posts('cat=6'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="team-item">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                            ?>
                            <div class="content-part">
                                <h4 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <span class="designation">Лектор</span>
                                <ul class="social-links">
                                    <li><a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php the_field('google'); ?>"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <?php
                            endwhile;
                            endif;
                        ?>   

                    </div>
                </div>
            </div>
            <!-- Team Section End -->         

			<!-- Partner Start -->
			<div class="rs-partner pb-100 md-pb-70">
				<div class="container">
					<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
    						<div class="partner-item">
    							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/partner/1.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/partner/2.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/partner/3.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/partner/4.png" alt=""></a>
    						</div>
                            <div class="partner-item">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/partner/5.png" alt=""></a>
                            </div>
					</div>
				</div> 
			</div>
			<!-- Partner End -->

			<!-- Newsletter section start -->
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="sec-title">
                                        <div class="sub-title white-color">Бюлетин</div>
                                        <h2 class="title mb-0 white-color">Абонирайте се, за да се присъедините към нашата общност </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form class="newsletter-form">
                                        <input type="email" name="email" placeholder="Въведете имейла си" required="">
                                        <button type="submit">Изпращане</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 

<?php
    get_footer();
?>  