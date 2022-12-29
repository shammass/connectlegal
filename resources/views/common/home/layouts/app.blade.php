<!DOCTYPE html>
<html lang="en">
    <head>
        @include('common.home.layouts.header')
    </head>
    <body>
        <header>
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
            @include('common.home.layouts.nav')
        </header>
        <main class="always-open-content" id="always-open-content">
            <div class="fix-heights"></div>
            @include('sweetalert::alert')
            @yield('content')
        </main>
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

            if(window.innerWidth > 425) {
                $('.slick').slick({
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    adaptiveHeight: true
                });
            }else {
                $('.slick').slick({
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                });
            }
            
        </script>
        @stack('script')
    </body>
</html>