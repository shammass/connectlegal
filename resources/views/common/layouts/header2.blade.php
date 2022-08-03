<header class="side-menu menu-style-2">
    <!-- start sidebar strip -->
    <div class="sidebar-nav-action" style="background-color:#041d43;">
        <div class="sidebar-nav-action-main">
            <a href="/" class="logo">
                <img alt="" src="/logo.png" class="mobile-logo" data-at2x="/logo.png">
            </a>
            <div class="side-menu-button">
                <a href="javascript:void(0);" class="nav-icon" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <ul class="sidebar-social-icon list-unstyled d-none d-sm-inline-block">
                <li><a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="http://www.linkedin.com" target="_blank" class="text-white"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end sidebar strip -->
    <!-- start navigation -->
    <div class="bg-black sidebar-nav-menu navbar-expand-lg">
        <div class="hover-background-color bg-extra-dark-gray d-none d-lg-block"></div>
        <!-- start menu -->
        <div class="col-12 h-100 padding-3-half-rem-lr sm-padding-1-rem-lr">
            <div class="menu-list-wrapper" data-scroll-options='{ "theme": "light" }'>
                <ul class="menu-list alt-font alt-font w-70 xl-w-100 margin-auto-lr tab-pane med-text mainMenu fade in active show" id="main-menu">
                    <!-- start menu item -->
                    <li class="menu-list-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="{{route('howItWorks')}}">How It Works</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="{{route('lawyer.register-page')}}">For Lawyers</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="{{route('question-answer')}}">Q&A</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="{{route('testimonials')}}">Testimonials</a>
                    </li>
                    @if(auth()->user())
                        <li class="menu-list-item">
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                    @else
                        <li class="menu-list-item">
                            <a href="#login-form" class="popup-with-form">Login</a>
                        </li>
                    @endif
                    <!-- end menu item -->
                </ul>
                <ul class="menu-list alt-font alt-font w-70 xl-w-100 margin-auto-lr tab-pane med-text fade in lawyerOnline" id="lawyer-online">
                <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list-style-08">
                                <hr>
                                <strong>Lawyers Online</strong>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                                <hr>
                                <strong>Lawyers Offline</strong>
                                <hr>
                                <li class="border-bottom border-color-black-transparent" style="padding: 0px 0;margin-bottom: 35px;">
                                    <a class="modal-popup" href="#modal-popup2">
                                        <img class="rounded-circle border-all border-width-6px border-color-green box-shadow-small margin-25px-right xs-w-40px xs-margin-4px-right" src="https://via.placeholder.com/73x73" alt="" style="width: 50px;border-color:red!important;"/>
                                    </a>
                                    <div class="w-100 lg-w-65 xs-w-60 xs-margin-10px-right last-paragraph-no-margin avatar avatar-online">
                                        <span class="font-weight-300 text-small text-white">Green salad</span>
                                        <small><p>UAE, Dubai</p></small>
                                    </div>
                                    <div id="modal-popup2" class="col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 position-relative mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                                            <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather  icon-feather-message-square text-large text-black margin-10px-right"></i>Post a question</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-message-circle text-large text-black margin-10px-right"></i>Chat online</li>
                                            <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-phone-call text-large text-black margin-10px-right"></i>Request a callback</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-calendar text-large text-black margin-10px-right"></i>Book a meeting</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-briefcase text-large text-black margin-10px-right"></i>Hire a lawyer</li>
                                            <li class="padding-15px-tb"><i class="feather icon-feather-user-plus text-large text-black margin-10px-right"></i>Open profile</li>
                                        </ul>
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                                    </div>
                                    <!-- <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$10.00</div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <hr>
        <!-- end menu -->
        <div class="bottomNavbar">
            <a href="#main-menu" class="mainMenu active" onclick="mainMenu()">
                <i class="feather icon-feather-menu align-middle"> Menu</i>
            </a>
            <a href="#lawyer-online" class="lawyerOnline" onclick="lawyerOnline()">
                <i class="feather icon-feather-message-square align-middle"> Lawyers Online</i>
            </a>
        </div>

    </div>
    <!-- end navigation -->
</header>