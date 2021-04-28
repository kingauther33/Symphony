@extends('front.layout.master_back')

@section('title', 'Student')

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
    <div class="content pt-0">

        <div class="container">
            <h2 class="mb-3 mt-4">Student</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a class="btn btn-info {{ (request()->segment(1) == 'addStudent') ? 'active' : '' }}" href="admin_addstudent" id="addRow">
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

{{--                        <th scope="col">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"  class="js-check-all"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}

                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr scope="row">
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}
                        <td>
                            {{ $student->id }}
                        </td>
                        <td><a>{{ $student->fname }} {{ $student->lname }}</a></td>
                        <td>
                            {{ $student->grade_id }}
                        </td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $UsersInDatabase->where('id', $student->user_id)->first()->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i onclick="window.location='./admin_student/delete/{{ $student->id }}'" class="fa fa-trash"></i></span>
                        </td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

        @section('style')
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @endsection

        @section('script')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="front/admin/js/jquery-3.3.1.min.js"></script>
            <script src="front/admin/js/popper.min.js"></script>
            <script src="front/admin/js/bootstrap.min.js"></script>
            <script src="front/admin/js/main.js"></script>
        @endsection
    </div>
@endsection
