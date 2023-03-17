<section class="hire-class" id="coverpading">
                <div class="container">
                    <div class="need-lawyer">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="eles">
                                    <div class="row">
                                        <div class="col-10">
                                            <h4>Looking for something else?</h4>
                                        </div>
                                        <div class="col-2 m-p-0">
                                            <img src="/new-design/assets/images/vector-8.png" alt="vector-8" class="vector-8">
                                        </div>
                                    </div>

                                    <div class="links-icons">
                                        <textarea placeholder="Describe your legal issue here..."></textarea>
                                        <div class="links">
                                            <a href="#"><i class="fa-regular fa-face-smile"></i></a>
                                            <a href="#"><i class="fa-solid fa-paperclip"></i></a>
                                        </div>
                                    </div>

                                    <ul class="post-1">
                                        <li  data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><img src="/new-design/assets/images/post-3.png" alt="post-3"> Post a question</a>
                                        </li>
                                        @if(auth()->user())
                                            <li data-bs-toggle="modal" data-bs-target="#chat-request-modal"><a href="#"><img src="/new-design/assets/images/post-2.png" alt="post-2"> Chat online</a></li>
                                        @else 
                                            <li><a href="{{route('user.login')}}"><img src="/new-design/assets/images/post-2.png" alt="post-2"> Chat online</a></li>
                                        @endif
                                        <li><a href="{{route('hire-a-lawyer')}}"><img src="/new-design/assets/images/post-1.png" alt="post-1"> Lawyer Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-xl-0 mt-3">
                                <div class="abu">
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3 col-4 m-p-0">
                                            <div class="d-flex-right dn">
                                                <div class="cards needs">
                                                    <img src="/new-design/assets/images/one.png" alt="Group">
                                                    <p class="name-uaser">Arundhati</p>
                                                    <p class="short-mes">UAE, Abu Dhabi</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-4 m-p-0">
                                            <div class="d-flex-right">
                                                <div class="cards needs">
                                                    <img src="/new-design/assets/images/Group.png" alt="Group">
                                                    <p class="name-uaser">Rashid Ali</p>
                                                    <p class="short-mes">UAE, Qatar</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-4 m-p-0">
                                            <div class="d-flex-right">
                                                <div class="cards needs">
                                                    <img src="/new-design/assets/images/onetwo.png" alt="Group">
                                                    <p class="name-uaser">Michelle</p>
                                                    <p class="short-mes">UAE, Abu Dhabi</p>
                                                </div>

                                                <div class="cards needs alg">
                                                    <img src="/new-design/assets/images/one.png" alt="Group">
                                                    <p class="name-uaser">Arundhati</p>
                                                    <p class="short-mes">UAE, Abu Dhabi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="Hire">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h5>Need a Lawyer?</h5>
                                                <p>Hire lawyers online. Buy fixed-fee legal services or submit your
                                                    request
                                                    and get <b>multiple competitive offers</b> from qualified lawyers.
                                                </p>
                                            </div>
                                        </div>
                                        <ul class="post-1 text-left">
                                            <li><a href="#"><img src="/new-design/assets/images/post-3.png" alt="post-3"> Post a
                                                    question</a>
                                            </li>
                                            @if(auth()->user())
                                                <li data-bs-toggle="modal" data-bs-target="#chat-request-modal"><a href="#"><img src="/new-design/assets/images/post-2.png" alt="post-2"> Chat online</a></li>
                                            @else 
                                                <li><a href="{{route('user.login')}}"><img src="/new-design/assets/images/post-2.png" alt="post-2"> Chat online</a></li>
                                            @endif
                                            <li><a href="{{route('hire-a-lawyer')}}"><img src="/new-design/assets/images/post-2.png" alt="post-2"> Lawyer Services</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal fade popuphome" id="chat-request-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="puopclass">
                                <form action="{{route('send.chat.request')}}" method="post" onsubmit="return validateChatRqstForm(event)">
                                    @csrf()
                                    <h3 class="text-center" data-bs-toggle="modal" data-bs-target="#lowyar1">Chat Request</h3>
                                    <input type="email" readonly name="" id="" placeholder="Email Address" class="form-control mb-3" value="{{auth()->user() ? auth()->user()->email : null}}">
                                    <textarea class="form-control chat-rqst-form" placeholder="Add your query" name="description" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                                    <div class="text-end mt-lg-5 mt-3">
                                        <button type="submit" class="btn btn-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade popuphome" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="puopclass">
                                <h3 class="text-center">Submit your enquiry</h3>
                                <form action="{{route('store.forum')}}" method="post" onsubmit="return validateForumForm(event)">
                                    @csrf()
                                    <input type="text" name="qa_name" id="qa-name" placeholder="Name" value="{{auth()->user() ? auth()->user()->name : ''}}" class="form-control mb-2">
                                    @error('qa_name')
                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                    @enderror    
                                    <input type="email" name="qa_email" id="qa-email" placeholder="Email Address" value="{{auth()->user() ? auth()->user()->email : ''}}" class="form-control mb-3">
                                    @error('qa_email')
                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                    @enderror    
                                    <div class="input-group mb-3" id="qa-mobile-div">
                                        <span class="input-group-text" id="basic-addon1"> <img src="/new-design/assets/images/phone.png" alt=""> </span>
                                        <input type="text" class="form-control left-bordr" name="mobile" id="qa-mobile" placeholder="Phone Number" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                    </div>
                                    @error('mobile')
                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                    @enderror    
                                    <textarea class="form-control popup-descr qa-msg" name="message" placeholder="Your message"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                        @error('message')
                                            <span class="error-msg" style="color:red;">{{ $message }}</span>
                                        @enderror    
                                    <div class="text-end mt-lg-5 mt-3">
                                        <button type="submit" class="btn btn-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>