@extends('client.master')
@section('title','Women')
@section('content')
<div class="col-md-12" id="women-header-section">
                  <div class="text-center women-header-title">
                    <h1 class="font-weight-bold">Shuttle for Women</h1>
                    <a href="" type="button" style="-webkit-appearance: none;" class="btn btn-sm text-uppercase mt-5" data-toggle="modal" data-target="#exampleModalCenter" style="-webkit-appearance: none;">sign up</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-women">
                          <div class="modal-header text-center" style="border:none;">
                              <div class="modal-title w-100 font-weight-bold">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span>
                                    <i class="fa fa-times" style="color: #dee2e6; font-size: 18px;" aria-hidden="true"></i>
                                  </span>
                                </button>
                              </div>
                          </div>
                            <div class="modal-body mx-3">
                              <div class="container-fluid">
                                <div class="row justfy-content-center">
                                  <div class="col-md-12">
                                    <form action="" id="women-modal-form">
                                      <div class="form-group row">
                                        <div class="col-md-12">
                                          <input type="text" class="form-control" name="" placeholder="Enter Your Full Name" required autofocus>
                                        </div>
                                      </div>
                                      <!-- <div class="form-group row">
                                        <div class="col-md-12">
                                          <input type="text" class="form-control" name="" placeholder="Contact Name" required>
                                        </div>
                                      </div> -->
                                      <div class="form-group row">
                                        <div class="col-md-6" id="email">
                                          <input type="email" class="form-control" name="" placeholder="Email" required>
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" class="form-control" name="" placeholder="Phone Number" required>
                                        </div>
                                      </div>
                                      <!--location-->
                                      <div class="form-group row">
                                        <div class="col-md-6" id="pickup">
                                          <input type="text" class="form-control" name="" placeholder="Pick up Location" required>
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" class="form-control" name="" placeholder="Drop off Location" required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <div class="col-md-12">
                                          <input type="text" class="form-control" name="" placeholder="Institution" required autofocus>
                                        </div>
                                      </div>
                                      <div class="form-group row mb-0 pt-3" style="justify-content: center">
                                        <div class="col-md-6 text-center">
                                          <button type="submit" class="btn btn-sm btn-info">Submit</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--end of modal-->
                  </div>
                  <div class="app-link" id="for_playstore">
                    <a target="_blank" href="">
                      <img src="{{asset('client/image/women/app.png')}}" alt="">
                    </a>
                    <a href="">
                      <img src="{{asset('client/image/women/apple_store.png')}}" alt="">
                    </a>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div id="social-contact">
                      <ul>
                        <li>
                          <a target="_blank" href="">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a target="_blank" href="">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a target="_blank" href="">
                            <i class="fab fa-linkedin"></i>
                          </a>
                        </li>
                        <li>
                          <a target="_blank" href="">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!--end of navbar-->
    <section>
        <div id="using-procedure">
          <div class="container-fluid" id="service-offer-title">
            <h1 class="my-5 text-center">How does it work ?</h1>
          </div>
        </div>
        <!--End of how work-->
        <section class="mb-5 for_image" id="using-procedure-content">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-3 col-lg-3">
                <img src="{{asset('client/image/women/Shuttle icons_page_06.jpg')}}" alt="">
                <p class="text-center font-weight-bold">Download the app</p>
              </div>
              <div class="col-md-2 col-lg-2 arrow">
                <svg width="100%">
                  <path stroke-width="2" stroke-dasharray="3,1" d="M20,35 Q80,10 120,35 M120,35 L100,40 M120,35 L110,18" fill="none" stroke="red"></path>
                </svg>
              </div>
              <div class="col-md-3 col-lg-3">
                <img src="{{asset('client/image/women/Shuttle icons_page_02.jpg')}}" alt="">
                <p class="text-center font-weight-bold">Create an account</p>
              </div>
              <div class="col-md-2 col-lg-2 arrow">
                <svg width="100%">
                  <path stroke-width="2" stroke-dasharray="3,1" d="M20,35 Q80,10 120,35 M120,35 L100,40 M120,35 L110,18" fill="none" stroke="red"></path>
                </svg>
              </div>
              <div class="col-md-3 col-lg-3">
                <img src="{{asset('client/image/women/check schedule.png')}}" alt="">
                <p class="text-center font-weight-bold">Check schedule</p>
              </div>
            </div>
            <div class="row text-center mt-5" id="using-procedure-content2">
              <div class="col-md-3 col-lg-3">
                <img src="{{asset('client/image/women/Shuttle icons_page_07.jpg')}}" alt="">
                <p class="text-center font-weight-bold">Book online</p>
              </div>
              <div class="col-md-2 col-lg-2 arrow">
                <svg width="100%">
                  <path stroke-width="2" stroke-dasharray="3,1" d="M20,35 Q80,10 120,35 M120,35 L100,40 M120,35 L110,18" fill="none" stroke="red"></path>
                </svg>
              </div>
              <div class="col-md-3 col-lg-3">
                <img src="{{asset('client/image/women/Shuttle icons_page_03.jpg')}}" alt="">
                <p class="text-center font-weight-bold">Go to pick up location</p>
              </div>
            </div>
          </div>
        </section>
        <!--end of card -->
        <div class="mb-5" id="check-routes">
          <div class="container">
            <div class="route-heading">
              <h1 class="text-center">Available Routes</h1>
            </div>
            <div class="row" style="justify-content: center;">
              <div class="col-md-4 col-lg-4" id="route-details">
                <div id="route-box">
                  <p id="route-button">
                    Check Your route
                    <span style="float: right">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </p>
                  <ul id="show" style="display: none;">
                    <li><h4>Dhanmondi To Rampura</h4></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end of route check-->
        <div id="download-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-4 col-lg-4">
                <img id="download-phone" src="{{asset('client/image/women/phone.jpeg')}}" alt="">
              </div>
              <div class="col-md-8 col-lg-8 text-center" id="download-section-content">
                <h1 class="text-uppercase">Download The app now</h1>
                <p class="py-3 font-weight-bold">And join our community of 30,000+ satisfied clients</p>
                <a target="_blank" href="" class="store">
                  <img src="{{asset('client/image/women/playstore.png')}}" alt="">
                </a>
                <a target="_blank" href="" class="store">
                  <img src="{{asset('client/image/women/apple.png')}}" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--End of mobile section-->
        <div id="passenger-safety">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 col-lg-12" id="passenger-safety-heading">
                <h3 class="text-center font-weight-bold">We ensure the safety of our passengers by:</h3>
              </div>
            </div>
            <div class="row text-center" id="passenger-safety-content">
              <div class="col-md-4 col-lg-4">
                <img width="100" src="{{asset('client/image/women/women.jpeg')}}" alt="">
                <p class="font-weight-bold p-3">Female Only Transportation</p>
              </div>
              <div class="col-md-4 col-lg-4">
                <img width="100" src="{{asset('client/image/women/tm.jpeg')}}" alt="">
                <p class="font-weight-bold p-3">Trained Trip Manager</p>
              </div>
              <div class="col-md-4 col-lg-4">
                <img width="100" src="{{asset('client/image/women/access.jpeg')}}" alt="">
                <p class="font-weight-bold p-3">Emergency Hotline and 24/7 Vehicle Tracking</p>
              </div>
            </div>
          </div>
        </div>
        <!--end of card-->
        <div class="container" id="testimonials">
          <div class="row justify-content-center">
            <h3 class="font-weight-bold py-5 my-5 text-center">Testimonials</h3>
          </div>
          <div>
              <div id="carousel-example-2" class="carousel slide carousel-fade mb-5" data-ride="carousel">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-2" data-slide-to="1"></li>
                      <li data-target="#carousel-example-2" data-slide-to="2"></li>
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="container">
                            <div class="row align-items-center">
                              <div class="col-md-6 col-lg-6">
                                <img src="{{asset('client/image/women/nishat-shama.jpg')}}" alt="">
                              </div>
                              <div class="col-md-6 col-lg-6 text-left" id="carousel-item-content">
                                <h1 class="font-weight-bold">Nishat Shama</h1>
                                <h5 class="font-weight-bold" style="font-size: 20px;">Student of North South University</h5>
                                <p>I took my first ride today from mdpur to Nsu ! In love with their service.i think if they properly maintain their schedule & timing like this then they will go a long way! Looking forward to take more rides from shuttle !!!! Best wishes for the shuttle team</p>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                              <img src="{{asset('client/image/women/safia-rahman.jpg')}}" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 text-left" id="carousel-item-content">
                              <h1 class="font-weight-bold">Safia Rahman</h1>
                              <h5 class="font-weight-bold" style="font-size: 20px;">Student of North South University</h5>
                              <p>One of the best things of 2018- Shuttle! ❤️</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!--2nd slide-->
                    <div class="carousel-item">
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-md-6 col-lg-6">
                            <img src="{{asset('client/image/women/lidya-wahab-tithi.jpg')}}" alt="">
                          </div>
                          <div class="col-md-6 col-lg-6 text-left" id="carousel-item-content">
                            <h1 class="font-weight-bold">Lidya Wahab Tithi</h1>
                            <h5 class="font-weight-bold" style="font-size: 20px;">Student of Independent University, Bangladesh</h5>
                            <p>Thanks for making my life so easier...! It's like Angels in disguise! Thank you shuttle</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div class="my-5 py-5" id="shuttle-support">
        <div class="container text-center">
          <h1 class="font-weight-bold text-center mb-5">We are proudly supported by</h1>
          <div class="row justfy-content-center" id="shuttle-support-content">
            <div class="col-6 col-lg-3 col-md-3">
             <img src="{{asset('client/image/robi.svg')}}" alt="" class="robi"> 
            </div>
            <div class="col-6 col-lg-3 col-md-3">
              <img src="{{asset('client/image/undp.png')}}" alt="" class="undp"> 
             </div>
             <div class="col-6 col-lg-3 col-md-3">
              <img src="{{asset('client/image/ac.png')}}" alt="" class="ac"> 
             </div>
             <div class="col-6 col-lg-3 col-md-3">
              <img src="{{asset('client/image/citi.png')}}" alt="" class="citi"> 
             </div>
          </div>
        </div>
      </div>
      <!--end of support-->
</section>
@endsection
