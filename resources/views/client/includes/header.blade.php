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
        <div>
            <div class="container-fluid">
                <div class="row justfy-content-center">
                    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                        <div class="container-fluid" id="for_logo">
                            <a href="{{route('client.show.home')}}">
                                <img src="{{asset('client/image/shuttle-logo.png')}}" class="navbar-brand" style="cursor: pointer;" alt="">
                            </a>
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
                        </div>
                    </nav>
                    <!--End of navbar-->
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
                </div>
            </div>
        </div>
    </main>
</header>
