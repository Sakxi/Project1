
<?php

/*

Template Name: Single-Project Page Template

*/
get_header();
?>
<?php

while(have_posts()): the_post();
?>
  <!--Start breadcrumb area-->
  <section class="breadcrumb-area style2" style="background-image: url(<?php echo the_post_thumbnail_url() ;?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Traditional</span>
                                <h1>Office Partition Walls</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="project.php">Projects</a></li>
                                    <li class="active">Single Project</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Project Description area-->
        <section class="project-description-area">
            <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="<?php echo get_theme_mod('prosingle_image');?>" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="project-description-image-box">
                            <img src="<?php echo get_theme_mod('prosingle_image1');?>" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="project-description-content">
                            <div class="sec-title">
                                <p><?php echo get_theme_mod('siudi_title_prosingle');?></p>
                                <div class="title"><?php echo get_theme_mod('siudi_subtitle_prosingle');?></div>
                            </div>
                            <div class="inner-content">
                                <div class="bottpm-text">
                                <?php echo get_theme_mod('siudi_content_prosingle');?>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Description area-->

        <!--Start Project Info Area-->
        <section class="project-info-area">
            <div class="pattern-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="<?php echo get_theme_mod('prosingle_image2');?>" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="project-info-content">
                            <div class="project-info-title">
                                <h3>Project Info</h3>
                            </div>
                            <div class="inner-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-maps-and-location1"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Location</h4>
                                            <span>Hetauda</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-ruler"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Square Meters</h4>
                                            <span>452,65m<sup>2</sup></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Project Year</h4>
                                            <span>2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-price"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Price Value</h4>
                                            <span>Rs. 2,00,000</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-group"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Project Head</h4>
                                            <span>Mr. Satish Nepal</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="project-info-image-box">
                            <img src="<?php echo get_theme_mod('prosingle_image3');?>" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Info Area-->

        <!--Start Video Image Holder Area-->
        <section class="video-image-holder-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="<?php echo get_theme_mod('video');?>" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="crystalo Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-project-image-gallery">
                            <img src=<?php echo get_theme_mod('video1');?> alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video Image Gallery Area-->

        <!--Start Similar projects Area-->
        <section class="similar-projects-area">
            <div class="container-fluid similar-projects-content">
                <div class="similar-project-title text-center">
                    <h2>Similar projects</h2>
                </div>
                <div class="row">
                <?php
		$args = array(
			'post_type'=>'simprojects',
			'posts_per_page'=>4,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$teams=new WP_Query($args);
		while($teams->have_posts()):$teams->the_post();
		?>
                    <!--Start Single Similar Project-->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="single-similar-project">
                            <div class="img-holder">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <span><?php the_field('position');?></span>
                                <h3><a href="#"><?php the_field('name');?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php  endwhile; wp_reset_postdata();?>
                    <!--End Single Similar Project--loop launu parne cha hai-->
                </div>
            </div>
        </section>
        <!--End Similar projects Area-->
        <?php endwhile;?>


<?php
get_footer();
?>