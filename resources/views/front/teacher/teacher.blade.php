
@extends('front.profile.master2')

@section('title', 'Teacher')

@section('body')
<div class="content">

    <form action="/action_page.php" style="padding-left: 78px">

        <label for="cars">Choose a class:</label>
        <select name="class" id="class">
            <option value="t2004m">T2004M</option>
            <option value="t2013m">T2103M</option>
            <option value="t3333a">T3333A</option>
        </select>

    </form>
    <div class="container">
        <table class="table-teacher" style="width:100%">
            <tr>
                <th class="th-teacher">Name Class: T2004M</th>
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
