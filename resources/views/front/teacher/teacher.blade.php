
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="front/counselor/fonts/icomoon/style.css">

    <link rel="stylesheet" href="front/counselor/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front/counselor/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="front/counselor/css/style.css">

    <title>Teacher</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light">

    <a style="padding-left: 50px" class="navbar-brand" href="#!">
        <img src="front/OnlineEdu/img/logo/logo.png"  alt="">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav13"
            aria-controls="basicExampleNav13" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav13">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light">

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav5">

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item avatar dropdown d-flex align-items-center">
                        <a style="padding-left: 50.5rem;" class="nav-link dropdown-toggle"   id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" width="40px" height="40px"  class="rounded-circle z-depth-0"
                                 alt="avatar image">
                            Đinh Tiến An
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdownMenuLink-55">
                            <a class="dropdown-item" href="#!">Profile</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</nav>


<div class="content">

    <form action="/action_page.php" style="padding-left: 78px">

        <label for="cars">Choose a class:</label>
        <select name="class" id="class">
            <option value="t2004m">T2004M</option>
            <option value="t2013m">T2103M</option>
            <option value="t3333a">T3333A</option>
        </select>

        <label style="padding-left: 60px" for="cars">Choose a subject:</label>
        <select name="class" id="class">
            <option value="t2004m">Java</option>
            <option value="t2013m">T2103M</option>
            <option value="t3333a">T3333A</option>
        </select>
    </form>
    <div class="container">
        <table class="table-teacher" style="width:100%">
            <tr>
                <th class="th-teacher">Name Class: T2004M</th>
                <th class="th-teacher">Total student: 20 </th>
                <th class="th-teacher">Course Name: Java </th>
                <th class="th-teacher">Year: 1/1/2019</th>
            </tr>
        </table>
        <br><br>
        <div class="table-responsive custom-table-responsive">

            <table class="table custom-table">
                <thead>
                <tr>

                    <th scope="col">
                        <label class="control control--checkbox">
                            <input type="checkbox"  class="js-check-all"/>

                        </label>
                    </th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr scope="row">
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__inpublic/front/counselor/dicator"></div>
                        </label>
                    </th>
                    <td>
                        2003006
                    </td>
                    <td><a>Đinh Tiến An</a></td>
                    <td>
                            039999999
                    </td>
                    <td>Yasuo@gmail.com</td>
                    <td>8</td>
                    <td>1</td>
                </tr>
                <tr class="spacer"><td colspan="100"></td></tr>
                <tr class="active">
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox" checked="" />

                        </label>
                    </th>

                    <td>4616</td>
                    <td><a>Matthew Wasil</a></td>
                    <td>
                        Graphic Designer
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+02 020 3994 929</td>
                    <td>London College</td>
                </tr>
                <tr class="spacer"><td colspan="100"></td></tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>

                        </label>
                    </th>

                    <td>9841</td>
                    <td><a>Sampson Murphy</a></td>
                    <td>
                        Mobile Dev
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+01 352 1125 0192</td>
                    <td>Senior High</td>
                </tr>
                <tr class="spacer"><td colspan="100"></td></tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>

                        </label>
                    </th>

                    <td>9548</td>
                    <td><a>Gaspar Semenov</a></td>
                    <td>
                        Illustrator
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+92 020 3994 929</td>
                    <td>College</td>
                </tr>

                </tbody>
            </table>

        </div>
        <h5 style="padding-top: 30px">*diem trung binh: </h5>
    </div>

    <script src="front/counselor/js/jquery-3.3.1.min.js"></script>
    <script src="front/counselor/js/popper.min.js"></script>
    <script src="front/counselor/js/bootstrap.min.js"></script>
    <script src="front/counselor/js/main.js"></script>
</div>
</body>
</html>
