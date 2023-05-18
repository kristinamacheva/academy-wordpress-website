<?php
    get_header();
?>	

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();?>
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <?php 
                        $image = get_field('banner');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <ul>
                        <li>
                            <a class="active" href="<?php echo home_url(); ?>">Начало</a>
                        </li>
                        <li>За курса</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Intro Courses -->
            <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="col-lg-8 md-mb-50">
                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                                    <li class="nav-item tab-btns">
                                        <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">За курса</a>
                                    </li>
                                    <li class="nav-item tab-btns">
                                        <a class="nav-link tab-btn" id="prod-curriculum-tab" data-toggle="tab" href="#prod-curriculum" role="tab" aria-controls="prod-curriculum" aria-selected="false">Програма</a>
                                    </li>
                                    <li class="nav-item tab-btns">
                                        <a class="nav-link tab-btn" id="prod-instructor-tab" data-toggle="tab" href="#prod-instructor" role="tab" aria-controls="prod-instructor" aria-selected="false">Лектори</a>
                                    </li>
                                </ul>
                                <div class="tab-content tabs-content" id="myTabContent">
                                    <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                        <div class="content white-bg pt-30">
                                            <!-- Cource Overview -->
                                            <div class="course-overview">
                                                <div class="inner-box">
                                                    <h4><?php the_field('aboutcourseheading'); ?></h4>
                                                    <p><?php the_field('aboutcoursetext'); ?></p>
                                                    <ul class="student-list">
                                                        <li><?php the_field('students-count'); ?> Курсисти</li>
                                                        <li><span class="theme_color"><?php the_field('rating'); ?></span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (<?php the_field('ratingcount'); ?> Rating)</li>
                                                    </ul>
                                                    <h3><?php the_field('courseinfoheading'); ?></h3>
                                                    <ul class="review-list">
                                                        <li><strong><?php the_field('persontitle'); ?></strong> - <?php the_field('personname'); ?></li>
                                                        <li><strong>Цена (група)</strong> - <?php the_field('price'); ?> </li>
                                                        <li><strong>За записване</strong> - <?php the_field('signingcontacts'); ?></li>
                                                        <li><strong>Брой участници в група</strong> - мин. <?php the_field('coursestudentscount'); ?> човека *Курсът ще стартира при събиране на нужния минум.</li>
                                                        <li><strong>Формат</strong> - <?php the_field('format'); ?></li>
                                                    </ul>                                          
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="prod-curriculum-tab">
                                        <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                            <h4>Програма</h4>
                                            <p>
                                              <?php the_field('schedule'); ?>  
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                        <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                            <h3 class="instructor-title">Лектори</h3>
                                            <div class="row rs-team style1 blue-color transparent-bg clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 sm-mb-30">
                                                    <div class="team-item">
                                                        <?php 
                                                            $image = get_field('personimage');
                                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                            if( $image ) {
                                                                echo wp_get_attachment_image( $image, $size );
                                                            }
                                                        ?>
                                                        <div class="content-part">
                                                            <h4 class="name"><a href="#"><?php the_field('personname'); ?></a></h4>
                                                            <span class="designation"><?php the_field('persontitle'); ?></span>
                                                            <ul class="social-links">
                                                                <li><a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="<?php the_field('google'); ?>"><i class="fa fa-google"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>                                          
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Column -->
                        <div class="video-column col-lg-4">
                            
                            <div class="inner-column">
                            <!-- Video Box -->
                                <div class="intro-video media-icon orange-color2">
                                    <?php if(!dynamic_sidebar('right-sidebar')): ?>
                                    <?php endif;?>
                                </div>

                                <!-- End Video Box -->
                                <div class="course-features-info">
                                    <ul>
                                        <li class="lectures-feature">
                                            <i class="fa fa-files-o"></i>
                                            <span class="label">Лекции</span>
                                            <span class="value"><?php the_field('lecturescount'); ?></span>
                                        </li>
                                       
                                        <li class="quizzes-feature">
                                            <i class="fa fa-puzzle-piece"></i>
                                            <span class="label">Практически изпити</span>
                                            <span class="value"><?php the_field('examscount'); ?></span>
                                        </li>
                                       
                                        <li class="duration-feature">
                                            <i class="fa fa-clock-o"></i>
                                            <span class="label">Продължителност</span>
                                            <span class="value"><?php the_field('duration'); ?></span>
                                        </li>
                                      
                                        <li class="students-feature">
                                            <i class="fa fa-users"></i>
                                            <span class="label">Курсисти</span>
                                            <span class="value"><?php the_field('coursestudentscount'); ?></span>
                                        </li>
                                       
                                        <li class="assessments-feature">
                                            <i class="fa fa-check-square-o"></i>
                                            <span class="label">Оценки</span>
                                            <span class="value"><?php the_field('grades'); ?></span>
                                        </li>
                                    </ul>
                                </div>
     
                                <div class="btn-part">
                                    <a href="#" class="btn readon2 orange"><?php the_field('price'); ?></a>
                                    <a href="#" class="btn readon2 orange-transparent">Запишете се сега</a>
                                </div>
                            </div>
                        </div>                        
                    </div>                
                </div>
            </section>
            <!-- End intro Courses -->

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
	} 
}  
?>	

<?php
    get_footer();
?>  