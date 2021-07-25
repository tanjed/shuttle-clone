<header>
    <div id="topbar">
        <div class="container-fluid">
            <div class="row justfy-content-center">
                <div class="col-md-4"></div>
                <div class="col-md-8 text-right">
                    <p>CONTACT: +8801880199801 | info@shuttlebd.com</p>
                </div>
            </div>
        </div>
    </div>
    <!--contact and email-->
    <main>
        <!-- <div> -->
            <div class="container-fluid">
                <div class="row justfy-content-center">
                    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                    <a class="navbar-brand" href="{{route('client.show.home')}}" id="for_logo">
                        <img src="{{asset('client/image/shuttle-logo.png')}}" width="30" height="30" alt="">
                    </a>
                        <!-- <div class="container-fluid" > -->
                                <!-- <a href="{{route('client.show.home')}}"> -->
                                    <!-- <img src="{{asset('client/image/shuttle-logo.png')}}" class="navbar-brand" style="cursor: pointer;" alt=""> -->
                                <!-- </a> -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span>
                                    <i class="fas fa-bars"></i>
                                </span>
                                </button>
                            <!--for burger-->
                            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                                <!--left side of navbar-->
                                <ul class="navbar-nav mr-auto"></ul>
                                <!--right side of navbar-->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.show.home')}}">home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.show.business')}}">business</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.show.women')}}">Women</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.show.rent')}}">Rental</a>
                                    </li>
                                </ul>
                            </div>
                        <!-- </div> -->
                    </nav>
                    <!--End of navbar-->
                </div>
            </div>
        </div>
    </main>
</header>
