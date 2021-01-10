@extends('med.pages.master')

@section('content')

<h1 class="text-center" style="margin-top: 110px;">Profile Page</h1>

<div class="container emp-profile">
            <form action='edit_profile' method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <div class="mt-3">
                                <h3 >
                                        {{ Auth::user()->name }}
                                    </h3>
                                    <h6>
                                        @if(Auth::user()->roll_as == 'vendor')
                                            Ambulance Service Provider
                                        @else
                                        {{ Auth::user()->roll_as }}
                                        @endif
                                    </h6>
                            </div>

                            <img src="{{ asset('uploads/profile/'. Auth::user()->photo) }}" alt="" style="weidth:200px!important; height:180px!important;"/>

                            <div class="mt-2">
                                <input type="file" name="file"/>
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
                                            <div class="col-md-6 ">

                                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6 ">
                                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6 ">
                                                <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}">
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Division</label>
                                            </div>
                                            <div class="col-md-6 ">

                                                <select name="division" id="" class="form-control">
                                                    @if(!Auth::user()->division == Null)
                                                    <option value="{{ Auth::user()->division }}">{{ Auth::user()->group->name }}</option>
                                                    @endif
                                                    @foreach($data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6 ">
                                                <select name="city" id="" class="form-control">
                                                    @if(!Auth::user()->city == Null)
                                                        <option value="{{ Auth::user()->city }}">{{ Auth::user()->category->name }}</option>
                                                    @endif
                                                    @foreach($city as $cities)
                                                        <option value="{{ $cities->id }}">{{ $cities->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">

                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection
