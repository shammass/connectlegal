<div class="sidebar" id="mySidebar">
    <div>
        <button onclick="w3_close()" class="btn">
            <img class="idek_button" src="/images/basicImages/cl_logo_1.png" alt=""/>
        </button>
    </div>
    <div class="sidebar-menu" id="sidebar-menu-id">
        <button class="sidebar-menu-btn btn black" onclick="showContent1()" id="sidebar-menu-btn1"><i class="fas fa-bars sidebar-menu-btn-icon"></i> Main Menu</button>
        <button class="sidebar-menu-btn btn black" onclick="showContent2()" id="sidebar-menu-btn2"><span class="material-symbols-rounded sidebar-menu-btn-icon">account_circle</span> Lawyers Online</button>
    </div>
    <div class="sidebar-menu-green" id="lawyer-online-count">
        <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn1">Lawyers online ({{$onlineLawyers}})</button>
        <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn2"><span class="material-symbols-rounded sidebar-menu-green-btn-icon">language</span> All</button>
    </div>
    <div id="content1">
        <ul>
            <li class=""><a href="/home" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">home</span> Home</a></li>
            <li class=""><a href="{{route('howItWorks')}}" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">assured_workload</span> How it works</a></li>
            <li class=""><a href="{{route('lawyer.register-page')}}" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">groups</span> For lawyers</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">live_help</span> Q & A</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">workspace_premium</span> Testimonials</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">work</span> Our lawyers</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><i class="fas fa-user-tie fa-lg nav-link-icon"></i> Lawyers</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">balance</span> Practice Area</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><i class="far fa-newspaper fa-lg nav-link-icon"></i> Blogs & Articles</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><i class="far fa-id-card fa-lg nav-link-icon"></i> Hire Lawyer</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><i class="fas fa-gavel fa-lg nav-link-icon"></i> Legal Articles</a></li>
            <li class=""><a onclick="openForm()" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">login</span> Login</a></li>
        </ul>
    </div>
    <div id="content2" class="online-offline">
        <ul>
            @foreach($lawyers as $k => $lawyer)
                @if($lawyer->user->isOnline())
                    <li class="">
                        <a onclick="myAccFunc('{{$k}}')" class="nav-link-item link black">
                            <img src="/storage/{{$lawyer->profile_pic}}" style="width: 60px;height: 60px;border-radius: 30px;" alt=""/>
                            <div class="lawyer-sidebar">
                                <strong>{{$lawyer->user->name}}</strong>
                                <p>{{$lawyer->emirates}}</p>
                            </div>
                        </a>
                    </li>
                    <div id="demoAcc{{$k}}" class="lawyer-options hidden-item">
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
                    </div>
                @endif
            @endforeach
            @if($onlineLawyers < 1)
                <li class="">
                    <a class="nav-link-item link black">
                        <div class="lawyer-sidebar">
                            <strong>No Lawyers Are Online</strong>
                        </div>
                    </a>
                </li>
            @endif
        </ul>
        <div class="sidebar-menu-green">
            <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn1">Lawyers offline</button>
        </div>
        <ul>
            @foreach($lawyers as $k => $lawyer)
                @if(!$lawyer->user->isOnline())
                    <li class="">
                        <a onclick="offlineLawyers('{{$k}}')" class="nav-link-item link black offline">
                            <img src="/storage/{{$lawyer->profile_pic}}" style="width: 60px;height: 60px;border-radius: 30px;" alt=""/>
                            <div class="lawyer-sidebar">
                                <strong>{{$lawyer->user->name}}</strong>
                                <p>{{$lawyer->emirates}}</p>
                            </div>
                        </a>
                    </li>
                    <div id="offLaw{{$k}}" class="lawyer-options hidden-item">
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                        <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
                    </div>
                @endif
            @endforeach
        </ul>
    </div>
</div>