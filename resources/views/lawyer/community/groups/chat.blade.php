<!DOCTYPE html>
<html lang="en">

    @include('lawyer.community.layouts.head')

    <!-- <body  style="background-image: url('/community/assets/images/smiley-bg.jpg');"> -->
    <body  class="bg-smile">
        @include('common.layouts.header')
        @include('lawyer.community.layouts.group-tabs')
        <!-- page body start -->
        <section class="messanger-section" style="margin-left: 13%;padding: 25px 0;">
            <div class="chat-users">                
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: fit-content!important;">
                    <li class="nav-item" role="presentation" style="height: min-content;">
                        <a class="nav-link" aria-selected="false">
                            <div class="media list-media">                                
                                <div class="media-body" style="text-align: center;">
                                    <h5>Group Members</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation" style="height: min-content;">
                        <a class="nav-link" aria-selected="false">
                            <div class="media list-media">
                                <div class="story-img">
                                    <div class="user-img">
                                        <img src="/storage/{{$group->getProfilePic($group->admin_id)}}" class="img-fluid blur-up lazyload bg-img"
                                            alt="user">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5>{{$group->admin->name}}</h5>
                                    <h6>Admin</h6>
                                    <span style="text-transform: none!important;">({{strtolower($group->admin->email)}})</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @foreach($groupMembers as $k => $member)
                        <li class="nav-item" role="presentation" style="height: min-content;">
                            <a class="nav-link" aria-selected="false">
                                <div class="media list-media">
                                    <div class="story-img">
                                        <div class="user-img">
                                            <img src="/storage/{{$member->getProfilePic($member->member_id)}}" class="img-fluid blur-up lazyload bg-img"
                                                alt="user">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>{{$member->member->name}}</h5>
                                        <span style="text-transform: none!important;">({{strtolower($member->member->email)}})</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="chat-content" style="background-color: transparent!important;">
                <div class="tab-content" id="myTabContent">                    
                    <div class="tab-pane fade show active" id="user3" role="tabpanel" aria-labelledby="user3">
                        <div class="tab-box" style="width:128%;">
                            <div class="user-chat" style="background-color: #f7f7f7;">
                                <div class="user-title">
                                    <div class="back-btn d-block d-sm-none">
                                        <i data-feather="arrow-left"></i>
                                    </div>
                                    <div class="media list-media">
                                        <div class="media-body">
                                            <h5>{{$group->group_name}}</h5>
                                            <h6>Members: <b>{{$groupMembers->count() + 1}}</b></h6>
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="chat-history">
                                    <div class="avenue-messenger">
                                        <div class="chat">                                    
                                            <p class="sending" style="display:none;text-align: center;"><b>Sending...</b></p>
                                            <div class="messages-content" id="chat-text">
                                                @foreach($messages as $k => $message)
                                                    @if($message->from_id != auth()->user()->id)
                                                        <div class="message new">
                                                            <h5 style="color:{{$message->fromUser->messenger_color}}"><b>{{ucfirst($message->fromUser->name)}}</b></h5>
                                                           <b>{{$message->body}}</b>
                                                           <br><small>{{date('g:i A', strtotime($message->created_at))}}</small>
                                                            <!-- <div class="timestamp" style="width: max-content;">{{date('g:i A', strtotime($message->created_at))}}</div> -->
                                                            <!-- <div class="checkmark-sent-delivered">✓</div> -->
                                                            <!-- <div class="checkmark-read">✓</div> -->
                                                        </div>
                                                    @else
                                                        <div class="message message-personal new">
                                                            <b>{{$message->body}}</b>
                                                           <br><small>{{date('g:i A', strtotime($message->created_at))}}</small>
                                                            <!-- <div class="checkmark-sent-delivered">✓</div> -->
                                                            <!-- <div class="checkmark-read">✓</div> -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="message-box" id="msgFieldFirst">
                                                <input type="hidden" id="groupId" value="{{$groupId}}">
                                                <textarea class="message-input emojiPicker m-send app-scroll"
                                                    placeholder="Type message..." id="msgField" style="padding-left: 5%;display:2 !important;"></textarea>      
                                                <!-- <textarea name="message" class="m-send app-scroll" placeholder="Type a message.." style="padding-left: 5%;" id="msgField"></textarea>                                           -->
                                                <a href="#" class="message-submit" onclick="sendMessage()"><i data-feather="send"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('lawyer.community.layouts.scripts')

    </body>

</html>