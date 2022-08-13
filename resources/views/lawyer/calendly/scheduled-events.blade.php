@extends('lawyer/layouts/navbar_content')
@section('title', 'Profile')
@section('content')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard /</span> Scheduled Events
    </h4>

    <div class="row mb-5">
        @foreach($scheduledEvents->collection as $k => $event)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                <div class="card-header">
                    {{$event->name}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{date('d-m-Y', strtotime($event->start_time))}}</h5>
                    <p class="card-text">                    
                    @php 
                        $dt = new DateTime($event->start_time, new DateTimeZone('UTC'));
                        $dt->setTimezone(new DateTimeZone('Asia/Kolkata'));
                        $startDate = $dt->format('H:i');
                        $dt = new DateTime($event->end_time, new DateTimeZone('UTC'));
                        $dt->setTimezone(new DateTimeZone('Asia/Kolkata'));
                        $endDate = $dt->format('H:i');
                    @endphp
                    Meeting time: {{date("h:i",strtotime($startDate))}} - {{date("h:i",strtotime($endDate))}}
                    </p>
                    <!-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> -->
                    <hr>
                    <p><b>Name</b>: {{$scheduleMeeting->getInviteeName($event->uri)['name']}}</p>
                    <p><b>Email</b>: {{$scheduleMeeting->getInviteeName($event->uri)['email']}}</p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection