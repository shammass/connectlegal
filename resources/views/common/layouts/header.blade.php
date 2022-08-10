
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg navbar-boxed navbar-dark border-bottom border-color-white-transparent fixed-top" style="background-color:#041d43;">
        <div class="container-fluid nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="/">
                    <img src="/logo.png" data-at2x="/logo.png" class="default-logo" alt="" style="max-height: 50px!important;margin-left:23px;">
                    <img src="/logo.png" data-at2x="/logo.png" class="alt-logo" alt="">
                    <img src="/logo.png" data-at2x="/logo.png" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item dropdown megamenu">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('howItWorks')}}" class="nav-link" style="color: white;">How It Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('lawyer.register-page')}}" class="nav-link" style="color: white;">For Lawyers</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('question-answer')}}" class="nav-link" style="color: white;">Q & A</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('testimonials')}}" class="nav-link" style="color: white;">Testimonials</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#" class="nav-link">Lawyers</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                    <a href="#">Corporate Lawyers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Criminal Lawyers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Divorce Lawyers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Labout Lawyers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Family Lawyers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Immigration Lawyers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#" class="nav-link">Practice Area</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                    <a href="#">Project And Construction</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">UAE Labour Law</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Energy</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Banking And Finance</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">General Civil Law</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Commercial Property</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Corporate Commercial Law</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Islamic Finance</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Criminal</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Family</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Accident Law</a>
                                </li>
                            </ul>
                        </li>
                        @if(auth()->user())
                            <li class="nav-item">
                                <a href="{{route('logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: white;">Logout</a>
                            </li>
                        @else 
                            <li class="nav-item">
                                <a href="#login-form" class="nav-link popup-with-form" style="color: white;">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->

    <form action="{{route('login')}}" onsubmit="return validateLogin(event)" method="POST" id="login-form" class="white-popup-block col-xl-5 col-lg-7 col-sm-9  p-0 mx-auto mfp-hide">
        @csrf()
        <div class="padding-fifteen-all bg-white border-radius-6px xs-padding-six-all">
            <div class="row border-top border-width-1px border-color-medium-gray" style="height: 120px;margin-top: -60px;">
                <div class="col-12 p-0 tab-style-07">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs justify-content-center text-center text-uppercase font-weight-500 alt-font margin-10-rem-bottom lg-margin-8-rem-bottom border-bottom border-color-medium-gray md-margin-6-rem-bottom">
                        <li class="nav-item"><a data-bs-toggle="tab" href="#login" class="nav-link active">Login</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#register">Register</a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active show">
                    <h6 class="text-extra-dark-gray font-weight-500 margin-35px-bottom xs-margin-15px-bottom"></h6> 
                    <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="email" name="email" id="email" placeholder="Your email address">                    
                    <input class="medium-input required" type="password" name="password" id="pwd" placeholder="Your password">
                    
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-medium mb-0" type="submit" style="background-color: #041d43;color:white;">Login</button>
                    <br>
                    <p>
                        <span style="color:red" class="email-error"></span>
                        <br>
                        <span style="color:red" class="pwd-error"></span>
                    </p>
                    <div class="form-results d-none"></div>
                </div>
                <div id="register" class="tab-pane fade">
                    <h6 class="text-extra-dark-gray font-weight-500 margin-35px-bottom xs-margin-15px-bottom" style="text-align: center;">Are You A Lawyer?</h6> 
                    <input type="hidden" name="redirect" value="">
                   
                    <div class="row justify-content-center">
                        <div class="col-12 btn-dual text-center">
                            <a href="{{route('lawyer.register-page')}}" class="btn btn-large btn-dark-gray btn-round-edge d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">Yes</a>
                            <a href="#login2-form" class="btn btn-large btn-dark-gray btn-round-edge d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr popup-with-form">No</a>
                        </div>
                    </div>
                    <div class="form-results d-none"></div>
                </div>
            </div>
        </div>
    </form>
    <form id="login2-form" action="email-templates/contact-form.php" method="post" class="white-popup-block col-xl-5 col-lg-7 col-sm-9  p-0 mx-auto mfp-hide">
        <div class="padding-fifteen-all bg-white border-radius-6px xs-padding-six-all">
            <div class="row border-top border-width-1px border-color-medium-gray" style="height: 120px;margin-top: -60px;">
                <div class="col-12 p-0 tab-style-07">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs justify-content-center text-center text-uppercase font-weight-500 alt-font margin-10-rem-bottom lg-margin-8-rem-bottom border-bottom border-color-medium-gray md-margin-6-rem-bottom">
                        <li class="nav-item"><a data-bs-toggle="tab" href="#login" class="nav-link">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#register">Register</a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane fade">
                    <h6 class="text-extra-dark-gray font-weight-500 margin-35px-bottom xs-margin-15px-bottom"></h6> 
                    <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="email" name="email" placeholder="Your email address">
                    <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="password" name="passowrd" placeholder="Your password">
                    
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-medium mb-0" type="submit" style="background-color: #041d43;color:white;">Login</button>
                    <div class="form-results d-none"></div>
                </div>
                <div id="register" class="tab-pane fade in active show">
                    <h6 class="text-extra-dark-gray font-weight-500 margin-35px-bottom xs-margin-15px-bottom"></h6> 
                    <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="email" name="email" placeholder="Your email address">
                    <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="password" name="passowrd" placeholder="Your password">
                    
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-medium mb-0 submit" type="submit" style="background-color: #041d43;color:white;">Signup</button>
                    <div class="form-results d-none"></div>
                </div>
            </div>
        </div>
    </form>

    
</header>
@include('common.layouts.header2')