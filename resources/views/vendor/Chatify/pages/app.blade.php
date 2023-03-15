@extends('common.user-dashboard.layouts.app')
@section('content')
    <section class="message-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="chat-area">
                                <!-- chatlist -->
                                <div class="chatlist">
                                    <div class="modal-dialog-scrollable fadeup">
                                        <div class="modal-content">
                                            <div class="chat-header">
                                                <div class="msg-search">
                                                    @if($lawyerDetail)
                                                        <img src="/new-design/user-dashboard/images/legal-2.png" alt="">
                                                    @else 
                                                        <img src="/storage/{{auth()->user()->getProfilePic(auth()->user()->id)}}"  style="width: 40px;height: 40px;border-radius: 20px;" alt="">
                                                    @endif
                                                    <a class="add" href="#" style="text-decoration:none;">
                                                        <ul class="moreoption">
                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                            <!-- <li class="navbar nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle d-none d-md-block" href="#"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fa-solid fa-ellipsis"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Action</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Action</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Action</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Action</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Action</a>
                                                                    </li>
                                                                </ul>
                                                            </li> -->

                                                        </ul>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <!-- chat-list -->
                                                <div class="chat-lists">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="Open" role="tabpanel"
                                                            aria-labelledby="Open-tab">
                                                            <!-- chat-list -->
                                                            <div class="chat-list">
                                                                @if($acceptedLawyers)
                                                                    @foreach($acceptedLawyers as $k => $lawyer)
                                                                        <a href="#" onclick="chatWithLawyer('{{$lawyer->lawyer->user_id}}')" class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img class="img-fluid"
                                                                                    src="/storage/{{$lawyer->lawyer->profile_pic}}"
                                                                                    style="width: 40px;height: 40px;border-radius: 20px;"
                                                                                    alt="user img">
                                                                                <!-- <span class="active"></span> -->
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h3>{{$lawyer->lawyer->user->name}}</h3>
                                                                                <p>{{$lawyer->latestMsg($lawyer->lawyer->user_id)}}
                                                                                    <strong>{{$lawyer->latestMsgCreatedAt($lawyer->lawyer->user_id)}}</strong> </p>
                                                                            </div>
                                                                        </a>
                                                                    @endforeach
                                                                @else 
                                                                    @foreach($usersAccepted as $k => $user)
                                                                        <a href="#" onclick="chatWithLawyer('{{$user->user_id}}')" class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <!-- <img class="img-fluid"
                                                                                    src=""
                                                                                    style="width: 40px;height: 40px;border-radius: 20px;"
                                                                                    alt="user img"> -->
                                                                                <!-- <span class="active"></span> -->
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h3>{{$user->user->name}}</h3>
                                                                                <p>{{$user->latestMsg($user->user_id)}}
                                                                                    <strong>{{$user->latestMsgCreatedAt($user->user_id)}}</strong> </p>
                                                                            </div>
                                                                        </a>
                                                                    @endforeach

                                                                @endif
                                                            </div>
                                                            <!-- chat-list -->
                                                        </div>
                                                        <div class="tab-pane fade" id="Closed" role="tabpanel"
                                                            aria-labelledby="Closed-tab">

                                                            <!-- chat-list -->
                                                            <div class="chat-list">
                                                                @if($acceptedLawyers)
                                                                    @foreach($acceptedLawyers as $k => $lawyer)
                                                                        <a href="#" onclick="chatWithLawyer('{{$lawyer->lawyer->user_id}}')" class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img class="img-fluid"
                                                                                    style="width: 40px;height: 40px;border-radius: 20px;"
                                                                                    src="/storage/{{$lawyer->lawyer->profile_pic}}"
                                                                                    alt="user img">
                                                                                <span class="active"></span>
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h3>{{$lawyer->lawyer->user->name}}</h3>
                                                                                <p>{{$lawyer->latestMsg($lawyer->lawyer->user_id)}}
                                                                                    <strong>{{$lawyer->latestMsgCreatedAt($lawyer->lawyer->user_id)}}</strong> </p>
                                                                            </div>
                                                                        </a>
                                                                    @endforeach
                                                                @else
                                                                    @foreach($usersAccepted as $k => $user)
                                                                        <a href="#" onclick="chatWithLawyer('{{$user->user_id}}')" class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h3>{{$user->user->name}}</h3>
                                                                                <p>{{$user->latestMsg($user->user_id)}}
                                                                                    <strong>{{$user->latestMsgCreatedAt($user->user_id)}}</strong> </p>
                                                                            </div>
                                                                        </a>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            <!-- chat-list -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- chat-list -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- chatlist -->



                                <!-- chatbox -->
                            <div class="chatbox">
                                <div class="modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="msg-head">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="d-flex align-items-center">
                                                        <span class="chat-icon"><i
                                                                class="fa-solid fa-arrow-left"></i></span>
                                                        <div class="flex-shrink-0">
                                                            @if($lawyerDetail)
                                                                <img class="img-fluid"
                                                                    style="width: 40px;height: 40px;border-radius: 20px;"
                                                                    src="/storage/{{$lawyerDetail ? $lawyerDetail->profile_pic : null}}"
                                                                    alt="{{$lawyerDetail ? $lawyerDetail->user->name : $userDetail->name}}">
                                                            @endif
                                                        </div>
                                                        <div class="flex-grow-1 color-p-syte ms-3">
                                                            <h3>{{$lawyerDetail ? $lawyerDetail->user->name : $userDetail->name}}
                                                            </h3>
                                                            <p>{{$lawyerDetail ? $lawyerDetail->emirates : '-'}}</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <ul class="moreoption">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                        <li class="navbar nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li data-bs-toggle="modal" data-bs-target="#consult-the-lawyer"><a class="dropdown-item" href="#"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Consult the Lawyer</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="{{route('hire-a-lawyer.user', $id)}}"> <img
                                                                                src="/new-design/user-dashboard/images/file-2.png" alt="">
                                                                            Lawyer Services</a>
                                                                    </li>
                                                                </ul>
                                                        </li>
                                                     </ul>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal-body chat-history">
                                            <div class="msg-body appendLatestMsg" id="chat-text">
                                                <input type="hidden" name="to_id" id="to_id" value="{{$id}}">
                                                @foreach($messages as $k => $message)
                                                    @if($message->from_id != auth()->user()->id)
                                                        <ul>
                                                            <li class="row col-md-6 sender color-border">
                                                                <div class="chat-left">
                                                                    <p>{{$message->body}}</p>
                                                                    <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}}
                                                                        @if($message->seen)
                                                                            <i class="fas fa-check-double"></i>
                                                                        @else 
                                                                            <i class="fa-solid fa-check"></i>
                                                                        @endif
                                                                    </h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    @else
                                                        <ul>
                                                            <li class="row col-md-6 repaly reply-two">
                                                                <div class="chat-left colorchane">
                                                                    <p>{{$message->body}}</p>
                                                                    <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}}
                                                                        @if($message->seen)
                                                                            <i class="fas fa-check-double"></i>
                                                                        @else 
                                                                            <i class="fa-solid fa-check"></i>
                                                                        @endif
                                                                    </h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    @endif
                                                @endforeach
                                                
                                                <div class="upload-image" style="display: none;">
                                                    <div class="text-center max-file">
                                                        <img src="/new-design/user-dashboard/images/file.png" alt="">
                                                        <p class="m-0 mt-3">Name of file.pdf</p>
                                                        <p class="m-0"> 3.5 MB · PDF</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @if(!$completed)
                                            <div class="send-box position-relative">
                                                <div class="intercom-composer-popover intercom-composer-emoji-popover">
                                                    <div class="intercom-emoji-picker">
                                                        <div class="intercom-composer-popover-header"><input
                                                                class="intercom-composer-popover-input"
                                                                placeholder="Search" value=""></div>
                                                        @include('vendor.Chatify.pages.emoji')
                                                    </div>
                                                    <div class="intercom-composer-popover-caret"></div>
                                                </div>
                                                <form id="message-form" method="POST" action="{{ route('send.message') }}" onsubmit="return false;">
                                                    @csrf()
                                                    <input type="text" class="form-control" id="msgField"
                                                        aria-label="message…" placeholder="Write message… ">
                                                    <img style="cursor: pointer;" id="emoji-picker"
                                                        src="/new-design/user-dashboard/images/file-snd.png" alt="" class="postiotion-1">
                                                    <img src="/new-design/user-dashboard/images/filesnd.png" class="postiotion-2">
                                                    <button type="button" onclick="sendMessage()"><i class="fa fa-paper-plane"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade modal-popups" id="consult-the-lawyer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg" id="modal-login">
            <div class="modal-content"> 
                <div class="modal-header text-right"> 
                    <button type="button" class="btn-close rounded" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="form-popup-des rounded" id="pills-tabContent">
                        <form action="{{route('consult.lawyer')}}" method="post" onsubmit="return validateConsultForm(event)">
                            @csrf()
                            <input type="hidden" name="lawyerId" value="{{$id}}">
                            <h4 class="give-rating"> Contact Form</h4>                                                    
                            <div class="eles group-invite area"> 
                                <input type="text" name="name" id="name" placeholder="Name" class="mb-4" value="{{auth()->user() ? auth()->user()->name : ''}}">
                                @error('name')
                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                @enderror   
                                <input type="email" name="email" id="email" placeholder="Email" class="mb-4" value="{{auth()->user() ? auth()->user()->email : ''}}">
                                @error('email')
                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                @enderror   
                                <div class="input-group mb-3" id="mobile-div">
                                    <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                    <input type="text" class="form-control left-bordr" name="mobile" id="mobile" placeholder="Phone Number" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                </div> 
                                @error('mobile')
                                    <span class="error-msg" style="color:red;">{{ $message }}</span>
                                @enderror   
                                <div class="links-icons">
                                    <textarea placeholder="Message" name="message" id="msg" class="description"></textarea> 
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

