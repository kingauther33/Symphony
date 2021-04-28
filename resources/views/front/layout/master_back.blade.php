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
    <link rel="stylesheet" href="front/admin/css/dropdown.css">

    <link rel="stylesheet" href="front/admin/css/dropdown.css">
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
<nav id="nav1" class="navbar navbar-expand-md navbar-light bg-light mb-20">

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
                        <li class="nav-item avatar dropdown d-flex align-items-center open">
                            @yield('account')
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

@yield('headerAdmin')

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

<script src="front/counselor/js/jquery-3.3.1.min.js"></script>
<script src="front/counselor/js/popper.min.js"></script>
<script src="front/counselor/js/bootstrap.min.js"></script>
<script src="front/counselor/js/main.js"></script>
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
