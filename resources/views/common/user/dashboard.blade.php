@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section #dashboard >
        <div id="dashboard" class="px-3 py-5 dashboard font-Poppins-regular">
            <div class="row">
                <div class="col-11">
                    <div class="row">
                        <div class="col-6 col-md-3 py-2">
                            <div class="card card-darkgreen border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/assets/image/dashboard/appointments2.png" alt="question" class="appointment2">
                                    </div>
                                    <p class="h4 font-Poppins-Bold fw-bold darkgreen-text bold-text">2,349</p>
                                    <p class="font-Poppins-Bold fw-bold darkgreen-text bold-text">Booked Appointments</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 py-2">
                            <div class="card card-lightgreen border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/assets/image/dashboard/purchased.png" alt="question" class="appointment2">
                                    </div>
                                    <p class="h4 font-Poppins-regular fw-bold lightgreen-text bold-text">4.7/5</p>
                                    <p class="font-Poppins-regular fw-bold lightgreen-text bold-text">Service Purchased</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3  py-2">
                            <div class="card card-yellow border-0 h-100 card-border-radius">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/assets/image/dashboard/chat-request.png" alt="question" class="appointment2">
                                    </div>
                                    <p class="h4 font-Poppins-regular fw-bold text-black bold-text">4.7/5</p>
                                    <p class="font-Poppins-regular fw-bold text-black bold-text">Chat Request</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3  py-2">
                            <div class="card card-pink border-0 h-100 card-border-radius" style="background:#FFD6E5;">
                                <div class="card-body">
                                    <div class="text-end">
                                        <img src="/new-design/assets/image/dashboard/request-completed.png" alt="question" class="appointment2">
                                    </div>
                                    <p class="h4 font-Poppins-regular fw-bold text-black bold-text">4.7/5</p>
                                    <p class="font-Poppins-regular fw-bold w-100 bold-text" style="color:#6F3B4E;">Chat Request Completed</p>
                                    <!-- <small class="font-Poppins-regular" style="color:#6F3B4E;">See more ></small> -->
                                </div>
                            </div>
                        </div>

                        <!-- Chat Notifications -->
                        <div class="col-12 col-md-6  py-2">
                            <div class="card border-0 h-100 box-card-shadow card-border-radius">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="float-start fw-bold fs-4 col-md-8">Booked Appointments</div>
                                        <div class="float-end col-md-4">
                                            <img src="/new-design/assets/image/dashboard/appointments.png" alt="Appointment" style="float: right;width: 28px;">
                                        </div>
                                    </div>       
                                    @foreach($bookedAppointments as $k => $appointment)   
                                        <div class="row mt-4">
                                            <div class="float-start fw-bold fs-6 col-7 col-md-9" style="color:#3DC9A1;">{{$appointment->lawyer->name}}</div>
                                            <div class="float-end fw-bolder col-5 col-md-3">
                                                {{substr($appointment->zoom->start_date_time, 0, 10)}}
                                            </div>
                                        </div>                                   
                                        <div class="row mt-2 desc-slot">
                                            <div class="float-start fw-bold col-6 col-md-8">{{$appointment->daysSlot->slot->title}}</div>
                                            <div class="float-end col-6 col-md-4">
                                            {{strtoupper($appointment->daysSlot->slot_start_time)}} - {{strtoupper($appointment->daysSlot->slot_end_time)}}
                                            </div>
                                        </div> 
                                        <p>
                                            <a href="{{$appointment->zoom->start_url}}" style="color: #7B7A7A;font-size:12px;line-height:15px;">Click to join</a>
                                        </p>        
                                    @endforeach                          
                                </div>
                                <div class="row justify-content-center mb-3" style="color:#208C84;">
                                    <a href="" style="text-align: center;">View All Appointments</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6  py-2">
                            <div class="card border-0 h-100 box-card-shadow card-border-radius">
                                <div class="card-body">
                                    <p class="h4 fw-bold">Chat Notifications <img src="/new-design/assets/image/dashboard/Vector.png" alt="Vector" style="float: right;width: 28px;"></p>
                                    <div class="d-flex align-items-center card_select">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Rahmman Abdal</p>
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Incoming consultation Request Lorem Ipsum </p>
                                            <div class="text-secondary lh-base" style="font-size: 12px !important">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="notification text-end" style="font-size: 12px !important">
                                            <div class="lh-base" style="font-size: 12px !important">16/11/2022</div>
                                            <div class="d-flex justify-content-end" style="font-size: 12px !important">
                                                1:25 PM - 2:30 PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center card_select">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Rahmman Abdal</p>
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Incoming consultation Request Lorem Ipsum </p>
                                            <div class="text-secondary lh-base" style="font-size: 12px !important">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="notification text-end" style="font-size: 12px !important">
                                            <div class="lh-base" style="font-size: 12px !important">16/11/2022</div>
                                            <div class="d-flex justify-content-end" style="font-size: 12px !important">
                                                1:25 PM - 2:30 PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center card_select">
                                        <div class="card-profile">
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Rahmman Abdal</p>
                                            <p class="h6 fw-bold mb-0" style="font-size: 12px !important">Incoming consultation Request Lorem Ipsum </p>
                                            <div class="text-secondary lh-base" style="font-size: 12px !important">It is a long establishIt is a long
                                                established fact that a reader will be distracted by the readable....
                                            </div>
                                        </div>
                                        <div class="notification text-end" style="font-size: 12px !important">
                                            <div class="lh-base" style="font-size: 12px !important">16/11/2022</div>
                                            <div class="d-flex justify-content-end" style="font-size: 12px !important">
                                                1:25 PM - 2:30 PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lightgreen-text font-Poppins-regular fw-bold text-center mt-4">View All</div>
                                </div>
                            </div>
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