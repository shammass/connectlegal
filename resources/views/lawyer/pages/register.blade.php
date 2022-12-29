@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="for-lawyers-page" data-scroll-index="0">
        <div class="container-fluid">
            <div class="inner-content-wraper">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="for-lawyers-header">
                            <div class="header-content"> 
                                <h1>For<span>Lawyers</span></h1>
                                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.
                                <span class="line-break"></span>
                                Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.
                                <span class="line-break"></span>
                                
                                Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.
                                
                                <span class="line-break"></span>
                                
                                Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.
                                
                                <span class="line-break"></span>
                                
                                Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.
                                
                                <span class="line-break"></span>
                                
                                Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                            </div>
                            <div class="form-content">
                                <form action="{{route('lawyer.register')}}" method="post">
                                    @csrf()
                                    <div class="form-area-wrapper">
                                        <h4>Law firm info</h4>
                                        <div class="form-input-wrapper">
                                            <input type="text" placeholder="Law firm name" value="{{ old('lawfirm_name') }}" name="lawfirm_name">
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="url" placeholder="Law firm website URL" value="{{ old('lawfirm_website') }}" name="lawfirm_website">
                                        </div>
                                        <div class="form-input-wrapper">
                                            <select placeholder="Select Your Emirate" name="emirate">
                                                <option value="UAE" {{ old('emirate') === 'UAE' ? 'selected' : '' }}>UAE</option>
                                                <option value="Qatar" {{ old('emirate') === 'Qatar' ? 'selected' : '' }}>Qatar</option>
                                            </select>
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="text" placeholder="Your office address" name="office_address" value="{{ old('office_address') }}">
                                        </div>
                                    </div>
                                    <div class="form-area-wrapper">
                                        <h4>Contact info</h4>
                                        <div class="form-input-wrapper d-flex">
                                            <input class="sidekick-input" type="text" name="pref" placeholder="Mr.">
                                            <input class="hero-input" type="text" placeholder="Your name" value="{{ old('name') }}" name="name">
                                            @error('name')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="email" placeholder="Your email address" value="{{ old('email') }}" name="email">
                                            @error('email')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror  
                                        </div>
                                        <div class="form-input-wrapper d-flex">
                                            <input class="sidekick-input" type="text" placeholder="+971">
                                            <input class="hero-input" type="text" placeholder="Contact number" value="{{ old('contact_number') }}" name="contact_number">
                                            @error('contact_number')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror  
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="text" placeholder="Your landline number" value="{{ old('landline') }}" name="landline">
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="text" placeholder="Your position (eg. Partner, associate, etc...)" value="{{ old('position') }}" name="position">
                                            @error('position')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="text" placeholder="Your linkedin profile URL" value="{{ old('linkedin') }}" name="linkedin">
                                            @error('linkedin')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input type="password" placeholder="Password" name="password">
                                            @error('password')
                                                <span class="error-msg" style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-area-submit d-flex justify-content-end">
                                        <button class="form-submit btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection