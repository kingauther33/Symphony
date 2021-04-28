@extends('front.admin.master1')

@section('title', 'Add Counselor')

@section('style')
    <link rel="stylesheet" href="front/admin/css/dropdown.css">
@endsection

@section('account')

    <a class="nav-link dropdown-toggle"   id="navbarDropdownMenuLink-55" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" width="40px" height="40px"  class="rounded-circle z-depth-0"
             alt="avatar image">
        Đinh Tiến An
    </a>
    <ul class="dropdown-menu">
        <li href="#">HTML</li>
        <li href="#">JS</li>
        <li href="#">CSS</li>
    </ul>

@endsection

@section('body')
    <div class="content">
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
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtFirstName" name="first name" >
                                <label class="mdl-textfield__label">
                                    First Name
                                </label>
                                <span class="text-danger">@error('first name') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtLastName" name="last name" >
                                <label class="mdl-textfield__label">
                                    Last Name
                                </label>
                                <span class="text-danger">@error('last name') {{ $message }} @enderror</span>
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
                                <input class="mdl-textfield__input" type="text" id="txtemail" name="email" >
                                <label class="mdl-textfield__label">
                                    Email
                                </label>
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
                                <input class="mdl-textfield__input" type="text" id="pwd" name="password" >
                                <label class="mdl-textfield__label">
                                    Password
                                </label>
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="text5" name="phone" >
                                <label class="mdl-textfield__label" for="text5">
                                    Phone Number
                                </label>
                                <span class="text-danger">@error('phone number') {{ $message }} @enderror</span>
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
                                <input class="mdl-textfield__input flatpickr-input" type="text" id="dateOfBirth" name="birth date" >
                                <label class="mdl-textfield__label">
                                    Birth Date
                                </label>
                                <span class="text-danger">@error('birth date') {{ $message }} @enderror</span>
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
        <link rel="stylesheet" href="public/front/admin/css/1.css">
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
