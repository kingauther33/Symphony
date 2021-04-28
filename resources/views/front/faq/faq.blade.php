@extends('front.layout.master_front')

@section('title', 'Faq')

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

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/faq.css">
@endsection

@section('body')
    <h1>Frequently Asked Questions</h1>
    <div class="faq-container">
        <div class="faq active">
            <h3 class="faq-title">How to join the course?</h3>
            <p class="faq-text">On this the admin should be able to enter or update the procedures for joining the course that the institute offers</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq">
            <h3 class="faq-title">
                Why to join the institute?
            </h3>
            <p class="faq-text">The various benefits that the student
                can gain by joining the institution is to be provided</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">
                When will be Entrance Examinations Conducted?
            </h3>
            <p class="faq-text">Once in 6 months, and one need to check the website
                for knowing when is the entrance exam entitled, the fees for the entrance exam
                (admin will decide and displayed on the application form</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">
                Will there be any fees for the entrance exam?
            </h3>
            <p class="faq-text">Yes there will be and it will be available on the application form</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">How can I apply for the entrance exam</h3>
            <p class="faq-text">Once the entrance exams are entitled, one need to visit the centre for applying it
                through paper and fill all the necessary details through online. On the application form one should
                chose which course he/she wanted to pursue.</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="front/OnlineEdu/js/faq.js"></script>
@endsection
