@extends('common.user-dashboard.layouts.app')
@section('content')

<div class="working-box">
    <section class="lawyers-part-2 p-0">
        <div class="" id="border-full">
            <div class="row align-items-center" id="service-pages">
                <div class="col-md-6 col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <ul class="d-flex1">
                        <li>
                            <h4>Services Purchased</h4>
                        </li>
                    </ul>
                </div>
            </div>                        
            <div class="table-responsive table-wdes">
                <table class="table mt-5 ">
                    <thead class="thead-th">
                        <tr style="border-bottom: 2px solid #C2DDE4;">
                            <th style="text-align: center;">Order ID</th>
                            <th style="text-align: center;">Lawyer Name</th>
                            <th style="text-align: center;">Service Title</th>
                            <th style="text-align: center;">Amount</th>
                            <th style="text-align: center;">Date</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @foreach($servicesPurchased as $k => $service)
                    <tr style="text-align: center;">
                        <td style="text-align: center;">#{{$service->id}}</td>    
                        <td style="text-align: center;">{{$service->lawyer->name}}</td>
                        <td style="text-align: center;">{{$service->service->title}}</td>                        
                        <td style="text-align: center;">{{$service->getTotalAmount($service->lawyer_id, $service->service_id)}}</td>                        
                        <td style="text-align: center;">{{$service->created_at->format('M d Y')}}</td>                            
                    </tr>
                @endforeach                         
                    </tbody>
                </table>

            </div>
            <div class="was-validated" id="pagination-class">
                {{$servicesPurchased->links()}}
            </div>
        </div>
    </section>


    


</div>

@endsection