@extends('common.home.layouts.app')
@section('content')
    <section class="registerLawyer_main">
        <div class="registerLawyer_content">
            <div>
                <h1>For <span class="green">Lawyers</span></h1>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
                <br>
                <p>Connect Legal is an online community for lawyers and clients to discuss various legal issues. Being the first online marketplace for lawyers in the Middle East, it leverages innovative digital technology to effectively connect lawyers from across the region with their prospective clients.</p>
            </div>
            <div>
                <form class="lawyerRegisterForm" action="{{route('lawyer.register')}}" method="post">
                    @csrf()
                    <h2>Law firm info</h2>
                    <div> 
                        <input type="text" placeholder="Law firm name" value="{{ old('lawfirm_name') }}" name="lawfirm_name">
                    </div>
                    <div>
                        <input type="url" placeholder="Law firm website URL" value="{{ old('lawfirm_website') }}" name="lawfirm_website">
                    </div>
                    <div>
                        <select id="lawyer-location" name="emirate">
                            <option value="UAE" {{ old('emirate') === 'UAE' ? 'selected' : '' }}>UAE</option>
                            <option value="Qatar" {{ old('emirate') === 'Qatar' ? 'selected' : '' }}>Qatar</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" placeholder="Your office address" name="office_address" value="{{ old('office_address') }}">
                    </div>
                    <h2>Contact info</h2>
                    <div>                    
                        <select id="lawyer-title" name="pref">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                        <input type="text" placeholder="Your name" value="{{ old('name') }}" name="name">
                    </div>
                    @error('name')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror
                    <div>
                        <input type="email" placeholder="Your email address" value="{{ old('email') }}" name="email">
                    </div>
                    @error('email')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror  
                    <div>
                        <select id="lawyer-number" name="lawyer-number">
                            <option value="+971">+971</option>
                        </select>
                        <input type="text" placeholder="Contact number" value="{{ old('contact_number') }}" name="contact_number">
                    </div>
                    @error('contact_number')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror  
                    <div>
                        <input type="text" placeholder="Your landline number" value="{{ old('landline') }}" name="landline">
                    </div>
                    <div>
                        <input type="text" placeholder="Your position (eg. Partner, associate, etc...)" value="{{ old('position') }}" name="position">
                    </div>
                    @error('position')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror 
                    <div>
                        <input type="text" placeholder="Your linkedin profile URL" value="{{ old('linkedin') }}" name="linkedin">
                    </div>
                    @error('linkedin')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror
                    <div>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    @error('password')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror
                    <div class="registerLawyer-submit-btn">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        debugger
        w3_open_lawyer()
    </script>
@endpush