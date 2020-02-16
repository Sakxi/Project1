
<?php
/*
Template Name: Contact Us Template

*/
get_header();
?>
<?php
while(have_posts()):the_post();
?>

<section class="breadcrumb-area style2 contact-page" style="background-image: url(<?php echo get_theme_mod('contact_image');?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span><?php echo get_theme_mod('contact_title');?></span>
                                <h1><?php echo get_theme_mod('contact_content');?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Contact Address Area-->
        <section class="contact-address-area">
            <div class="container">
                <div class="row">
                <?php
		$args = array(
			'post_type'=>'contacts',
			'posts_per_page'=>4,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$contacts=new WP_Query($args);
		while($contacts->have_posts()):$contacts->the_post();
		?>
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="img">
                            <h3><?php the_title();?></h3>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                    <?php  endwhile; wp_reset_postdata();?>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                   
                    <!--End Single Contact Address Box-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bottom-text text-center">
                            <p>We’re here to help with any question of our customers, <a href="faq.php">Go to FAQ’s</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Address Area-->

        <!--Start contact form area-->
        <!--Start contact form area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="sec-title with-text">
                                <p>Drop Us a Line</p>
                                <div class="title">Send Your <span>Message</span></div>
                                <p class="bottom-text">If you have question or would like more information on our works, Please complete the form and we’ll aim get back to you with in 24 hours.</p>
                            </div>
                            <div class="inner-box">
                            <?php echo do_shortcode('[caldera_form id="CF5e3d0c6147ca5"]');?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 clearfix">
                        <div class="contact-form-image-box">
                            <img src="<?php echo get_template_directory_uri()?>/images/resources/contact.png" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End contact form area-->
     
        <?php endwhile;?>
<?php
get_footer();
?>