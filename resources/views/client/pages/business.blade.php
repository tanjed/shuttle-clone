@extends('client.master')
@section('title','Business')
@section('content')
<div id="header-section">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 header-title">
                                    <h2>Sign up to Shuttle for Business</h2>
                                    <h3>Ensure safe transportation for your moving employees in lockdown</h3>
                                    <a href="" type="button" id="land-signup" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter" style="-webkit-appearance: none;">sign up</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center" style="border:none;">
                                                    <div class="modal-title w-100 font-weight-bold">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #dee2e6;">&times;</span>
                                                        </button>
                                                        <h4 class="" id="exampleModalLongTitle">Want a customized solution for your organization?</h4>
                                                        <p>Add your company name, contact information below and our team will get in touch with you</p>
                                                    </div>
                                                </div>
                                                <div class="modal-body mx-3">
                                                    <div class="container-fluid">
                                                        <div class="row justfy-content-center">
                                                            <div class="col-md-12">
                                                                <form action="">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="" placeholder="Company Name" required autofocus>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="" placeholder="Contact Name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-6" id="email">
                                                                            <input type="email" class="form-control" name="" placeholder="Email" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" name="" placeholder="Phone Number" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-0 pt-3">
                                                                        <div class="col-md-6 offset-md-4 for_btn">
                                                                            <button style="border-radius: 8px" type="submit" class="btn btn-sm btn-info">Submit</button>
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
<div id="feature">
          <div class="container">
            <h1 class="my-5 text-center font-weight-bold">Corporate Pick & Drop Services</h1>
          </div>
          <div class="container-fluid">
              <h3 class="text-uppercase text-center mb-3">our difference</h3>
              <div class="row justfy-content-center" id="child-feature1">
                  <div class="col-md-4 col-lg-4">
                      <img src="{{asset('client/image/flexible.jpeg')}}" alt="">
                      <p class="text-center">Flexible employee pick up & drop off</p>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <img src="{{asset('client/image/customized-routes.jpeg')}}" alt="">
                    <p class="text-center">Customized routes</p>
                </div>
                <div class="col-md-4 col-lg-4">
                    <img src="{{asset('client/image/dedicated-manager.jpeg')}}" alt="">
                    <p class="text-center">Dedicated relationship manager</p>
                </div>
              </div>
              <!--first difference-->
              <div class="row justfy-content-center" id="child-feature2">
                <div class="col-md-4 col-lg-4">
                    <img src="{{asset('client/image/exclusive-app.jpeg')}}" alt="">
                    <p class="text-center">Exclusive app for the organization</p>
                </div>
                <div class="col-md-4 col-lg-4">
                  <img src="{{asset('client/image/hotline.jpeg')}}" alt="">
                  <p class="text-center">24/7 hotline support</p>
              </div>
              <div class="col-md-4 col-lg-4">
                  <img src="{{asset('client/image/real-dashboard.jpeg')}}" alt="">
                  <p class="text-center">Real-time dashboard for Human Resources</p>
              </div>
            </div>
          </div>
        </div>
       <!--End of service-->
        <div id="hygiene">
          <img id="hygiene-original" src="{{asset('client/image/safety.png')}}" alt="">
          <img id="hygiene-mobile" width="100%" src="{{asset('client/image/corona-safety-mobile.png')}}" alt="">
        </div>
        <!--end of corona pic-->
      </main>
    <section id="shuttle-business">
        <div class="container-fluid">
            <div class="row justfy-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="mt-5 font-weight-bold for_business">Why Shuttle for Business?</h1>
                    <h3 class="mb-5 pt-2 for_employee">When you solve your employees’ transportation problems, you get in return:</h3>
                </div>
                <!--business-->
                <div class="col-md-4">
                    <img width="100%" src="{{asset('client/image/peace-of-mind.png')}}" alt="">
                    <p class="mx-3 pt-3 text-center">
                        <strong>Peace of mind –</strong>
                        No need to take the hassle of managing transportation for your employees
                    </p>
                </div>
                <div class="col-md-4">
                    <img width="100%" src="{{asset('client/image/toyota-hiace.jpg')}}" alt="">
                    <p class="mx-3 pt-3 text-center">
                        <strong>Comfort and safety –</strong>
                        Clean, sanitized and air-conditioned vehicles for your employees to get to work on time
                    </p>
                </div>
                <div class="col-md-4">
                    <img width="100%" src="{{asset('client/image/productivity.png')}}" alt="">
                    <p class="mx-3 pt-3 text-center">
                        <strong>Productivity</strong>
                        - Happy employees mean productive and loyal employees
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--end of business-->
    <section>
        <div id="shuttle-benefits">
            <div class="container">
                <div class="row pb-5 text-center">
                    <h1 class="col-md-12 font-weight-bold">How a shared commute can help your business ?</h1>
                </div>
                <div class="row shared-communiuty text-center">
                    <div class="col-md-3">
                        <img src="{{asset('client/image/Benefits.png')}}" alt="">
                        <h5 class="font-weight-bold">Benefits that set you apart</h5>
                        <p>Show your employees that you care by offering direct from home-to-work rides.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('client/image/Accesible-Workplace.png')}}" alt="">
                        <h5 class="font-weight-bold">Accessible workplace</h5>
                        <p>Attract and retain the best talent by bridging the locational factor.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('client/image/Green-energy.png')}}" alt="">
                        <h5 class="font-weight-bold">Go Green, affordably</h5>
                        <p>Subsitute taxi rides to shared shuttle rides. Take a stand to cut carbon emissions.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('client/image/Late-NIght-Pooling.png')}}" alt="">
                        <h5 class="font-weight-bold">Late-night pooling</h5>
                        <p>Get your employees home reliably after dark. Provide a shared transport from workplace to different areas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of benifits-->
    <section class="my-5" id="shuttle-support">
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
    </section>
@endsection
