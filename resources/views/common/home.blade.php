@extends('common.home.layouts.app')
@section('content')
    @php 
        $nothing = 0;
        $lawyers = App\Models\Lawyer::whereIsVerified(1)->get();
        $onlineLawyers = 0;
        $offlineLawyers = 0;
        foreach($lawyers as $k => $v) {
            if($v->user->isOnline()) {
                ++$onlineLawyers;
            }else {
                ++$offlineLawyers;
            }
        }
    @endphp
    @include('common.home.sections.banner')
    @include('common.home.sections.banner-bottom-cards')
    @include('common.home.sections.appointment')
    @include('common.home.sections.lawyers-online')
    @include('common.home.sections.services')
    @include('common.home.sections.testimonials')
    @include('common.home.sections.how-it-works')
    @include('common.home.sections.register')
@endsection

@push('script')
<script>
    function hireALawyer() {
        window.location.href = "/hire-a-lawyer";
    }
    var success = true
    var emailStatus = {{ Session::get('success') ?? $nothing }};
    {{ Session::forget('success') }}
    var email = "{{ Session::get('email') ?? $nothing }}";
    if(emailStatus) {
        $("#email_sent_to").text(email)
        sendResetPasswordLink()
        {{ Session::forget('email_sent_to') }}
    }

    function resendEmail() {
        closeForgotPasswordConfirm()
        $.ajax({
            method:"get",
            url: "/forgot-password/"+email,
            success: function(res){
                if(res === "success") {
                    sendResetPasswordLink()
                }
            }
        });
    }
    // var pusher = new Pusher('a34a416e0fe588185c8e', {
    //     cluster: 'ap2'
    // });
    // // Subscribe to the channel we specified in our Laravel Event
    // var channel = pusher.subscribe('lawyer-login-logout');

    // // Bind a function to a Event (the full Laravel class)
    // channel.bind('App\\Events\\LawyerLoginLogout', function(data) {
    //     if(data.type === "lawyerLoginLogout") {
    //         $.ajax({
    //             method:"get",
    //             url: "/online-offline-lawyers/home",
    //             success: function(res){
    //                 $("#lawyer_online_section").empty();
    //                 $("#lawyer_online_section").append(res);
    //             }
    //         });
    //     }
    // }); 

</script>
@endpush