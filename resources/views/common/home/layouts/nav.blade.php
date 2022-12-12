<nav class="navbar navbar-expand-lg custom-navbar fixed-top">
    <span style="" id="openNav">
        <img class="open-btn" src="new-design/assets/image/home/hamburgor-white.png" alt="">
    </span>
    <a class="navbar-brand" href="#">Connect Legal</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('howItWorks')}}"> How It Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('lawyer.register-page')}}">For Lawyers </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('question-answer')}}">Q & A </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Practice Area</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lawyers</a>
            </li>
            @if(!auth()->user()) 
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <div class="navlist-profile">
                        <div class="navlist-profile-img">
                            <img src="new-design/assets/image/home/register3.png" alt="">
                            <img class="active_circle" src="new-design/assets/image/home/active-circle.png" alt="">

                        </div>

                        <div class="navlist-profile-description">
                            <div class="profile-description-inner">
                                <h4>{{auth()->user()->name}}</h4>
                                <!-- <h3>UAE, Dubai</h3> -->
                            </div>

                            <div class="profile-hamburgur">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="new-design/assets/image/home/white-dot.png" alt="">
                                    </button>
                                    @if(auth()->user()->user_type == 3)
                                        <ul class="dropdown-menu profile-dropdown">
                                            <li><a class="dropdown-item" href="#"><img src="new-design/assets/image/home/Vector (19).png"
                                                        alt="">My Profile</a></li>
                                            <li><a class="dropdown-item" href="#"><img src="new-design/assets/image/home/Vector (19).png"
                                                        alt="">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="{{route('user.logout')}}" onclick="return confirm('Are you sure you want to logout?')"><img src="new-design/assets/image/home/Vector (19).png"
                                                        alt="">Log Out</a></li>
                                        </ul>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>
@include('common.home.layouts.sidenav')
@include('common.home.layouts.login-modals')
