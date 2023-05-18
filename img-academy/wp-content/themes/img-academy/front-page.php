<?php
    get_header();
?>  
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Banner Section Start -->
        <div id="rs-banner" class="rs-banner style1">
            <div class="container">
                <div class="banner-content text-center">
                    <h1 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms"><?php the_field('bannerheading'); ?></h1>
                    <div class="desc mb-35 wow wow fadeInRight" data-wow-delay="900ms" data-wow-duration="3000ms"><?php the_field('bannersubheading'); ?></div>
                    <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                        <a class="readon banner-style" href="#">Запишете се на курс</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pr-50 md-pr-15">
                        <div class="about-part">
                            <div class="sec-title mb-40">
                                <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"><?php the_field('aboutheading'); ?></h2>
                                <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <?php the_field('abouttext'); ?>
                                </div>
                            </div>
                            <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <?php 
                                        $image = get_field('pagelogo');
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
            </div>
        </div>
        <!-- About Section End -->

        <!-- Categories Section Start -->
        <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">
                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary">Обучения</div>
                            <h2 class="title mb-0">Популярни категории</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-part text-right sm-text-left">
                            <a href="#" class="readon">Вижте всички категории</a>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php query_posts('cat=7'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="">
                            <div class="icon-part">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }
                                ?>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><?php the_title(); ?></h4>
                                <span class="courses"><?php the_field('courses-count'); ?></span>
                            </div>
                        </a>
                    </div>

                    <?php
                        endwhile;
                        endif;
                    ?>

                </div>
            </div>
        </div>
        <!-- Categories Section End -->

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">
                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary">Курсове</div>
                            <h2 class="title mb-0">Популярни курсове</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-part text-right sm-text-left">
                            <a href="#" class="readon">Вижте всички курсове</a>
                        </div>
                    </div> 
                </div>
                <div class="row">

                    <?php query_posts('cat=3'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="courses-item">
                            <div class="img-part">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }
                                ?>
                            </div>
                            <div class="content-part">
                                <ul class="meta-part">
                                    <li><span class="price"><?php the_field('price'); ?></span></li>
                                    <li><a class="categorie" href="#"><?php the_field('course-category'); ?></a></li>
                                </ul>
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="user"><i class="fa fa-user"></i><?php the_field('students-count'); ?></li>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <?php the_field('rating'); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="<?php the_permalink(); ?>"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        endif;
                    ?>

                </div>
            </div>
        </div>
        <!-- Popular Courses Section End -->

        <!-- Faq Section Start -->
        <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 padding-0">
                      <div class="main-part">
                        <div class="title mb-40 md-mb-15">
                            <h2 class="text-part">FAQ – Често задавани въпроси</h2>
                        </div>
                          <div class="faq-content">
                              <div id="accordion" class="accordion">
                                 <div class="card">
                                     <div class="card-header">
                                         <a class="card-link" data-toggle="collapse" href="#collapseOne"><?php the_field('question1', '308'); ?></a>
                                     </div>
                                     <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                         <div class="card-body">
                                            <?php the_field('answer1', '308'); ?>
                                         </div>
                                     </div>
                                 </div>
                                    <div class="card">
                                      <div class="card-header">
                                         
                                          <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"><?php the_field('question2', '308'); ?></a>
                                      </div>
                                      <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                          <div class="card-body">
                                            <?php the_field('answer2', '308'); ?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                      <div class="card-header">
                                         
                                          <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"><?php the_field('question3', '308'); ?></a>
                                      </div>
                                      <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                          <div class="card-body">
                                             <?php the_field('answer3', '308'); ?>
                                          </div>
                                      </div>
                                  </div>     
                                  <div class="card">
                                      <div class="card-header">
                                         
                                          <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false"><?php the_field('question4', '308'); ?></a>
                                      </div>
                                      <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                          <div class="card-body">
                                             <?php the_field('answer4', '308'); ?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                      <div class="card-header">
                                         
                                          <a class="card-link collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false"><?php the_field('question5', '308'); ?></a>
                                      </div>
                                      <div id="collapsefive" class="collapse" data-parent="#accordion" style="">
                                          <div class="card-body">
                                             <?php the_field('answer5', '308'); ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="img-part media-icon">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq Section Start -->

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
                            <h4 class="name"><a href=""><?php the_title(); ?></a></h4>
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

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial home-style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30 text-center">
                    <div class="sub-title primary">Отзиви</div>
                    <h2 class="title mb-0">Какво казват нашите курсисти</h2>
                </div>
                <div class="rs-carousel owl-carousel" 
                    data-loop="true" 
                    data-items="2" 
                    data-margin="30" 
                    data-autoplay="true" 
                    data-hoverpause="true" 
                    data-autoplay-timeout="5000" 
                    data-smart-speed="800" 
                    data-dots="true" 
                    data-nav="false" 
                    data-nav-speed="false" 

                    data-md-device="2" 
                    data-md-device-nav="false" 
                    data-md-device-dots="true" 
                    data-center-mode="false"

                    data-ipad-device2="1" 
                    data-ipad-device-nav2="false" 
                    data-ipad-device-dots2="true"

                    data-ipad-device="2" 
                    data-ipad-device-nav="false" 
                    data-ipad-device-dots="true" 

                    data-mobile-device="1" 
                    data-mobile-device-nav="false" 
                    data-mobile-device-dots="false">
                    

                    <?php query_posts('cat=2'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="testi-item">
                        <div class="author-desc">                                
                            <div class="desc"><img class="quote" src="assets/images/testimonial/style5/quote2.png" alt=""><?php the_content(); ?></div>
                            <div class="author-img">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#"><?php the_title(); ?></a>
                            <span class="designation">Отзив</span>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-0 pb-100 md-pt-70 md-pb-70">
            <div class="rs-quick-contact">
                 <div class="inner-part text-center mb-50">
                        <h2 class="title mb-15">Контактна форма</h2>
                        <p>Свържете се с нас</p>
                </div>
                <div id="form-messages"></div>
                    <?php
                        echo do_shortcode('[contact-form-7 id="24" title="Форма за контакти 1"]');
                    ?>
                </div> 
            </div> 
        </div>
        <!-- Contact Section End -->  

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
        <!-- Section bg Wrap 2 End -->
    </div> 
    <!-- Main content End -->
<?php
    get_footer();
?>  