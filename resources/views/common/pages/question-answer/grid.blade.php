@extends('common.home.layouts.app')
@section('content')
    {{-- <div class="fix-height"></div>
    <section class="question-answers">
        <div class="container">
            <div class="row col-md-10 mt-2 m-auto">
                <div class="service-header">
                    <div class="row g-1 question-answers-header">
                        <div class="title">
                            <h1>Question & Answers</h1>
                            <img src="/new-design/assets/image/home/quetion-icon.png" class="hire-img" alt="">
                        </div>
                        <div class="add-quetion">
                            <div class="add-quetion-btn">
                                <button type="btn" class="btn">
                                    <img src="/new-design/assets/image/question-answer/plus icon.png" alt="">
                                </button>
                                <h5>Add Question</h5>
                            </div>
                        </div>
                        <div class="change-the-view">
                            <div class="result-for">
                                <h5>8766 results: </h5>
                            </div>
                            <div class="change-the-view-inner">
                                <h4>Change the view:</h4>
                                <button class="btn" type="btn" onclick="listView()"><img src="/new-design/assets/image/question-answer/view1.png" alt=""></button>
                                <button class="btn" type="btn" onclick="gridView()"><img src="/new-design/assets/image/question-answer/view2.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="question-answer-body mb-5">
                <div class="row col-md-10 g-4 gx-4 d-flex justify-content-center m-auto">
                    @forelse($forums as $k => $forum)
                        <div class="col-md-6 col-lg-6 col-xl-4" onclick="forumAnswers('{{$forum->slug}}')" style="cursor:pointer;">
                            <div class="question-answer-card hover-card">
                                <h6>{{$forum->created_at->format('d M Y')}}</h6>
                                <h4>{{$forum->title}}</h4>
                                <p>{{Str::limit($forum->message, 150)}}</p>
                                <div class="card-footer">
                                    <div class="views">
                                        <img src="/new-design/assets/image/question-answer/views.png" alt="">
                                        <div class="views-contetnt">
                                            <h4 class="q-v-c">{{$forum->views}}</h4>
                                            <h5>Views</h5>
                                        </div>
                                    </div>
                                    <div class="views">
                                        <img src="/new-design/assets/image/question-answer/answers.png" alt="">
                                        <div class="views-contetnt">
                                            <h4>{{$forum->totalAnswerCount($forum->id)}}</h4>
                                            <h5>Answers</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4" onclick="forumAnswers('{{$forum->slug}}')" style="cursor:pointer;">
                            <div class="question-answer-card hover-card">
                                <h6>{{$forum->created_at->format('d M Y')}}</h6>
                                <h4>{{$forum->title}}</h4>
                                <p>{{Str::limit($forum->message, 150)}}</p>
                                <div class="card-footer">
                                    <div class="views">
                                        <img src="/new-design/assets/image/question-answer/views.png" alt="">
                                        <div class="views-contetnt">
                                            <h4 class="q-v-c">{{$forum->views}}</h4>
                                            <h5>Views</h5>
                                        </div>
                                    </div>
                                    <div class="views">
                                        <img src="/new-design/assets/image/question-answer/answers.png" alt="">
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
        <div class="row col-xs-10 col-12 col-sm-12 col-md-10 col-xl-10 p-a-ask-lawyer mb-5 m-auto">
            <div class="col-11 col-md-6 col-xl-6 p-a-ask-lawyer-form w-md-auto">
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
    </section> --}}



    <section class="registerLawyer_main">
        <div class="qanda-container">
            <div class="qanda-heading">
                <div><h1 class="d-blue qna-h1">Question & Answers</h1></div>
                <div><img src="../images/basicImages/qanda.png" alt=""/></div>
            </div>
            <div class="qanda-search">
                <div class="qanda-search-input">
                    <button class="addqn-btn" onclick="focusQnA()">+</button>
                    <input placeholder="Add question" id="qnaText">
                </div>
                <div class="qanda-search-filter">
                    <select id="qanda-sort-by" name="qanda-sort-by">
                        <option value="">Sort by</option>
                        <option value="123">123</option>
                        <option value="1234">1234</option>
                    </select>
                    <select id="qanda-per-page" name="qanda-per-page">
                        <option value="">Per Page</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
            <div class="qanda-search-results-view">
                <div class="qanda-filter">
                    <strong>8788 results for: </strong>
                    <button class="qna-tag">All Countries</button>
                    <button class="qna-tag">All areas of law</button>
                    <button class="qna-tag-icon">
                        <span class="material-symbols-rounded">
                            edit
                        </span>
                    </button>
                </div>
                <div class="qanda-view">
                    <p>Change the view: </p>
                    <button id="qna-view-icon-list" class="qna-view-icon" onclick="changeQnAView('list')">
                        <span class="material-symbols-rounded">
                            view_headline
                        </span>
                    </button>
                    <button id="qna-view-icon-grid" class="qna-view-icon qna-view-icon-active" onclick="changeQnAView('grid')">
                        <span class="material-symbols-rounded">
                            grid_view
                        </span>
                    </button>
                </div>
            </div>
            <!-- grid view -->
            <div class="qanda-posts-grid" id="qa-grid-view">
                <div class="qanda-post-item sponsored">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item sponsored">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qanda-post-item">
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                    <div>
                        <p class="d-blue hp-1">What are the consequences on the guarantor of a debtor in travel ban?</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="qanda-post-reviews">
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                visibility
                            </span> 
                            <div>
                                <p class="ha-1">10</p>
                                <p>Views</p>
                            </div>
                        </div>
                        <div class="qanda-post-views">
                            <span class="material-symbols-rounded qna-i1">
                                forum
                            </span>
                            <div>
                                <p class="ha-1">34</p>
                                <p>Answers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list view -->
            <div class="qanda-posts-list" id="qa-list-view">
                <div class="qanda-post-list-item sponsored">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item sponsored">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
                <div class="qanda-post-list-item">
                    <div>
                        <p class="d-blue hp-1">Termination of an employee with a false accusation of supporting another com....</p>
                        <p><strong>Q:</strong> My friend is asking me to be a guarantor for his travel ban. In this case, what are the legal formalities and documents required on behalf of the guarantor? Also, kindly enlighten us on...
                        </p>
                    </div>
                    <div class="" style="margin: 0 auto;">
                        <p class="d-blue">61</p>
                    </div>
                    <div class="qanda-post-date">
                        <p>Dec 6, 2022</p>
                    </div>
                </div>
            </div>
            <!-- pagination -->
            <div class="qna-pagination-section">
                <div class="qna-pagination" id="qna-pagination">
                    <button class="qna-pagination-btn">
                        <span class="material-symbols-rounded">
                            chevron_left
                        </span>
                    </button>
                    <button id="qna-pagination-btn1" class="qna-pagination-btn qna-pagination-active" onclick="QnAPage(1)">1</button>
                    <button id="qna-pagination-btn2" class="qna-pagination-btn" onclick="QnAPage(2)">2</button>
                    <button id="qna-pagination-btn3" class="qna-pagination-btn" onclick="QnAPage(3)">3</button>
                    <button id="qna-pagination-btn4" class="qna-pagination-btn" onclick="QnAPage(4)">4</button>
                    <button class="qna-pagination-btn">
                        <span class="material-symbols-rounded">
                            chevron_right
                        </span>
                    </button>
                </div>
            </div>
            <div class="contactnow-grid1">
                <div class="contactnow-item1">
                    <div class="contactnow-item1-heading">
                        <h3>Looking for something else?</h3>
                        <img src="../images/basicImages/contactnowQoute.png" alt=""/>
                    </div>
                    <div>
                        <textarea class="contactnow-item1-textarea" placeholder="Describe your legal issue here..."></textarea>
                    </div>
                    <div class="contactnow-item1-btns">
                        <button class="contactnow-item1-btn1" onclick="openPostaQn()"><span class="material-symbols-rounded">post_add</span>&nbsp; Post a question</button>
                        <button class="contactnow-item1-btn2"><span class="material-symbols-rounded">chat</span>&nbsp; Chat online</button>
                        <button class="contactnow-item1-btn3"><span class="material-symbols-rounded">business_center</span>&nbsp; Hire a lawyer</button>
                    </div>
                </div>
                <div class="contactnow-lawyers1">
                    <div class="contactnow-lawyers1-item1">
                        <img src="../images/basicImages/arundhati.png"/>
                        <h3>Arundhati</h3>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                    <div class="contactnow-lawyers1-item2">
                        <img src="../images/basicImages/rashidAli.png"/>
                        <h3>Rashid Ali</h3>
                        <p>UAE, Qatar</p>
                    </div>
                    <div class="contactnow-lawyers1-item3">
                        <img src="../images/basicImages/michelle.png"/>
                        <h3>Michelle</h3>
                        <p>UAE, Abu Dhabi</p>
                    </div>
                </div>
                <div class="contactnow-item2">
                    <h1 class="d-blue">Need a Lawyer?</h1>
                    <p>Hire lawyers online. Buy fixed-fee legal services or submit your request and get <strong>multiple competitive offers</strong> from qualified lawyers.</p>
                    <div class="contactnow-item2-btns">
                        <button class="contactnow-item2-btn1"><span class="material-symbols-rounded">filter_none</span>&nbsp; Buy services</button>
                        <button class="contactnow-item2-btn2"><span class="material-symbols-rounded">format_quote</span>&nbsp; Get quote</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        w3_open_lawyer()
    </script>
@endpush