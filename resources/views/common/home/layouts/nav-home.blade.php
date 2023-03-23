<header class="top-header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light main-menu">
          <a class="navbar-brand left-off" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i> Connect Legal</a>

          <div class="offcanvas offcanvas-start menu-sidebar"  data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-body">
              <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button> -->
              <div class="menu-part">
                <center> <img src="/new-design/assets/images/off-logo.png" alt="off-logo" class="off-logo"> </center>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                      type="button" role="tab" aria-controls="home" aria-selected="true"><i
                        class="fa-solid fa-bars"></i> Main menú</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                      type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                        class="fa-solid fa-user"></i> Lawyers Online</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="bg-E8F8F2 sp-r-l online-a">
                      <div class="row ">
                        <div class="col-9"><a href="#">Lawyers online  ({{$onlineLawyers}})</a></div>
                        <div class="col-3 text-right"><a href="#"><i class="fa-solid fa-globe"></i> All</a></div>
                      </div>
                    </div>

                    <ul class="menu-left">
                        <li><a href="/" class="active-nav"><i class="fa-solid fa-house-user"></i> Home</a></li>
                        <li><a href="{{route('howItWorks')}}" class="{{request()->is('how-it-works') ? 'active-nav' : ''}}"><i class="fa-solid fa-landmark"></i> How It Works </a></li>
                        <li><a href="{{route('lawyer.register-page')}}" class="{{request()->is('lawyer/register') ? 'active-nav' : ''}}"><i class="fa-solid fa-users"></i> For Lawyers</a></li>
                        <li><a href="{{route('question-answer')}}" class="{{request()->is('question-answers') ? 'active-nav' : ''}}"><i class="fa-solid fa-question"></i> Q&A</a></li>
                        <li><a href="{{route('testimonials')}}" class="{{request()->is('testimonials') ? 'active-nav' : ''}}"><i class="fa-solid fa-star"></i> Testimonials</a></li>
                        <li><a href="{{route('blogs-articles', 1)}}" class="{{request()->is('blogs-articles/1') ? 'active-nav' : ''}}"><i class="fa-solid fa-book"></i> Blogs & Articles</a></li>
                        <li><a href="{{route('hire-a-lawyer')}}" class="{{request()->is('all-lawyer-services') ? 'active-nav' : ''}}"><i class="fa-solid fa-address-card"></i> Lawyer Services</a></li>
                        <li><a href="{{route('our-lawyers')}}" class="{{request()->is('our-lawyers') ? 'active-nav' : ''}}"><i class="fa-solid fa-bag-shopping"></i> Our Lawyers</a></li>
                        <li><a href="{{ url('page-practice-area/details') }}" class="{{request()->is('page-practice-area/details') ? 'active-nav' : ''}}"><i class="fa-solid fa-scale-balanced"></i> Practice Area</a></li>
                        <!-- <li><a href="#"><i class="fa-solid fa-gavel"></i> Legal Articles</a></li> -->
                        @if(auth()->user())                      
                            @if(auth()->user()->user_type == 2)
                                <li class="nav-item">
                                    <a href="{{route('lawyer.dashboard')}}" class="nav-link" style="color: white;"><i class="fa-solid fa-landmark"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: white;"><i class="fa-solid fa-sign-out"></i>Logout</a>
                                </li>
                            @elseif(auth()->user()->user_type == 3)
                                <!-- <li class="nav-item">
                                    <a href="{{route('online-chat.requests')}}" class="nav-link" style="color: white;">Online Chat Requests</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="{{route('user.dashboard')}}" class="nav-link" style="color: white;"><i class="fa-solid fa-landmark"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user.logout')}}" class="nav-link" onclick="return confirm('Are you sure you want to logout?')" style="color: white;"><i class="fa-solid fa-sign-out"></i>Logout</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{route('user.login')}}"><i class="fa-solid fa-right-from-bracket"></i> Login</a>
                            </li>
                        @endif
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="bg-E8F8F2 sp-r-l online-a">
                            <div class="row ">
                                <div class="col-9"><a href="#">Lawyers online ({{$onlineLawyers}})</a></div>
                                <div class="col-3 text-right"><a href="#"><i class="fa-solid fa-globe"></i> All</a></div>
                            </div>
                            </div>

                            @foreach($lawyers as $k => $lawyer)
                                    @if($lawyer->user->isOnline())
                                        <div class="user-online-g sp-r-l">
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#lawyers_profile_{{$lawyer->id}}">
                                                <div class="row  align-items-center">
                                                    <div class="col-3 img-class-same">
                                                        @if($lawyer->profile_pic != '')
                                                        <img src="/storage/{{$lawyer->profile_pic}}" alt="legal-1" class="legal-1">
                                                        @else
                                                        <img src="/new-design/user-dashboard/images/av1.png" class="legal-1">
                                                        @endif
                                                    </div>
                                                    <div class="col-7">
                                                        <p class="name-uaser">{{$lawyer->user->name}}</p>
                                                        <p class="short-mes">{{$lawyer->emirates}}</p>
                                                    </div>
                                                    <!-- <div class="col-2"><img src="/new-design/assets/images/prem.png" alt="prem"></div> -->
                                                </div>

                                                
                                                
                                                
                                                
                                            </a>                                            
                                        </div>
                                        <div class="modal fade modal-popups text-left" id="lawyers_profile_{{$lawyer->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" id="modal-login">
                                                <div class="modal-content"> 
                                                    <div class="modal-header text-right"> 
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-right" id="pills-tabContent">
                                                                
                                                            <div class="user-online-g text-left">
                                                                <a href="#">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-3 pr-0">
                                                                            @if($lawyer->profile_pic != '')
                                                                            <img src="/storage/{{$lawyer->profile_pic}}" alt="legal-1" class="legal-1">
                                                                            @else
                                                                        <img src="/new-design/user-dashboard/images/av1.png" alt="legal-1" class="legal-1">
                                                                        @endif
                                                                        </div>
                                                                        <div class="col-sm-7 col-6 pl-0">
                                                                        <p class="name-uaser">{{$lawyer->user->name}}</p>
                                                                        <p class="short-mes">{{$lawyer->emirates}}</p>
                                                                        </div>
                                                                        <!-- <div class="col-3 text-right"><img src="/new-design/assets/images/prem.png" alt="prem" class="popup-prem"></div> -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="popup-list mt-4">
                                                                <ul class="list-icon-text">
                                                                    <li onclick="openForumModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#forumModal_{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-1.png" alt="icon-pop-1"> Post a Question</a></li>
                                                                    @if(auth()->user())
                                                                        <li onclick="openChatModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#chat-request-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-2.png" alt="icon-pop-2">Chat Online</a></li>
                                                                    @else 
                                                                        <li><a href="{{route('user.login')}}"><img src="/new-design/assets/images/popup/icon-pop-2.png" alt="icon-pop-2">Chat Online</a></li>
                                                                    @endif
                                                                    <!-- <li><a href="#"><img src="/new-design/assets/images/popup/icon-pop-3.png" alt="icon-pop-3">Request a Callback</a></li> -->
                                                                    <li data-bs-toggle="modal" data-bs-target="#consult-lawyer-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-4.png" alt="icon-pop-4">Consult The Lawyer</a></li>
                                                                    <li><a href="{{route('hire-a-lawyer.user', $lawyer->user_id)}}"><img src="/new-design/assets/images/popup/icon-pop-5.png" alt="icon-pop-5">Hire the Lawyer</a></li>
                                                                    <li onclick="closeProfileModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#lawyer-profile-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-6.png" alt="icon-pop-6">Open Profile</a></li>
                                                                </ul>
                                                                <div class="text-center">
                                                                    <button class="btn-border">Dismiss</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade popuphome" id="forumModal_{{$lawyer->id}}" tabindex="-1" aria-labelledby="forumModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="puopclass">
                                                            <h3 class="text-center">Submit your enquiry</h3>
                                                            <form action="{{route('store.forum')}}" method="post" onsubmit="return validateForumForm(event)">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->user_id}}">
                                                                <input type="text" name="qa_name" id="forum-name" placeholder="Name" value="{{auth()->user() ? auth()->user()->name : ''}}" class="form-control mb-2">
                                                                @error('qa_name')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <input type="email" name="qa_email" id="forum-email" placeholder="Email Address" value="{{auth()->user() ? auth()->user()->email : ''}}" class="form-control mb-3">
                                                                @error('qa_email')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <div class="input-group mb-3" id="forum-mobile-div">
                                                                    <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                                                    <input type="text" class="form-control left-bordr" name="mobile" id="forum-mobile" placeholder="Phone Number" aria-label="Username"
                                                                    aria-describedby="basic-addon1">
                                                                </div>
                                                                @error('mobile')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <textarea class="form-control popup-descr forum-msg" name="message" placeholder="Your message"
                                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                    @error('message')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror    
                                                                <div class="text-end mt-lg-5 mt-3">
                                                                    <button type="submit" class="btn btn-submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade popuphome" id="chat-request-{{$lawyer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="puopclass">
                                                            <form action="{{route('send.chat.request')}}" method="post" onsubmit="return validateChatRqstForm(event, '{{$lawyer->id}}')">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->id}}">
                                                                <h3 class="text-center" data-bs-toggle="modal" data-bs-target="#lowyar1">Chat Request</h3>
                                                                <input type="email" readonly name="" id="" placeholder="Email Address" class="form-control mb-3" value="{{auth()->user() ? auth()->user()->email : ''}}">
                                                                <textarea class="form-control chat-rqst-form-{{$lawyer->id}}" placeholder="Add your query" name="description" id="exampleFormControlTextarea1"
                                                                rows="3"></textarea>
                                                                <div class="text-end mt-lg-5 mt-3">
                                                                    <button type="submit" class="btn btn-submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade modal-popups contact-popop" id="consult-lawyer-{{$lawyer->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered modal-lg" id="modal-login">
                                                <div class="modal-content"> 
                                                    <div class="modal-header text-right"> 
                                                        <button type="button" class="btn-close rounded" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-popup-des rounded" id="pills-tabContent">
                                                            <form action="{{route('consult.lawyer')}}" method="post" onsubmit="return validateConsultForm(event, '{{$lawyer->id}}')">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->user_id}}">
                                                                <h4 class="give-rating"> Contact Form</h4>                                                    
                                                                <div class="eles group-invite area"> 
                                                                    <input type="text" name="name" id="name-{{$lawyer->id}}" placeholder="Name" class="mb-4" value="{{auth()->user() ? auth()->user()->name : ''}}">
                                                                    @error('name')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <input type="email" name="email" id="email-{{$lawyer->id}}" placeholder="Email" class="mb-4" value="{{auth()->user() ? auth()->user()->email : ''}}">
                                                                    @error('email')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <div class="input-group mb-3" id="mobile-div-{{$lawyer->id}}">
                                                                        <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                                                        <input type="text" class="form-control left-bordr" name="mobile" id="mobile-{{$lawyer->id}}" placeholder="Phone Number" aria-label="Username"
                                                                        aria-describedby="basic-addon1">
                                                                    </div> 
                                                                    @error('mobile')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <div class="links-icons">
                                                                        <textarea placeholder="Message" name="message" id="msg-{{$lawyer->id}}" class="description"></textarea> 
                                                                    </div>
                                                                    @error('message')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                </div> 
                                                                <div class="text-right mb-3">
                                                                    <button class="btn-lgn" type="submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade popuphome videopopup videoimage_popup" id="lawyer-profile-{{$lawyer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content border-0">
                                                    <div class="modal-body">
                                                        <div class="puopclass overflowclass">
                                                            <div class="law-box1 prime">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-3 col-3 text-center m-p-0 over-n">
                                                                        <div class="sma-amse">
                                                                            @if($lawyer->profile_Pic != '')
                                                                            <img src="/storage/{{$lawyer->profile_pic}}" alt="Group">
                                                                            @else
                                                                            <img src="/new-design/user-dashboard/images/av1.png" alt="Group">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-9" id="jaidev-text">
                                                                        <h5>{{ $lawyer->user->name }}</h5>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <ul class="star-part-2 fa-start-des">
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-6 p-0">
                                                                                <span class="rev-35">(35 Reviews)</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mt-2" id="p-text-change"><i class="fa-solid fa-location-dot"></i> {{$lawyer->emirates}} {{$lawyer->position}}</p>
                                                                    </div>
                                                                    <div class="col-md-3 col-12 mb-lg-0 mb-4">
                                                                        <div class="btn-hire" onclick="closePrevModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#consult-{{$lawyer->id}}">
                                                                            <button class="btn1-hire">  <img src="/new-design/assets/images/Group1.png" alt=""> Consult</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if($lawyer->disclaimer)
                                                                <h6 class="mt-xl-5 mt-0"><strong>Description:</strong></h6>
                                                                <p>{{$lawyer->disclaimer}}</p>
                                                            @endif
                                                            <div class="row mb-4 mt-md-2">
                                                                <div class="col-sm-2">
                                                                    <ul>
                                                                        <!-- <li><strong>Experience:</strong></li> -->
                                                                        <li><strong>Position:</strong></li>
                                                                        <li><strong> Expertise:</strong></li>
                                                                        <li><strong> Address:</strong></li>
                                                                        <li><strong>Lanuages:</strong></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <ul>
                                                                        <!-- <li>25 Years of experience</li> -->
                                                                        <li> {{$lawyer->position}}</li>
                                                                        <li> {{$lawyer->arbitration ? $lawyer->arbitration->area : '-'}}</li>
                                                                        <li> {{$lawyer->emirates}}</li>
                                                                        <li> {{$lawyer->getLanguages($lawyer->id)}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <img src="/new-design/assets/images/pupvideo.png" alt="" class="img-responsive img-fluid">
                                                            <div class="text-end" id="btnclass-there">
                                                                <button type="button" class=" mt-lg-5 mt-2 btn bg1" onclick="lawyerServices('{{$lawyer->user_id}}')">Lawyer Services</button>
                                                                @if(auth()->user())
                                                                    <button type="button" class=" mt-lg-5 mt-2 btn bg2" onclick="openChatModalTwo('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#chat-request-{{$lawyer->id}}">Chat Request</button>
                                                                @else 
                                                                    <button type="button" class=" mt-lg-5 mt-2 btn bg2" onclick="login()">Chat Request</button>
                                                                @endif
                                                                <button type="button" class=" mt-lg-5 mt-2 btn bg3" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                @if($onlineLawyers < 1) 
                                    <div class="user-online-g sp-r-l ">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="name-uaser">No Lawyers Are Online</p>
                                                </div>
                                                <!-- <div class="col-2"><img src="/new-design/assets/images/prem.png" alt="prem"></div> -->
                                            </div>
                                        </a>
                                    </div>
                                @endif

                    <div class="offline-lawyers">
                      <p>Lawyers offline</p>
                    </div>

                    
                    @foreach($lawyers as $k => $lawyer)
                        @if(!$lawyer->user->isOnline())
                        <div class="user-online-g sp-r-l">
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#lawyers_profile_{{$lawyer->id}}">
                                                <div class="row  align-items-center">
                                                    <div class="col-3 img-class-same">
                                                        @if($lawyer->profile_pic != '')
                                                        <img src="/storage/{{$lawyer->profile_pic}}" alt="legal-1" class="legal-1">
                                                        @else
                                                        <img src="/new-design/user-dashboard/images/av1.png" alt="legal-1" class="legal-1">
                                                        @endif
                                                    </div>
                                                    <div class="col-7">
                                                        <p class="name-uaser">{{$lawyer->user->name}}</p>
                                                        <p class="short-mes">{{$lawyer->emirates}}</p>
                                                    </div>
                                                    <!-- <div class="col-2"><img src="/new-design/assets/images/prem.png" alt="prem"></div> -->
                                                </div>

                                                
                                                
                                                
                                                
                                            </a>                                            
                                        </div>
                                        <div class="modal fade modal-popups text-left" id="lawyers_profile_{{$lawyer->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" id="modal-login">
                                                <div class="modal-content"> 
                                                    <div class="modal-header text-right"> 
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-right" id="pills-tabContent">
                                                                
                                                            <div class="user-online-g text-left">
                                                                <a href="#">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-3 pr-0">
                                                                         @if($lawyer->profile_pic != '')
                                                                            <img src="/storage/{{$lawyer->profile_pic}}" alt="legal-1" class="legal-1">
                                                                            @else
                                                                        <img src="/new-design/user-dashboard/images/av1.png" alt="legal-1" class="legal-1">
                                                                        @endif
                                                                        </div>
                                                                        <div class="col-sm-7 col-6 pl-0">
                                                                        <p class="name-uaser">{{$lawyer->user->name}}</p>
                                                                        <p class="short-mes">{{$lawyer->emirates}}</p>
                                                                        </div>
                                                                        <!-- <div class="col-3 text-right"><img src="/new-design/assets/images/prem.png" alt="prem" class="popup-prem"></div> -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="popup-list mt-4">
                                                                <ul class="list-icon-text">
                                                                    <li onclick="openForumModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#forumModal_{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-1.png" alt="icon-pop-1"> Post a Question</a></li>
                                                                    @if(auth()->user())
                                                                        <li onclick="openChatModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#chat-request-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-2.png" alt="icon-pop-2">Chat Online</a></li>
                                                                    @else 
                                                                        <li><a href="{{route('user.login')}}"><img src="/new-design/assets/images/popup/icon-pop-2.png" alt="icon-pop-2">Chat Online</a></li>
                                                                    @endif
                                                                    <!-- <li><a href="#"><img src="/new-design/assets/images/popup/icon-pop-3.png" alt="icon-pop-3">Request a Callback</a></li> -->
                                                                    <li data-bs-toggle="modal" data-bs-target="#consult-lawyer-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-4.png" alt="icon-pop-4">Consult The Lawyer</a></li>
                                                                    <li><a href="{{route('hire-a-lawyer.user', $lawyer->user_id)}}"><img src="/new-design/assets/images/popup/icon-pop-5.png" alt="icon-pop-5">Hire the Lawyer</a></li>
                                                                    <li onclick="closeProfileModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#lawyer-profile-{{$lawyer->id}}"><a href="#"><img src="/new-design/assets/images/popup/icon-pop-6.png" alt="icon-pop-6">Open Profile</a></li>
                                                                </ul>
                                                                <div class="text-center">
                                                                    <button class="btn-border">Dismiss</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade popuphome" id="forumModal_{{$lawyer->id}}" tabindex="-1" aria-labelledby="forumModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="puopclass">
                                                            <h3 class="text-center">Submit your enquiry</h3>
                                                            <form action="{{route('store.forum')}}" method="post" onsubmit="return validateForumForm(event)">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->user_id}}">
                                                                <input type="text" name="qa_name" id="forum-name" placeholder="Name" value="{{auth()->user() ? auth()->user()->name : ''}}" class="form-control mb-2">
                                                                @error('qa_name')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <input type="email" name="qa_email" id="forum-email" placeholder="Email Address" value="{{auth()->user() ? auth()->user()->email : ''}}" class="form-control mb-3">
                                                                @error('qa_email')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <div class="input-group mb-3" id="forum-mobile-div">
                                                                    <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                                                    <input type="text" class="form-control left-bordr" name="mobile" id="forum-mobile" placeholder="Phone Number" aria-label="Username"
                                                                    aria-describedby="basic-addon1">
                                                                </div>
                                                                @error('mobile')
                                                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                @enderror    
                                                                <textarea class="form-control popup-descr forum-msg" name="message" placeholder="Your message"
                                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                    @error('message')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror    
                                                                <div class="text-end mt-lg-5 mt-3">
                                                                    <button type="submit" class="btn btn-submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade popuphome" id="chat-request-{{$lawyer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="puopclass">
                                                            <form action="{{route('send.chat.request')}}" method="post" onsubmit="return validateChatRqstForm(event, '{{$lawyer->id}}')">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->id}}">
                                                                <h3 class="text-center" data-bs-toggle="modal" data-bs-target="#lowyar1">Chat Request</h3>
                                                                <input type="email" readonly name="" id="" placeholder="Email Address" class="form-control mb-3" value="{{auth()->user() ? auth()->user()->email : ''}}">
                                                                <textarea class="form-control chat-rqst-form-{{$lawyer->id}}" placeholder="Add your query" name="description" id="exampleFormControlTextarea1"
                                                                rows="3"></textarea>
                                                                <div class="text-end mt-lg-5 mt-3">
                                                                    <button type="submit" class="btn btn-submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade modal-popups contact-popop" id="consult-lawyer-{{$lawyer->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered modal-lg" id="modal-login">
                                                <div class="modal-content"> 
                                                    <div class="modal-header text-right"> 
                                                        <button type="button" class="btn-close rounded" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-popup-des rounded" id="pills-tabContent">
                                                            <form action="{{route('consult.lawyer')}}" method="post" onsubmit="return validateConsultForm(event, '{{$lawyer->id}}')">
                                                                @csrf()
                                                                <input type="hidden" name="lawyerId" value="{{$lawyer->user_id}}">
                                                                <h4 class="give-rating"> Contact Form</h4>                                                    
                                                                <div class="eles group-invite area"> 
                                                                    <input type="text" name="name" id="name-{{$lawyer->id}}" placeholder="Name" class="mb-4" value="{{auth()->user() ? auth()->user()->name : ''}}">
                                                                    @error('name')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <input type="email" name="email" id="email-{{$lawyer->id}}" placeholder="Email" class="mb-4" value="{{auth()->user() ? auth()->user()->email : ''}}">
                                                                    @error('email')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <div class="input-group mb-3" id="mobile-div-{{$lawyer->id}}">
                                                                        <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                                                        <input type="text" class="form-control left-bordr" name="mobile" id="mobile-{{$lawyer->id}}" placeholder="Phone Number" aria-label="Username"
                                                                        aria-describedby="basic-addon1">
                                                                    </div> 
                                                                    @error('mobile')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                    <div class="links-icons">
                                                                        <textarea placeholder="Message" name="message" id="msg-{{$lawyer->id}}" class="description"></textarea> 
                                                                    </div>
                                                                    @error('message')
                                                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                                                    @enderror   
                                                                </div> 
                                                                <div class="text-right mb-3">
                                                                    <button class="btn-lgn" type="submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade popuphome videopopup videoimage_popup" id="lawyer-profile-{{$lawyer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content border-0">
                                                    <div class="modal-body">
                                                        <div class="puopclass overflowclass">
                                                            <div class="law-box1 prime">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-3 text-center m-p-0 over-n">
                                                                        <div class="sma-amse">
                                                                            @if($lawyer->profile_pic != '')
                                                                            <img src="/storage/{{$lawyer->profile_pic}}" alt="Group">
                                                                            @else
                                                                            <img src="/new-design/user-dashboard/images/av1.png">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-9" id="jaidev-text">
                                                                        <h5>{{ $lawyer->user->name }}</h5>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <ul class="star-part-2 fa-start-des">
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-6 p-0">
                                                                                <span class="rev-35">(35 Reviews)</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mt-2"><i class="fa-solid fa-location-dot"></i> {{$lawyer->emirates}} {{$lawyer->position}}</p>
                                                                    </div>
                                                                    <div class="col-md-3 col-12 mb-lg-0 mb-4">
                                                                        <div class="btn-hire" onclick="closePrevModal('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#consult-{{$lawyer->id}}">
                                                                            <button class="btn1-hire">  <img src="/new-design/assets/images/Group1.png" alt=""> Consult</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if($lawyer->disclaimer)
                                                                <h6 class="mt-xl-5 mt-0"><strong>Description:</strong></h6>
                                                                <p>{{$lawyer->disclaimer}}</p>
                                                            @endif
                                                            <div class="row mb-3 mt-2">
                                                                <div class="col-sm-2">
                                                                    <ul>
                                                                        <!-- <li><strong>Experience:</strong></li> -->
                                                                        <li><strong>Position: </strong></li>
                                                                        <li><strong> Expertise:</strong></li>
                                                                        <li><strong> Address:</strong></li>
                                                                        <li><strong>Lanuages:</strong></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <ul>
                                                                        <!-- <li>25 Years of experience</li> -->
                                                                        <li> {{$lawyer->position}}</li>
                                                                        <li> {{$lawyer->arbitration ? $lawyer->arbitration->area : '-'}}</li>
                                                                        <li> {{$lawyer->emirates}}</li>
                                                                        <li> {{$lawyer->getLanguages($lawyer->id)}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <img src="/new-design/assets/images/pupvideo.png" alt="" class="img-responsive img-fluid">
                                                            <div class="text-end" id="btnclass-there">
                                                                <button type="button" class=" mt-lg-5 mt-2 btn bg1" onclick="lawyerServices('{{$lawyer->user_id}}')">Lawyer Services</button>
                                                                @if(auth()->user())
                                                                    <button type="button" class=" mt-lg-5 mt-2 btn bg2" onclick="openChatModalTwo('{{$lawyer->id}}')" data-bs-toggle="modal" data-bs-target="#chat-request-{{$lawyer->id}}">Chat Request</button>
                                                                @else 
                                                                    <button type="button" class=" mt-lg-5 mt-2 btn bg2" onclick="login()">Chat Request</button>
                                                                @endif
                                                                <button type="button" class=" mt-lg-5 mt-2 btn bg3" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                    @endforeach

</div>

                </div>
              </div>
            </div>
          </div>
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">How It Works</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="{{route('howItWorks')}}" class="nav-link {{request()->is('how-it-works') ? 'active-nav' : ''}}" style="color: black!important;">For Individuals</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('lawyer.register-page')}}"  style="color: black!important;">For Lawyers</a>
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
                    <a class="nav-link" href="{{route('question-answer')}}">Q&A</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('blogs-articles', 1)}}">Blogs & Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('page-practice-area/details') }}">Practice Area</a>
                </li>
              @if(auth()->user())                      
                        @if(auth()->user()->user_type == 2)
                            <li class="nav-item dropdown">
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
                            <li class="nav-item dropdown">
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
                        <li>
                            <a class="nav-link" href="{{route('user.login')}}">Login</a>
                        </li>
                    @endif
            </ul>
          </div>
        </nav>
      </div>
    </header>