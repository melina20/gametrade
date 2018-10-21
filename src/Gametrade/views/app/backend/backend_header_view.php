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

    <link href="<?= base_url('assets/stylesheets/cs.animate.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/application.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/bootstrap.min.3x.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/cs.bootstrap.3x.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/owl.carousel.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/responsive-slider.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/cs.global.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/cs.style.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('assets/stylesheets/cs.media.3x.css');?>" rel="stylesheet" type="text/css" media="all">
    <!--[if IE 8 ]>
    <link href="<?= base_url('assets/stylesheets/ie8.css');?>" rel="stylesheet" type="text/css" media="all">
    <![endif]-->
    <script src="<?= base_url('assets/javascripts/jquery-2.1.0.min.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/javascripts/modernizr.js');?>" type="text/javascript"></script>
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

                        

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end top-other -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 top-logo">
                <a id="site-title" href="<?= base_url('backend');?>" title="Home Page">
                    <img src="<?= base_url('assets/images/logo1.png');?>" alt="Home Page">
                </a>
            </div>
            <div class="col-md-12 top-support">
                <div class="support">
                    <span class="h5 txt_color">Melina Papadopoulou</span><span>University of Derby</span>
                    <span class="line"></span>
                    <a href="mailto:melinakisoftw@gmail.com">Email us</a>
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
                                            <a href="<?= base_url('backend/logout');?>">Logout administrator</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav hoverMenuWrapper">
                            <li class="dropdown">
                                <a href="<?= base_url('backend/viewusers');?>" class="link-dropdown">
                                    Users
                                </a>

                            </li>
                            <li class="dropdown">
                                <a href="<?= base_url('backend/viewoffers');?>" class="link-dropdown">
                                    Offers
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="<?= base_url('backend/viewgames');?>" class="link-dropdown">
                                    Games
                                </a>

                            </li>
                            <li class="link-dropdown">
                                <a href="<?= base_url('backend/viewplatforms');?>" class="link-dropdown">
                                    Platforms
                                </a>
                            </li>
                            <li class="link-dropdown">
                                <a href="<?= base_url('backend/viewcategories');?>" class="link-dropdown">
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>