@extends('front.layout.master')

@section('title', 'Course')


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
                                                                    <li><br><i class="fas fa-star"></i>An Di Ci Pee</li>
                                                                    <li><i class="fas fa-star"></i>An In Lieu Eiu</li>
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
                                                                        <form action="courses" method="post">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">
                                                                                        Email</label>
                                                                                    <input type="email"
                                                                                           class="form-control"
                                                                                           name="email"
                                                                                           aria-describedby="emailHelp"
                                                                                           placeholder="Enter Email">
                                                                                    <span class="text-danger">
                                                                                        @error('email')
                                                                                            <script type='text/javascript'>alert('wrong try again!!');</script>
                                                                                        @enderror
                                                                                    </span>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">
                                                                                        Name Course</label>
                                                                                    <input type="number"
                                                                                           class="form-control"
                                                                                           name="course_id"
                                                                                           placeholder="Enter number course[1-3]">
                                                                                    <span class="text-danger">
                                                                                        @error('course_id')
                                                                                            <script type='text/javascript'>alert('wrong try again!!');</script>
                                                                                        @enderror
                                                                                    </span>
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
                                                                                    <input type="number"
                                                                                           class="form-control"
                                                                                           id="phone"
                                                                                           name="phone"
                                                                                           placeholder="Enter Phone"
                                                                                           required>
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
                                                                    <li><br><i class="fas fa-star"></i>Bi Mu En Ieu</li>
                                                                    <li><i class="fas fa-star"></i>Khong Mua Ieu Jieu
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
                                                                    <li><br><i class="fas fa-star"></i>Keu Eun Uoi Jeu
                                                                    </li>
                                                                    <li><i class="fas fa-star"></i>Ka Fe Ji Man</li>
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
@endsection

{{--@section('scripts')--}}

{{--@endsection--}}
