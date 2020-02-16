

<?php

/*
Template Name: Single Blog Page Template
*/
get_header();
?>
<?php

while(have_posts()): the_post();
?>

        <!--Start Single Post Info Area-->
        <section class="single-post-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-post-info-content text-center">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Rubin Santro</a></li>
                                    <li>On <a href="#">March 06, 2019</a></li>
                                    <li>In <a href="#">Traditional</a></li>
                                </ul>
                            </div>
                            <h1 class="blog-title">Best low cost interior designing<br> ideas for you</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Single Post Info Area-->

        <!--Start blog single area-->
        <section id="blog-area" class="blog-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <div class="single-blog-post">
                                <div class="main-image-box">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="Awesome Image">
                                </div>
                                <div class="top-text-box">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble
                                        that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy
                                        to distinguish.</p>
                                    <h3>“Innovative solutions to move your business forward.”</h3>
                                    <p>In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances owing
                                        to the claims of duty or the obligations of business it will accepted.</p>
                                </div>
                                <div class="author-quote-box">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="text">
                                                <p>To take a trivial example, which ever undertakes laborious physical exercise, except obtain some advantage.</p>
                                                <div class="name">
                                                    <h3>Jessica Mcdade, <span>Interior Designer</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quote-bottom-text">
                                    <p>Righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal
                                        blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                </div>
                                <div class="blog-single-image-with-text-box">
                                    <ul class="image-box clearfix">
                                        <li>
                                            <img src="images\blog\blog-single-1.jpg" alt="Awesome Image">
                                        </li>
                                        <li>
                                            <img src="images\blog\blog-single-2.jpg" alt="Awesome Image">
                                        </li>
                                    </ul>
                                    <div class="text-box">
                                        <p>Their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                            and when nothing being able to do what we like best, every pleasure is to be welcomed and every pain avoided in certain circumstances owing the claims of duty or the obligations of business it will frequently
                                            occur that repudiated.</p>
                                    </div>
                                </div>

                                <div class="blog-single-bottom-content-box">
                                    <h2>Ideas for Study Room Design </h2>
                                    <p>Steer companies away from risky outcomes denounce with righteous indignation who are so beguiled demoralized pleasure of the moment perfectly repudiated and annoyances are so beguiled and demoralized by the charms pleasure
                                        of the moment, so blinded by desire, that they cannot foresee the rouble.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>Righteous indignation dislike demoralized.</li>
                                                <li>Nothing prevents able to do we like best ever.</li>
                                                <li>Equal blame those who fail theirduty.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>Except to obtain some advantage from it?.</li>
                                                <li>One who avoids pain that produce resultant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tag-with-social-links-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner-content clearfix">
                                                <div class="tag-box pull-left">
                                                    <p>Tags:</p>
                                                    <ul>
                                                        <li><a href="#">Ideas,</a></li>
                                                        <li><a href="#">Room,</a></li>
                                                        <li><a href="#">Wall,</a></li>
                                                        <li><a href="#">Painting</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-links-box pull-right">
                                                    <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:</p>
                                                    <ul class="sociallinks fix">
                                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Start prev next option-->
                                <div class="blog-prev-next-option">
                                    <div class="single prev">
                                        <div class="image-thumb">
                                            <img src="images\blog\prev-thumb-1.jpg" alt="Image">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="link">
                                                        <a href="#">prev Post<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Best low-cost interior designing ideas for your room</a></h3>
                                        </div>
                                    </div>
                                    <div class="single next">
                                        <div class="image-thumb">
                                            <img src="images\blog\next-thumb-1.jpg" alt="Image">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="link">
                                                        <a href="#">Next Post<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Wondering if interior design is a dying filed? Read this</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--End prev next option-->
                            </div>

                            <div class="author-box-holder">
                                <div class="inner-box">
                                    <div class="img-box">
                                        <img src="images\blog\author.png" alt="Awesome Image">
                                    </div>
                                    <div class="text">
                                        <h3>Lilly Anderson, <span>Author</span></h3>
                                        <p>Denouncing pleasure and praising pain was born and I will give you a complete all account of the system, and expound the actual teachings.</p>
                                        <div class="author-social-links">
                                            <p>Follow On:</p>
                                            <ul class="fix">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="inner-comment-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-blog-title-box">
                                            <h2>Read Comments</h2>
                                        </div>
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images\blog\comment-1.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>Steven Rich</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Omnis iste natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optiocumque nihil impedit quo minus id quod maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box mar-left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images\blog\comment-2.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>William Cobus</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images\blog\comment-3.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>Van Wimbilton</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->

                                    </div>
                                </div>
                            </div>
                            <!--Start add comment box-->
                            <div class="add-comment-box">
                                <div class="single-blog-title-box">
                                    <h2>Post a Comment</h2>
                                </div>
                                <form id="add-comment-form" action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="fname" value="" placeholder="Name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="comment" placeholder="Your Comments" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn-one" type="submit">Post a Comment<span class="flaticon-next"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End add comment box-->

                        </div>
                    </div>

                    <!--Start sidebar Wrapper-->
                    <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                        <?php get_sidebar();?>
                            </div>
                            <!--End single-sidebar-->
                        </div>
                    </div>
                    <!--End Sidebar Wrapper-->


                </div>
            </div>

        </section>
        <!--End blog single area-->

        <?php endwhile;?>

<?php
get_footer();
?>