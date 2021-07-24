@extends('client.master')
@section('title','Rental')
@section('content')
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
                <div class="col-md-6 col-lg-6" style="padding: 0;">
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
                        <img width="40px" src="image/rental/rectangle.png" alt="">
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
@endsection
