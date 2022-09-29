@foreach($comments as $k => $comment)
    <div class="main-comment">
        <div class="media">
            <a href="#" class="user-img popover-cls"
                data-bs-toggle="popover" data-placement="right"
                data-name="{{$comment->user->name}}"
                data-img="/storage/{{$comment->getLawyerProfilePic($comment->user_id)}}" 
                style="background-image: url(/storage/{{$comment->getLawyerProfilePic($comment->user_id)}});
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;
                        display: block;"
                >
                <img src="/storage/{{$comment->getLawyerProfilePic($comment->user_id)}}"
                    class="img-fluid blur-up lazyload bg-img"
                    alt="user"
                    style="display:none;"
                    >
            </a>
            <div class="media-body">
                <a href="#">
                    <h5>{{$comment->user->name}}</h5>
                </a>
                <p>
                    {{$comment->comment}}
                </p>
            </div>
            <div class="comment-time">
                <h6>{{$comment->created_at->diffForHumans()}}</h6>
            </div>
        </div>
    </div>
@endforeach