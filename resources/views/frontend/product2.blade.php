@extends('frontend.master')

@section('content')

<!--Main layout-->
  <main class="pt-4">
    <div class="container dark-grey-text">

        @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
 @endif

      <!--Grid row-->
      <div class="row fadeIn">

        <!--Grid column-->
        <div class="col-md-6">

          <img src="{{ asset('uploads/profile/'.$data->photo) }}" class="" alt="" height="300px!important" style="margin: auto auto;  display:block">



        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">



          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <?php $sum="0" ?>
                    @foreach($rev as $attrs)

                    <?php $sum += $attrs->ratings; ?>

                    @endforeach

                    <?php
                    if (count($rev)=="0") {
                        $avg = "0";
                    } else {
                        $avg = $sum / count($rev);
                    }
                    ?>

                    <p class="text-primary pt-1"><button class="btn btn-warning">{{ $avg }}</button><span class="stars" data-rating="{{ $avg }}" data-num-stars="5" ></span></p>
            </div>

            <p class="lead">

              <span>Phone: {{ $data->phone }}</span>
            </p>

            <h4 class="font-weight-bold blue-text">
                <strong>{{ $data->name }}</strong>
                @if($data->isUserOnline())
            <label class="py-1 px-3 badge btn-success">Online</label>
             @else
            <label class="py-1 px-3 badge btn-danger">Offline</label>
             @endif
            </h4>

            <p class="lead font-weight-bold">Description</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
              sint voluptatibus!
              Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

              @if(Auth::user())

            <form class="d-flex justify-content-left">
              <!-- Default input -->

              <button type="button" class="btn btn-success btn-md my-0 p"   data-toggle="modal" data-target="#exampleModalCenter">Book Now
                <i class="fas fa-book ml-1"></i>
              </button>

              <a type="button" href="tel:{{ $data->phone }}" class="btn btn-primary btn-md my-0 p" type="submit">Call Now
                <i class="fas fa-phone ml-1"></i>
              </a>

            </form>

            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Book {{ $data->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="/book" method="POST">
                @csrf
                <div class="form-group" >

                    <label for="exampleInputEmail1">Address Information:</label>
                    <textarea class="form-control" row="4" aria-describedby="emailHelp" name="address"></textarea>
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password" name="date">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Time</label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Password" name="time">
            </div>

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="amb_id" value="{{ $data->id }}">


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>

@endif

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>



      <div class="row">
        <div class="col-md-6">
            <h3 class="text-center text-primary">Review</h3>
            @foreach($rev as $rat)
                <div style="border-bottom: 1px solid rgb(0, 140, 255);">
                    <b class="my-2">{{ $rat->user->name }}</b>
                    <p class="text-info">Rating: <span class="stars" data-rating="{{ $rat->ratings }}" data-num-stars="5" ></span></p>
                    <p>Review: {{ $rat->review }}</p>
                </div>
            @endforeach

        </div>

        @if(Auth::user())
        <div class="col-md-6">
            <h3 class="text-center text-primary">Give review here</h3>

            <form action="/ratings2" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Rating</label>
                    <input type="number" name="ratings" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter between 1 to 5" min="1" max="5">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Review</label>
                    <textarea name="review" id=""  rows="4" class="form-control"></textarea>
                </div>

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pro_id" value="{{ $data->id }}">

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        @endif
      </div>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->



    </div>
  </main>
  <!--Main layout-->

  @endsection
