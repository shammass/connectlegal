@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="our-lawyers-page" data-scroll-index="0">
        <div class="container-fluid">
            <div class="inner-content-wraper">
                <div class="row">
                    <div class="col-12">
                        <div class="our-lawyers-header">
                            <div class="header-content"> 
                                <h1>Our<span>Lawyers</span></h1>
                                <p>Our team of lawyers have experience with criminal law and crimes act, thus they can understand your unique requirements.</p>
                            </div>
                            <div class="header-content-image">
                                <img src="/new-design/assets/image/our_lawyers/our_lawyers.png" >
                                
                            </div>
                        </div>
                    </div>
                    <div class="our-lawyers-content col-sm-12">
                        <div class="search-and-dropdown d-flex justify-content-end">
                            <img src="/new-design/assets/image/our_lawyers/ri_search.png">
                            <select name="" id="">
                                <option value="relevant">Select Department</option>
                            </select>
                            <select name="" id="">
                                <option value="date">Select Location</option>
                            </select>
                        </div>
                        <div class="our-lawyers-content-header">
                            <h3>Displaying  <span>1 - 10 of 10 layers</span></h3>
                            <div class="d-flex our-lawyers-content-header-filter-container">
                                <select name="" id="">
                                    <option value="relevant">Relevant</option>
                                </select>
                                <select name="" id="">
                                    <option value="date">Name A-Z</option>
                                </select>
                                <div class="our-lawyers-content-header-filter dash">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="8" height="2" fill="#208C84"/>
                                        <rect y="4" width="8" height="2" fill="#208C84"/>
                                        <rect y="8" width="8" height="2" fill="#208C84"/>
                                        <rect x="10" width="8" height="2" fill="#208C84"/>
                                        <rect x="10" y="4" width="8" height="2" fill="#208C84"/>
                                        <rect x="10" y="8" width="8" height="2" fill="#208C84"/>
                                    </svg>                                            
                                </div>
                                <div class="our-lawyers-content-header-filter dots">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#208C84"/>
                                        <circle cx="2.5" cy="10.5" r="2.5" fill="#208C84"/>
                                        <circle cx="10.5" cy="2.5" r="2.5" fill="#208C84"/>
                                        <circle cx="10.5" cy="10.5" r="2.5" fill="#208C84"/>
                                    </svg>                                            
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex flex-wrap custom-col">
                                @foreach($lawyers as $k => $lawyer)
                                    <div class="our-lawyers-card-wrapper left">
                                        <div class="our-lawyers-card on-watch">
                                            <div class="d-flex">
                                                <div class="avatar-container">
                                                    <img class="avatar" src="/new-design/assets/image/our_lawyers/dummy_dp.png" >
                                                    <img class="crown" src="/new-design/assets/image/our_lawyers/avatar_crown.png" >
                                                </div>
                                                <div class="our-lawyers-card-content">
                                                    <h4>{{$lawyer->user->name}}</h4>
                                                    <div class="ratings">
                                                        <div class="ratings-card">
                                                            <img src="/new-design/assets/image/home/star.png" alt="">
                                                            <img src="/new-design/assets/image/home/star.png" alt="">
                                                            <img src="/new-design/assets/image/home/star.png" alt="">
                                                            <img src="/new-design/assets/image/home/star.png" alt="">
                                                            <img src="/new-design/assets/image/home/star.png" alt="">
                                                        </div>
                                                        <h5>(35 Reviews)</h5>
                                                    </div>
                                                    <div class="lawyer-location">
                                                        <img src="/new-design/assets/image/our_lawyers/location.png">
                                                        <p>{{$lawyer->emirates}}</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="our-lawyers-card-eye">
                                                <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="29.5" cy="29.5" r="29" fill="white" stroke="#3DC9A1"/>
                                                    <path d="M30 18C21.8182 18 14.8309 23.1833 12 30.5C14.8309 37.8167 21.8182 43 30 43C38.1818 43 45.1691 37.8167 48 30.5C45.1691 23.1833 38.1818 18 30 18ZM30 38.8333C25.4836 38.8333 21.8182 35.1 21.8182 30.5C21.8182 25.9 25.4836 22.1667 30 22.1667C34.5164 22.1667 38.1818 25.9 38.1818 30.5C38.1818 35.1 34.5164 38.8333 30 38.8333ZM30 25.5C27.2836 25.5 25.0909 27.7333 25.0909 30.5C25.0909 33.2667 27.2836 35.5 30 35.5C32.7164 35.5 34.9091 33.2667 34.9091 30.5C34.9091 27.7333 32.7164 25.5 30 25.5Z" fill="#3DC9A1"/>
                                                </svg>                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="auto-load text-center">
                                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                    <path fill="#000"
                                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                    </path>
                                </svg>
                            </div>
                            <div class="col-12 load-more-testimonial" onclick="loadMoreLawyers()">
                                <p>Load more testimonials</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('.auto-load').hide();
        var page = 1;
        function loadMoreLawyers() {
            ++page
            $.ajax({
                method:"get",
                url: "our-lawyers?page=" +page,
                beforeSend: function () {
                    $('.auto-load').show();
                },
                success: function(data){            
                    if (data.length == 0) {
                        $('.auto-load').html("We don't have more data to display :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $(".custom-col").append(data);
                }
            });
        }
    </script>
@endpush