@extends('client.master')
@section('title','Rental')
@section('content')
        <div id="banner">
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 col-lg-6" id="banner-random-color" style="padding: 0;" >
                            <img id="banner-leftwave" width="100%" src="client/image/rental/banner-left-wave.png" alt="">    
                            <div id="trip-form">
                                <div id="form-title">
                                    <h4 class="font-weight-bold">Book your Trip</h4>
                                    <p class="font-weight-bold mt-2">Experience a Safe & Hassle Free Journey</p>
                                    <marquee height="30%" behavior="" direction="">
                                        <span>Due to government lockdown notice our rental services outside Dhaka are closed temporarily. Sorry for the inconvenience.</span>
                                    </marquee>
                                    <form action="">
                                        <div class="info-form">
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12 checkbox">
                                                    <span id="one-way" class="mr-3">
                                                        <input class="mr-1" type="radio" name="" id="" required checked aria-required="true">One Way
                                                    </span>
                                                    <span id="return">
                                                        <input class="mr-1" type="radio" name="" id="" required aria-required="true">Return
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <input type="text" required class="form-control" placeholder="From">
                                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <input type="text" required class="form-control" placeholder="To">
                                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <input type="date" required class="form-control datepicker hasDatepicker" placeholder="Journey Date">
                                                    <!-- <span><i class="fa fa-calendar"></i></span> -->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <input type="text" required class="form-control" placeholder="Redeem Check">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <select name="vehicle_type" required aria-required="true" id="">
                                                        <option value>Select Vehicle Type</option>
                                                        <option value="Hiace">Hiace</option>
                                                        <option value="Noah">Noah</option>
                                                        <option value="Hiace">Sedan</option>
                                                        <option value="Hiace">Coaster</option>
                                                    </select>
                                                    <span><i class="fa fa-car"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12">
                                                    <button id="proceed" type="button" class="btn btn-info">Proceed</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6" id="budget-pic">
                            <img width="100%" id="banner-car" src="client/image/rental/banner-car-edited.png" alt="">
                            <img width="100%" id="banner-car-mobile" src="client/image/rental/banner-car-edited-mobile2.png" alt="">
                        </div>
                      </div>
                  </div>
              </div>
              <!--end of form and image-->
              <div class="social-media-rental">
                <ul style="list-style-type: none;">
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
        <!--end of navbar-->
        <div id="how-works">
          <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <h2 class="mb-5 pb-4">Travel around Bangladesh with us</h2>
                    <h4 class="text-uppercase font-weight-bold mb-3">How it works</h4>
                    <h3 class="font-weight-bold mb-5">Book your Shuttle in just 4 simple steps</h3>
                    <img width="100%" src="client/image/rental/how-works.png" alt="">
                </div>
            </div>
          </div>
        </div>
        <!--End of four steps-->
        <div id="budget-experience" class="mt-5">
            <div class="container-fluid">
                <div class="row align-items-center h-100">
                    <div class="col-md-6 col-lg-6" style="padding: 0;" id="car_img">
                        <img width="100%" src="client/image/rental/budget-color-edited.png" alt="">
                    </div>
                    <div class="col-md-6 col-lg-6 mx-auto" id="contentBudget">
                        <h4 class="font-weight-bold text-uppercase mb-3">What you get</h4>
                        <h3 class="font-weight-bold pb-5">The best experience within your budget</h3>
                        <p class="font-weight-bold">
                            <img width="40px" src="client/image/rental/rectangle.png" alt="">
                            Get the best price in town
                        </p>
                        <p class="font-weight-bold">
                            <img width="40px" src="client/image/rental/rectangle.png" alt="">
                            Choose from a wide range of vehicles
                        </p>
                        <p class="font-weight-bold">
                            <img width="40px" src="client/image/rental/rectangle.png" alt="">
                            Trained driver
                        </p>
                        <p class="font-weight-bold">
                            <img width="40px" src="client/image/rental/rectangle.png" alt="">
                            24/7 Customer support 
                        </p>
                        <p class="font-weight-bold">
                            <img width="40px" src="client/image/rental/rectangle.png" alt="">
                            Any vehicle for any occasion
                        </p>
                        <img width="100%" src="client/image/rental/right-wave-mobile.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--best experience-->
        <div id="hygiene">
            <img id="hygiene-original" src="client/image/safety.png" alt="">
            <img id="hygiene-mobile" width="100%" src="client/image/corona-safety-mobile.png" alt="">
          </div>
          <!--end of corona pic-->
        </div>
      </main>
      <div class="my-5 py-5" id="shuttle-support">
        <div class="container text-center">
          <h1 class="font-weight-bold text-center mb-5">We are proudly supported by</h1>
          <div class="row justfy-content-center" id="shuttle-support-content">
            <div class="col-6 col-lg-3 col-md-3">
             <img src="client/image/robi.svg" alt="" class="robi"> 
            </div>
            <div class="col-6 col-lg-3 col-md-3">
              <img src="client/image/undp.png" alt="" class="undp"> 
             </div>
             <div class="col-6 col-lg-3 col-md-3">
              <img src="client/image/ac.png" alt="" class="ac"> 
             </div>
             <div class="col-6 col-lg-3 col-md-3">
              <img src="client/image/citi.png" alt="" class="citi"> 
             </div>
          </div>
        </div>
      </div>
      <!--end of support-->
@endsection
