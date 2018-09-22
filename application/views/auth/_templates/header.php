<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="<?php echo $charset; ?>">
        <title><?php echo $title; ?></title>
<?php if ($mobile === FALSE): ?>
        <!--[if IE 8]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
<?php endif; ?>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="google" content="notranslate">
        <meta name="robots" content="noindex, nofollow">

        <link rel="shortcut icon" type="image/png" href="<?php echo base_url($frameworks_dir . '/assets/images/favicon.png'); ?>">
        <!-- Place favicon.ico in the root directory -->

        <!-- all css here -->
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/bootstrap.min.css'); ?>">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/animate.css'); ?>">
        <!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/owl.carousel.css'); ?>">
        <!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/font-awesome.min.css'); ?>">
        <!-- magnific-popup.css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/magnific-popup.css'); ?>">
        <!-- slicknav.min.css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/slicknav.min.css'); ?>">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/styles.css'); ?>">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/responsive.css'); ?>">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.min.css">
        <!-- modernizr css -->
        <script src="<?php echo base_url($frameworks_dir . '/assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
<?php if ($mobile === FALSE): ?>
        <!--[if lt IE 9]>
            <script src="<?php echo base_url($plugins_dir . '/html5shiv/html5shiv.min.js'); ?>"></script>
            <script src="<?php echo base_url($plugins_dir . '/respond/respond.min.js'); ?>"></script>
        <![endif]-->
<?php endif; ?>
    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- preloder-wrap -->
    <div id="cssLoader3" class="preloder-wrap">
        <div class="loader">
            <div class="child-common child4"></div>
            <div class="child-common child3"></div>
            <div class="child-common child2"></div>
            <div class="child-common child1"></div>
        </div>
    </div>
    <!-- preloder-wrap -->
    <!-- search-area -->
    <div class="search-area">
        <span class="closs-btn">Close</span>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="search-form">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search Here">
                            <button type="button" name="button" class="btn-style">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-area -->
    <!-- heared area start -->
    <header class="header-area">
        <div class="header-top bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <p>Personal loans up to $40,000</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12"  ng-app="app">
                        <div class="header-top-right text-right" ng-controller="AppCtrl as ctrl">
                            <ul>
                                <li><a onclick="login()" style="cursor: pointer"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="<?php echo site_url('/register'); ?>"><i class="fa fa-user-plus"></i> Register</a></li>

                                <div class="example">
                                    <!--<button id="b2">A title with a text under</button>
                                    <button id="b3">A success message!</button>
                                    <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
                                    <button id="b5">... and by passing a parameter, you can execute something else for "Cancel".</button>
                                    <button id="b6">A message with a custom icon</button>-->
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="logo">
                            <h1><a href="<?php echo site_url('/'); ?>">Lending</a></h1>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="header-middle-right">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>MON - SAT (9AM - 5PM)</p>
                                        <span>Sunday colsed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>MAIL US</p>
                                        <span>info@yourdomail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>PHONE US</p>
                                        <span> (+1) 1144-1254</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                        <div class="logo">
                            <h1><a href="<?php echo site_url('/'); ?>">Lending</a></h1>
                        </div>
                    </div>
                    <div class="col-md-11 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <ul id="navigation">
                                <li class="<?php echo ($parent_menu == 'userhome')? 'active' : '' ?>">
                                    <a href="<?php echo site_url('/'); ?>">Home</a>
                                </li>
                                <li class="<?php echo ($parent_menu == 'about')? 'active' : '' ?>"><a href="<?php echo site_url('/about'); ?>">About</a></li>
                                <li class="<?php echo ($parent_menu == 'contact')? 'active' : '' ?>"><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                                <li class="<?php echo ($parent_menu == 'borrow')? 'active' : '' ?>"><a href="#">Borrow <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog2.html">Blog Two column</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-post.html">Blog Post </a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo ($parent_menu == 'invest')? 'active' : '' ?>"><a href="#">Invest <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog2.html">Blog Two column</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-post.html">Blog Post </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-3">
                        <div class="search-wrap text-right">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                        <div class="responsive-menu-wrap floatright"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- heared area end -->