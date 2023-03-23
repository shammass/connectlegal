<div class="left-menu-bar">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <a href="#" data-toggle="sidebar-colapse"
            class=" list-group-item list-group-item-action d-flex align-items-center mmmm">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"><img src="/new-design/user-dashboard/images/fa-white.png" alt="fa-white"
                        class="fav-white"></span>
                    <span id="collapse-text" class="menu-collapsed"><img src="/new-design/user-dashboard/images/off-logo.png" alt="off-logo"
                        class="fav-icon"> </span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <ul class="menu-left">
                    <li><a href="/" class="{{request()->is('/') ? 'active-nav' : ''}}"><i class="fa-solid fa-house-user"></i> Home</a></li>
                    <li><a href="{{route('user.dashboard')}}" class="{{request()->is('dashboard') ? 'active-nav' : ''}}"><i class="fa-solid fa-landmark"></i>Dashboard</a></li>
                    <li><a href="{{route('user.consultation-requests')}}" class="{{request()->is('my-consultaion-requests') ? 'active-nav' : ''}}"><i class="fa-solid fa-users"></i>Consultations</a></li>
                    <li><a href="{{route('user.questions-asked')}}" class="{{request()->is('questions-asked') ? 'active-nav' : ''}}"><i class="fa-solid fa-question"></i> Questions Asked</a></li>
                    <li><a href="{{route('online-chat.requests')}}" class="{{request()->is('chat/requests') ? 'active-nav' : ''}}"><i class="fa-solid fa-star"></i> Chat Online Requests</a></li>
                    <li><a href="{{route('user.services-purchased')}}" class="{{request()->is('services-purchased') ? 'active-nav' : ''}}"><i class="fa-solid fa-suitcase"></i> Services Purchased</a></li>
                    <li><a href="{{route('hire-a-lawyer')}}" class="{{request()->is('all-lawyer-services') ? 'active-nav' : ''}}"><i class="fa-solid fa-scale-balanced"></i>Lawyer Services</a></li>
                    <li><a href="{{route('question-answer')}}" class="{{request()->is('question-answers') ? 'active-nav' : ''}}"><i class="fa-solid fa-question"></i>Question & Answer</a></li>
                    <!-- <li><a href="#"><i class="fa-solid fa-book"></i>Lawyer Articles</a></li> -->
                    <!-- <li><a href="#"><i class="fa-solid fa-address-card"></i>Q & A</a></li> -->
                </ul>
            </div>

            <div class="icons-part-left">
                <ul class="menu-left white-left">
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-table"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-comment"></i> </a></li>
                    <li><a href="#"><i class="fa-solid fa-table-cells-large"></i> </a></li>
                    <li><a href="#"><i class="fa-solid fa-question"></i> </a></li>
                    <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> </a></li>
                </ul>
            </div>
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>
        </ul>
    </div>
</div>