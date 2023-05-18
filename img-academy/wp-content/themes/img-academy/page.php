<?php
    get_header();
?>	

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();?>
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
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <ul>
                        <li>
                            <a class="active" href="<?php echo home_url(); ?>">Начало</a>
                        </li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        <!-- Breadcrumbs End -->  

    		<div class="article-post">
    			<p id="content"><?php the_content(); ?></p>
    		</div>
            
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

<?php	
	} 
}  
?>	

<?php
    get_footer();
?>  