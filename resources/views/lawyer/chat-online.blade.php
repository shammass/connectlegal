@extends('lawyer/layouts/navbar_content')

@section('title', 'Requests: Chat Online')

@section('content')
    @include('admin.layouts.flash-message')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Requests</h5>
        </div>
        <div class="card-body">
            <table id="myTable">
                <thead>
                    <tr>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Comments</th>
                        <th style="text-align: center;">Accepted</th>
                        <th style="text-align: center;">Complete</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($onlineRequests as $k => $request)
                        <tr style="text-align: center;">
                            <td>{{$request->name}}</td>
                            <td>{{$request->email}}</td>
                            <td>{{$request->comment}}</td>
                            <td>
                                @if($request->status == 0)
                                    <div class="form-check form-switch mb-2"  style="padding-left: 7.5em;">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" request_id="{{$request->id}}" {{$request->status ? 'checked' : ''}} onchange="acceptRequest(this)">
                                    </div>
                                @else 
                                    <a href="">Chat Online</a>
                                @endif
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2"  style="padding-left: 7.5em;">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" complete_id="{{$request->id}}" {{$request->completed ? 'checked' : ''}} onchange="completed(this)">
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function acceptRequest(data) {
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to accept this request?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "Yes, accept it!",
                cancelButtonColor: "red",
                cancelButtonText: "Cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
            })
            .then((verify) => {
                if (verify.isConfirmed) {
                    var request_id = $(data).attr('request_id');
                    var status = $(data).val();
                    $.ajax({
                        method:"post",
                        url: "/lawyer/accept/chat-online-request/"+request_id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'status': status
                        },
                        success: function(){
                            Swal.fire({
                                icon: 'success',
                                title: 'Accepted',
                                text: 'Success'
                            })

                            setTimeout(window.location.reload.bind(window.location), 1000);
                        }
                    });
                } else {
                    Swal.fire("Cancelled!");
                }
            });
        }

        function completed(data) {
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to accept this request?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "Yes, accept it!",
                cancelButtonColor: "red",
                cancelButtonText: "Cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
            })
            .then((verify) => {
                if (verify.isConfirmed) {
                    var request_id = $(data).attr('request_id');
                    var status = $(data).val();
                    $.ajax({
                        method:"post",
                        url: "/lawyer/accept/chat-online-request/"+request_id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'status': status
                        },
                        success: function(){
                            Swal.fire({
                                icon: 'success',
                                title: 'Verified',
                                text: 'Success'
                            })
                        }
                    });
                } else {
                    Swal.fire("Cancelled!");
                }
            });
        }
    </script>
@endpush
