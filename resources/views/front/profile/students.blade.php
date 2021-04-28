@extends('front.layout.master_back')

@section('title', 'Student | Profile')


@section('account')

    <div class="container1 css-drop">
        <div class="half">
            <label for="profile2" class="profile-dropdown">
                <input type="checkbox" id="profile2"><img src="front/OnlineEdu/img/user/{{ $LoggedUserInfo->avatar }}" width="40px" height="40px"  class="rounded-circle z-depth-0"
                                                          alt="avatar image">
                <span>{{ $LoggedUserInfo->lname }} {{ $LoggedUserInfo->fname }}</span>
                <label for="profile2"><i class="mdi mdi-menu"></i></label>
                <ul>
                    <li><a href="logout"><i class="mdi mdi-logout"></i>Logout</a></li>
                </ul>
            </label>
        </div>
    </div>

@endsection



@section('body')
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="front/OnlineEdu/img/user/{{ $LoggedUserInfo->avatar }}" width="50%" alt=""/>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ $LoggedUserInfo->lname }} {{ $LoggedUserInfo->fname }}
                        </h5>
                        <br><br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal information</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>ID</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->id }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->lname }} {{ $LoggedUserInfo->fname }} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->phone }} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of birth</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->dob }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of join</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->date_of_join }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mark </label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $LoggedUserInfo->mark }}</p>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </form>
    </div>
@endsection
