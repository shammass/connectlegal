@if($message->from_id != auth()->user()->id)
    <div class="message new">
        <h5 style="color:{{$message->fromUser->messenger_color}}"><b>{{$message->fromUser->name}}</b></h5>
        <b>{{$message->body}}</b>
        <br>
        {{date('g:i A', strtotime($message->created_at))}}
        {{-- If attachment is a file --}}
        @if(@$attachment->old_name)
            <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName'=>@$attachment->new_name]) }}" class="file-download">
            <span class="fas fa-file"></span> {{@$attachment->old_name}}</a>
        @endif
        <!-- <div class="checkmark-sent-delivered">✓</div> -->
        <!-- <div class="checkmark-read">✓</div> -->
    </div>
@else
    <div class="message message-personal new">
        <b>{{$message->body}}</b>
        <br>
        {{date('g:i A', strtotime($message->created_at))}}
        {{-- If attachment is a file --}}
        @if(@$attachment->old_name)
            <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName'=>@$attachment->new_name]) }}" class="file-download">
            <span class="fas fa-file"></span> {{@$attachment->old_name}}</a>
        @endif
        <!-- <div class="checkmark-sent-delivered">✓</div> -->
        <!-- <div class="checkmark-read">✓</div> -->
    </div>
@endif