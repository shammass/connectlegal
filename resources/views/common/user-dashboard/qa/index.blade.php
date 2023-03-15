@extends('common.user-dashboard.layouts.app')
@section('content')

<div class="working-box">
    <section class="lawyers-part-2 p-0">
        <div class="" id="border-full">
            <div class="row align-items-center" id="service-pages">
                <div class="col-md-6 col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <ul class="d-flex1">
                        <li>
                            <h4>Questions Asked</h4>
                        </li>
                    </ul>
                </div>
            </div>                        
            <div class="table-responsive table-wdes">
                <table class="table mt-5 ">
                    <thead class="thead-th">
                        <tr style="border-bottom: 2px solid #C2DDE4;">
                            <th style="text-align: center;">Lawyer Name</th>
                            <th style="text-align: center;">Title</th>
                            <th style="text-align: center;">Question</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">View Answers</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @foreach($questions as $k => $question)
                    <tr style="text-align: center;">
                        <td style="text-align: center;">{{$question->toLawyer ? $question->toLawyer->name : 'Any Lawyer'}}</td>
                        <td style="text-align: center;">{{$question->forum_title ?? '-'}}</td>                        
                        <td style="text-align: center;">{{substr($question->message, 0, 10) ?? '-'}}...</td>                        
                        <td style="text-align: center;">{{$question->is_verified ? 'Verified' : 'Pending'}}</td>    
                        @if($question->is_verified)
                            <td style="text-align: center;"><a href="{{route('question-answer.view', $question->slug)}}" target="_blank">View Answers</a></td>   
                        @else 
                            <td style="text-align: center;">-</td>
                        @endif
                    </tr>
                @endforeach                         
                    </tbody>
                </table>

            </div>
            <div class="was-validated" id="pagination-class">
                {{$questions->links()}}
            </div>
        </div>
    </section>


    


</div>

@endsection