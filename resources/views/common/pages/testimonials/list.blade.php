@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
        <section class="testimonials-page" data-scroll-index="0">
            <div class="container-fluid">
                <div class="inner-content-wraper">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-header">
                                <div class="header-content">
                                    <h1>Client<span>Testimonials</span></h1>
                                    <p>Make an appointment with Advocates and Legal consultancy, Today! or chat with a lawyer online for free in Dubai and across UAE now.</p>
                                </div>
                                <img src="/new-design/assets/image/testimonials/closeqoute.png" >
                            </div>
                        </div>
                        <div class="testimonial-content col-sm-12">
                            <div class="testimonial-content-header">
                                <select name="" id="">
                                    <option value="relevant">Relevant</option>
                                </select>
                                <select name="" id="">
                                    <option value="date">Date</option>
                                </select>
                            </div>
                            <div class="row d-none d-lg-flex">
                                <div class="custom-col col-12 col-md-6 col-lg-4">
                                    <div class="mesage-card">
                                        <div class="add-button-testimonial mt-0">
                                            <div class="plus-button"><span>+</span></div>
                                            <p>Add Testimonial</p>
                                        </div>
                                        @php $key = 0; @endphp
                                        @include('common.pages.testimonials.column1')
                                        <div class="message-card-wraper bottom-empty bg-green bg-empty"></div>
                                    </div>
                                </div>
                                <div class="custom-col col-12 col-md-6 col-lg-4">
                                    <div class="mesage-card">
                                        @include('common.pages.testimonials.column2')
                                    </div>
                                </div>
                                <div class="custom-col col-12 col-md-6 col-lg-4">
                                    <div class="mesage-card">
                                        <div class="message-card-wraper bg-green bg-empty right-empty mt-0">
                                        </div>
                                        @include('common.pages.testimonials.column3')
                                        <div class="message-card-wraper bottom-empty bg-green bg-empty">
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            @include('common.pages.testimonials.testimonials-mobile')
                            <div class="col-12" style="margin-bottom: 5%;">
                            {{ $testimonials->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection