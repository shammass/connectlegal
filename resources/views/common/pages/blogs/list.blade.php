@extends('common.home.layouts.app')
@section('content')
    <section class="registerLawyer_main">
        <div class="blogs-section1 bg-l-blue">
            <div style="position: relative;">
                <div class="blog-img"><img style="width: 100%" src="../images/basicImages/blogs.png" alt=""/></div>
                <div class="blogs-section1-titlePart">
                    <h1 class="blogs-h1">THE BLOG</h1>
                    <p class="blogs-section1-p">Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
                </div>
                <div class="blogs-section1-main-grid">
                    <div class="blogs-section1-main-grid-item1">
                        <img style="width: 100%;" src="../images/basicImages/blog-s1-img1.png" alt=""/>
                        <p class="d-blue blog-s1-p">30/Nov/2025</p>
                        <h4 class="d-blue" style="padding-top: 0.5rem">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                        <p class="d-blue blog-s1-p1" style="padding-top: 0.5rem">Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
                    </div>
                    <div class="blogs-section1-main-grid-item2">
                        <div>
                            <div>
                                <img style="width: 100%;" src="../images/basicImages/blog-s1-img2.png" alt=""/>
                            </div>
                            <div>
                                <p class="d-blue blog-s1-p" style="padding-top: 0.5rem">30/Nov/2025</p>
                                <h4 class="d-blue" style="padding-top: 0.5rem">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img style="width: 100%;" src="../images/basicImages/blog-s1-img3.png" alt=""/>
                            </div>
                            <div>
                                <p class="d-blue blog-s1-p" style="padding-top: 0.5rem">30/Nov/2025</p>
                                <h4 class="d-blue" style="padding-top: 0.5rem">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img style="width: 100%;" src="../images/basicImages/blog-s1-img4.png" alt=""/>
                            </div>
                            <div>
                                <p class="d-blue blog-s1-p" style="padding-top: 0.5rem">30/Nov/2025</p>
                                <h4 class="d-blue" style="padding-top: 0.5rem">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogs-section2">
            <div class="blogs-section2-topic">
                <p class="d-blue">RELATED ARTICLES</p>
                <div class="blogs-section2-topic-btns">
                    <!-- <button>Relevant</button>
                    <button>Date</button> -->

                    <!-- <input type="date" id="birthday" name="birthday"> -->
                </div>
            </div>
            <div class="blogs-section2-grid">
                <div>
                    <img style="width: 100%" src="../images/basicImages/blog-s2-img1.png" alt=""/>
                    <p class="d-blue">30/Nov/2025</p>
                    <h4 class="d-blue">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                    <p>Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
                </div>
                <div>
                    <img style="width: 100%" src="../images/basicImages/blog-s2-img2.png" alt=""/>
                    <p class="d-blue">30/Nov/2025</p>
                    <h4 class="d-blue">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                    <p>Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
                </div>
                <div>
                    <img style="width: 100%" src="../images/basicImages/blog-s2-img3.png" alt=""/>
                    <p class="d-blue">30/Nov/2025</p>
                    <h4 class="d-blue">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                    <p>Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
                </div>
                <div>
                    <img style="width: 100%" src="../images/basicImages/blog-s2-img4.png" alt=""/>
                    <p class="d-blue">30/Nov/2025</p>
                    <h4 class="d-blue">This is a lorem ipsum title here and will be remplaced for the final text</h4>
                    <p>Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now. </p>
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