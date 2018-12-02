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
        <link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css'>
        <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/assets/css/radios-to-slider.css'); ?>">
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
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <?php if (!($admin_link == 1 || $user_link == 1)): ?>
                                <?php else: ?>
                                    <div class="btn-group">
                                        <li>
                                            <span style="cursor: pointer;color: white">

                                            </span>
                                        </li>
                                        <li><a href="<?php echo site_url('/profile'); ?>">Hi, <?php echo $user_login['firstname'].$user_login['lastname']; ?></a></li>
                                        <li><a title="Logout" href="<?php echo site_url('auth/logout/user'); ?>" style="font-size: 20px"><i class="fa fa-sign-out"></i></a></li>
                                    </div>

                                <?php endif; ?>
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
                        <?php if (!($admin_link == 1 || $user_link == 1)): ?>
                            <div class="header-middle-right">
                                <ul>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-sign-in" style="font-size: 25px"></i>
                                        </div>
                                        <div class="contact-info">
                                            <a onclick="login()" style="font-size: 20px; color: white; cursor: pointer; line-height: 35px">Login</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-user-plus" style="font-size: 25px"></i>
                                        </div>
                                        <div class="contact-info">
                                            <a href="<?php echo site_url('/register'); ?>" style="font-size: 20px; color: white; line-height: 35px">Register</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <div class="header-middle-right">
                                <ul>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-money" style="font-size: 25px"></i>
                                        </div>
                                        <div class="contact-info">
                                            <a href="<?php echo site_url('/borrower'); ?>" style="font-size: 20px; color: white; line-height: 35px">Need a loan</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-history" style="font-size: 25px"></i>
                                        </div>
                                        <div class="contact-info">
                                            <a href="<?php echo site_url('/borrower/listloan'); ?>" style="font-size: 20px; color: white; line-height: 35px">History of Loan</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-users" style="font-size: 25px"></i>
                                        </div>
                                        <div class="contact-info">
                                            <a href="<?php echo site_url('/profile'); ?>" style="font-size: 20px; color: white; line-height: 35px">Account</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>

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
                                <li class="<?php echo ($parent_menu == 'userhome')? 'active' : ''?>">
                                    <a href="<?php echo site_url('/'); ?>">Home</a>
                                </li>
                                <?php echo $main_menus;?>
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