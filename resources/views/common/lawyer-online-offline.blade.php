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