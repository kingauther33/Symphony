<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="front/admin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="front/admin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front/admin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="front/admin/css/1.css">
    <link rel="stylesheet" href="front/admin/css/style.css">
    <link rel="stylesheet" href="front/OnlineEdu/css/style.css">
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
    <link rel="stylesheet" href="front/OnlineEdu/css/bootstrap.min.css">

    <title>@yield('title') | Symphony</title>

    @yield('style')
</head>
<body>

<!-- Navbar -->
<nav id="nav1" class="navbar navbar-expand-md navbar-light bg-light">

    <a class="navbar-brand" href="#!">
        <img src="front/OnlineEdu/img/logo/logo.png"  alt="">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav13"
            aria-controls="basicExampleNav13" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav13">

        <form class="navbar-search pl-0 ml-auto mt-3 mb-2 mt-md-0 mb-md-0 mr-3" action="">
            <div class="input-group d-block d-md-flex mb-0">
                <div class="input-group-prepend">
                    <a href="#!" class="input-icon d-flex align-items-center" type="button"><i
                            class="fas fa-search text-white mx-3"></i></a>
                    <input class="form-control white-text rgba-black-light border-0 z-depth-0 pl-5" type="text"
                           placeholder="Search" aria-label="Search">
                </div>
            </div>
        </form>

        <!-- Right -->
        <ul class="navbar-nav">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light">

                <!-- Links -->
                <div class="collapse navbar-collapse" id="basicExampleNav4">

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons ml-auto">
                        <li class="nav-item dropdown notifications-nav pr-md-3">
                            <a class="nav-link ">
                                <span class="badge badge-pill bg-danger">1</span>
                                <span><i class="fas fa-bell"></i></span>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <span class="badge badge-pill bg-danger">1</span>
                                <span><i class="fas fa-envelope"></i></span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Links -->

            </nav>
            <!-- Navbar -->
        </ul>

    </div>
    <!-- Links -->

</nav>
<!-- Navbar -->


<header>
<div class="header-area">
    <div class="header-bottom header-sticky">
        <div class="container">
            <div class="menu-wrapper">

                <div class="logo logo2 d-block d-lg-none">
                    <a href="index-2.html"><img src="front/OnlineEdu/img/logo/logo.png" alt=""></a>
                </div>

                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul id="navigation">
                            <li class="{{ (request()->segment(1) == 'counselor') ? 'active' : '' }}"><a href="admin_counselor">Counselor</a></li>
                            <li class="{{ (request()->segment(1) == 'staff') ? 'active' : '' }}"><a href="admin_staff">Staff</a>
                                <ul class="submenu">
                                    <li><a href="#">All Teachers</a></li>
                                    <li><a href="#">Add Teacher</a></li>
                                </ul>
                            </li>
                            <li class="{{ (request()->segment(1) == 'student') ? 'active' : '' }}"><a href="admin_student">Student</a>
                                <ul class="submenu">
                                    <li><a href="#">All Students</a></li>
                                    <li><a href="#">Admission Form</a></li>
                                </ul>
                            </li>
                            <li class="{{ (request()->segment(1) == 'class') ? 'active' : '' }}"><a href="admin_class">Classes</a>
                                <ul class="submenu">
                                    <li><a href="#">All Classes</a></li>
                                    <li><a href="#">Add New Class</a></li>
                                </ul>
                            </li>
                            <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href=""></a>
                                {{--<ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_details.html">Blog Details</a></li>
                                    <li><a href="elements.html">Element</a></li>
                                </ul>--}}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
</header>





@yield('body')



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
@yield('script')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
