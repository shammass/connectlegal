@if($message->from_id != auth()->user()->id)
    @if($message->attachment)
        @php $attachment = json_decode($message->attachment); @endphp
        <ul>
        <a href="{{route('download.pdf', [$attachment->new_name, $attachment->old_name])}}">
            <li class="repaly reply-two">
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
                    <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}} <i
                            class="fa-solid fa-check"></i></h6>
                </div>
            </li>
            </a>
        </ul>
    @else 
        <small style="color:{{$message->fromUser->messenger_color}}"><strong>{{$message->fromUser->name}}</strong></small>
        <ul>
            <li class="sender color-border">
                <div class="chat-left">
                    <p>{{$message->body}}
                    </p>
                    <h6 class="text-end">{{$message->created_at->diffForHumans()}} {{date('g:i A', strtotime($message->created_at))}} <i
                            class="fa-solid fa-check"></i></h6>
                </div>
            </li>
        </ul>
    @endif
@else
    @if($message->attachment)
        @php $attachment = json_decode($message->attachment); @endphp
        <ul>
            <a href="{{route('download.pdf', [$attachment->new_name, $attachment->old_name])}}">
            <li class="repaly reply-two">
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
                    <h6 class="text-end">{{date('g:i A', strtotime($message->created_at))}} <i
                            class="fa-solid fa-check"></i></h6>
                </div>
            </li>
            </a>
        </ul>
    @else 
        <ul>
            <li class="repaly reply-two">
                <div class="chat-left colorchane">
                    <p>{{$message->body}}
                    </p>
                    <h6 class="text-end">{{$message->created_at->diffForHumans()}} {{date('g:i A', strtotime($message->created_at))}} <i
                            class="fa-solid fa-check"></i></h6>
                </div>
            </li>
        </ul>
    @endif
@endif