@extends('front.admin.master1')

@section('title', 'Add Course')


@section('body')
    <div class="content">
        <div class="container">
            <div class="card-box">
                <div class="card-header">
                    <header>
                        <h4>Course Details</h4>
                    </header>
                </div>

                <form action="{{ route('admin.addcourse') }}" method="post">
                    @csrf

                    <div class="card-body row">

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtCourseName" name="course name" >
                                <label class="mdl-textfield__label">
                                    Course Name
                                </label>
                                <span class="text-danger">@error('course name') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="course id" >
                                <label class="mdl-textfield__label">
                                    Course Code
                                </label>
                                <span class="text-danger">@error('course id') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <textarea class="mdl-textfield__input" rows="4" id="text7" name="course details" ></textarea>
                                <label class="mdl-textfield__label" for="text7">
                                    Course Details
                                </label>
                                <span class="text-danger">@error('course details') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                                <input class="mdl-textfield__input flatpickr-input" type="text" id="date" name="starting year" >
                                <label class="mdl-textfield__label">
                                    Start From
                                </label>
                                <span class="text-danger">@error('starting year') {{ $message }} @enderror</span>
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
                                <input class="mdl-textfield__input" type="text" id="txtProf" name="professor id" >
                                <label class="mdl-textfield__label">
                                    Professor ID
                                </label>
                                <span class="text-danger">@error('professor id') {{ $message }} @enderror</span>
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
    <link rel="stylesheet" href="public/front/admin/css/1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    @endsection

    @section('script')
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    @endsection
@endsection
