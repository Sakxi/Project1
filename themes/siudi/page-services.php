
       
       
<?php

/*
Template Name: Services Page Template
*/
get_header();
?>
<?php

while(have_posts()): the_post();
?>

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Our Services</span>
                                <h1>Bringing Great Design</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="<?php echo home_url('/');?>">Home</a></li>
                                    <li class="active">Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start services style2 Service Page-->
        <section class="services-style2-service-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="sec-title">
                            <p><?php echo get_theme_mod('cat_title');?></p>
                            <div class="title"><?php echo get_theme_mod('cat_content');?></div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="text">
                            <p><?php echo get_theme_mod('cat_content1');?></p>
                        </div>
                    </div>
                </div>
                <div class="row">  <?php
		$args = array(
			'post_type'=>'services',
			'posts_per_page'=>-1,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$services=new WP_Query($args);
		while($services->have_posts()):$services->the_post();
		?>

                    <!--Start single service style2-->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder">
                                <div class="icon-holder">
                                    <span class="icon-concept"></span>
                                </div>
                                <div class="inner">
                                    <h3><?php the_title();?></h3>
                                    <div class="text">
                                        <p><?php the_content();?></p>
                                    </div>
                                    <div class="read-more">
                                        <a class="btn-one" href="<?php the_permalink();?>">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style2-->
                <?php  endwhile; wp_reset_postdata();?>
                    <!--End single service style2-->
                </div>
            </div>
        </section>
        <!--End services style2 Service Page-->

        <!--Start services style1 service page-->
        <section class="services-style1-service-page">
            <div class="container">
                <div class="sec-title text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <p><?php echo get_theme_mod('special_title');?></p>
                    <div class="title"><?php echo get_theme_mod('special_content');?></div>
                </div>
                <div class="row">
                <?php
		$args = array(
			'post_type'=>'specials',
			'posts_per_page'=>-1,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$specials=new WP_Query($args);
		while($specials->have_posts()):$specials->the_post();
		?>

                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder bg-white">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="count">
                                            <h1><?php the_field('count');?></h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3><?php the_title();?></h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p><?php the_content();?></p>
                                    </div>
                                    <div class="read-more">
                                        <a href="#"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  endwhile; wp_reset_postdata();?>
                    <!--End single service style1-->
                    <!--End single service style1-->
                </div>
            </div>
        </section>
        <!--End services style1 service page-->

        <!--Start Testimonial Style3 service page-->
        <section class="testimonial-style3-service-page">
            <div class="container">
                <div class="sec-title">
                    <p><?php echo get_theme_mod('test_title')?></p>
                    <div class="title"><?php echo get_theme_mod('test_content')?></div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                    
                        <div class="testimonial-carousel-2 owl-carousel owl-theme">
                        <?php
		$args = array(
			'post_type'=>'tests',
			'posts_per_page'=>-1,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$tests=new WP_Query($args);
		while($tests->have_posts()):$tests->the_post();
		?>
                            <!--Start Single Testimonial style2-->
                            <div class="single-testimonial-style3">
                                <div class="inner-content">
                                    <div class="client-info">
                                        <div class="image">
                                            <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                        </div>
                                        <div class="title">
                                            <h3><?php the_title();?></h3>
                                            <span><?php the_field('city');?></span>
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php  endwhile; wp_reset_postdata();?>
                            <!--End Single Testimonial style2 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Style3 service page-->
        <?php endwhile;?>

<?php
get_footer();
?>