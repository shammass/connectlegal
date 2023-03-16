@if($message->from_id != auth()->user()->id)
    @if($message->attachment)
        @php $attachment = json_decode($message->attachment); @endphp
        <ul>
            <a href="/online-chat/download/{{$attachment->new_name}}/{{$attachment->old_name}}">                <li class="sender color-border">
                    <div class="chat-left">

                        <div class="d-flex align-items-center" id="bg-dark">
                            <span class="chat-icon"><i
                                    class="fa-solid fa-arrow-left"></i></span>
                            <div class="flex-shrink-0 img-width"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img class="img-fluid" src="/new-design/user-dashboard/images/pdf.png"
                                    alt="user img">
                            </div>
                            <div class="flex-grow-1 color-p-syte ms-3"
                                id="pdf-file">
                                <h3>{{$attachment->old_name}}
                                </h3>
                                <p>{{ formatBytes($attachment->size) }} · PDF</p>
                            </div>
                        </div>
                        <!-- <p>This is one example of text to attach the file
                        </p> -->
                        <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}} <i
                                class="fa-solid fa-check"></i></h6>
                    </div>
                </li>
            </a>
        </ul>
    @else 
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
    @endif
@else
    @if($message->attachment)
        @php 
            $attachment = json_decode($message->attachment); 
        @endphp
        <ul>
                <a href="/online-chat/download/{{$attachment->new_name}}/{{$attachment->old_name}}">                <li class="repaly reply-two">
                    <div class="chat-left colorchane">

                        <div class="d-flex align-items-center" id="bg-dark">
                            <span class="chat-icon"><i
                                    class="fa-solid fa-arrow-left"></i></span>
                            <div class="flex-shrink-0 img-width"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img class="img-fluid" src="/new-design/user-dashboard/images/pdf.png"
                                    alt="user img">
                            </div>
                            <div class="flex-grow-1 color-p-syte ms-3"
                                id="pdf-file">
                                <h3>{{$attachment->old_name}}
                                </h3>
                                <p>{{ formatBytes($attachment->size) }} · PDF</p>
                            </div>
                        </div>
                        <!-- <p>This is one example of text to attach the file -->
                        </p>
                        <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}} <i
                                class="fa-solid fa-check"></i></h6>
                    </div>
                </li>
            </a>
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
@endif