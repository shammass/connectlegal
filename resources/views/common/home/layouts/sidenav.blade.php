<div class="sidebar" id="mySidebar">
    <div>
        <button onclick="w3_close()" class="btn">
            <img class="idek_button" src="../images/basicImages/cl_logo_1.png" alt=""/>
        </button>
    </div>
    <div class="sidebar-menu" id="sidebar-menu-id">
        <button class="sidebar-menu-btn btn black" onclick="showContent1()" id="sidebar-menu-btn1"><i class="fas fa-bars sidebar-menu-btn-icon"></i> Main Menu</button>
        <button class="sidebar-menu-btn btn black" onclick="showContent2()" id="sidebar-menu-btn2"><span class="material-symbols-rounded sidebar-menu-btn-icon">account_circle</span> Lawyers Online</button>
    </div>
    <div class="sidebar-menu-green">
        <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn1">Lawyers online (5)</button>
        <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn2"><span class="material-symbols-rounded sidebar-menu-green-btn-icon">language</span> All</button>
    </div>
    <div id="content1">
        <ul>
            <li class=""><a href="/home" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">home</span> Home</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">assured_workload</span> How it works</a></li>
            <li class=""><a href="#" class="nav-link-item link black"><span class="material-symbols-rounded nav-link-icon">groups</span> For lawyers</a></li>
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
    <div id="content2">
        <ul>
            <li class="">
                <a onclick="myAccFunc(1)" class="nav-link-item link black">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <div id="demoAcc1" class="lawyer-options hidden-item">
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
            </div>
            <li class="">
                <a onclick="myAccFunc(2)" class="nav-link-item link black">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <div id="demoAcc2" class="lawyer-options hidden-item">
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
            </div>
            <li class="">
                <a onclick="myAccFunc(3)" class="nav-link-item link black">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <div id="demoAcc3" class="lawyer-options hidden-item">
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
            </div>
            <li class="">
                <a onclick="myAccFunc(4)" class="nav-link-item link black">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <div id="demoAcc4" class="lawyer-options hidden-item">
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
            </div>
            <li class="">
                <a onclick="myAccFunc(5)" class="nav-link-item link black">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <div id="demoAcc5" class="lawyer-options hidden-item">
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">post_add</span>&nbsp;&nbsp; Post a question</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">chat</span>&nbsp;&nbsp; Chat Online</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">phone_callback</span>&nbsp;&nbsp; Request a Callback</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">meeting_room</span>&nbsp;&nbsp; Book a Meeting</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">business_center</span>&nbsp;&nbsp; Hire the Lawyer</a>
                <a href="#" class="nav-link-item link black"><span class="material-symbols-rounded circle-grey">person</span>&nbsp;&nbsp; Open Profile</a>
            </div>
        </ul>
        <div class="sidebar-menu-green">
            <button class="sidebar-menu-green-btn btn green"  id="sidebar-menu-green-btn1">Lawyers offline</button>
        </div>
        <ul>
            <li class="">
                <a href="#" class="nav-link-item link black offline">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" class="nav-link-item link black offline">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" class="nav-link-item link black offline">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" class="nav-link-item link black offline">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" class="nav-link-item link black offline">
                    <img src="../images/basicImages/s7-userProfile1.png" alt=""/>
                    <div class="lawyer-sidebar">
                        <strong>Kiran Khatun</strong>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>