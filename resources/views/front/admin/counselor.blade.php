@extends('front.layout.master_back')

@section('title', 'Counselor')

@section('account')

    <div class="container1 css-drop">
        <div class="half">
            <label for="profile2" class="profile-dropdown">
                <input type="checkbox" id="profile2"><img src="front/OnlineEdu/img/user/{{ $LoggedUserInfo->avatar }}"
                                                          width="40px" height="40px" class="rounded-circle z-depth-0"
                                                          alt="avatar image">
                {{--        {{ $LoggedUserInfo->fname }}--}}
                <span class="font-weight-bold">{{ $LoggedUserInfo->lname }} {{ $LoggedUserInfo->fname }}</span>
                <label for="profile2"><i class="mdi mdi-menu"></i></label>
                <ul>
                    <li><a href="admin_profile"><i class="mdi mdi-email-outline"></i>Profile</a></li>
                    <li><a href="admin_counselor"><i class="mdi mdi-email-outline"></i>Counselor</a></li>
                    <li><a href="admin_staff"><i class="mdi mdi-email-outline"></i>Staff</a></li>
                    <li><a href="admin_student"><i class="mdi mdi-email-outline"></i>Student</a></li>
                    <li><a href="admin_grade"><i class="mdi mdi-email-outline"></i>Grades</a></li>
                    {{--                <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>--}}
                    {{--                <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>--}}
                    <li><a href="logout"><i class="mdi mdi-logout"></i>Logout</a></li>
                </ul>
            </label>
        </div>
    </div>

@endsection

{{--
@section('headerAdmin')
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
                                    <li class="{{ (request()->segment(1) == 'admin_counselor' || request()->segment(1) == 'admin_addcounselor') ? 'font-weight-bold' : '' }}">
                                        <a href="admin_counselor"
                                           class="{{ (request()->segment(1) != 'admin_counselor' && request()->segment(1) != 'admin_addcounselor') ? 'font-weight-normal' : '' }}">Counselor</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'admin_staff' || request()->segment(1) ==  'admin_addstaff') ? 'font-weight-bold' : '' }}">
                                        <a href="admin_staff"
                                           class="{{ (request()->segment(1) != 'admin_staff' && request()->segment(1) !=  'admin_addstaff') ? 'font-weight-normal' : '' }}">Staff</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'admin_student' || request()->segment(1) == 'admin_addstudent') ? 'font-weight-bold' : '' }}">
                                        <a href="admin_student"
                                           class="{{ (request()->segment(1) != 'admin_student' && request()->segment(1) != 'admin_addstudent') ? 'font-weight-normal' : '' }}">Student</a>
                                    </li>
                                    <li class="{{ (request()->segment(1) == 'admin_grade' || request()->segment(1) == 'admin_addgrade') ? 'font-weight-bold' : '' }}">
                                        <a href="admin_grade"
                                           class="{{ (request()->segment(1) != 'admin_grade' && request()->segment(1) != 'admin_addgrade') ? 'font-weight-normal' : '' }}">Classes</a>
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
@endsection
--}}

@section('body')

    <div class="content pt-0">

        <div class="container">
            <h2 class="mb-3 mt-4">Counselor</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a class="btn btn-info {{ (request()->segment(1) == 'add') ? 'active' : '' }}"
                           href="admin_addcounselor" id="addRow">
                            Add New
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="table-responsive custom-table-responsive">

                <table class="table custom-table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($counselors as $counselor)
                        <tr scope="row">
                            <td><a>{{ $counselor->fname }} {{$counselor->lname}}</a></td>
                            <td>
                                {{ $counselor->email }}
                            </td>
                            <td>{{ $counselor->phone }}</td>
                            <td>{{ $counselor->dob }}</td>
                            <td>
                                <span class="btn btn-sm btn-danger btn_row_delete"><i
                                        onclick="window.location='./admin_counselor/delete/{{ $counselor->id }}'"
                                        class="fa fa-trash"></i></span>
                            </td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        @section('style')
            <link rel="stylesheet"
                  href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @endsection

        @section('script')
            <script src="front/counselor/js/jquery-3.3.1.min.js"></script>
            <script src="front/counselor/js/popper.min.js"></script>
            <script src="front/counselor/js/bootstrap.min.js"></script>
            <script src="front/counselor/js/main.js"></script>
        @endsection
    </div>

@endsection
