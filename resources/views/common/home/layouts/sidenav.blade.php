<div id="mySidenav" class="sidenav m-none-menu">
        <div class="offcanvas-body">
            <div class="menu-part">
                <p class="close-top">X</p>
              <img src="/new-design/assets/images/off-logo.png" alt="off-logo" class="off-logo">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                class="fa-solid fa-bars color-smae"></i> Main menú</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                class="fa-solid fa-user"></i> Lawyers Online</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="bg-E8F8F2 sp-r-l online-a">
                            <div class="row ">
                                <div class="col-9"><a href="#">Lawyers online (5)</a></div>
                                <div class="col-3 text-right"><a href="#"><i class="fa-solid fa-globe"></i>
                                        All</a></div>
                            </div>
                        </div>
    
                        <ul class="menu-left">
                            <li><a href="/" class="active-nav"><i class="fa-solid fa-house-user"></i>
                                    Home</a>
                            </li>
                            <li><a href="{{route('howItWorks')}}"><i class="fa-solid fa-landmark"></i> How It
                                    Works</a></li>
                            <li><a href="{{route('lawyer.register-page')}}"><i class="fa-solid fa-users"></i> For Lawyers</a></li>
                            <li><a href="{{route('question-answer')}}"><i class="fa-solid fa-question"></i>
                                    Q&A</a></li>
                            <li><a href="{{route('testimonials')}}"><i class="fa-solid fa-star"></i>
                                    Testimonials</a></li>
                            <li><a href="{{route('our-lawyers')}}"><i class="fa-solid fa-bag-shopping"></i> Our
                                    Lawyers</a></li>
                            <li><a href="layer.html"><i class="fa-solid fa-user"></i> Lawyers</a></li>
                            <li><a href="practice-area.html"><i class="fa-solid fa-scale-balanced"></i>
                                    Practice Area</a></li>
                            <li><a href="{{route('blogs-articles', 1)}}"><i class="fa-solid fa-book"></i> Blogs & Articles</a>
                            </li>
                            <li><a href="{{route('hire-a-lawyer')}}"><i class="fa-solid fa-address-card"></i>
                                    Hire Lawyer</a></li>
                            <li><a href="#"><i class="fa-solid fa-gavel"></i> Legal Articles</a></li>
                            @if(auth()->user())                      
                                @if(auth()->user()->user_type == 2)
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: white;">Logout</a>
                                    </li>
                                @elseif(auth()->user()->user_type == 3)
                                    <!-- <li class="nav-item">
                                        <a href="{{route('online-chat.requests')}}" class="nav-link" style="color: white;">Online Chat Requests</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="{{route('user.logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: white;">Logout</a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a href="{{route('user.login')}}"><i class="fa-solid fa-right-from-bracket"></i> Login</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="bg-E8F8F2 sp-r-l online-a">
                            <div class="row ">
                                <div class="col-9"><a href="#">Lawyers online (5)</a></div>
                                <div class="col-3 text-right"><a href="#"><i class="fa-solid fa-globe"></i>
                                        All</a></div>
                            </div>
                        </div>
    
                        <div class="user-online-g sp-r-l ">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p class="name-uaser">Madhur Yadav</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
                                    <div class="col-2 p-0"><img src="/new-design/assets/images/prem.png" alt="prem"></div>
                                </div>
                            </a>
                        </div>
    
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p class="name-uaser">Madhur Yadav</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
                                    <div class="col-2 p-0"><img src="/new-design/assets/images/prem.png" alt="prem"></div>
                                </div>
                            </a>
                        </div>
    
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name-uaser">Arundhati Chawla</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name-uaser">Arundhati Chawla</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name-uaser">Arundhati Chawla</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>
                        <div class="offline-lawyers">
                            <p>Lawyers offline</p>
                        </div>
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name-uaser">Arundhati Chawla</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>
    
                        <div class="user-online-g sp-r-l">
                            <a href="#">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="legal-1">
                                            <img src="/new-design/assets/images/legal-1.png" alt="legal-1">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name-uaser">Arundhati Chawla</p>
                                        <p class="short-mes">Dubai, UAE</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>
    
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>