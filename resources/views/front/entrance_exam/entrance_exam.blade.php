@extends('front.layout.master_front')

@section('title', 'entrance_exam')

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/entranceexam.css">
@endsection

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
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-5"><img src="front/OnlineEdu/img/entrance/computing-feat.jpg" alt="Image" class="img-fluid rounded"></p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="site-section-heading mb-3">Entrance exam information </h2>
                    <p> An entrance exam through which they can know the knowledge level of the participant and thus
                        depending on the exam marks they segregate the participants or the students into the appropriate
                        classrooms
                    </p>
                    <p class="mb-4">The students will be given training right from the basics till the certification
                        level and for the participants having the minimum knowledge about the basics will be segregated
                        in to the class where they direct start with the basic certification topics with out touching
                        the basic concepts of the subject.</p>

                    <p><a href="contact" class="btn__entrance">Join This Program</a></p>
                </div>
            </div>
            <p><a href="search_exam" class="lmao"><span class="fa fa-star"></span>    Click here for grades</a></p>
        </div>
    </div>



@endsection
