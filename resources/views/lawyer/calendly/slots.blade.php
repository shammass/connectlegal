@extends('lawyer.layouts.navbar_content')
@section('title', 'Profile')
@section('content')

    <div class="row mb-5">
        <a href="{{route('lawyer.add-slots')}}" type="button" class="btn btn-primary col-md-2">Add Slots</a>
    </div>
@endsection