@extends('common.home.layouts.app')
@section('content')
<section class="registerLawyer_main">
    <div class="howitworks_content">
        <div>
            <h1>How it works for <span class="green">clients</span></h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
            <br>
            <div>
                <details id="detailsTagHowItWorks">
                    <summary>
                        Prevents cartilage and joint breakdown 
                        <span class="material-symbols-rounded summary-icon summary-icon-add">
                            add
                        </span>
                        <span class="material-symbols-rounded summary-icon summary-icon-remove">
                            remove
                        </span>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
                </details>
                <details>
                    <summary>
                        Regulates your adrenal glands
                        <span class="material-symbols-rounded summary-icon summary-icon-add">
                            add
                        </span>
                        <span class="material-symbols-rounded summary-icon summary-icon-remove">
                            remove
                        </span>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
                </details>
                <details>
                    <summary>
                        Boosts your immune systems functionlity
                        <span class="material-symbols-rounded summary-icon summary-icon-add">
                            add
                        </span>
                        <span class="material-symbols-rounded summary-icon summary-icon-remove">
                            remove
                        </span>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
                </details>
            </div>
            <div class="howItworksFormDiv">
                <form class="lawyerRegisterForm" action="{{route('store.contact-us')}}" method="post">
                    @csrf()
                    <p style="font-size: 30px;">Contact us</p>
                    <div>
                        <input
                        placeholder="Your name"
                        type="text" 
                        name="contact_name" 
                        value="{{ old('contact_name') }}"
                        >
                    </div>
                    @error('contact_name')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror 
                    <div>
                        <input
                        placeholder="Your email address"
                        type="email" 
                        name="contact_email" 
                        value="{{ old('contact_email') }}"
                        required
                        >
                    </div>
                    @error('contact_email')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror 
                    <div>
                        <select id="client-number" name="client-number">
                            <option value="+971">+971</option>
                        </select>
                        <input
                            placeholder="Contact number"
                            required
                            type="tel" 
                            name="contact" 
                            value="{{ old('contact') }}"
                        >
                    </div>
                    <div>
                        <select id="lawyer-location" name="contact_subject">
                            <option value="">Subject</option>
                            <option value="Customer Support" {{ old('contact_subject') === 'Customer Support' ? 'selected' : '' }}>Customer Support</option>
                            <option value="General Enquiry" {{ old('contact_subject') === 'General Enquiry' ? 'selected' : '' }}>General Enquiry</option>
                            <option value="Legal Question" {{ old('contact_subject') === 'Legal Question' ? 'selected' : '' }}>Legal Question</option>
                        </select>
                    </div>
                    @error('contact_subject')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror 
                    <div>
                        <textarea class="howitworks-textarea" name="contact_message" placeholder="Your Message"></textarea>
                    </div>
                    @error('contact_message')
                        <span class="error-msg" style="color:red;">{{ $message }}</span>
                    @enderror 
                    <div class="registerLawyer-submit-btn">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="howItWorks-item2">
            <div class="howItWorks-item2-item1">
                <div style="margin-left: 4rem;">
                    <img style="width: 100%;" src="/images/basicImages/howitworks.png" alt=""/>
                    <a onclick="howitworksPopup()" class="playVideo-howitworks">
                        <span class="material-symbols-rounded playVideo-btn">
                            play_arrow
                        </span>
                    </a>
                </div>
            </div>
            <div class="howItWorks-item2-item2">
                <div style="margin-left: 4rem;">
                    <div class="howItWorks-item2-item2-box">
                        <div class="howItWorks-item2-item2-h">Client Testimonials</div>
                        <ul>
                            <li>
                                <div>
                                    <span class="material-symbols-rounded green circleBorder">
                                        format_quote
                                    </span>
                                </div>
                                <div>
                                    <h3 class="green">Rahman Abdal</h3>
                                    <p style="font-style: italic">Fast, efficient and user friendly</p>
                                </div>
                                <div>
                                    12 Oct 2022
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span class="material-symbols-rounded green circleBorder">
                                        format_quote
                                    </span>
                                </div>
                                <div>
                                    <h3 class="green">Rahman Abdal</h3>
                                    <p style="font-style: italic">Fast, efficient and user friendly</p>
                                </div>
                                <div>
                                    12 Oct 2022
                                </div>
                            </li>
                        </ul>
                    </div>
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