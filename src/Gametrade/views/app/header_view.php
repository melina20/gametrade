<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <link rel="canonical" href="/" />

        <meta name="description" content="" />

        <title>Gametrade</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">

        <link href="<?= base_url('assets/stylesheets/cs.animate.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/application.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/bootstrap.min.3x.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/cs.bootstrap.3x.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/responsive-slider.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/cs.global.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/cs.style.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url('assets/stylesheets/cs.media.3x.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <!--[if IE 8 ]>
        <link href="<?= base_url('assets/stylesheets/ie8.css'); ?>" rel="stylesheet" type="text/css" media="all">
        <![endif]-->
        <script src="<?= base_url('assets/javascripts/jquery-2.1.0.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/javascripts/modernizr.js'); ?>" type="text/javascript"></script>
    </head>

    <body class="templateIndex">

        <!-- Header -->
        <header id="top" class="clearfix">

            <!--top-other-->
            <div id="top-other">
                <div class="container">
                    <div class="row">
                        <div class="welcome col-md-9 text-left">
                            Welcome to Gametrade
                        </div>
                        <div class="top-other col-md-15">
                            <ul class="list-inline text-right">
                                <?php if (isset($_SESSION['is_logged']) AND $_SESSION['is_logged'] == 1): ?>

                                    Hello, <?= $_SESSION['email']; ?>   ||  <a style="color:white;" href="<?= base_url('home/dologout'); ?>">Logout</a>

                                <?php else: ?>
                                    <li class="customer-links">
                                        <ul id="accounts" class="list-inline">

                                            <li class="login">
                                                <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
                                                    Login
                                                    <i class="sub-dropdown1"></i>
                                                    <i class="sub-dropdown"></i>
                                                </span>
                                                <div id="loginBox" class="dropdown-menu text-left" style="overflow:hidden;display:none">
                                                    <form method="post" action="<?= base_url('home/dologin'); ?>" id="customer_login" accept-charset="UTF-8">
                                                        <input name="form_type" type="hidden" value="customer_login">
                                                        <input name="utf8" type="hidden" value="✓">
                                                        <div id="bodyBox">
                                                            <div class="sb-title">Login</div>
                                                            <ul class="control-container customer-accounts list-unstyled">
                                                                <li class="clearfix">
                                                                    <label for="customer_email_box" class="control-label">Email Address <span class="req">*</span></label>
                                                                    <input type="email" value="" name="email" id="customer_email_box" class="form-control">
                                                                </li>
                                                                <li class="clearfix">
                                                                    <label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>
                                                                    <input type="password" value="" name="password" id="customer_password_box" class="form-control password">
                                                                </li>
                                                                <li class="clearfix last1">
                                                                    <button class="btn btn-1" type="submit">Login</button>
                                                                </li>
                                                                <li>
                                                                    <a class="register" href="<?= base_url('user/register'); ?>">Create New Account</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>or</li>
                                            <li class="register">
                                                <a href="<?= base_url('user/register'); ?>" id="customer_register_link">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end top-other -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-logo">
                        <a id="site-title" href="<?= base_url(''); ?>" title="Home Page">
                            <img src="<?= base_url('assets/images/logo1.png'); ?>" alt="Home Page">
                        </a>
                    </div>
                    <div class="col-md-12 top-support">
                        <div class="support">
                            <span class="h5 txt_color">Melina Papadopoulou</span><span>University of Derby</span>
                            <span class="line"></span>
                            <a href="mailto:melinakisoftw@gmail.com">Email us</a>
                        </div>
                        <div class="top-search">
                            <form id="header-search" class="search-form" action="./index.html" method="get">
                                <input type="hidden" name="type" value="product">
                                <input type="text" class="input-block-level" name="q" value="" accesskey="4" autocomplete="off" placeholder="search gametrade offers here">
                                <button type="submit" class="search-submit" title="Search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row top-navigation">
                    <nav class="navbar" role="navigation">
                        <div class="clearfix">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle main navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="is-mobile visible-xs">
                                <ul class="list-inline">
                                    <li class="is-mobile-menu">
                                        <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar-group">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="is-mobile-login">
                                        <div class="btn-group">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <ul class="customer dropdown-menu">
                                                <li class="logout">
                                                    <a href="./login.html">Log in</a>
                                                </li>
                                                <li class="account">
                                                    <a href="./register.html">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav hoverMenuWrapper">
                                    <li class="dropdown">
                                        <a href="<?= base_url('game/playstation1'); ?>" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                                            Playstation 1
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="<?= base_url('game/playstation2'); ?>" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                                            Playstation 2
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="<?= base_url('game/playstation3'); ?>" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                                            Playstation 3 
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('game/playstation4'); ?>">
                                            Playstation 4
                                            <span></span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="<?= base_url('backend'); ?>" class="dropdown-toggle link-dropdown">
                                            Backend
                                        </a> 
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= base_url('backend/viewoffers'); ?>">View offers</a></li>
                                            <li><a href="<?= base_url('backend/viewgames'); ?>">View games</a></li>
                                            <li><a href="<?= base_url('backend/viewcategories'); ?>">View categories</a></li>
                                            <li><a href="<?= base_url('backend/viewplatforms'); ?>">View platforms</a></li>
                                            <li><a href="<?= base_url('backend/viewusers'); ?>">View users</a></li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('offer/viewall'); ?>">
                                            View all offers
                                            <span></span>
                                        </a>
                                    </li>
                                     <li class="">
                                        <a href="<?= base_url('game/add'); ?>">
                                            Add new Game
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>