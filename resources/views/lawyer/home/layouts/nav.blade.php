<div class="top-header">
                <div class="row">
                    <div class="col-sm-9 d-none d-xl-block">
                        <nav class="navbar navbar-expand-lg navbar-light main-menu">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">How It Works</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{route('howItWorks')}}" class="nav-link" style="color: black!important;">For Individuals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('lawyer.register-page')}}" class="nav-link"  style="color: black!important;">For Lawyers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('our-lawyers')}}">Our Lawyers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('hire-a-lawyer')}}">Lawyer Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('question-answer')}}">Q & A</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('blogs-articles', 1)}}">Blogs & Articles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="practice-area.html">Practice Area</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-sm-3 d-none d-xl-block">
                        <div class="user-nav">
                            <div class="row">
                                <!-- <div class="col-sm-2">
                                    <p class="bell-icon">
                                        <a href="#"><i class="fa-solid fa-bell"></i></a>
                                        <span class="round-white"></span>
                                    </p>
                                </div> -->
                                <div class="col-sm-9">
                                    <div class="row ">
                                        <div class="col-sm-4">
                                            <div class="round-user">
                                                <img src="/storage/{{auth()->user()->getProfilePic(auth()->user()->id)}}" alt="question-1" class="user-li">
                                                <span class="round"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 names">
                                            <p class="font-name"> {{auth()->user()->name}}</p>
                                            <p class="font-ad">{{auth()->user()->getEmirates(auth()->user()->id)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 pl-0 ">
                                    <ul class="moreoption">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa-solid fa-ellipsis-vertical text-white"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Are you sure you want to logout?')"> <img src="/new-design/user-dashboard/images/file-2.png"
                                                            alt="">
                                                        Logout</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-8  col-12 d-block d-xl-none">
                        <div class="d-flex1 ">
                            <div class="col-md-2">
                                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasExample">
                                    <img src="/new-design/user-dashboard/images/toogle.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasExample">
                                    <center> <img src="/new-design/user-dashboard/images/ft-logo.png" alt="off-logo" class="off-logo m-0">
                                    </center>
                                </a>
                            </div>
                            <div class="col-md-3 text-end">
                                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasExample">
                                    <img src="/new-design/user-dashboard/images/question-1.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <div class="text-left-part"> <img src="/new-design/user-dashboard/images/off-logo.png" alt="off-logo"
                                        class="off-logo"></div> <a type="button" class="btn-close bg-des"
                                    data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="menu-left">
                                    <li><a href="/" class="active-nav"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                    <li><a href="{{route('user.dashboard')}}"><i class="fa-solid fa-landmark"></i>Dashboard</a></li>
                                    <li><a href="{{route('user.consultation-requests')}}"><i class="fa-solid fa-users"></i>Consultations</a></li>
                                    <li><a href="{{route('user.questions-asked')}}"><i class="fa-solid fa-question"></i> Questions Asked</a></li>
                                    <li><a href="{{route('online-chat.requests')}}"><i class="fa-solid fa-star"></i> Chat Online Requests</a></li>
                                    <li><a href="{{route('user.services-purchased')}}"><i class="fa-solid fa-suitcase"></i> Services Purchased</a></li>
                                    <li><a href="{{route('hire-a-lawyer')}}"><i class="fa-solid fa-scale-balanced"></i>Lawyer Services</a></li>
                                    <li><a href="{{route('question-answer')}}"><i class="fa-solid fa-question"></i>Question & Answer</a></li>
                                    @if(!auth()->user())
                                        <li><a href="{{route('user.login')}}"><i class="fa-solid fa-sign-in"></i>Login</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>