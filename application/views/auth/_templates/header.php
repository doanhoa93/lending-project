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
        <link rel="icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAqElEQVRYR+2WYQ6AIAiF8W7cq7oXd6v5I2eYAw2nbfivYq+vtwcUgB1EPPNbRBR4Tby2qivErYRvaEnPAdyB5AAi7gCwvSUeAA4iis/TkcKl1csBHu3HQXg7KgBUegVA7UW9AJKeA6znQKULoDcDkt46bahdHtZ1Por/54B2xmuz0uwA3wFfd0Y3gDTjhzvgANMdkGb8yAyY/ro1d4H2y7R1DuAOTHfgAn2CtjCe07uwAAAAAElFTkSuQmCC">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,700italic">
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/adminlte/css/adminlte.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/icheck/css/blue.css'); ?>">





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
                            <p>We are landscaping company, offer various landscape services</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
                            <h1><a href="index.html">Martxa</a></h1>
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
                            <h1><a href="index.html">Martxa</a></h1>
                        </div>
                    </div>
                    <div class="col-md-11 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <ul id="navigation">
                                <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li class="active"><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li><a href="index3.html">Home Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.html">about One</a></li>
                                        <li><a href="about2.html">about Two</a></li>
                                        <li><a href="about3.html">about Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Service <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="service.html">service One</a></li>
                                        <li><a href="service2.html">service Two</a></li>
                                        <li><a href="single-service.html">service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="team.html">team <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="team.html">team One</a></li>
                                        <li><a href="team2.html">team Two <span class="pull-right">+</span></a>
                                            <ul class="submenu">
                                                <li><a href="#">Sabmenu One</a></li>
                                                <li><a href="#">Sabmenu Two</a></li>
                                                <li><a href="#">Sabmenu Three <span class="pull-right">+</span></a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Sabmenu One</a></li>
                                                        <li><a href="#">Sabmenu Two</a></li>
                                                        <li><a href="#">Sabmenu Three</a></li>
                                                        <li><a href="#">Sabmenu Four</a></li>
                                                        <li><a href="#">Sabmenu Five</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Sabmenu Four</a></li>
                                                <li><a href="#">Sabmenu Five</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team3.html">Team Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="portfolio.html">Portfolio Page</a></li>
                                        <li><a href="portfolio2.html">Portfolio Two</a></li>
                                        <li><a href="portfolio3.html">Portfolio Two</a></li>
                                        <li><a href="portfolio4.html">Portfolio Masonary</a></li>
                                        <li><a href="portfolio5.html">Portfolio Masonary </a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog2.html">Blog Two column</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-post.html">Blog Post </a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="megamenu">
                                        <li>
                                            <a class="mega-title" href="#">MegaMenu Title</a>
                                            <ul>
                                                <li><a href="about.html">About One</a></li>
                                                <li><a href="about2.html">About Two</a></li>
                                                <li><a href="service.html">service One</a></li>
                                                <li><a href="service2.html">service Two</a></li>
                                                <li><a href="single-service.html">service Single</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="mega-title"  href="#">MegaMenu Title</a>
                                            <ul>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="skill.html">Skill Page</a></li>
                                                <li><a href="pricing.html">Pricing Table</a></li>
                                                <li><a href="pricing2.html">Pricing Two</a></li>
                                                <li><a href="pricing3.html">Pricing Three</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="mega-title"  href="#">MegaMenu Title</a>
                                            <ul>
                                                <li><a href="testmonial.html">Testmonial One</a></li>
                                                <li><a href="team.html">Team page</a></li>
                                                <li><a href="commingsoon.html">Comming Soon</a></li>
                                            </ul>
                                        </li>
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