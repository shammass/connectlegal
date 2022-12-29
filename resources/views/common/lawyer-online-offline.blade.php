<div class="lawyers-online">
    @foreach($lawyers as $k => $lawyer)
        @if($lawyer->user->isOnline())
            <div class="lawyers-online-card">
                <div class="online-card-profile">
                    <img src="/storage/{{$lawyer->profile_pic}}" style="height: 40px;border-radius: 20px;" alt="">
                    <img class="active-circle" src="/new-design/assets/image/home/active-circle.png" alt="">
                    <div class="card-profile-designation">
                        <h4>{{$lawyer->user->name}}</h4>
                        <h5>{{$lawyer->emirates}}</h5>
                    </div>
                </div>
                {{-- <div class="premium">
                    <img src="/new-design/assets/image/home/Vector (10).png" alt="">
                    <h6>Premium</h6>
                </div> --}}
            </div>
        @endif
    @endforeach
    @if($onlineLawyers < 1)
        <div class="lawyers-online-card">
            <p>No Lawyers Are Online</p>
        </div>
    @endif
</div>
<div class="lawyers-offline">
    <div class="lawyers-offline-card">
        <h4>Lawyers offline</h4>
    </div>
    @foreach($lawyers as $k => $lawyer)
        @if(!$lawyer->user->isOnline())
            <div class="lawyers-online-card lawyers_ofline_card">
                <div class="online-card-profile">
                    <img src="/storage/{{$lawyer->profile_pic}}" style="height: 40px;border-radius: 20px;" alt="">
                    <img class="active-circle" src="/new-design/assets/image/home/enable-circle.png" alt="">
                    <div class="card-profile-designation">
                        <h4>{{$lawyer->user->name}}</h4>
                        <h5>{{$lawyer->emirates}}</h5>
                    </div>
                </div>
                {{--<div class="premium">
                    <img src="/new-design/assets/image/home/Vector (10).png" alt="">
                    <h6>Premium</h6>
                </div>--}}
            </div>
        @endif
    @endforeach                    
</div>