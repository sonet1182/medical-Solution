@extends('med.pages.master')

@section('content')


      <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('med/images/bg_2.jpg') }}');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
            <div class="mt-5">
                <span class="subheading">Welcome to Medstepbd</span>
                <h1 class="mb-4 ">We are here<br>for your Care</h1>
                <p class="mb-4 text-success font-weight-bold">First website in <span class="text-danger">Bangladesh</span> with best deal for your health safety</p>
                @if(Auth::user() && Auth::user()->city != NULL)
                <p><a href="{{ url('/p_service') }}" class="btn btn-primary py-3 px-4">Service in Your Area</a> </p>
                @else
                <p><a href="{{ url('/service') }}" class="btn btn-primary py-3 px-4">Take Service</a> </p>
                @endif

            </div>
          </div>
        </div>
      </div>
    </section>

        <section class="ftco-section justify-content-center mb-5 pb-2" id="about-section">
        <div class="container">
            <div class="d-flex">
                <div class="pl-lg-5">
                    <div class="">
                        <div class="row justify-content-start">
                      <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                        <h2 class="my-4">We Are <span>Medstepbd</span> A Health Information and Emergency Ambulance Provider Platform</h2>
                        <h3>We are providing three Solution in one website.</h3>
                        <ul class="">
                            <li>Hospital Information and Recommendation</li>
                            <li>Hire Ambulance Near of You.</li>
                            <li>Create account for providing Ambulance Services</li>
                        </ul>
                        <p> <a href="{{ url('#contact-section') }}" class="btn btn-secondary py-3 px-4">Contact with us</a></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!--


    <section class="ftco-intro img" id="provider-section"  style="background-image: url('{{ asset('med/images/images.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2>Your Service is Our Priority</h2>
                        <p>Be a part of our Services</p>

                    </div>
                </div>
            </div>
        </section>



        <section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
        <div class="container-fluid px-0">
            <div class="row no-gutters">

                <div class="col-md-4 d-flex">
                    <div class="img img-dept align-self-stretch" style="background-image: url('{{ asset('med/images/dept-1.jpg') }}');"></div>
                </div>

                <div class="col-md-8">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Neurology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Surgical</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Dental</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Opthalmology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Cardiology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Traumatology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Nuclear Magnetic</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">X-ray</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Cardiology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="ftco-section" id="doctor-section">
            <div class="container-fluid px-5">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url('{{ asset('med/images/doc-1.jpg') }}' ) ;"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3 class="mb-2">Dr. Lloyd Wilson</h3>
                                <span class="position mb-2">Neurologist</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                      <p><a href="#" class="btn btn-primary">Book now</a></p>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url('{{ asset('med/images/doc-2.jpg') }}');"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3 class="mb-2">Dr. Rachel Parker</h3>
                                <span class="position mb-2">Ophthalmologist</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                      <p><a href="#" class="btn btn-primary">Book now</a></p>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url('{{ asset('med/images/doc-3.jpg') }}');"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3 class="mb-2">Dr. Ian Smith</h3>
                                <span class="position mb-2">Dentist</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                      <p><a href="#" class="btn btn-primary">Book now</a></p>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url('{{ asset('med/images/doc-4.jpg') }}');"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3 class="mb-2">Dr. Alicia Henderson</h3>
                                <span class="position mb-2">Pediatrician</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                      <p><a href="#" class="btn btn-primary">Book now</a></p>
                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Gets Every Single Updates Here</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/5f69c5a17dc9b.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="https://praavahealth.com/webblog/68">Allergy and COVID-19</a></h3>
                <p>Symptoms of flu, cold, and allergy are quite similar to those of COVID-19, so with every cough and sneeze, people wonder whether they have been infected.</p>
                <p><a href="https://praavahealth.com/webblog/68" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/image_2.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/image_3.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="https://praavahealth.com/webblog/70">Breast Cancer and the Importance of Early Detection</a></h3>
                <p>Breast Cancer Awareness Month, observed in countries across the world every October, helps to increase attention and support for awareness.</p>
                <p><a href="https://praavahealth.com/webblog/70" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/image_4.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/image_5.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('med/images/image_6.jpg') }}');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>
        </div>
      </div>
    </section>


    -->

    <section class="ftco-section testimony-section img" style="background-image: url('{{ asset('med/images/bg_3.jpg') }}');">
        <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">

            <h2 class="mb-4">Team Members</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url('{{ asset('med/images/shimul.jpg') }}')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">Shimul Chandra Gharami<br>171-15-1170<br>Computer Science and Engineering</p>
                    <p class="name">DIU</p>
                    <span class="position">Daffodil International University</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url('{{ asset('med/images/sonet.jpg') }}')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">Md. Shawn Shikder Sonet<br>171-15-1182<br>Computer Science and Engineering</p>
                    <p class="name">DIU</p>
                    <span class="position">Daffodil International University</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url('{{ asset('med/images/halim.jpg') }}')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">Md. Abdul Halim<br>171-15-1408<br>Computer Science and Engineering</p>
                    <p class="name">DIU</p>
                    <span class="position">Daffodil International University</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
                <p>Dattapara, Savar, Dhaka</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
                <p><a href="tel://1234567920">+8801732379393</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
                <p><a href="mailto:diuproject@gmail.com">diuproject@gmail.com</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
                <p><a href="#">diuproject.com</a></p>
              </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 ">
            <div id="" class="bg-white"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14593.440713827862!2d90.3215881!3d23.8768435!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62af421e71601a5f!2sDIU-Ashulia%20Campus%20Library!5e0!3m2!1sen!2sbd!4v1606817066052!5m2!1sen!2sbd" width="100%" height="550px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
          </div>
        </div>
      </div>
    </section>

@stop
