
@extends('front.profile.master2')

@section('title', 'Teacher')

@section('account')
    <div class="half">
        <label for="profile2" class="profile-dropdown">
            <input type="checkbox" id="profile2"><img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                                                      width="40px" height="40px" class="rounded-circle z-depth-0"
                                                      alt="avatar image">
            {{--        {{ $LoggedUserInfo->fname }}--}}
            {{--            <span>{{ $LoggedUserInfo->fname }}</span>--}}
            <span>Dinh Tien An</span>
            <label for="profile2"><i class="mdi mdi-menu"></i></label>
            <ul>
                <li><a href="#"><i class="mdi mdi-email-outline"></i>Profile</a></li>
                {{--                <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>--}}
                {{--                <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>--}}
                <li><a href="logout"><i class="mdi mdi-logout"></i>Logout</a></li>
            </ul>
        </label>
    </div>
@endsection

@section('body')
<div class="content">

    <form action="/action_page.php" style="padding-left: 78px">

        <label for="cars">Choose a class:</label>
        <select name="sort_by" id="class" class="sorting" onchange="this.from.submit();">
            <option value="T2019M" name="T2019M">T2019M</option>
            <option value="T2020N" name="T2020N">T2020N</option>
            <option value="T2019A" name="T2019A">T2019A</option>
            <option value="T2019A" name="T2019A">T2019A</option>
        </select>
    </form>
    <div class="container">
        <table class="table-teacher" style="width:100%">
            <tr>
                <th class="th-teacher">Name Class: </th>
                <th class="th-teacher">Total student: 20 </th>
                <th class="th-teacher">Course Name: Java </th>
                <th class="th-teacher">Year: 1/1/2019</th>
            </tr>
        </table>
        <br><br>
        <div class="table-responsive custom-table-responsive">

            <table class="table custom-table">
                <thead>
                <tr>

                    <th scope="col">
                        <label class="control control--checkbox">
                            <input type="checkbox"  class="js-check-all"/>

                        </label>
                    </th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teacher as $tea)
                <tr scope="row">
                    <th scope="row">

                    </th>
                    <td>
                        {{$tea->id}}
                    </td>
                    <td>
                        {{$tea->lname}} {{$tea->fname}}
                    </td>
                    <td>
                        {{$tea->phone}}
                    </td>
                    <td>
                        {{$tea->email}}
                    </td>
                    <td>
                        {{$tea->status}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
@endsection
