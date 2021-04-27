@extends('front.admin.master1')

@section('title', 'Staff')

@section('body')
    <div class="content">

        <div class="container">
            <h2 class="mb-5">Staff</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a class="btn btn-info {{ (request()->segment(1) == 'addProfessor') ? 'active' : '' }}" href="admin_addprofessor" id="addRow">
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

                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($professors as $professor)
                    <tr scope="row">
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}
                        <td>
                            <a>{{ $professor->fname }} {{ $professor->lname }}</a>
                        </td>
                        <td>
                            {{ $professor->specialty }}
                        </td>
                        <td>{{ $professor->phone }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ $professor->address }}</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_edit" style="background: #17a2b8; border-color: #17a2b8"><i class="fa fa-edit"></i></span>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i class="fa fa-trash"></i></span>
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
            <script src="front/admin/js/jquery-3.3.1.min.js"></script>
            <script src="front/admin/js/popper.min.js"></script>
            <script src="front/admin/js/bootstrap.min.js"></script>
            <script src="front/admin/js/main.js"></script>
        @endsection
    </div>
@endsection
