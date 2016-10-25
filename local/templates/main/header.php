<?php
/**
 * Created by PhpStorm.
 * User: Zul
 * Date: 25.10.16
 * Time: 20:04
 */
?>

<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <!-- <meta charset="utf-8"> -->

    <link rel="icon" type="image/png" href="images/favicon.png">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <!-- <meta name="author" content=""> -->
    <!-- Mobile Specific Metas
    ================================================== -->
    <!-- <meta name="format-detection" content="telephone=no"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <!--    <link rel="stylesheet" href="/css/bootstrap.min.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/bootstrap.min.css");?>
    <!-- Ionicons Fonts Css -->
    <!--    <link rel="stylesheet" href="/css/ionicons.min.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/ionicons.min.css");?>
    <!-- animate css -->
    <!--    <link rel="stylesheet" href="/css/animate.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/animate.css");?>
    <!-- Hero area slider css-->
    <!--    <link rel="stylesheet" href="/css/slider.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/slider.css");?>
    <!-- owl craousel css -->
    <!--    <link rel="stylesheet" href="/css/owl.carousel.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/owl.carousel.css");?>
    <!--    <link rel="stylesheet" href="/css/owl.theme.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/owl.theme.css");?>
    <!--    <link rel="stylesheet" href="/css/jquery.fancybox.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/jquery.fancybox.css");?>
    <!-- template main css file -->
    <!--    <link rel="stylesheet" href="/css/main.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/template_styles.css");?>
    <!-- responsive css -->
    <!--    <link rel="stylesheet" href="/css/responsive.css">-->
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/responsive.css");?>

    <!-- Template Javascript Files
    ================================================== -->
    <!-- modernizr js -->
    <!--<script src="/js/vendor/modernizr-2.6.2.min.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/vendor/modernizr-2.6.2.min.js", true);?>
    <!-- jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <!--<script src="/js/owl.carousel.min.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/owl.carousel.min.js", true);?>
    <!-- bootstrap js -->

    <!--<script src="/js/bootstrap.min.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/bootstrap.min.js", true);?>
    <!-- wow js -->
    <!--<script src="/js/wow.min.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/wow.min.js", true);?>
    <!-- slider js -->
    <!--<script src="/js/slider.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/slider.js", true);?>
    <!--<script src="/js/jquery.fancybox.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.fancybox.js", true);?>
    <!-- template main js -->
    <!--<script src="/js/main.js"></script>-->
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/main.js", true);?>
</head>

<body>


<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                    )
                );?>


            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" >Home</a>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
