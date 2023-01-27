<nav class="navbar-container">
    <div class="navbar">
        <div class="sidebar-and-logo">
            <button class="sidebar-icon btn" onclick="w3_open()"><i class="fas fa-bars"></i></button>
            <a href="/" class="navbar-logo link white">Connect Legal</a>
        </div>
        <ul class="nav-menu-desktop">
            <li class="nav-item">
                <a href="/" class="link white">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('howItWorks')}}" class="link white">How it works</a>
            </li>
            <li class="nav-item">
                <a href="{{route('lawyer.register-page')}}" class="link white">For Lawyers</a>
            </li>
            <li class="nav-item">
                <a href="/" class="link white">Testimonials</a>
            </li>
            <li class="nav-item">
                <a href="/" class="link white">Lawyers</a>
            </li>
            <li class="nav-item">
                <a href="/" class="link white">Practice Area</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('blogs-articles', 1) }}" class="link white">Blogs & Articles</a>
            </li>
            @if(!auth()->user())
                <li class="nav-item">
                    <a class="link white" onclick="openForm()">Login</a>
                </li> 
            @else 
                <div class="user-loggedIn" onclick="openOptions()">
                    <div class="user-loggedIn-content">
                        <div>
                            <img class="user-img" src="/images/basicImages/user.png" alt="user" />
                        </div>
                        <div class="user-loggedIn-content-name">
                            <h4 class="white user-loggedIn-content-username">Ranjit Devi</h4>
                            <span class="white user-loggedIn-content-loc">UAE, Dubai</span>
                        </div>
                    </div>
                    <div class="user-loggedIn-icon">
                        <a class="link white">
                            <span class="material-symbols-rounded loggedInIcon">
                                more_vert
                            </span>
                        </a>
                    </div>
                </div>
                <div class="dropdown-content" id="userOptions">
                    <a href="#">
                        <span class="material-symbols-rounded">
                            account_circle
                        </span>
                        <p>My Profile</p>
                    </a>
                    <a href="#">
                        <span class="material-symbols-rounded">
                            team_dashboard
                        </span>
                        <p>Dashboard</p>
                    </a>
                    <a href="#">
                        <span class="material-symbols-rounded">
                            reviews
                        </span>
                        <p>Write Testimonials</p>
                    </a>
                    <a href="#">
                        <span class="material-symbols-rounded">
                            newspaper
                        </span>
                        <p>Blogs and Articles</p>
                    </a>
                    @if(auth()->user()->user_type == 3)
                        <a href="{{route('user.logout')}}" onclick="return confirm('Are you sure you want to logout?')">
                            <span class="material-symbols-rounded">
                                logout
                            </span>
                            <p>Log Out</p>
                        </a>
                    @else 
                        <a href="{{route('logout')}}" onclick="return confirm('Are you sure you want to logout?')">
                            <span class="material-symbols-rounded">
                                logout
                            </span>
                            <p>Log Out</p>
                        </a>
                    @endif
                </div>
            @endif
        </ul>
    </div>
</nav>