@endsection

@push('script')


<script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('a34a416e0fe588185c8e', {
            cluster: 'ap2'
        });
        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('user-msg');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\UserMsg', function(data) {
            if(data.type === "UserMsg") {
                    $.ajax({
                    method:"get",
                    url: "/user-latest-msg/"+data.messageId,
                    success: function(res) {
                        $(".appendLatestMsg").append(res);
                    }
                });
            }
        }); 

        function chatWithLawyer(lawyerId) {
            window.location.href = "/online-chat/"+lawyerId;
            $(".chatbox").addClass('showbox');
        }




        function validateConsultForm(e) {
            var valid = true;
            $(".errors").empty()
            var name = $("#name").val()
            var email = $("#email").val()
            var mobile = $("#mobile").val()
            var msg = $("#msg").val()

            if(!name) {
                valid = false;
                $("#name").after('<span class="errors" style="color:red;">This field is required</span>')
            }
            if(!email) {
                valid = false;
                $("#email").after('<span class="errors" style="color:red;">This field is required</span>')
            }
            if(!mobile) {
                valid = false;
                $("#mobile-div").after('<span class="errors" style="color:red;">This field is required</span>')
            }
            if(!msg) {
                valid = false;
                $("#msg").after('<span class="errors" style="color:red;">This field is required</span>')
            }

            if(!valid) {
                e.preventDefault()
            }
        }

    </script>

    <script type="text/javascript">
        var temporaryMsgId = 0;
        const access_token = $('meta[name="csrf-token"]').attr("content");
        $(document).ready(function () {         
            $(".chatbox").addClass('showbox');   
            // Hide submenus
            $('#body-row .collapse').collapse('hide');

            // Collapse/Expand icon
            $('#collapse-icon').addClass('fa-angle-double-left');

            // Collapse click
            $('[data-toggle=sidebar-colapse]').click(function () {
                SidebarCollapse();
            });

            function SidebarCollapse() {
                $('.menu-collapsed').toggleClass('d-none');
                $('.sidebar-submenu').toggleClass('d-none');
                $('.submenu-icon').toggleClass('d-none');
                $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

                // Collapse/Expand icon
                $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
            }
        });
    </script>
    <script>
        jQuery(document).ready(function () {
            $(".chat-list a").click(function () {
                $(".chatbox").addClass('showbox');
                return false;
            });

            $(".chat-icon").click(function () {
                $(".chatbox").removeClass('showbox');
            });


        });



        $(document).on("click", "#emoji-picker", function (e) {
            e.stopPropagation();
            $('.intercom-composer-emoji-popover').toggleClass("active");
        });

        $(document).click(function (e) {
            if ($(e.target).attr('class') != '.intercom-composer-emoji-popover' && $(e.target).parents(
                    ".intercom-composer-emoji-popover").length == 0) {
                $(".intercom-composer-emoji-popover").removeClass("active");
            }
        });

        $(document).on("click", ".intercom-emoji-picker-emoji", function (e) {
            var old = $("#msgField").val();
            $("#msgField").val(old + $(this).html());
        });

        $('.intercom-composer-popover-input').on('input', function () {
            var query = this.value;
            if (query != "") {
                $(".intercom-emoji-picker-emoji:not([title*='" + query + "'])").hide();
            } else {
                $(".intercom-emoji-picker-emoji").show();
            }
        });

        var input = document.getElementById("msgField");
            input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                sendMessage()
            }
        });

        function sendMessage() {
            
            temporaryMsgId += 1;
            let tempID = `temp_${temporaryMsgId}`;
            const messagesContainer = $(".chat-history");
            const messageInput = $("#message-form .m-send")
            const inputValue = $.trim(messageInput.val());
            var toId = $("#to_id").val()
            $(".sending").css('display', 'block');
            $(".sending").css('text-align', 'center');
            var msg = $("#msgField").val().trim();
            if(msg) {

                $("#msgField").val("")            
                let hasFile = !!$(".upload-attachment").val();  
                // const formData = "abcd";
                const formData = new FormData($("#message-form")[0]);            
                formData.append("_token", access_token);
                formData.append("temporaryMsgId", tempID);
                formData.append("message", msg);
                formData.append("to_id", toId);
                // debugger
                // document.getElementById('msgField').setAttribute("style","padding-left:5%;overflow:hidden;overflow-wrap:break-word;");
                // if(msg) {
                $.ajax({
                    method:"post",
                    url: "/online-chat/sendMessage",
                    // data: {
                    //     "_token": "{{ csrf_token() }}",
                    //     'msg':msg,
                    //     'data':formData 
                    // },
                    data: formData,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    beforeSend: () => {
                        // remove message hint
                        $(".messages").find(".message-hint").remove();
                        // append a temporary message card
                        
                        // scroll to bottom
                        scrollToBottom(messagesContainer);
                        messageInput.css({ height: "42px" });
                        // form reset and focus
                        $("#message-form").trigger("reset");
                        // cancelAttachment();
                        messageInput.focus();
                    },
                    success: function(res){                    
                        $("#chat-text").animate({ scrollTop: $('#chat-text').prop("scrollHeight")}, 1000);
                        $('#chat-text').scrollTop($('#chat-text')[0].scrollHeight);
                    }
                });
            }
            // }
        }

        function scrollToBottom(container) {
            $(container)
                .stop()
                .animate({
                scrollTop: $(container)[0].scrollHeight,
                });
        }
    </script>

@endpush
       
