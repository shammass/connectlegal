<!DOCTYPE html>
<html lang="en">
    <head>
        @include('lawyer.home.layouts.header')
    </head>
    <body>
        <section>
            @include('lawyer.home.layouts.nav')
            <main>
                <div class="fix-height"></div>
            </main>
            @include('sweetalert::alert')
            @yield('content')
            @include('lawyer.home.layouts.sidenav')
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <!-- emoji picker js-->
            <script src="{{asset('community/assets/js/emojionearea.min.js')}}"></script>
            <script src="{{asset('community/assets/select2/js/select2.full.min.js')}}"></script>
            <script>                               
                $('#lawyer-multiselect').select2({
                    dropdownParent: $('#createGroup')
                })                
            </script>
            
            <script src="/lawyer_lib/lib/jquery.min.js"></script>
            <!-- popper.min -->
            <script src="/lawyer_lib/lib/popper.min.js"></script>
            <!-- Plugins -->
            <script src="/lawyer_lib/lib/bootstrap.min.js"></script>
            <script src="/lawyer_lib/lib/swiper.min.js"></script>
            <script src="/lawyer_lib/lib/owl.carousel.min.js"></script>
            <script src="/lawyer_lib/lib/wow.min.js"></script>
            <script src="/lawyer_lib/lib/jquery.waypoints.min.js"></script>
            <script src="/lawyer_lib/lib/jquery.counterup.min.js"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

            <!-- Slick slider js -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>   

            <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
            <script src="https://www.jonthornton.com/jquery-timepicker/jquery.timepicker.js"></script>
            <script src="{{ asset('assets/timepicker/dist/datepair.js') }}"></script>
            <script src="{{ asset('assets/timepicker/dist/jquery.datepair.js') }}"></script>
            <script src="//js.pusher.com/3.1/pusher.min.js"></script>
              
            
            <!-- custom scripts -->
            <script src="/new-design/lawyer/assets/js/main.js"></script>
            <!-- Datatable -->
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">            
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
            
            
            @stack('script')
        </section>
    </body>
</html>