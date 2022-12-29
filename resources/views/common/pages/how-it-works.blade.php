@extends('common.home.layouts.app')
@section('content')
<div class="fix-height"></div>
<section class="how-it-works">
    <div class="container" style="margin-bottom: 10%;">
        <div class="row">
            <div class="col-12 h-i-w-main">
                <div class="col-5">
                    <h2 class="how-it-works-header">How it works for <span style="color: #208C84;">clients</span></h2>
                    <p class="how-it-works-p">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation
                    </p>  
                    <div class="h-i-w-coll-sec">
                        <button class="accordion">Section 1</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="accordion">Section 2</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="accordion">Section 3</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="how-it-works-contactus">
                        <h4 class="h-i-w-contactus-text">Contact us</h4>
                        <form action="">
                            @csrf()
                            <div class="form-area-wrapper">
                                <div class="form-input-wrapper" style="margin-top: 16%;">
                                    <input type="text" placeholder="Your Name" value="{{ old('lawfirm_name') }}" name="lawfirm_name" class="h-i-w-input-box">
                                </div>
                                <div class="form-input-wrapper">
                                    <input type="text" placeholder="Your Email Address" value="{{ old('lawfirm_name') }}" name="lawfirm_name" class="h-i-w-input-box">
                                </div>
                                <div class="form-input-wrapper d-flex">
                                    <input class="h-i-w-input-box h-i-w-small-input" type="text" placeholder="+971" style="width: 111px;">
                                    <input class="h-i-w-contact-input" type="text" placeholder="Contact number" value="{{ old('contact_number') }}" name="contact_number">
                                    @error('contact_number')
                                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                                    @enderror  
                                </div>
                                <div class="form-input-wrapper">
                                    <input type="text" placeholder="Subject" value="{{ old('lawfirm_name') }}" name="lawfirm_name" class="h-i-w-input-box">
                                </div>
                                <div class="form-input-wrapper">
                                    <textarea name="" class="h-i-w-input-box" id="" cols="30" rows="5" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="h-i-w-submit-btn" id="h-i-w-submit-btn">Submit</button>
                        </form>
                    </div>
                </div>    
                <div class="col-5 h-i-w-man-section">
                    <div onclick="showPopup()" class="h-i-w-play-div">
                        <img src="/new-design/assets/image/howItWorks/how-it-works-play.png" alt="" class="how-it-works-play">
                    </div>
                    <img src="/new-design/assets/image/howItWorks/how-it-works-man.png" alt="" class="how-it-works-man">    
                    <div class="h-i-w-client-testimonials">
                        <span class="h-i-w-c-t-text">Client Testimonials</span>
                        <hr>
                        <div>
                            <img src="/new-design/assets/image/howItWorks/how-it-works-testimonials.png" alt="" class="h-i-w-c-t-icon">
                            <span class="h-i-w-c-t-user-name">Rahman Abdul</span>
                            <span class="h-i-w-c-t-date">12 Oct 2022</span>
                            <span class="h-i-w-c-t-msg">Fast, efficient and user friendly</span>
                        </div>
                        <hr>
                        <div>
                            <img src="/new-design/assets/image/howItWorks/how-it-works-testimonials.png" alt="" class="h-i-w-c-t-icon">
                            <span class="h-i-w-c-t-user-name">Rahman Abdul</span>
                            <span class="h-i-w-c-t-date">12 Oct 2022</span>
                            <span class="h-i-w-c-t-msg">Fast, efficient and user friendly</span>
                        </div>
                    </div>  
                </div>            
            </div>            
        </div>
    </div>
    <div class="modal fade" id="howItWorksPopup" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 9999;">
        <div class="modal-dialog modal-md modal-lg modal-xl">
            <div class="modal-content">            
                <div class="modal-body">
                    <iframe width="100%" height="349" src="https://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')
    <script>
        function showPopup() {
            $('#howItWorksPopup').modal('show');
        }

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active-box");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                } 
            });
        }
    </script>
@endpush