@extends('front.layout.master_front')

@section('title', 'Course')

@section('user')

    <div class="row d-flex justify-content-between align-items-center">
        <div class="header-info-left">
            <ul>
                <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                       class="__cf_email__" data-cfemail="b7d9d2d2d3dfd2dbc7f7d0dad6dedb99d4d8da">. </a>
                </li>
            </ul>
        </div>
        <div class="header-info-right">
            @if(session()->has('LoggedUser'))
                <label for="profile2" class="profile-dropdown">
                    <input type="checkbox" id="profile2"><img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" width="40px" height="40px"  class="rounded-circle z-depth-0"
                                                              alt="avatar image">
                    {{--        {{ $LoggedUserInfo->fname }}--}}
                    <span>{{ $LoggedUserInfo->lname }} {{ $LoggedUserInfo->fname }}</span>
                    <label for="profile2"><i class="mdi mdi-menu"></i></label>
                    <ul>
                        {{--                <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>--}}
                        {{--                <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>--}}
                        <li><a href="logout"><i class="mdi mdi-logout"></i>Logout</a></li>
                    </ul>
                </label>
            @else
                <ul>
                    <li><a href="login"><i class="ti-user"></i>Login</a></li>
                </ul>
            @endif
        </div>
    </div>
@endsection

@section('body')
    <main>

        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>All Courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="all-course section-padding30">
            <div class="container">
                <div class="row">
                    <div class="all-course-wrapper">

                        {{--                        <div class="row mb-15">--}}
                        {{--                            <div class="col-lg-12">--}}
                        {{--                                <div class="properties__button mb-90">--}}

                        {{--                                    <nav>--}}
                        {{--                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
                        {{--                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>--}}
                        {{--                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Web</a>--}}
                        {{--                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Graphic</a>--}}
                        {{--                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Video</a>--}}
                        {{--                                            <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Language</a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </nav>--}}

                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="row">
                            <div class="col-12">

                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                         aria-labelledby="nav-home-tab">
                                        <div class="row">

                                            <div class="col-xl-4 col-lg-4 col-md-6">

                                                <div class="single-course mb-70">
                                                    <div class="ourse-img">
                                                        <img src="front/OnlineEdu/img/gallery/popular_sub1.png" alt="">
                                                    </div>
                                                    <div class="course-caption">
                                                        <div class="course-cap-top">
                                                            <h4><a href="#">Course 1 (3 month)</a></h4>
                                                        </div>
                                                        <div class="course-cap-mid d-flex justify-content-between">
                                                            <div class="course-ratting">
                                                                <ul>Name Subject:
                                                                    <li><br><i class="fas fa-star"></i>C</li>
                                                                    <li><i class="fas fa-star"></i>Java</li>
                                                                    <br>
                                                                </ul>
                                                                <h5>Summary: You will have a grasp of all the coding
                                                                    basics</h5><br>
                                                            </div>

                                                        </div>
                                                        <div class="course-cap-bottom d-flex justify-content-between">

                                                            <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                Registration >>>>
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                 role="dialog" aria-labelledby="exampleModalLabel"
                                                                 aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Information</h5>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="courses" method="post" onsubmit="show_alert()">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">
                                                                                        Course name:
                                                                                    </label>
                                                                                    <div>
                                                                                    <select name="course_id" required>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                    </select>
                                                                                    </div>
                                                                                </div>
                                                                                <br><br>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">
                                                                                        Email</label>
                                                                                    <input type="email"
                                                                                           class="form-control"
                                                                                           name="email"
                                                                                           aria-describedby="emailHelp"
                                                                                           placeholder="Enter Email" required="required">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">
                                                                                        First Name</label>
                                                                                    <input type="text"
                                                                                           class="form-control valid"
                                                                                           name="fname"
                                                                                           placeholder="Enter First Name"
                                                                                           required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">
                                                                                        Last Name</label>
                                                                                    <input type="text"
                                                                                           class="form-control valid"
                                                                                           name="lname"
                                                                                           placeholder="Enter Last Name"
                                                                                           required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">
                                                                                        Phone</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="phone"
                                                                                           name="phone"
                                                                                           data-validation="number"
                                                                                           data-validation-allowing="negative,number" input name="color"
                                                                                           data-validation="number" datavalidation-ignore="$"
                                                                                           placeholder="Enter Phone"
                                                                                           maxlength="11"
                                                                                           minlength="10"
                                                                                           pattern="\d*"
                                                                                           required = "required">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">
                                                                                        Address</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           name="address"
                                                                                           placeholder="Enter Address"
                                                                                           required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Close
                                                                                </button>
                                                                                <button type="submit"
                                                                                        class="btn btn-primary"
                                                                                >Submit
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xl-4 col-lg-4 col-md-6">

                                                <div class="single-course mb-70">
                                                    <div class="ourse-img">
                                                        <img src="front/OnlineEdu/img/gallery/popular_sub2.png" alt="">
                                                    </div>
                                                    <div class="course-caption">
                                                        <div class="course-cap-top">
                                                            <h4><a href="#">Course 2 (6 month)</a></h4>
                                                        </div>
                                                        <div class="course-cap-mid d-flex justify-content-between">
                                                            <div class="course-ratting">
                                                                <ul>Name Subject
                                                                    <li><br><i class="fas fa-star"></i>C++</li>
                                                                    <li><i class="fas fa-star"></i>Python
                                                                    </li>
                                                                    <br>
                                                                </ul>
                                                                <h5>Summary: You will capture all the advanced things
                                                                    about code </h5>
                                                            </div>

                                                        </div>
                                                        <div class="course-cap-bottom d-flex justify-content-between">

                                                            <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                Registration >>>>
                                                            </button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xl-4 col-lg-4 col-md-6">

                                                <div class="single-course mb-70">
                                                    <div class="ourse-img">
                                                        <img src="front/OnlineEdu/img/gallery/popular_sub3.png" alt="">
                                                    </div>
                                                    <div class="course-caption">
                                                        <div class="course-cap-top">
                                                            <h4><a href="#">Course 3 (12 month)</a></h4>
                                                        </div>
                                                        <div class="course-cap-mid d-flex justify-content-between">
                                                            <div class="course-ratting">
                                                                <ul>Name Subject:
                                                                    <li><br><i class="fas fa-star"></i>C#
                                                                    </li>
                                                                    <li><i class="fas fa-star"></i>PHP</li>
                                                                    <br>
                                                                </ul>
                                                                <h5>Summary: You will be able to use frameworksand all
                                                                    code </h5><br>
                                                            </div>

                                                        </div>
                                                        <div class="course-cap-bottom d-flex justify-content-between">
                                                            <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                Registration >>>>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @section('scripts')
    <script>
        function show_alert() {
            alert("????ng k?? th??nh c??ng! Vui l??ng ch??? ph???n h???i!")
        }
    </script>
    @endsection
@endsection

{{--@section('scripts')--}}

{{--@endsection--}}
