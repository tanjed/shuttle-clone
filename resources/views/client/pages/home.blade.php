@extends('client.master')
@section('title','Home')
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
    <div id="service-offer">
        <div class="container-fluid" id="service-offer-title">
            <h1 class="my-5 text-center">Services We Offer</h1>
        </div>
    </div>
    <!--End of service offer-->
    <section class="mb-5" id="service-offer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="child-service-offer-content">
                    <a href="">
                        <img src="{{asset('client/image/card1.png')}}" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle for Business</h3>
                        <p class="text-center">An exclusive app-based service for organizations who want to ensure safe & affordable commute for their employees</p>
                    </a>
                </div>
                <div class="col-md-4" id="child-service-offer-content">
                    <a href="">
                        <img src="{{asset('client/image/card2.jpeg')}}" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle for Women</h3>
                        <p class="text-center">An app based special service only for women where maximum 10 women can commute together at an affordable fare</p>
                    </a>
                </div>
                <div class="col-md-4" id="child-service-offer-content">
                    <a href="">
                        <img src="{{asset('client/image/card3.png')}}" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle Rental</h3>
                        <p class="text-center">One-stop reliable rental solution for businesses and individuals at an affordable price anywhere in Bangladesh</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end of  service offer-->
    <div class="mb-5" id="hygiene">
        <img id="hygiene-original" src="{{asset('client/image/safety.png')}}" alt="">
        <img id="hygiene-mobile" width="100%" src="{{asset('client/image/corona-safety-mobile.png')}}" alt="">
    </div>
    <!--end of corona pic-->
    </main>
    <section class="mb-5" id="shuttle-support">
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
