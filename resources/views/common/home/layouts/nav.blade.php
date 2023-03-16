<div class="container-fluid" id="padding-0">
    <a class="navbar-brand menu-a" href="#" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
            class="fa-solid fa-bars"></i> <span>Connect Legal</span></a>
    <nav class="navbar navbar-expand-lg navbar-light main-menu">
        <div id="mySidenav1" class="offcanvas offcanvas-start" data-bs-scroll="true"
            data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-body">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>


        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
            id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling
                </h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
        </div>

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
<<<<<<< HEAD
                <li class=" nav-item dropdown">
=======
                <li class="nav-item dropdown">
>>>>>>> 578a96ebeb441c9dabcae8da2332d23a67f323ff
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
                    <a class="nav-link" href="{{ route('page-practice-areas') }}">Practice Area</a>
                </li>
                

                @if(auth()->user())                      
                    @if(auth()->user()->user_type == 2)
                        <li class="navbar nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{auth()->user()->name}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('lawyer.dashboard')}}" class="nav-link" style="color: black!important;">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: black!important;">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @elseif(auth()->user()->user_type == 3)
                        <li class="navbar nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{auth()->user()->name}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('user.dashboard')}}" class="nav-link" style="color: black!important;">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user.logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: black!important;">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.login')}}">Login</a>
                    </li>                    
                @endif
            </ul>
        </div>
    </nav>
</div>



