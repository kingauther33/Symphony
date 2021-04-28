@extends('front.layout.master_front')

@section('title', 'Instructors')

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
                                <h2>Instructors</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src="front/OnlineEdu/img/gallery/{{ $teacher->avatar }}" alt="">

                                    <ul class="team-social">
                                        {{--                                    <li><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fab fa-facebook-f"></i></a></div></li>--}}
                                        <li><a href="https://www.facebook.com/Valve/"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/valvesoftware?ref_src=twsrc%5Etfw"
                                               data-show-count="false"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-caption">
                                    <h3>{{ $teacher->fname }} {{ $teacher->lname }}</h3>
                                    <p>{{ $teacher->specialty }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection


