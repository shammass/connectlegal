@extends('lawyer.layouts.navbar_content')

@section('title', 'Question & Answer')

@section('content')
    @include('admin.layouts.flash-message')
    <div class="row mb-5">
        @foreach($forums as $k => $forum)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{$forum->title}}</h5>
                        <p class="card-text">{{$forum->message}}</p>
                        <a href="{{route('lawyer.qa.view', $forum->slug)}}" class="btn btn-primary">View</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{$forum->created_at->format('d M Y')}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection