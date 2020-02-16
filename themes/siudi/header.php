<!DOCTYPE html>
<!--
@Author: Satish Nepal <satish>
@Date:   30-Dec-2019
@Email:  nepalsatish1@outlook.com
@Last modified by:   satish
@Last modified time: 30-Dec-2019 05-56-21 PM
@Copyright: Satish Nepal
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Siundi International</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
   
 <?php
wp_head();
 ?>
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body
<?php
body_class();
?>
>
    <div class="boxed_wrapper">
        <!-- <div class="preloader"></div> -->
        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>We have Answers</p>
                    <ul>
                        <li>+324 123 45 978</li>
                        <li>support@siundi.com</li>
                        <li>Mon - Sat: 9am to 6pm</li>
                    </ul>
                </div>
                <div class="top-style2-right d-sm-none">
                    <ul class="top-right-menu">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Top Bar style2 -->
        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <?php
                    if(has_custom_logo()||is_customize_preview()){
                        the_custom_logo();
                    }
                    else{
                        ?>
                    }
                    <a href="index.php">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo/logo.png" alt="Awesome Logo" class="img-fluid">
                    </a>
                <?php } ?>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="index.php">Home</a>
                                </li>
                                <li><a href="<?php echo site_url('/about-us');?>">About Us</a>
                                </li>
                                <li class="dropdown"><a href="<?php echo site_url('/services');?>">Services</a>
                                    <ul>
                                        <li><a href="service-single.php">Interior Design</a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li class="dropdown"><a href="#">Electrical</a>
                                            <ul>
                                                <li><a href="#">Lighting</a></li>
                                                <li><a href="#">Switch &amp; Sockets</a></li>
                                                <li><a href="#">Wiring</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Automation Tools</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="<?php echo site_url('/project');?>">Projects</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('/project');?>">Completed Projects</a></li>
                                        <li><a href="#">Ongoing Projects</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('/blog');?>">Blog</a>
                                </li>
                                <li><a href="#">Products</a>
                                </li>
                                <li><a href="<?php echo site_url('/contact-us');?>">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--  <div class="cart-box">
                            <a href="shoping-cart.php"><span class="icon-bag"><span class="number">0</span></span></a>
                        </div> -->
                        <div class="button">
                            <a class="btn-one" href="#">Get a Quote<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        </html>
        <!--End Main Header-->
