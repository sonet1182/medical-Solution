@extends('frontend.master')

@section('content')

<!--Main layout-->
  <main class=" ">
    <div class="container dark-grey-text ">

        @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
 @endif

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 my-4">

          <img src="{{ asset('uploads/sub_category/'.$data->photo) }}" class="img-fluid" alt="">

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
            </h4>

            <p class="lead font-weight-bold">Description</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
              sint voluptatibus!
              Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->

              <a type="button" href="{{ $data->map }}" class="btn btn-primary btn-md my-0 p">View Location
                <i class="fas fa-search ml-1"></i>
              </a>

            </form>

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
                    <b>{{ $rat->user->name }}</b>
                    <p class="text-primary pt-1">Ratings: <span class="stars" data-rating="{{ $rat->ratings }}" data-num-stars="5" ></span></p>
                    <p>REview: {{ $rat->review }}</p>
                </div>
            @endforeach

        </div>
        <div class="col-md-6">
            <h3 class="text-center text-primary">Give review here</h3>

            <form action="/ratings" method="POST">
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
