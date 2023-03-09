@extends('common.home.layouts.app')
@section('content')


<section class="practice-area bg-grad-2">
    <div class="container">
        <div class="terms-step" id="form">
            <div class="row">
                <div class="col-lg-8">
                    <div class="background">
                        <div class="icon">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/new-design/assets/images/fevicon.png" class="icn-1">
                                    <div class="txt-icn">
                                        <h4 class="l-txt font-tal">The best Legal Portal in UAE</h4>
                                        <p class="l-a">Be found. Register with us and get new leads every day. Adding more lorem
                                            ipsum and will be remplaced for the final text.</p>
        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="/new-design/assets/images/login page/Group 394 (1).png" class="grp">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="txt-icn">
                            <h4 class="l-txt">The best Legal
                                Portal in UAE</h4>
                            <p class="l-a">Be found. Register with us and get new leads every day. Adding more lorem
                                ipsum and will be remplaced for the final text.</p>

                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="Login" id="login">
                        <h1 class="lgn-pg">Log in</h1>
                        <p class="ph">Alredy haven’t account? <span class="rgstr" onclick="registerAs()" style="cursor:pointer;">Register now</span></p>
                        <form action="{{route('login')}}" method="post">
                            @csrf()
                            <div class="form-1 mt-md-5 mt-2 position-relative" id="login-id">
                                <label class="hed mt-3 mb-3" >Email Address</label>
                                <input type="text" name="email" class="f-input form-control" placeholder="email@domain.com">
                                @error('email')
                                    <div class="text-red-500" style="color:red;">{{ $message }}</div>
                                @enderror
                                <label class="hed mt-3 mb-3">Password</label>
                                <div class="d-flex">
                                    <input type="password" name="password"  class="f-input form-control" id="password-field" placeholder=".........">
                                    <i class="fa-solid fa-eye view-icon" id="toggle-password" style="top: 44%!important;"></i>
                                </div>
                                @error('password')
                                    <div class="text-red-500" style="color:red;">{{ $message }}</div>
                                @enderror
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}" ></div>
                                @error('g-recaptcha-response')
                                    <div class="text-red-500" style="color:red;">{{ $message }}</div>
                                @enderror                                
                                <p class="f-p mt-4 mb-4">Forgot Password?</p>
                                <button type="submit" class="btn-lgn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')
    <script>
        var passwordField = document.getElementById("password-field");
        var togglePassword = document.getElementById("toggle-password");

        togglePassword.addEventListener("click", function() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });

        function registerAs() {
            window.location.href = "/register-as";
        }
    </script>
@endpush