@extends('frontend.master')

@section('content')

<div class="ipro_body" style="height: 100vh">
<div class="container emp-profile" >
            <form method="post">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <div>
                            <img src="{{ asset('uploads/profile/'. Auth::user()->photo) }}" alt="" style="weidth:200px!important; height:180px!important"/>
                            </div>
                            <div class="mt-3">
                                <h5>
                                        {{ Auth::user()->name }}
                                    </h5>
                                    <h6>
                                        {{ Auth::user()->roll_as }}
                                    </h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">


                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Address</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                <p>{{ Auth::user()->id }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                <p>{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6 ">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                <p>{{ Auth::user()->phone }}</p>
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Division</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                @if(!Auth::user()->division == Null)
                                                <p>{{ Auth::user()->group->name }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Division</label>
                                            </div>
                                            <div class="col-md-6 form-control">
                                                @if(!Auth::user()->city == Null)
                                                <p>{{ Auth::user()->category->name }}</p>
                                                @endif
                                            </div>
                                        </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="update-user-profile" type="button" class="btn btn-primary">Update Profile</a>
                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection
