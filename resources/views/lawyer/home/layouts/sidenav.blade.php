<section>
    <div id="mySidenav" class="sidenav" onclick="closeNav()">
        <div class="sidenav-wraper">
            <img id="closeNav" class="side-nav-logo" src="/new-design/assets/image/home/side-nav-logo.png" alt="">
            {{--<main>
                <div class="fix-height"></div>
            </main>--}}
            <div class="tab-content sidenav-menu" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <ul class="mainmenu-list" style="margin-left: 25px;">
                        <li>
                            {{-- request()->is('sites/*/edit') ? 'active' : '' --}}
                            <a class="{{request()->is('lawyer/dashboard') ? 'active' : ''}}" href="{{route('lawyer.dashboard')}}">
                            <span class="icon-Vector-1"></span>Dashboard </a>
                        </li>
                        <li>
                            <a class="{{request()->is('lawyer/my-activity') ? 'active' : ''}}" href="{{route('lawyer.my-activity')}}">
                            <span class="icon-Vector-2"></span>My Activity </a>
                        </li>
                        <li>
                            <a class="{{request()->is('lawyer/scheduled-events') ? 'active' : ''}}" href="{{route('lawyer.scheduled-events')}}">
                            <span class="icon-Vector-3"></span>Scheduled Events </a>
                        </li>
                        <li>
                            <a class="{{request()->is('lawyer/online-chat-requests') ? 'active' : ''}}" href="{{route('lawyer.online-chat-requests')}}">
                            <span class="icon-Vector-4"></span>Chat Online Requests </a>
                        </li>
                        <li>
                            <a class="{{request()->is('lawyer/services') ? 'active' : ''}}" href="{{route('lawyer.services')}}">
                            <span class="icon-Vector-5"></span>Services </a>
                        </li>
                        <li>
                            <a class="{{request()->is('lawyer/community') ? 'active' : ''}}" href="{{route('lawyer.community')}}">
                            <span class="icon-Vector-6"></span>Lawyers Community </a>
                        </li>
                        <li>
                            <a class="{{request()->is('/lawyer/question-answer/list') ? 'active' : ''}}" href="{{route('lawyer.qa.list')}}">
                            <span class="icon-Group-2"></span>Question & Answer </a>
                        </li>
                        <li>
                            <a class="{{request()->is('/lawyer/articles') ? 'active' : ''}}" href="{{route('lawyer.article')}}">
                            <span class="icon-Vector-7"></span>Lawyer Articles </a>
                        </li>
                    </ul>
                </div>
            </div>           
        </div> 
    </div>
</section>