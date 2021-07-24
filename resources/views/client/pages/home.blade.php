@extends('client.master')
@section('title','Home')
@section('content')
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
                        <img src="image/card1.png" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle for Business</h3>
                        <p class="text-center">An exclusive app-based service for organizations who want to ensure safe & affordable commute for their employees</p>
                    </a>
                </div>
                <div class="col-md-4" id="child-service-offer-content">
                    <a href="">
                        <img src="image/card2.jpeg" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle for Women</h3>
                        <p class="text-center">An app based special service only for women where maximum 10 women can commute together at an affordable fare</p>
                    </a>
                </div>
                <div class="col-md-4" id="child-service-offer-content">
                    <a href="">
                        <img src="image/card3.png" width="100%" alt="">
                        <h3 class="font-weight-bold text-center">Shuttle Rental</h3>
                        <p class="text-center">One-stop reliable rental solution for businesses and individuals at an affordable price anywhere in Bangladesh</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end of  service offer-->
    <div class="mb-5" id="hygiene">
        <img id="hygiene-original" src="image/safety.png" alt="">
        <img id="hygiene-mobile" width="100%" src="image/corona-safety-mobile.png" alt="">
    </div>
    <!--end of corona pic-->
    </main>
    <section class="mb-5" id="shuttle-support">
        <div class="container text-center">
            <h1 class="font-weight-bold text-center mb-5">We are proudly supported by</h1>
            <div class="row justfy-content-center" id="shuttle-support-content">
                <div class="col-6 col-lg-3 col-md-3">
                    <img src="image/robi.svg" alt="" class="robi">
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <img src="image/undp.png" alt="" class="undp">
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <img src="image/ac.png" alt="" class="ac">
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <img src="image/citi.png" alt="" class="citi">
                </div>

            </div>
        </div>
    </section>
@endsection
