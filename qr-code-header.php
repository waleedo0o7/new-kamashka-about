<!doctype html>


<html dir="<?php if (isset($_GET['dir']))   echo $_GET['dir']; ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- <meta name="your-age-is" content="Your Age Is"> -->

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="css/select2.min.css" />

    <!-- jquery UI  -->
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- video js -->
    <link href="css/video-js.css" rel="stylesheet" />

    <!-- Custom icon font -->
    <link href="https://file.myfontastic.com/PAF7Wy8xpNT3YfH9VPgbya/icons.css" rel="stylesheet">

    <!-- daterangepicker -->
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title> Welcome To Kamashka </title>

</head>




<style>
    html {
        scroll-behavior: smooth;
    }
</style>






<body class="qr-code-body">

    <!-- mobile-menu-light IF HOMEPAGE -->
    <div class="mobile-menu mobile-menu-light">


        <div class="icon">
            <img alt="" class="logo" src="img/logo-wide.png">
        </div><!-- icon -->

        <div class="mobile-icon-container">
            <i class="icon icon-menu-icon-2"></i>
        </div> <!-- logo -->

    </div> <!-- mobile-menu -->

    <div class="mobile-left-menu">

        <div class="menu-header">
            <div class="logo-container">
                <img alt="" class="logo" src="img/logo-wide.png">
            </div><!-- logo -->
            <div class="btn-and-close">
                <i id="closeMobileMenu" class="icon icon-close"></i>
            </div><!-- btn-and-close -->
        </div><!-- menu-header -->

        <div class="menu-links-container">
            <ul class="reset-ul">
                <li> <a href="#qr-intro"> Home </a> </li>
                <li> <a href="#qr-features"> Features </a> </li>
                <li> <a href="#qr-cta"> Download </a> </li>
                <li> <a href="#qr-faq"> FAQs </a> </li>
                <li> <a href="#qr-join-now"> Join Us </a> </li>
            </ul>
        </div><!-- menu-links-container -->

    </div><!-- mobile-left-menu -->

    <header id="top-header" class="">
        <div class="container d-flex align-items-center">
            <div class="d-flex top-header-content">

                <div class="logo">
                    <a href="home.php"> <img alt="" class="img-fluid" src="img/logo-wide.png" /> </a>
                </div> <!-- logo -->

                <div class="main-menu">

                    <ul class="menu">
                        <li class="menu-item"> <a class="active" href="#qr-intro"> Home </a> </li>
                        <li class="menu-item"> <a href="#qr-features"> Features </a> </li>
                        <li class="menu-item"> <a href="#qr-cta"> Download </a> </li>
                        <li class="menu-item"> <a href="#qr-faq"> FAQs </a> </li>
                        <li class="menu-item"> <a href="#qr-join-now"> Join Us </a> </li>
                    </ul><!-- menu -->

                </div> <!-- main-menu -->

                <div class="user-icons ml-3">
                    <a id="create-modal-btn" class="btn btn-primary ml-3" data-toggle="modal" data-target="#create-modal"> Join Now </a>
                </div><!-- user-icons -->

            </div><!-- top-header-content -->
        </div><!-- container -->
    </header><!-- top-header -->