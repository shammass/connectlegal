@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="bog-details mb-5">
        <div class="container-fluid">
            <div class="row banner-bg">
                <div class="bg-color position-relative p-5">
                    <div class="row main-banner">
                        <div class="col-10 col-md-10">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    <li class="breadcrumb-item active"><a href="#">Blog</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-1 col-md-1 mt-2 b-d-date-parent">                        
                            <span class="b-d-date" style="color:#156075;">30/10/2012</span>
                        </div>
                    </div>
                    <div class="position-absoulte">
                        <img src="/new-design/assets/image/blog/blog_detail.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row detail-section">
                <div class="col-2 col-md-1 m-auto" id="desktop-view">
                    <table style="height: 100px;">
                        <tbody>
                            <tr>
                                <td class="align-baseline" style="color:#156075;"><span class="mb-3">Share</span></td>
                            </tr>
                            <tr>
                                <td class="align-baseline"><i class="fa fa-twitter fa-2x mb-3" style="color: #156075;"></i></td>
                            </tr>
                            <tr>
                                <td class="align-baseline"><i class="fa fa-facebook-f fa-2x mb-3" style="color: #156075;"></i></td>
                            </tr>
                            <tr>
                                <td class="align-baseline"><i class="fa fa-linkedin fa-2x mb-3" style="color: #156075;"></i></td>
                            </tr>
                            <tr>
                                <td class="align-baseline"><i class="fa fa-instagram fa-2x" style="color: #156075;"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-10 col-md-10">
                    <h1 class="font-bold blog-title" style="color: #156075;">Some title of the blog which will be too lengthy</h1>
                    <p class="blog-title">somshhshhshshsh</p>                    
                </div>        
                <div class="row gx-1 justify-content-end d-flex" id="mobile-view">
                    <div class="col-2" style="color:#156075;">Share</div>
                    <div class="col-1"><i class="fa fa-twitter fa-1x mb-3" style="color: #156075;"></i></div>
                    <div class="col-1"><i class="fa fa-facebook-f fa-1x mb-3" style="color: #156075;"></i></div>
                    <div class="col-1"><i class="fa fa-linkedin fa-1x mb-3" style="color: #156075;"></i></div>
                    <div class="col-1"><i class="fa fa-instagram fa-1x" style="color: #156075;"></i></div>
                </div>        
            </div>
            
            <div class="row p-md-5">
                <span style="color:#156075;" class="mt-1 mb-1">RELATED ARTICLES</span>
                <div class="col-sm-3 col-6 mb-4">
                    <div class="card">
                    <img src="/new-design/assets/image/blog/blog_image.png" >
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="card">
                    <img src="/new-design/assets/image/blog/blog_image.png" >
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="card">
                    <img src="/new-design/assets/image/blog/blog_image.png" >
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="card">
                    <img src="/new-design/assets/image/blog/blog_image.png" >
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection