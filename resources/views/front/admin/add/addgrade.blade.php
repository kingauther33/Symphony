@extends('front.layout.master_back')

@section('title', 'Add Grade')

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


@section('body')
    <div class="content pt-30">
        <div class="container">
            <div class="card-box">
                <div class="card-header">
                    <header>
                        <h4>Grade Details</h4>
                    </header>
                </div>

                <form action="{{ route('admin.addgrade') }}" method="post">
                    @csrf

                    <div class="card-body row">

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtCourseName" name="course_name" placeholder="Course Name">
                                <span class="text-danger">@error('course_name') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="course_id" placeholder="Course Code">
                                <span class="text-danger">@error('course_id') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" rows="4" id="text7" name="course_details" placeholder="Course Details"/>
                                <span class="text-danger">@error('course_details') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input flatpickr-input" type="text" id="date" name="starting_year" placeholder="Start From">
                                <span class="text-danger">@error('starting_year') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="txtTimeLength">--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Course Time Length--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="txtPrice">--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Course Price--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtProf" name="professor_id" placeholder="Professor ID">
                                <span class="text-danger">@error('professor_id') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="maxStu">--}}
{{--                                <label class="mdl-textfield__label" for="maxStu">--}}
{{--                                    Maximum Students--}}
{{--                                </label>--}}
{{--                                <span class="mdl-textfield__error">Number !</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text5">--}}
{{--                                <label class="mdl-textfield__label" for="text5">--}}
{{--                                    Contact Number--}}
{{--                                </label>--}}
{{--                                <span class="mdl-textfield__error">Number !</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-12 p-t-20">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-primary" data-upgraded=",MaterialButton,MaterialRipple">
                                Submit
                                <span class="mdl-button__ripple-container">
                                    <span class="mdl-ripple"></span>
                                </span>
                            </button>

                            <a href="./class">
                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-secondary" data-dismiss="modal" data-upgraded=",MaterialButton,MaterialRipple">
                                Cancel
                                <span class="mdl-button__ripple-container">
                                    <span class="mdl-ripple"></span>
                                </span>
                            </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('style')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

    @endsection

    @section('script')
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="front/admin/js/jquery-3.3.1.min.js"></script>
    <script src="front/admin/js/popper.min.js"></script>
    <script src="front/admin/js/bootstrap.min.js"></script>
    <script src="front/admin/js/main.js"></script>
    @endsection
@endsection
