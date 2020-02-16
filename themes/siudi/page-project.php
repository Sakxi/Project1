 

<?php

/*

Template Name: Project Page Template

*/
get_header();
?>
<?php

while(have_posts()): the_post();
?>
 <!--Start breadcrumb area-->
 <section class="breadcrumb-area style2" style="background-image: url(<?php echo the_post_thumbnail_url() ;?>;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Our Projects</span>
                                <h1>More than 2300 Projects</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="<?php echo home_url('/');?>">Home</a></li>
                                    <li><a href="project.php">Projects</a></li>
                                    <li class="active">Classic View V1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Main project area-->
        <section class="main-project-area">
            <div class="container">
                <ul class="project-filter post-filter has-dynamic-filters-counter">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
                    <li data-filter=".mod"><span class="filter-text">Modern</span></li>
                    <li data-filter=".contem"><span class="filter-text">Contemporary</span></li>
                    <li data-filter=".trad"><span class="filter-text">Traditional</span></li>
                    <li data-filter=".ret"><span class="filter-text">Retreat</span></li>
                </ul>
                <div class="row filter-layout masonary-layout">
                <?php
		$args = array(
			'post_type'=>'proimages',
			'posts_per_page'=>-1,
			'orderby'=>'title',
			'order'=>'ASC'
		);

		$proimages=new WP_Query($args);
		while($proimages->have_posts()):$proimages->the_post();
		?>
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="<?php echo site_url('/single-project');?>"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="project-single.php">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--End single project item-->
                    <?php  endwhile; wp_reset_postdata();?>
                </div>
            </div>
        </section>
        <?php endwhile;?>


        <?php
get_footer();
?>