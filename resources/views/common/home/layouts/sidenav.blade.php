<div id="mySidenav" class="sidenav">
    <div class="sidenav-wraper">
        <img id="closeNav" class="side-nav-logo" src="new-design/assets/image/home/side-nav-logo.png" alt="">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                <span class="icon-Vector-10"></span>Main menú </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                <span class="lawyers-online">
                    <span class="icon-Group-1"></span>Lawyers Online </spn>
                </button>
            </li>
        </ul>
        <div class="all" id="lawyer-online-count">
            <h4>Lawyers online ({{$onlineLawyers}})</h4>
            <div class="all-img">
                <img src="new-design/assets/image/home/all.png" alt="">
                <h4>All</h4>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <ul class="mainmenu-list">
                <li>
                    <a class="active" href="/">
                    <span class="icon-Vector-1"></span>Home </a>
                </li>
                <li>
                    <a href="{{route('howItWorks')}}">
                    <span class="icon-Vector-2"></span>How It Works </a>
                </li>
                <li>
                    <a href="{{route('lawyer.register-page')}}">
                    <span class="icon-Vector-3"></span>For Lawyers </a>
                </li>
                <li>
                    <a href="{{route('question-answer')}}">
                    <span class="icon-Vector-4"></span>Q & A </a>
                </li>
                <li>
                    <a href="{{route('testimonials')}}">
                    <span class="icon-Vector-5"></span>Testimonials </a>
                </li>
                <li>
                    <a href="{{route('our-lawyers')}}">
                    <span class="icon-Vector-6"></span>Our Lawyers </a>
                </li>
                <li>
                    <a href="">
                    <span class="icon-Group-2"></span>Lawyers </a>
                </li>
                <li>
                    <a href="">
                    <span class="icon-Vector-7"></span>Practice Area </a>
                </li>
                <li>
                    <a href="{{route('blogs-articles', 1)}}">
                    <span class="icon-Vector-8"></span>Blogs & Articles </a>
                </li>
                <li>
                    <a href="{{route('hire-a-lawyer')}}">
                    <span class="icon-Group-6"></span>Hire Lawyer </a>
                </li>
                <li>
                    <a href="{{route('legal.article-list')}}">
                    <span class="icon-Vector-9"></span>Legal Articles </a>
                </li>
                <li>
                    <a href="">Login</a>
                </li>
                </ul>
            </div>
            <div class="tab-pane fade online-offline" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="lawyers-online">
                    @foreach($lawyers as $k => $lawyer)
                        @if($lawyer->user->isOnline())
                            <div class="lawyers-online-card">
                                <div class="online-card-profile">
                                    <img src="/storage/{{$lawyer->profile_pic}}" style="height: 40px;border-radius: 20px;" alt="">
                                    <img class="active-circle" src="new-design/assets/image/home/active-circle.png" alt="">
                                    <div class="card-profile-designation">
                                        <h4>{{$lawyer->user->name}}</h4>
                                        <h5>{{$lawyer->emirates}}</h5>
                                    </div>
                                </div>
                                {{-- <div class="premium">
                                    <img src="new-design/assets/image/home/Vector (10).png" alt="">
                                    <h6>Premium</h6>
                                </div> --}}
                            </div>
                        @endif
                    @endforeach
                    @if($onlineLawyers < 1)
                        <div class="lawyers-online-card">
                            <p>No Lawyers Are Online</p>
                        </div>
                    @endif
                </div>
                <div class="lawyers-offline">
                    <div class="lawyers-offline-card">
                        <h4>Lawyers offline</h4>
                    </div>
                    @foreach($lawyers as $k => $lawyer)
                        @if(!$lawyer->user->isOnline())
                            <div class="lawyers-online-card lawyers_ofline_card">
                                <div class="online-card-profile">
                                    <img src="/storage/{{$lawyer->profile_pic}}" style="height: 40px;border-radius: 20px;" alt="">
                                    <img class="active-circle" src="new-design/assets/image/home/enable-circle.png" alt="">
                                    <div class="card-profile-designation">
                                        <h4>{{$lawyer->user->name}}</h4>
                                        <h5>{{$lawyer->emirates}}</h5>
                                    </div>
                                </div>
                                {{--<div class="premium">
                                    <img src="new-design/assets/image/home/Vector (10).png" alt="">
                                    <h6>Premium</h6>
                                </div>--}}
                            </div>
                        @endif
                    @endforeach                    
                </div>
            </div>
        </div>
    </div>
</div>