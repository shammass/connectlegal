@extends('admin/layouts/navbar_content')

@section('title', 'Lawyers')

@section('content')
    @include('admin.layouts.flash-message')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Lawyers</h5>
        </div>
        <div class="card-body">
            <table id="myTable">
                <thead>
                    <tr>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Contact No</th>
                        <th style="text-align: center;">Is Verified</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lawyers as $k => $lawyer)
                        <tr style="text-align: center;">
                            <td>{{$lawyer->user->prefix}} {{$lawyer->user->name}}</td>
                            <td>{{$lawyer->user->email}}</td>
                            <td>{{$lawyer->contact_number}}</td>
                            <td>
                                <div class="form-check form-switch mb-2"  style="padding-left: 7.5em;">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" lawyer_id="{{$lawyer->user_id}}" {{$lawyer->is_verified ? 'checked' : ''}} onchange="verifyLawyer(this)">
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bx bx-detail me-1"></i> View</a>
                                        <a class="dropdown-item" href="{{route('admin.delete.lawyer', $lawyer->id)}}" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height: 100%!important;">
                                    <div class="offcanvas-header">
                                    <h5 id="offcanvasTopLabel" class="offcanvas-title">Lawyer: {{$lawyer->user->prefix}} {{$lawyer->user->name}}</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="row">
                                            <div class="col-xl">
                                                <div class="card mb-4">
                                                    <div class="card-header d-flex justify-content-between align-items-center">
                                                        <h5 class="mb-0">Lawfirm Info</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-default-fullname">Lawfirm Name</label>
                                                                <input type="text" class="form-control" id="basic-default-fullname" readonly value="{{$lawyer->law_firm_name}}" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-default-company">Lawfirm Website</label>
                                                                <input type="text" class="form-control" id="basic-default-company" readonly value="{{$lawyer->law_firm_website}}" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-default-email">Emirate</label>
                                                                <input type="text" id="basic-default-email" class="form-control" readonly value="{{$lawyer->emirates}}" aria-describedby="basic-default-email2" />                                                            
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-default-message">Office Address</label>
                                                                <textarea id="basic-default-message" class="form-control" readonly> {{$lawyer->office_address}}</textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl">
                                                <div class="card mb-4">
                                                    <div class="card-header d-flex justify-content-between align-items-center">
                                                        <h5 class="mb-0">Contact Info</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span> -->
                                                                    <input type="text" class="form-control" id="basic-icon-default-fullname" readonly value="{{$lawyer->user->name}}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span class="input-group-text"><i class="bx bx-envelope"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-email" class="form-control" readonly value="{{$lawyer->user->email}}" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />                              
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Contact No</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->contact_number}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Landline No</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->landline_number}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Position</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->position}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Linkedin Profile</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->linkedin_profile}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Language</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->language}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">MOJ Register Number</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->moj_reg_no}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Arbitration Area</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->arbitration ? $lawyer->arbitration->area : ''}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Education</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->education}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Honors & Awards</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->honors_and_awards}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-phone">Assosiation & Membership</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span> -->
                                                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" readonly value="{{$lawyer->honors_and_awards}}" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-message">Disclaimer</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                                                                    <textarea id="basic-icon-default-message" class="form-control" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{$lawyer->disclaimer}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-icon-default-message">Summary</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                                                                    <textarea id="basic-icon-default-message" class="form-control" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{$lawyer->summary}}</textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a type="button" href="{{route('admin.verify-lawyer', $lawyer->user->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-primary me-2">Verify</a>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                                    </div>
                                </div>
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
        function verifyLawyer(data) {
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to verify this Lawyer?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "Yes, verify it!",
                cancelButtonColor: "red",
                cancelButtonText: "Cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
           })
            .then((verify) => {
                if (verify.isConfirmed) {
                    var lawyerId = $(data).attr('lawyer_id');
                    var status = $(data).val();
                    $.ajax({
                        method:"post",
                        url: "/admin/verify/lawyer/"+lawyerId,
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
