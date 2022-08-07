@extends('common.layouts.app')
@section('content')
    <section class="wow animate__fadeIn bg-light-gray padding-25px-tb page-title-small for-lawyers-breadcrumb"> 
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-6">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom text-center text-lg-start">Book A Meeting</h1>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                    <ul class="xs-text-center">
                        <li><a href="/">Home</a></li>
                        <li>Book A Meeting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="parallax xs-padding-15px-lr" data-parallax-background-ratio="0.5" style="background-color:aliceblue;">
        <div class="container">
            <div class="row">
                <div class="calendly-inline-widget" style="min-width:320px;height:600px;" data-auto-load="false">
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                <script>
                    Calendly.initInlineWidget({
                        url: '{{$lawyer->calendly_link}}'
                    });
                </script>
            </div>
            <div class="row">
                <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/s4shamma" style="min-width:320px;height:630px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
            </div>
        </div>
    </section>
@endsection
