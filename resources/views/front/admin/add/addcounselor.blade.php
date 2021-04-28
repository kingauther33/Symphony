@extends('front.layout.master_back')

@section('title', 'Add Counselor')

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
                        <h4>Counselor Information</h4>
                    </header>
                </div>

                <form action="{{ route('admin.addcounselor') }}" method="post">
                    @csrf
                    <div class="card-body row">

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded">
                                <input class="mdl-textfield__input" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                                <span class="text-danger">@error('firstname') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtLastName" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                                <span class="text-danger">@error('lastname') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        {{--                                <div class="col-lg-6 p-t-20">--}}
                        {{--                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
                        {{--                                        <input class="mdl-textfield__input" type="text" id="txtRollNo" name="id">--}}
                        {{--                                        <label class="mdl-textfield__label">--}}
                        {{--                                            Roll No--}}
                        {{--                                        </label>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtemail" name="email" value="{{ old('email') }}" placeholder="Email">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input flatpickr-input" type="text" id="date" name="date_of_join" >--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Registration Date--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="class" name="grade_id" >--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Class ID--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" name="password" value="{{ old('password') }}" placeholder="Password">
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="text5" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Phone Number">
                                <span class="text-danger">@error('phonenumber') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        {{--                                <div class="col-lg-6 p-t-20">--}}
                        {{--                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
                        {{--                                        <input class="mdl-textfield__input" type="text" id="txtParentName">--}}
                        {{--                                        <label class="mdl-textfield__label">--}}
                        {{--                                            Parent Name--}}
                        {{--                                        </label>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="col-lg-6 p-t-20">--}}
                        {{--                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
                        {{--                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="txtPNo">--}}
                        {{--                                        <label class="mdl-textfield__label" for="txtPNo">--}}
                        {{--                                            Parents Mobile Number--}}
                        {{--                                        </label>--}}
                        {{--                                        <span class="mdl-textfield__error">Number !</span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input flatpickr-input" type="text" id="dateOfBirth" name="birthdate" value="{{ old('birthdate') }}" placeholder="Birth Date">
                                <span class="text-danger">@error('birthdate') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="status" name="status" >--}}
{{--                                <label class="mdl-textfield__label" for="status">--}}
{{--                                    Status--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-12 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <textarea class="mdl-textfield__input" id="text7" rows="4" name="address" ></textarea>--}}
{{--                                <label class="mdl-textfield__label" for="text7">--}}
{{--                                    Address--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-12 p-t-20">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-primary" data-upgraded=",MaterialButton,MaterialRipple">
                                Submit
                                <span class="mdl-button__ripple-container">
                                            <span class="mdl-ripple"></span>
                                        </span>
                            </button>

                            <a href="./counselor">
                                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10" data-upgraded=",MaterialButton,MaterialRipple">
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
