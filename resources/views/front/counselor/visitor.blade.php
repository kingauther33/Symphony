@extends('front.counselor.master_counselor')

@section('title', 'Visitor')

@section('body')

  <div class="content">

    <div class="container">
      <h2 class="mb-5">Visitor</h2>


      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Address</th>
              <th scope="col">Status</th>
              <th scope="col">Options</th>
            </tr>
          </thead>
          <tbody>
          @foreach($visitors as $visitor)
            <tr scope="row">
              <td><a>{{ $visitor->fname }} {{ $visitor->lname }}</a></td>
              <td>
                  {{ $visitor->email }}
              </td>
              <td>{{ $visitor->phone }}</td>
              <td>{{ $visitor->address }}</td>
              <td>{{ $visitor->status }}</td>
                <td>
                    <span class="btn btn-sm btn-danger btn_row_delete"><i onclick="window.location='./visitor/delete/{{ $visitor->id }}'" class="fa fa-trash"></i></span>
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
        <script src="front/counselor/js/jquery-3.3.1.min.js"></script>
        <script src="front/counselor/js/popper.min.js"></script>
        <script src="front/counselor/js/bootstrap.min.js"></script>
        <script src="front/counselor/js/main.js"></script>
      @endsection
  </div>

@endsection
