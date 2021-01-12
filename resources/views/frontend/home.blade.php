@extends('frontend.master')

@section('content')





<!--Main layout-->
<main>





    <div class="container">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-3">

            <!-- Navbar brand -->
            <span class="navbar-brand">Divisions:</span>


            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">All
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @php
                    $group = App\Models\Group::all();

                    @endphp
                    @foreach($group as $grp)
                    <li class="nav-item active dropdown">
                        <a class="nav-link px-3 dropbtn" href="#">{{ $grp->name }}</a>
                        <div class="dropdown-content">
                            @php
                            $category = App\Models\Category::where('group_id','=',$grp->id)->get();
                            @endphp
                            @foreach($category as $cat)
                            <a href="{{ url('show_sub/'.$cat->id) }}" style="text-decoration: none">{{ $cat->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    @endforeach

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->


        <!--Section: Products v.3-->


        <div class="row">
            <div class="col-md-6 px-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action text-center">


                        Hospital/clinic</a>


         @foreach($subcat as $data)

                    <a href="{{ url('product/'.$data->id) }}" class="list-group-item list-group-item-action list-group-item-secondary">
                        <i class="fas fa-hospital ml-1 text-success mr-3"></i>
                        {{ $data->name }}</a>
        @endforeach
                    </div>
            </div>

            <div class="col-md-6 px-2">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action text-center">

                        Ambulance</a>

         @foreach($amb as $data)

                    <a href="{{ url('product2/'.$data->id) }}" class="text-center list-group-item list-group-item-action list-group-item-secondary">
                        <i class="fas fa-ambulance ml-1 text-success mr-3"></i>
                        {{ $data->name }} ( Phone: {{ $data->phone }})
                    @if($data->isUserOnline())
                                                            <label class="py-2 px-3 badge btn-success">Online</label>
                                                        @else
                                                            <label class="py-2 px-3 badge btn-danger">Offline</label>
                                                        @endif
                                                        </a>
        @endforeach
                    </div>
            </div>
        </div>

    </div>
    <!--Section: Products v.3-->



    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
        Find Your Service
    </nav>
    <!--Pagination-->

    </div>
</main>
<!--Main layout-->

@endsection
