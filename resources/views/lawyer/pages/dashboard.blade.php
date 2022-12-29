@extends('lawyer.home.layouts.app')
@section('content')
    <section #dashboard >
        <div id="dashboard" class="px-3 py-5 dashboard font-Poppins-regular">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-4 py-2">
                            <div class="card card-darkgreen border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/lawyer/assets/image/dashboard/question.png" alt="question" class="w-auto">
                                    </div>
                                    <p class="h4 font-Poppins-regular fw-bold darkgreen-text">2,349</p>
                                    <span class="font-Poppins-regular fw-bold darkgreen-text"><strong>Questions Answered</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  py-2">
                            <div class="card card-lightgreen border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/lawyer/assets/image/dashboard/heart.png" alt="question" class="w-auto">
                                    </div>
                                    <p class="h4 font-Poppins-regular fw-bold lightgreen-text">4.7/5</p>
                                    <p class="font-Poppins-regular fw-bold lightgreen-text">My Rating</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  py-2">
                            <div class=" card card-yellow border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/lawyer/assets/image/dashboard/info.png" alt="question" class="w-auto">
                                    </div>
                                    <p class="font-Poppins-regular fw-bold w-50 ">Tips from
                                        Connect Legal</p>
                                    <small class="font-Poppins-regular">See more ></small>
                                </div>
                            </div>
                        </div>
                        <!-- Chat Notifications -->
                        <div class="col-8  py-2">
                            <div class="card border-0 h-100 box-card-shadow card-border-radius">
                                <div class="card-body">
                                    <p class="h4 fw-bold">Chat Notifications</p>
                                    <div class="d-flex align-items-center notification_count">
                                        <span class="notify_badge">3</span>
                                        <img src="/new-design/lawyer/assets/image/home/Group 8.png" alt="" class="avatar">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0">Rahmman Abdal</p>
                                            <div class="text-secondary lh-base">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="chat-action text-end">
                                            <div class="lh-base">Today 1:25 PM</div>
                                            <div class="d-flex justify-content-end">
                                                <img src="/new-design/lawyer/assets/image/dashboard/greenTick.png" alt="" class="me-2">
                                                <img src="/new-design/lawyer/assets/image/dashboard/redDelete.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center notification_count">
                                        <span class="notify_badge">3</span>
                                        <img src="/new-design/lawyer/assets/image/home/Group 8.png" alt="" class="avatar">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0">Rahmman Abdal</p>
                                            <div class="text-secondary lh-base">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="chat-action text-end">
                                            <div class="lh-base">Today 1:25 PM</div>
                                            <div class="d-flex justify-content-end">
                                                <img src="/new-design/lawyer/assets/image/dashboard/greyTick.png" alt="" class="me-2">
                                                <img src="/new-design/lawyer/assets/image/dashboard/greyDelete.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="/new-design/lawyer/assets/image/home/Group 8.png" alt="" class="avatar">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0">Rahmman Abdal</p>
                                            <div class="text-secondary lh-base">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="chat-action text-end">
                                            <div class="lh-base">Today 1:25 PM</div>
                                            <div class="d-flex justify-content-end">
                                                <img src="/new-design/lawyer/assets/image/dashboard/greyTick.png" alt="" class="me-2">
                                                <img src="/new-design/lawyer/assets/image/dashboard/greyDelete.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lightgreen-text font-Poppins-regular fw-bold text-center mt-4">View All</div>
                                </div>
                            </div>
                        </div>
                        <!--New Questions  -->
                        <div class="col-4 py-2">
                            <div class="card border-0 h-100 box-card-shadow question-card card-border-radius">
                                <div class="card-body" style="font-size: smaller;">
                                    <p class="h4 fw-bold text-white font-Poppins-regular">New Questions</p>
                                    <div class="d-flex text-white lh-base font-Poppins-regular mb-2">
                                        <div class="pe-2">01</div>
                                        <div>It is a long establishIt is a long established fact that a reader will be
                                            distracted?
                                        </div>
                                    </div>
                                    <div class="d-flex text-white lh-base font-Poppins-regular mb-2">
                                        <div class="pe-2">02</div>
                                        <div>It is a long establishIt is a long established fact that a reader will be
                                            distracted?
                                        </div>
                                    </div>
                                    <div class="d-flex text-white lh-base font-Poppins-regular mb-2">
                                        <div class="pe-2">03</div>
                                        <div>It is a long establishIt is a long established fact that a reader will be
                                            distracted?
                                        </div>
                                    </div>
                                    <div class="d-flex text-white lh-base font-Poppins-regular mb-2">
                                        <div class="pe-2">04</div>
                                        <div>It is a long establishIt is a long established fact that a reader will be
                                            distracted?
                                        </div>
                                    </div>
                                    <div class="d-flex text-white lh-base font-Poppins-regular mb-2">
                                        <div class="pe-2">05</div>
                                        <div>It is a long establishIt is a long established fact that a reader will be
                                            distracted?
                                        </div>
                                    </div>
                                    <div class="text-white font-Poppins-regular fw-bold text-center mt-4">View All</div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your To-Do List -->
                <div class="col-3 py-2">
                    <div class="card border-0 h-100 box-card-shadow card-border-radius">
                        <div class="card-body">
                            <p class="h4 fw-bold">Your To-Do List</p>
                            <div class="d-flex align-items-center my-3">
                                <div class="urgent todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/urgent.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="message todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/message.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="copy todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/copy.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="meeting todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/meeting.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3 ">
                                <div class="message todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/message.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="email todo me-3">
                                    <img src="/new-design/lawyer/assets/image/dashboard/email.png" alt="meesage" class="w-auto">
                                </div>
                                <div>
                                    <p class="h6 fw-bold">Send Message to Devi</p>
                                    <div class="text-secondary">March 06 at 9:00 am</div>
                                </div>
                            </div>
                            <div class="lightgreen-text font-Poppins-regular fw-bold text-center mt-4">View All</div>


                        </div>
                    </div>
                </div>
                <!-- RECENT ARTICLES slider -->
                <div class="col-8 py-2">
                    <div class="w3-content w3-display-container position-relative box-card-shadow border-0  card-border-radius card pe-3">

                        <div class="mySlides " style="width: 100%;">
                            <div class="d-flex">
                                <img src="/new-design/lawyer/assets/image/dashboard/RectangleCopy.png" class="image-slide">
                                <div class="mx-3 position-relative py-3">
                                    <div style="color:#3DC9A1" class="">RECENT ARTICLES</div>
                                    <p class="h6 fw-bold my-3">VISA Inmigration to Dubai, UAE</p>
                                    <div class="text-secondary lh-base">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English.

                                    </div>
                                    <div class="d-flex justify-content-between text-secondary w-100"
                                        style="position:absolute;bottom:20px">
                                        <div><b>Autor:</b> Alejandro M.</div>
                                        <div> <b>Created: </b> 12 Dic 2022 - 12:56 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides card-border-radius" style="width: 100%;">
                            <div class="d-flex">
                                <img src="/new-design/lawyer/assets/image/dashboard/RectangleUrgent.png" class="image-slide">
                                <div class="mx-3 position-relative py-3">
                                    <div style="color:#3DC9A1" class="">RECENT ARTICLES</div>
                                    <p class="h6 fw-bold my-3">VISA Inmigration to Dubai, UAE</p>
                                    <div class="text-secondary lh-base">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English.

                                    </div>
                                    <div class="d-flex justify-content-between text-secondary w-100"
                                        style="position:absolute;bottom:20px">
                                        <div><b>Autor:</b> Alejandro M.</div>
                                        <div> <b>Created: </b> 12 Dic 2022 - 12:56 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides " style="width: 100%;">
                            <div class="d-flex">
                                <img src="/new-design/lawyer/assets/image/dashboard/RectangleEmail.png" class="image-slide">
                                <div class="mx-3 position-relative py-3">
                                    <div style="color:#3DC9A1" class="">RECENT ARTICLES</div>
                                    <p class="h6 fw-bold my-3">VISA Inmigration to Dubai, UAE</p>
                                    <div class="text-secondary lh-base">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English.

                                    </div>
                                    <div class="d-flex justify-content-between text-secondary w-100"
                                        style="position:absolute;bottom:20px">
                                        <div><b>Autor:</b> Alejandro M.</div>
                                        <div> <b>Created: </b> 12 Dic 2022 - 12:56 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle slider-right">
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white my-1"
                                onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white my-1"
                                onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white my-1"
                                onclick="currentDiv(3)"></span>
                        </div>
                    </div>
                </div>
                <!-- Write your own article -->
                <div class="col-3 py-2">
                    <div class="card border-0 h-100 card-border-radius" style="background-color:#3DC9A1">
                        <div class="card-body">
                            <div class="editArticle">
                                <img src="/new-design/lawyer/assets/image/dashboard/edit.png" alt="" class="w-auto">
                            </div>
                            <p class="h4 fw-bold">Write your own article</p>
                            <p class="text-white">Write one article</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider scripts -->
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = x.length }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-white", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-white";
            }
        </script>
    </section>
@endsection
@push('script')
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>
@endpush