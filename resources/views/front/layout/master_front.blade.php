<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/onlineedu/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Mar 2021 01:39:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') | Symphony </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="front/OnlineEdu/img/favicon.ico">

    <link rel="stylesheet" href="front/OnlineEdu/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/slicknav.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/flaticon.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/gijgo.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/animate.min.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/magnific-popup.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/themify-icons.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/slick.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/nice-select.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/style.css">
    @yield('styles')
</head>
<body>


<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="front/OnlineEdu/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>

<header>

    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">

                <div class="header-left-social">
                    <ul class="header-social">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__" data-cfemail="b7d9d2d2d3dfd2dbc7f7d0dad6dedb99d4d8da">[email&#160;protected]</a>
                                    </li>
                                    <li>666 7475 25252</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i>Login</a></li>
                                    <li><a href="#"><i class="ti-lock"></i>Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">

                <div class="logo d-none d-lg-block">
                    <a href="index-2.html"><img src="front/OnlineEdu/img/logo/logo.png" alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">

                        <div class="logo logo2 d-block d-lg-none">
                            <a href="index-2.html"><img src="front/OnlineEdu/img/logo/logo.png" alt=""></a>
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="/">Home</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}"><a
                                            href="about">About</a></li>
                                    <li class="{{ (request()->segment(1) == 'course') ? 'active' : '' }}"><a
                                            href="courses">Courses</a></li>
                                    <li class="{{ (request()->segment(1) == 'entrance_exam') ? 'active' : '' }}"><a
                                            href="entrance_exam">Entrance Exam</a></li>
                                    <li class="{{ (request()->segment(1) == 'faq') ? 'active' : '' }}"><a href="faq">FAQ's</a>
                                        {{--<ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>--}}
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a
                                            href="contact">Contact</a></li>
                                    <li class="{{ (request()->segment(1) == 'instructor') ? 'active' : '' }}"><a
                                            href="instructor">Instructors</a></li>
                                </ul>
                            </nav>
                        </div>

{{--                        <div class="header-search d-none d-lg-block">--}}
{{--                            <form action="#" class="form-box f-right ">--}}
{{--                                <input type="text" name="Search" placeholder="Search Courses">--}}
{{--                                <div class="search-icon">--}}
{{--                                    <i class="fas fa-search special-tag"></i>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


{{--Body here--}}
@yield('body')


<footer>
    <div class="footer-wrappper footer-bg">

        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">

                                <div class="footer-logo mb-25">
                                    <a href="/"><img src="front/OnlineEdu/img/logo/loder.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p style="color: white">The automated process starts as soon as your clothes go
                                            into the machine.</p>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4 style="color: white">Our solutions</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4 style="color: white">Support</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4 style="color: white">Company</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script src="front/OnlineEdu/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="front/OnlineEdu/js/vendor/jquery-1.12.4.min.js"></script>
<script src="front/OnlineEdu/js/popper.min.js"></script>
<script src="front/OnlineEdu/js/bootstrap.min.js"></script>

<script src="front/OnlineEdu/js/jquery.slicknav.min.js"></script>

<script src="front/OnlineEdu/js/owl.carousel.min.js"></script>
<script src="front/OnlineEdu/js/slick.min.js"></script>

<script src="front/OnlineEdu/js/wow.min.js"></script>
<script src="front/OnlineEdu/js/animated.headline.js"></script>
<script src="front/OnlineEdu/js/jquery.magnific-popup.js"></script>

<script src="front/OnlineEdu/js/gijgo.min.js"></script>

<script src="front/OnlineEdu/js/jquery.nice-select.min.js"></script>
<script src="front/OnlineEdu/js/jquery.sticky.js"></script>

<script src="front/OnlineEdu/js/jquery.counterup.min.js"></script>
<script src="front/OnlineEdu/js/waypoints.min.js"></script>

<script src="front/OnlineEdu/js/contact.js"></script>
<script src="front/OnlineEdu/js/jquery.form.js"></script>
<script src="front/OnlineEdu/js/jquery.validate.min.js"></script>
<script src="front/OnlineEdu/js/mail-script.js"></script>
<script src="front/OnlineEdu/js/jquery.ajaxchimp.min.js"></script>

<script src="front/OnlineEdu/js/plugins.js"></script>
<script src="front/OnlineEdu/js/main.js"></script>
@yield('scripts')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/onlineedu/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Mar 2021 01:39:46 GMT -->
</html>
