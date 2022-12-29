<section class="home-banner-section" data-scroll-index="0">
    <div class="container-fluid">
        <div class="inner-content-wraper home-banner">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="home-banner-left-section">
                        <img src="/new-design/assets/image/home/home-connect-legal .png" alt="">
                        <h1>
                            <span>Get</span> Online Legal Support <span>Services</span>
                        </h1>
                        <p>This Platform Provides an opportunity to Connect Lawyers or Legal Consultants with those who are seeking for Legal Advice in UAE</p>
                        <div class="contact-now-btn">
                            <button type="btn" class="btn contact-now-button" data-bs-target="#free-advice" data-bs-toggle="modal">Type your legal queries
                                <span>
                                    <img src="/new-design/assets/image/home/left-white-arrow.png" alt="">
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="home-banner-right-section">
                        <div class="find-lawyer-card hero-card1">
                            <img src="/new-design/assets/image/home/Vector (17).png" alt="">
                            <div class="find-lawyer-card-content">
                                <h5>Find a Lawyer</h5>
                                <p>Find the right lawyers for your legal needs.</p>
                            </div>
                        </div>
                        <div class="find-lawyer-card hero-card2">
                            <img src="/new-design/assets/image/home/Vector (18).png" alt="">
                            <div class="find-lawyer-card-content">
                                <a href="{{route('hire-a-lawyer')}}">
                                    <h5>Hire a Lawyer</h5>
                                    <p>Select from the list of services offered by our lawyers.</p>
                                </a>
                            </div>
                        </div>
                        <div class="find-lawyer-card hero-card3">
                            <img src="/new-design/assets/image/home/Vector (19).png" alt="">
                            <div class="find-lawyer-card-content">
                                <h5>Book an Appointment</h5>
                                <p>Engage with our experienced lawyers and get your required assistance.</p>
                            </div>
                        </div>
                        <div class="find-lawyer-card hero-card4">
                            <img src="/new-design/assets/image/home/Vector (20).png" alt="">
                            <div class="find-lawyer-card-content">
                                <h5>Legal Blogs and Articles</h5>
                                <p>Get access to our highly informative legal blogs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="free-advice" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="container mt-2 r-c">
                    <div class="modal-body advice-popup-body" style="margin-left: -4%;">
                        <div class="row col-xs-10 col-12 col-sm-12 col-md-10 col-xl-12 ask-lawyer-main mb-5 p-5 modal-popup">
                            <div class="col-12 col-md-6 col-xl-7 ask-lawyer-form w-md-auto">
                                <!-- <span class="p-a-l-f-s-else"><img src="/new-design/assets/image/practice-area/hangout.png" alt="" class="p-a-hangout-img"></span> -->
                                <div class="row p-1">
                                    <div class="col-10 col-sm-10 looking-else">Looking for something else? </div>
                                    <div class="col-2 col-sm-2"><img src="/new-design/assets/image/practice-area/hangout.png" alt="" class="hangout-img"></div>
                                </div>
                                <form action="">
                                    @csrf()
                                    <textarea name="" class="form-control p-a-textarea" id="" cols="3" rows="6" placeholder="Describe your legal issues here"></textarea>
                                </form>
                                <div class="row p-2">
                                    <div class="col-4 col-md-4 d-flex justify-content-evenly bg-white">
                                        <span class="advice-txt"><img src="/new-design/assets/image/practice-area/question.png" alt="" class="advice-btns"> Post a question</span>
                                    </div>    
                                    <div class="col-4 col-md-4 d-flex justify-content-evenly bg-white">
                                        <span class="advice-txt"><img src="/new-design/assets/image/practice-area/chat.png" alt="" class="advice-btns"> Chat Online</span>
                                    </div>    
                                    <div class="col-4 col-md-4 d-flex justify-content-evenly bg-gray">
                                        <span class="advice-txt"><img src="/new-design/assets/image/practice-area/hire.png" alt="" class="advice-btns"> Hire a Lawyer</span>
                                    </div>    
                                </div>            
                            </div>
                            <div class="col-12 col-md-6 col-xl-5 lawyers-section">
                                <div class="row d-flex col-5 col-xl-11">
                                    <div class="lawyers popup-lawyers">
                                        <img src="/new-design/assets/image/home/areyou-lawyer2.png" alt="" class="p-a-lawyer1">
                                        <span class="p-a-l-name1">Arundati</span>
                                        <small class="p-a-l-loc1">UAE, Abu Dhabi</small>
                                    </div>
                                    <div class="lawyers">
                                        <img src="/new-design/assets/image/home/areyou-lawyer3.png" alt="" class="p-a-lawyer1">
                                        <span class="p-a-l-name1">Rashid Ali</span>
                                        <small class="p-a-l-loc1">UAE, Qatar</small>
                                    </div>
                                    <div class="lawyers lawyer-3">
                                        <img src="/new-design/assets/image/home/areyou-lawyer3.png" alt="" class="p-a-lawyer1">
                                        <span class="p-a-l-name1">Michelle</span>
                                        <small class="p-a-l-loc1">UAE, Abu Dhabi</small>
                                    </div>
                                </div>
                                <div class="row d-flex col-xl-12 single-lawyer mt-2 m-auto">   
                                    <div class="col-xl-8 buy-quote-sec b-q-sec-popup">
                                        <span class="need-lawyer">Need a Lawyer?</span>
                                        <p class="need-lawyer-descr">Hire lawyers online. Buy fixed-fee legal services or submit your request and get multiple competitive offers from qualified lawyers.</p>
                                        <div class="row mt-3">
                                            <span class="col-6 col-md-6"><img src="/new-design/assets/image/practice-area/buy.png" alt="" class="buy-img buy-quote"> <span class="">Buy Service</span></span>
                                            <span class="col-6 col-md-6"><img src="/new-design/assets/image/practice-area/quote.png" alt="" class="quote-img buy-quote"> <span class="">Get Quote</span></span>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>