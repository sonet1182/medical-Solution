@extends('med.pages.master')

@section('content')

  <li class="nav-item cta mr-md-2"><a href="" class="nav-link">বাংলায় পড়ুন</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="" style="background-image: url('public/asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-8 pt-5 ftco-animate">
                <div class="mt-5">
                    <span class="subheading"></span>
                    <h1 class="mb-4 ">Be an honourable <br>Part of US</h1>
                    <p class="mb-4 text-dark">First website in <span class="text-success">Bangladesh</span> with best deal for your health safety</p>
                </div>
              </div>

              <div class="row overflow-auto pb-5">

                <div class="providerg p-4 ftco-animate col-md-4 bg-white">
                    <a href="">
                    <div class="text p-2 text-center">
                        <div class="icon" style="font-size: 60px; color:rgb(86, 143, 228)">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <h3><a href="">Helth Center Section</a></h3>
                        <p>Coming Soon...Not available!!!</p>
                    </div>
                    </a>
                </div>

                <div class="provider p-4 ftco-animate col-md-4 bg-white">
                    <a href="{{url('/login_page')}}">
                    <div class="text p-2 text-center">
                        <div class="icon" style="font-size: 60px; color:rgb(86, 143, 228)">
                            <span class="flaticon-ambulance"></span></div>
                        <h3><a href="#">Ambulance Section</a></h3>
                        <p>Create account and be updated to get client</p>
                    </div>
                    </a>
                </div>

                <div class="providerg p-4 ftco-animate col-md-4 bg-white">
                    <a href="">
                    <div class="text p-2 text-center">
                        <div class="icon" style="font-size: 60px; color:rgb(86, 143, 228)">
                            <span class="flaticon-doctor"></span></div>
                        <h3><a href="">Phermacy Section</a></h3>
                        <p>Coming Soon...Not available!!!</p>
                    </div>
                    </a>
                </div>

            </div>
            </div>
        </div>
      </section>





@stop
