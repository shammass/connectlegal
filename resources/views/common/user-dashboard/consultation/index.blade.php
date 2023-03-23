@extends('common.user-dashboard.layouts.app')
@section('content')

<div class="working-box">
    <section class="lawyers-part-2 p-0">
        <div class="" id="border-full">
            <div class="row align-items-center" id="service-pages">
                <div class="col-md-6 col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <ul class="d-flex1">
                        <li>
                            <h4>Consultation Requests</h4>
                        </li>
                    </ul>
                </div>
            </div>                        
            <div class="table-responsive table-wdes">
                <table class="table mt-5 ">
                    <thead class="thead-th">
                        <tr style="border-bottom: 2px solid #C2DDE4;">
                            <th style="text-align: left;">Lawyer Name</th>
                            <th style="text-align: left;">Message</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @foreach($consultations as $k => $request)
                    <tr style="text-align: center;">
                        <td style="text-align: left;">{{$request->lawyer->name}}</td>
                        <td style="text-align: left;">{{$request->message}}</td>                        
                    </tr>
                @endforeach                         
                    </tbody>
                </table>

            </div>
            <div class="was-validated" id="pagination-class">
                {{$consultations->links()}}
            </div>
        </div>
    </section>


    


</div>

@endsection