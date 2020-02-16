
<?php

/*
Template Name: About Us Page Template
*/
get_header();
?>
<?php

while(have_posts()): the_post();
?>

<section class="breadcrumb-area" style="background-image: url(<?php echo the_post_thumbnail_url() ;?>;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1><?php echo get_theme_mod('siudi_title_welcome');?></h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="<?php echo home_url('/');?>">Home</a></li>
                                    <li class="active">Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Company Overview Area-->
        <section class="company-overview-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-box clearfix">
                            <div class="sec-title">
                                <p><?php echo get_theme_mod('siudi_title_overview');?></p>
                                <div class="title"><?php echo get_theme_mod('siudi_subtitle_overview');?></div>
                            </div>
                            <div class="text">
                                <p><?php echo get_theme_mod('siudi_content_overview');?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="history-content-box clearfix">
                            <div class="history-carousel owl-carousel owl-theme">
                                <!--Start Single History Content-->
                                <?php
		$args = array(
			'post_type'=>'sliders',
			'posts_per_page'=>-1,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$sliders=new WP_Query($args);
		while($sliders->have_posts()):$sliders->the_post();
		?>
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>1983</h3>
                                            </div>
                                            <div class="title">
                                                <h3><?php the_title();?></h3>
                                            </div>
                                            <div class="text">
                                                <p><?php the_content();?></p>
                                                <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php  endwhile; wp_reset_postdata();?>
                                <!--End Single History Content-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fact-counter">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="36" data-speed="5000" data-refresh-interval="50">36</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Years of<br> Experience</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="5" data-speed="5000" data-refresh-interval="50">5</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images\icon\k.png" alt="">
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Projects<br> Completed</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="24" data-speed="5000" data-refresh-interval="50">24</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Branches<br> Worldwide</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="47" data-speed="5000" data-refresh-interval="50">47</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Awards<br> Holds in Hand</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>

            </div>
        </section>
        <!--End Company Overview Area-->


<!---Start TEam Area-->
        <section class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p><?php echo get_theme_mod('siudi_title_handle');?></p>
                            <div class="title"><?php echo get_theme_mod('siudi_content_handle');?></div>
                        </div>
                        <div class="view-all-member style2 float-right">
                            <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
		$args = array(
			'post_type'=>'teams',
			'posts_per_page'=>4,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$teams=new WP_Query($args);
		while($teams->have_posts()):$teams->the_post();
		?>
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.php">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span><?php the_field('position');?></span></p>
                                <h3><?php the_field('name');?></h3>
                            </div>
                        </div>
                    </div>
                    <?php  endwhile; wp_reset_postdata();?>
                </div>
            </div>
        </section>

  <!--Start Brand area style2-->
  <section class="brand-area style2">
            <div class="container">
                <div class="row">
    
                    <div class="col-xl-12">
                    <?php
		$args = array(
			'post_type'=>'brands',
			'posts_per_page'=>6,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$brands=new WP_Query($args);
		while($brands->have_posts()):$brands->the_post();
		?>
                        <ul>
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <a href="#"><img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p><?php the_field('name');?></p>
                                </div>
                            </li>
                            <?php  endwhile; wp_reset_postdata();?>
                            <!--End Single Brand Item-->
                            
                        </ul>
                      
                    </div>
                </div>
              
            </div>
            
        </section>
        <!--End Brand area style2-->
<?php endwhile;?>

<?php
get_footer();
?>