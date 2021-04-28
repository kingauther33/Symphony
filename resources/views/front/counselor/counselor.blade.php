@extends('front.profile.master2')

@section('title', 'Student')

@section('body')
  <div class="content">

    <div class="container">
      <h2 class="mb-5">Counselor</h2>
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
              <th scope="col">Email</th>
              <th scope="col">Date of birth</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
          @foreach($counselors as $counselor)
            <tr scope="row">
              <th scope="row">
              </th>
              <td>
                {{$counselor->id}}
              </td>
              <td><a>{{$counselor->lname}} {{$counselor->fname}}</a></td>
              <td>
                {{$counselor->email}}
              </td>
              <td>{{$counselor->dob}}</td>
                <td>{{$counselor->phone}}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
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
