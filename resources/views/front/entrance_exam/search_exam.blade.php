@extends('front.layout.master_front')

@section('title', 'search_exam')

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/search_exam.css">
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
    <div><h1>Type in your visitor ID</h1></div>
    <form action="search_exam">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="search" placeholder="Exam ID..."
                           value="{{ request('search') }}">
                    <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                </div>
            </div>
            @if(request('search') !== null)
                @if($entrance_exam_results->entrance_mark !== null)
                    <div>
                        <h3>Your ID: {{ request('search') }}</h3>
                        <h3>Your mark: {{ $entrance_exam_results->entrance_mark }}</h3>
                    </div>
                @else
                    <div>
                        <h3>There's no result :(</h3>
                    </div>
                @endif
            @endif
        </div>
    </form>

@endsection
