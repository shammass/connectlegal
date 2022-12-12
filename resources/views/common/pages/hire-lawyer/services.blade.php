@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="question-answers">
        <div class="container">
            <div class="question-answers-header">
                <div class="title">
                    <h1>Hire a Lawyer</h1>
                    <img src="new-design/assets/image/hire-lawyer/suitcase.png" alt="">
                </div>
                <div class="add-quetion">
                    <div class="add-quetion-btn">
                        
                    </div>
                    <div class="slect_box">
                        <form action="">
                            <div class="slect_box_inner">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sort by</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Per Page</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="change-the-view">
                    <div class="result-for">
                        <h5>8766 results for:</h5>
                        <button type="btn" class="btn">All Countries</button>
                        <button type="btn" class="btn">All areas of law</button>
                        <button type="btn" class="btn edit-icon"> <img src="new-design/assets/image/home/left-arrow-btn.png"
                                alt=""></button>
                    </div>
                    <div class="change-the-view-inner">
                        <h4>Change the view:</h4>
                        <button class="btn" type="btn"><img src="new-design/assets/image/common/display1.png" alt=""></button>
                        <button class="btn" type="btn"><img src="new-design/assets/image/common/display2.png" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="question-answer-body">
                <div class="row">
                    @foreach($services as $k => $service)
                        <div class="col-md-6 col-lg-6 col-xl-6 pb-b20">
                            <div class="question-answer-card card-pink">
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
            {{ $services->links() }}
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