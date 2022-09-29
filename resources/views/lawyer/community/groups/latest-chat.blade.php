@if($message->from_id != auth()->user()->id)
    <div class="message new">
        <h5 style="color:{{$message->fromUser->messenger_color}}"><b>{{$message->fromUser->name}}</b></h5>
        <b>{{$message->body}}</b>
        <br>
        {{date('g:i A', strtotime($message->created_at))}}
        <!-- <div class="checkmark-sent-delivered">✓</div> -->
        <!-- <div class="checkmark-read">✓</div> -->
    </div>
@else
    <div class="message message-personal new">
        <b>{{$message->body}}</b>
        <br>
        {{date('g:i A', strtotime($message->created_at))}}
        <!-- <div class="checkmark-sent-delivered">✓</div> -->
        <!-- <div class="checkmark-read">✓</div> -->
    </div>
@endif