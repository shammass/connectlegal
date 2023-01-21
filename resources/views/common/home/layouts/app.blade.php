<!DOCTYPE html>
<html lang="en">
    <head>
        @include('common.home.layouts.header')
    </head>
    <body>
        @php 
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

        @include('common.home.layouts.login-modals')
        <header>
            @include('common.home.layouts.nav')
        </header>
        @include('common.home.layouts.sidenav')



        @include('sweetalert::alert')
        @yield('content')




        @include('common.home.layouts.footer')        
        <script>
            Pusher.logToConsole = true;

            var pusher = new Pusher('a34a416e0fe588185c8e', {
                cluster: 'ap2'
            });
            // Subscribe to the channel we specified in our Laravel Event
            var channel = pusher.subscribe('lawyer-login-logout');

            // Bind a function to a Event (the full Laravel class)
            channel.bind('App\\Events\\LawyerLoginLogout', function(data) {
                if(data.type === "lawyerLoginLogout") {
                        $.ajax({
                        method:"get",
                        url: "/online-offline-lawyers/nav",
                        success: function(res){
                            $(".online-offline").empty();
                            $(".online-offline").append(res.onlineOffline);
                            $("#lawyer-online-count").empty();
                            $("#lawyer-online-count").append(res.onlineOfflineCount);
                        }
                    });
                }
            }); 
            
            function validateLogin(event) {
                valid = true
                var email = $("#email").val()
                var pwd = $("#pwd").val()
                $(".email-error").empty()
                $(".pwd-error").empty()
                if(!email) {
                    valid = false
                    $(".email-error").append('Please enter your email');
                }
                
                if(!pwd) {
                    valid = false
                    $(".pwd-error").append('Please enter your password');
                }

                if(!valid) {
                    event.preventDefault()
                }            
            }        

            function validateRegistration(event) {
                valid = true
                var name = $("#name").val()
                var email = $("#email-reg").val()
                var pwd = $("#password-reg").val()
                $(".name-error").empty()
                $(".email-error").empty()
                $(".pwd-error").empty()
                debugger
                if(!name) {
                    valid = false
                    $(".name-error").append('Please enter your name');
                }

                if(!email) {
                    valid = false
                    $(".email-error").append('Please enter your email');
                }
                
                if(!pwd) {
                    valid = false
                    $(".pwd-error").append('Please enter your password');
                }else {
                    if(pwd.length < 6) {                        
                        $(".pwd-error").append('The password must be at least 6 characters');
                    }
                }
                

                if(!valid) {
                    event.preventDefault()
                }            
            }                     
        </script>
        
        @stack('script')
    </body>
</html>