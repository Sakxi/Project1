<?php
get_header();
?>

<section class="breadcrumb-area style2" style="background-image: url(<?php echo get_template_directory_uri();?>/images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Blog With Sidebar</span>
                                <h1>The (r)Evolution of Media</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li class="active">Blog With Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start blog area-->
        <section id="blog-area" class="blog-large-area">
            <div class="container">
                <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <?php while(have_posts()): the_post();?>
                    
                        <div class="blog-post">
                            <!--Start Single blog Post style4-->
                            <div class="single-blog-post style4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="link-icon">
                                                <a href="single.php"><span class="icon-link1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>By <a href="#">Rubin Santro</a></li>
                                            <li>On <a href="#">March 06, 2019</a></li>
                                            <li>In <a href="#">Traditional</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p><?php the_content();?></p>
                                    </div>
                                    <div class="button">
                                        <a class="btn-one" href="<?php the_permalink();?>">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Single blog Post style4-->
                        </div>
                       <!--pagination xa ya -->
                    
                    <?php endwhile;?>
                    </div>
                    <!--Start sidebar Wrapper-->
                    <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                    <?php get_sidebar();?>
                    </div>
                    <!--End Sidebar Wrapper-->

                </div>
            </div>
        </section>

        <?php
        get_footer();
        ?>