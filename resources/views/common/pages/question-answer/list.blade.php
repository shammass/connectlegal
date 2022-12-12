@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="question-answers">
        <div class="container">
            <div class="question-answers-header">
                <div class="title">
                    <h1>Question & Answers</h1>
                    <img src="new-design/assets/image/home/quetion-icon.png" alt="">
                </div>
                <div class="add-quetion">
                    <div class="add-quetion-btn">
                        <button type="btn" class="btn">
                            <img src="new-design/assets/image/question-answer/plus icon.png" alt="">
                        </button>
                        <h5>Add Question</h5>
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
                        <button class="btn" type="btn"><img src="new-design/assets/image/home/all.png" alt=""></button>
                        <button class="btn" type="btn"><img src="new-design/assets/image/home/Vector (18).png" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="question-answer-body">
                <div class="row">
                    @forelse($forums as $k => $forum)
                        <div class="col-md-6 col-lg-4 col-xl-4 pb-b20" onclick="forumAnswers('{{$forum->slug}}')" style="cursor:pointer;">
                            <div class="question-answer-card card-pink">
                                <h6>{{$forum->created_at->format('d M Y')}}</h6>
                                <h4>{{$forum->title}}</h4>
                                <p>{{Str::limit($forum->message, 150)}}</p>
                                <div class="card-footer">
                                    <div class="views">
                                        <img src="new-design/assets/image/question-answer/views.png" alt="">
                                        <div class="views-contetnt">
                                            <h4>{{$forum->views}}</h4>
                                            <h5>Views</h5>
                                        </div>
                                    </div>
                                    <div class="views">
                                        <img src="new-design/assets/image/question-answer/answers.png" alt="">
                                        <div class="views-contetnt">
                                            <h4>{{$forum->totalAnswerCount($forum->id)}}</h4>
                                            <h5>Answers</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p style="text-align: center;">No Questions</p>
                    @endforelse                    
                </div>
            </div>
            {{ $forums->links() }}            
        </div>
    </section>
@endsection

@push('script')
    <script>
        function forumAnswers(slug) {
            window.location.href = "/question-answer/view/"+slug;
        }
    </script>
@endpush