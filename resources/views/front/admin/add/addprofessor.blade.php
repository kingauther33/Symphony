@extends('front.admin.master1')

@section('title', 'Add Professor')


@section('body')
    <div class="content">
        <div class="container">
            <div class="card-box">
                <div class="card-header">
                    <header>
                        <h4>Professor Information</h4>
                    </header>
                </div>

                <form action="{{ route('admin.addprofessor') }}" method="post">
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
{{--                                <input class="mdl-textfield__input flatpickr-input" type="text" id="date">--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Joining Date--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtPwd" name="password" >
                                <label class="mdl-textfield__label">
                                    Password
                                </label>
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="txtConfirmPwd">--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Confirm Password--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="designation">--}}
{{--                                <label class="mdl-textfield__label">--}}
{{--                                    Designation--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtDepartment" name="department" >
                                <label class="mdl-textfield__label" for="txtDepartment">
                                    Department
                                </label>
                                <span class="text-danger">@error('department') {{ $message }} @enderror</span>
                            </div>
                        </div>

{{--                        <div class="col-lg-6 p-t-20">--}}
{{--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">--}}
{{--                                <input class="mdl-textfield__input" type="text" id="sample2">--}}
{{--                                <label for="sample2" class="mdl-textfield__label">--}}
{{--                                    Gender--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text"  id="text5" name="phone number" >
                                <label class="mdl-textfield__label" for="text5">
                                    Phone Number
                                </label>
                                <span class="text-danger">@error('phone number') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input flatpickr-confirm" type="text" id="dateOfBirth" name="birth date" >
                                <label class="mdl-textfield__label">
                                    Birth Date
                                </label>
                                <span class="text-danger">@error('birth date') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <textarea class="mdl-textfield__input" id="text7" rows="4" name="address" ></textarea>
                                <label class="mdl-textfield__label" for="text7">
                                    Address
                                </label>
                                <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <textarea class="mdl-textfield__input" id="comment" rows="4" name="comment" ></textarea>
                                <label class="mdl-textfield__label" for="text7">
                                    Comment
                                </label>
                                <span class="text-danger">@error('comment') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12 p-t-20">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-primary" data-upgraded=",MaterialButton,MaterialRipple">
                                Submit
                                <span class="mdl-button__ripple-container">
                                    <span class="mdl-ripple"></span>
                                </span>
                            </button>

                            <a href="./staff">
                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-secondary" data-upgraded=",MaterialButton,MaterialRipple">
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
        @endsection

@endsection
