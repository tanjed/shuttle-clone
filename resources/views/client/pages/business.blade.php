@extends('client.master')
@section('title','Business')
@section('content')
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
