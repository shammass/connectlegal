@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="question-answers">
        <div class="container-fluid">        
            <div class="row col-md-10 mt-2 m-auto">
                <div class="service-header">
                    <div class="row g-1 question-answers-header">
                        <div class="title">
                            <h1>Hire a Lawyer</h1>
                            <img src="/new-design/assets/image/hire-lawyer/hire-bag.png" class="hire-img" alt="">
                        </div>
                        <div class="change-the-view">
                            <div class="result-for">
                                <h5>8766 results: </h5>
                            </div>
                            <div class="change-the-view-inner">
                                <h4>Change the view:</h4>
                                <button class="btn" type="btn"><img src="/new-design/assets/image/question-answer/view1.png" alt=""></button>
                                <button class="btn" type="btn"><img src="/new-design/assets/image/question-answer/view2.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="question-answer-body">
                    <div class="row g-3 gx-4 d-flex justify-content-center mt-2">
                        @foreach($services as $k => $service)
                            <div class="col-11 col-md-5">
                                <div class="question-answer-card hire-card">
                                    <h6 style="text-align: left;">{{$service->arbitration->area}}</h6>
                                    <h4>{{$service->title}}</h4>
                                    <p>{{$service->description}}</p>
                                    <div class="card-footer">
                                        <h4 style="margin-top: 0px!important;">AED {{$service->getLowestFee($service->id)}}</h4>
                                        <div class="views">
                                            <button class="see_more_btn" onclick="serviceLawyers('{{$service->id}}')">See More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $services->links() }}
        </div>        
        <div class="row col-xs-10 col-12 col-sm-12 col-md-10 col-xl-10 p-a-ask-lawyer mb-5 m-auto">
            <div class="col-11 col-md-6 col-xl-5 p-a-ask-lawyer-form w-md-auto">
                <span class="p-a-l-f-s-else">Looking for something else? <img src="/new-design/assets/image/practice-area/hangout.png" alt="" class="p-a-hangout-img"></span>
                <form action="">
                    @csrf()
                    <textarea name="" class="form-control p-a-textarea" id="" cols="5" rows="6" placeholder="Describe your legal issues here"></textarea>
                </form>
                <div class="row">
                    <div class="col-4"><img src="/new-design/assets/image/practice-area/question.png" alt="" class="p-a-p-a-q-img"><span class="p-a-p-a-q-text">Post a question</span></div>
                    <div class="col-4"><img src="/new-design/assets/image/practice-area/chat.png" alt="" class="p-a-p-a-q-img"><span class="p-a-p-a-q-text">Chat Online</span></div>
                    <div class="col-4 p-a-form-btn"><div class="p-a-h-l-btn"><img src="/new-design/assets/image/practice-area/hire.png" alt="" class="p-a-p-a-q-img p-a-h-img"><span class="p-a-p-a-q-text p-a-p-a-q-text2">Hire a Lawyer</span></div></div>
                </div>
            </div>
            <div class="row">
                <div class="p-a-lawyers">
                    <img src="/new-design/assets/image/home/areyou-lawyer2.png" alt="" class="p-a-lawyer1">
                    <span class="p-a-l-name1">Arundati</span>
                    <small class="p-a-l-loc1">UAE, Abu Dhabi</small>
                </div>
                <div class="p-a-lawyers">
                    <img src="/new-design/assets/image/home/areyou-lawyer3.png" alt="" class="p-a-lawyer1">
                    <span class="p-a-l-name1">Rashid Ali</span>
                    <small class="p-a-l-loc1">UAE, Qatar</small>
                </div>
                <div class="p-a-lawyers3">
                    <img src="/new-design/assets/image/home/areyou-lawyer1.png" alt="" class="p-a-lawyer1">
                    <span class="p-a-l-name1">Michelle</span>
                    <small class="p-a-l-loc1">UAE, Abu Dhabi</small>
                </div>
            </div>
            <div class="row">
                <span class="p-a-n-l h-n-l">Need a Lawyer?</span>
                <span class="p-a-n-l-descr">Hire lawyers online. Buy fixed-fee legal services or submit your request and get multiple competitive offers from qualified lawyers.</span>                    
                <div class="row h-btns">
                    <span><img src="/new-design/assets/image/practice-area/buy.png" alt="" class="p-a-buy"> <span class="p-a-buy-service-text">Buy Service</span></span>
                    <span><img src="/new-design/assets/image/practice-area/quote.png" alt="" class="p-a-quote"> <span class="p-a-quote-service-text">Get Quote</span></span>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function serviceLawyers(serviceId) {
            window.location.href = "/service/lawyers/"+serviceId;
        }
    </script>
@endpush