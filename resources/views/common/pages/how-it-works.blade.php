@extends('common.home.layouts.app')
@section('content')
<section class="registerLawyer_main">
        <div class="howitworks_content">
            <div>
                <h1 class="howitworks-h1">How it works for <span class="green">clients</span></h1>
                <br>
                <p class="howitworks-p1">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
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
                    <form class="lawyerRegisterForm">
                        <p class="lawyerRegisterForm-p">Contact us</p>
                        <br>
                        <div>
                            <input
                            placeholder="Your name"
                            required
                            >
                        </div>
                        <div>
                            <input
                            placeholder="Your email address"
                            required
                            >
                        </div>
                        <div>
                            <input
                            placeholder="Your name"
                            required
                            >
                        </div>
                        <div>
                            <select id="client-number" name="client-number">
                                <option value="+000">+000</option>
                                <option value="+971">+971</option>
                                <option value="+91">+91</option>
                            </select>
                            <input
                                placeholder="Contact number"
                                required
                            >
                        </div>
                        <div>
                            <input
                            placeholder="Subject"
                            required
                            >
                        </div>
                        <div>
                            <textarea class="howitworks-textarea" placeholder="Your Message"></textarea>
                        </div>
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
                                        <h3 class="howitworks-users green">Rahman Abdal</h3>
                                        <p class="howitworks-reviews">Fast, efficient and user friendly</p>
                                    </div>
                                    <div class="howitworks-date">
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
                                        <h3 class="howitworks-users green">Rahman Abdal</h3>
                                        <p class="howitworks-reviews">Fast, efficient and user friendly</p>
                                    </div>
                                    <div class="howitworks-date">
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