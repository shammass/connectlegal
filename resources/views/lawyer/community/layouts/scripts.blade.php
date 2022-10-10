@include('layouts.sections.scriptsIncludes')
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>    
    <!-- latest jquery-->
    <script src="{{asset('community/assets/js/jquery-3.6.0.min.js')}}"></script>
    
    <!-- popper js-->
    <script src="{{asset('community/assets/js/popper.min.js')}}"></script>
    
    <!-- slick slider js -->
    <script src="{{asset('community/assets/js/slick.js')}}"></script>
    <script src="{{asset('community/assets/js/custom-slick.js')}}"></script>
    
    <!-- chatbox js -->
    <script src="{{asset('community/assets/js/chatbox-2.js')}}"></script>
    
    <!-- counter js -->
    <script src="{{asset('community/assets/js/counter.js')}}"></script>
    
    <!-- popover js for custom popover -->
    <script src="{{asset('community/assets/js/popover.js')}}"></script>
    
    <!-- feather icon js-->
    <script src="{{asset('community/assets/js/feather.min.js')}}"></script>
    
    <!-- map js -->
    <script src="{{asset('community/assets/js/custom_map.js')}}"></script>
    
    <!-- emoji picker js-->
    <script src="{{asset('community/assets/js/emojionearea.min.js')}}"></script>
    
    <!-- Bootstrap js-->
    <script src="{{asset('community/assets/js/bootstrap.js')}}"></script>
    
    <!-- lazyload js-->
    <script src="{{asset('community/assets/js/lazysizes.min.js')}}"></script>
    
    <!-- theme setting js-->
    <script src="{{asset('community/assets/js/theme-setting.js')}}"></script>
    <script src="{{asset('community/assets/select2/js/select2.full.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('community/assets/js/script.js')}}"></script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    
    <script>
         $('.comment-section .main-comment').hide();
        feather.replace();
        $(".emojiPicker").emojioneArea({
            inline: true,
            placement: 'absleft',
            pickerPosition: "top left",
        });

       
        $('#lawyer-multiselect').select2({
            width: '100%',
            placeholder: "Select Lawyer",
            allowClear: true,
            closeOnSelect:false,
        })

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('a34a416e0fe588185c8e', {
        cluster: 'ap2'
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('post-comment');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\PostComment', function(data) {
            if(data.type === "comment") {
                $.ajax({
                    method:"post",
                    url: "/lawyer/updated-comment",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'data':data
                    },
                    success: function(res){
                        $(".all-comments-"+data.postComment.post_id).empty();
                        $(".all-comments-"+data.postComment.post_id).prepend(res.comments);
                        $("#commentCounts_"+data.postComment.post_id).empty();
                        $("#commentCounts_"+data.postComment.post_id).prepend(res.count);
                    }
                });
            }else if(data.type === "post") {
                $.ajax({
                    method:"post",
                    url: "/lawyer/updated-post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'data':data
                    },
                    success: function(res){
                        // $(".all-posts-"+data.postComment.post_id).empty();
                        $(".all-posts").prepend(res);
                    }
                });
            }else if(data.type === "groupPost") {
                $.ajax({
                    method:"post",
                    url: "/lawyer/updated-post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'data':data
                    },
                    success: function(res){
                        // $(".all-posts-"+data.postComment.post_id).empty();
                        $(".all-group-posts").prepend(res);
                    }
                });
            }else if(data.type === "groupMessage") {
                $.ajax({
                    method:"post",
                    url: "/lawyer/community/group/latest-group-chat",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'data':data
                    },
                    success: function(res){
                        // $(".all-posts-"+data.postComment.post_id).empty();
                        $(".sending").css('display', 'none');
                        $(".messages-content").append(res);
                        $("#chat-text").animate({ scrollTop: $('#chat-text').prop("scrollHeight")}, 1000);
                    }
                });
            }
        }); 

        var input = document.getElementById("msgFieldFirst");
        input.addEventListener("keyup", function(event) {
            if (event.code === "Enter") {
                sendMessage()
            }
        });

        function sendMessage() {
            const messagesContainer = $(".chat-history");
            $(".sending").css('display', 'block');
            $(".sending").css('text-align', 'center');
            var msg = $(".emojionearea-editor").text();
            var groupId = $("#groupId").val();
            $("#msgField").val("")
            $(".emojionearea-editor").empty();
            // document.getElementById('msgField').setAttribute("style","padding-left:5%;overflow:hidden;overflow-wrap:break-word;");
            if(msg) {
                $.ajax({
                    method:"post",
                    url: "/lawyer/community/group/send-message/"+groupId,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'msg':msg
                    },
                    success: function(res){
                        $("#chat-text").animate({ scrollTop: $('#chat-text').prop("scrollHeight")}, 1000);
                        // $('#chat-text').scrollTop($('#chat-text')[0].scrollHeight);
                    }
                });
            }
        }

    </script>
    