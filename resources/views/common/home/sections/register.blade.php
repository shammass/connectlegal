<section class="why-register">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pd_sm_0">
                <div class="whyregister-card">
                    <h1>Why Register?</h1>
                    <p>Keep the history of all your chats, questions and
                        callback requests. Adding a lorem ipsum here.</p>
                    <img src="new-design/assets/image/home/left-arrow-btn.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="whyregister-right-card">
                    <div class="right-card-img-content">
                        <img src="new-design/assets/image/home/register1.png" alt="">
                        <p>Keep the history of all your chats, questions and callback requests.
                        </p>
                    </div>

                    <div class="right-card-img-content">
                        <img src="new-design/assets/image/home/register2.png" alt="">
                        <p>Track your interactions with lawyers and recieve notifications.
                        </p>
                    </div>
                    <div class="right-card-img-content">
                        <img src="new-design/assets/image/home/register3.png" alt="">
                        <p>Book an appointment with lawyers to follow up on your queries
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-started-section">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="get-started-row">
                        <div class="row ">
                            <div class="col-md-6 order_sm2 pd_sm_0">
                                <div class="are-you-lawyer">
                                    <img class="are-you-lawyer-img" src="new-design/assets/image/home/Group 170.png"
                                        alt="">

                                    <img class="qoute-img" src="new-design/assets/image/home/hangouts.png" alt="">
                                    <div class="are-you-lawyer-content">
                                        <h1>Are you a Lawyer?</h1>
                                        <p>Be found! Register with us and get new leads every day and Enhance your client base.</p>
                                        <div class="contact-now-btn">
                                            <button type="btn" class="btn contact-now-button">Register As Lawyer
                                                <span><img src="new-design/assets/image/home/left-white-arrow.png"
                                                        alt=""></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order_sm1 pd_sm_0">
                                <div class="areyou-lawyer-card-img">
                                    <img class="are-you-lawyer-img-sm" src="new-design/assets/image/home/Group 170.png"
                                        alt="">
                                    <img class="qoute-img-sm" src="new-design/assets/image/home/Ellipse 61.png" alt="">
                                    <img class="right-img" src="new-design/assets/image/home/Vector 2 (1).png" alt="">
                                    <div class="areyou-lawyer-card lawyer-card1">
                                        <div class="areyou-lawyer-card-body">
                                            <img src="new-design/assets/image/home/areyou-lawyer2.png" alt="">
                                            <h4>Arundhati</h4>
                                            <h5>UAE, Abu Dhabi</h5>
                                        </div>
                                    </div>
                                    <div class="areyou-lawyer-card lawyer-card2">
                                        <img class="quote-img1" src="new-design/assets/image/home/Vector (10).png" alt="">
                                        <div class="areyou-lawyer-card-body">
                                            <img src="new-design/assets/image/home/areyou-lawyer3.png" alt="">
                                            <h4>Rashid Ali</h4>
                                            <h5>UAE, Qatar</h5>
                                        </div>
                                    </div>
                                    <div class="areyou-lawyer-card lawyer-card3">
                                        <img class="call-img" src="new-design/assets/image/home/call.png" alt="">
                                        <div class="areyou-lawyer-card-body">
                                            <img src="new-design/assets/image/home/areyou-lawyer1.png" alt="">
                                            <h4>Arundhati</h4>
                                            <h5>UAE, Abu Dhabi</h5>
                                        </div>
                                        <img class="like-img" src="new-design/assets/image/home/thumbsup.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="getstarted-section">
                        <h1>Get Started</h1>
                        <h5>Alredy have account?<button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign in</button></h5>
                        <form action="{{route('user.register')}}" method="post">
                            @csrf()
                            <div class="">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name" placeholder="Enter your name">
                            </div>
                            <div class="">
                                <label for="exampleInputPassword1" class="form-label">Email Address</label>
                                <input type="password" class="form-control" name="email" id="exampleInputPassword1"
                                    placeholder="email@domain.com">
                            </div>
                            <div class="">
                                <label class="form-check-label" for="exampleCheck1">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleCheck1">
                            </div>
                            {{--<div class="forgot-password-btn">
                                <button type="btn">Forgot password?</button>
                            </div> --}}
                            <div class="sign-up">
                                <button class="sign-up-btn" type="submit" class="btn btn-primary">Sign
                                    Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>