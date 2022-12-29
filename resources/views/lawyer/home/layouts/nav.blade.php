<div class="row contaoner-fluid">
    <section #navbar> 
        <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
            <span id="openNav" onclick="openNav()"><img class="open-btn" src="/new-design/assets/image/home/hamburgor-white.png" alt=""></span>
            <a class="navbar-brand" id="navbar_brand_mobile" href="#">Connect Legal</a>
            
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button> -->
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
                        <a class="nav-link" href="{{route('blogs-articles', 1)}}">Blogs & Articles</a>
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
                                    <img src="/new-design/assets/image/home/register3.png" alt="">
                                    <img class="active_circle" src="/new-design/assets/image/home/active-circle.png" alt="">

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
                                                <img src="/new-design/assets/image/home/white-dot.png" alt="">
                                            </button>
                                            @if(auth()->user()->user_type == 3)
                                                <ul class="dropdown-menu profile-dropdown">
                                                    <li><a class="dropdown-item" href="#"><img src="/new-design/assets/image/home/Vector (19).png"
                                                                alt="">My Profile</a></li>
                                                    <li><a class="dropdown-item" href="#"><img src="/new-design/assets/image/home/Vector (19).png"
                                                                alt="">Dashboard</a></li>
                                                    <li><a class="dropdown-item" href="{{route('user.logout')}}" onclick="return confirm('Are you sure you want to logout?')"><img src="/new-design/assets/image/home/Vector (19).png"
                                                                alt="">Log Out</a></li>
                                                </ul>
                                            @else 
                                                <ul class="dropdown-menu profile-dropdown">
                                                    <li><a class="dropdown-item" href="#"><img src="/new-design/assets/image/home/Vector (19).png"
                                                                alt="">My Profile</a></li>
                                                    <li><a class="dropdown-item" href="{{route('lawyer.dashboard')}}"><img src="/new-design/assets/image/home/Vector (19).png"
                                                                alt="">Dashboard</a></li>
                                                    <li><a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Are you sure you want to logout?')"><img src="/new-design/assets/image/home/Vector (19).png"
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
            <div id="mobile-nav-profile">
                <img src="/storage/{{auth()->user()->getProfilePic(auth()->user()->id)}}" onclick="myFunction()" alt="" class="mobile-prof-image dropbtn">
                <div id="myDropdown" class="dropdown-content">
                    <a href="" class="mobile_prof_text"> <img src="/new-design/lawyer/assets/image/home/profile_icon.png" alt="" class="mobile_prof_icon"> My Profile</a>
                    <a href="{{route('lawyer.dashboard')}}" class="mobile_prof_text"><img src="/new-design/lawyer/assets/image/home/dash.png" alt="" class="mobile_prof_icon"> Dashboard</a>
                    <a href="{{route('logout')}}" class="mobile_prof_text"><img src="/new-design/lawyer/assets/image/home/logout.png" alt="" class="mobile_prof_icon"> Logout</a>
                </div>                
            </div>
        </nav>
    </section>
</div>