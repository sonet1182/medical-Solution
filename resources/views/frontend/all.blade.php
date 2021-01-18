@extends('frontend.master')

@section('content')


<!--Main layout-->
<main>

    <div class="container" style="height:70vh">

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

                    </div>

                    <div  class="card text-center p-5">

                        <h1><i class="fa fa-hospital" aria-hidden="true"></i></h1>

                        <h2 class="text-center py-5">Find Hospital and Show Review</h2>

                    </div>


            </div>

            <div class="col-md-6 px-2">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action text-center">

                        Ambulance</a>

                    </div>

                    <div  class="card text-center p-5">

                        <h1><i class="fa fa-ambulance" aria-hidden="true"></i></h1>

                        <h2 class="text-center py-5">Hire Ambulance by Review</h2>

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
