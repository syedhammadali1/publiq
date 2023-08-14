<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{-- @if (session()->get('publiq_theme') == 'theme-dark') class='theme-dark' @endif --}}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        if (localStorage.getItem('publiq_theme') === 'theme-dark') {
            document.documentElement.className = 'theme-dark';
        } else {
            document.documentElement.className = 'theme-light';
        }
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <link href='{{ asset('frontend/assets/css/bootstrap-responsive.min.css') }}' rel="stylesheet">
    <link href='{{ asset('frontend/assets/css/font-awesome.css') }}' rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/bootstrap.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/animate.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/remixicon.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/flaticon.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/jquery-ui.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/magnific-popup.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/simplebar.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/metismenu.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/owl.carousel.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/owl.theme.default.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/style.css') }}'>
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/responsive.css') }}'>
    {{-- axios --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- css of image-uploader library --}}
    <link rel="stylesheet" href='{{ asset('frontend/assets/css/image-uploader.css') }}'>

    <link rel="icon" type="image/png" href='{{ asset('frontend/assets/images/favicon.png') }}'>


    {{-- css of toastr alert --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- dark theme --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/dark.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dark.scss') }}"> --}}

    @stack('head')

    <!-- Scripts -->


    <script>
        window.Laravel = {!! json_encode([
            'user' => auth()->check() ? auth()->user()->id : null,
        ]) !!};
    </script>

    <style>
        .toast-info {
            background-color: #542068 !important;
        }

        #toast-container>div {
            opacity: 0.9 !important;
        }

        .toast-info>.toast-progress {
            background-color: #fff !important;
        }

        #toast-container>.toast-info {
            background-image: url('/frontend/assets/authui/assets/img/img/apple-touch-icon-57x57-precomposed.png') !important;
        }

        .toast-info>.toast-message {
            margin-left: 3rem !important;
        }
    </style>

</head>

<body>

    <div id="app">
        <audio id="notification-sound" hidden src="{{ asset('frontend/assets/notification-sound/sound4.mp3') }}"
            preload="auto"></audio>
        <!-- fullScreenModal -->

        <!-- Showing Preloader Area -->
        {{-- <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div> --}}
        <!-- End Preloader Area -->

        <!-- Showing Main Content Wrapper Area -->
        <div class="main-content-wrapper d-flex flex-column {{ isset($noNeedOfHeader) ? 'bg-dark' : '' }}"   >

            <!-- Showing Navbar/Header Area -->
            @if (!isset($noNeedOfHeader))
                @include('frontend.layouts.header')
            @endif
            <!-- End Navbar Area -->

            <!-- Showing Left Sidebar Area -->

            @if (!isset($noNeedOfLSidebar))
                @include('frontend.layouts.left-sidebar')
            @endif
            <!-- End Left Sidebar Area -->

            <!-- Showing Content Page Box Area -->
            @yield('content')
            <!-- End Content Page Box Area -->

            <!-- Showing Right Sidebar Area -->
            @if (!isset($noNeedOfRSidebar))
                @include('frontend.layouts.right-sidebar')
            @endif

            <!-- End Right Sidebar Area -->

        </div>
        <!-- End Main Content Wrapper Area -->

        <!-- Showing Copyright Area -->
        @if (!isset($noNeedOfFooter))
            @include('frontend.layouts.footer')

            <!-- End Copyright Area -->

            <!-- Showing Go Top Area -->
            <div class="go-top">
                <i class="ri-arrow-up-line"></i>
            </div>


            <div class="switch-box">
                <label id="switch" class="switch">
                    <input type="checkbox" {{-- @if (session()->get('publiq_theme') != 'theme-dark') checked @endif --}} onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
        @endif

    </div>

    {{-- loaderModal --}}
    <div class="modal" style="padding-top: 0px;z-index: 999;" id="loaderModal" tabindex="-1"
        aria-labelledby="loaderModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 100%;">
            @include('components.sub-components.loadMoreModal')
        </div>
    </div>

    {{-- full screen modal --}}
    <div class="modal" style="padding-top: 0px;z-index: 999" id="fullScreenModal" tabindex="-1"
        aria-labelledby="fullScreenModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="height: 100%;width:100%;">
                <div class="modal-header fullScreenModalHeader">
                    <h5 class="modal-title h4" id="fullScreenModalLabel">Full screen modal</h5>
                    <button type="button" class="btn-close fullScreenModalClose" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body fullScreenModalBody single-post-content-page">
                    @include('components.sub-components.loadMoreModal')
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- medium screen modal --}}
    <div class="modal" style="padding-top: 0px;z-index: 999;" id="mediumModal" tabindex="-1"
        aria-labelledby="mediumModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 100%;">
            <div class="modal-content " id="modal-content-medium">
                <div class="modal-header1 mediumModalHeader">
                    <h5 class="modal-title " id="mediumModalLabel"></h5>
                    <button type="button" class="btn-close mediumModalClose" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body mediumModalBody">
                    @include('components.sub-components.loadMoreModal')
                </div>
            </div>
        </div>
    </div>

    <style>
        #imagePreview,
            {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
    </style>

    {{-- only show image modal --}}
    <div class="modal" style="padding-top: 0px;z-index: 999;" id="imagePreview" tabindex="-1"
        aria-labelledby="ImageModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 100%;">
            <div class="modal-content " id="modal-content-medium">
                <button type="button" class="btn-close ImageModalClose position-absolute" data-bs-dismiss="modal"
                    aria-label="Close" style="right: 10px;top: 5px;z-index: 99;"></button>
                <div class="modal-body ImageModalBody" style="height: 30rem;">
                    <img src="" alt="" id="modalImage" class="h-100 w-100"
                        style="border-radius: 5px;cursor: pointer;transition: 0.3s;object-fit: contain">
                </div>
            </div>
            <div id="imagePreview" class="modal">
            </div>
        </div>
    </div>


    @php
        $whitelist = ['127.0.0.1', '::1'];
    @endphp
    @if (in_array($_SERVER['REMOTE_ADDR'], $whitelist))
        <script>
            window.laravel_echo_port = '{{ env('LARAVEL_ECHO_PORT') }}';
        </script>
        <script src="//{{ Request::getHost() }}:{{ env('LARAVEL_ECHO_PORT') }}/socket.io/socket.io.js"></script>
    @else
        <script>
            window.laravel_echo_port = false;
        </script>
        <script src="//{{ Request::getHost() }}/socket.io/socket.io.js"></script>
    @endif

    <script src="{{ mix('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        function Counter(element, count) {
            if (count > element.text()) {
                setTimeout(() => element.addClass('goUp'), 0);
                // 2. Incrementing the counter
                setTimeout(() => element.text(count), 100);
                // 3. New number waits down
                setTimeout(() => {
                    element.removeClass('goUp');
                    element.addClass('waitDown');
                }, 100);
                // 4. New number stays in the middle
                setTimeout(() => {
                    element.removeClass('waitDown');
                    element.addClass('initial')
                }, 200);
                setTimeout(() => {
                    element.removeClass('initial')
                }, 200);
            } else {
                setTimeout(() => element.addClass('goDown'), 0);
                // 2. Incrementing the counter
                setTimeout(() => element.text(count), 100);
                // 3. New number waits down
                setTimeout(() => {
                    element.removeClass('goDown');
                    element.addClass('waitUp');
                }, 100);
                // 4. New number stays in the middle
                setTimeout(() => {
                    element.removeClass('waitUp');
                    element.addClass('initial')
                }, 200);
                setTimeout(() => {
                    element.removeClass('initial')
                }, 200);
            }
        }

        Echo.private(`App.Models.User.` + window.Laravel.user)
            .notification((notification) => {
                // console.log(notification)
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.notification.render') }}",
                    data: {
                        'notification_id': notification.notification_id,
                    },
                    dataType: "html",
                    success: function(html) {
                        document.getElementById('notification-sound').play();
                        toastr.options = {
                            "closeButton": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }

                        if (notification.type == 'user.follow.request.notification') {
                            toastr.info("You have a follow request!");
                        } else if (notification.type == 'post.like.notification') {
                            toastr.info("You have a like notification!");
                        } else if (notification.type == 'post.comment.notification') {
                            toastr.info("You have a comment notification!");
                        } else if (notification.type == 'user.subscribe.notification') {
                            toastr.info("You have a subscribe notification!");
                        } else if (notification.type == 'user.follow.accept.notification') {
                            toastr.info("You have a follow accept notification!");
                        } else if (notification.type == 'comment.like.notification') {
                            toastr.info(notification.sender_name + " Likes Your Comment");
                        } else if (notification.type == 'chat.room') {
                            toastr.info("chatroom notification");
                        }

                        if (notification.type == 'post.like.notification' ||
                            notification.type == 'post.comment.notification' ||
                            notification.type == 'user.follow.accept.notification' ||
                            notification.type == 'comment.like.notification' ||
                            notification.type == 'user.subscribe.notification'
                        ) {
                            jQuery('.notifications-dropdown-div')
                                .prepend(html);
                            jQuery('.no-simple-notification')
                                .hide();
                            jQuery('.unreadnotifications-count').text(notification.unreadCount);
                            jQuery('.unreadnotifications-count').addClass('unreadnotifications-note-count');

                            if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "").includes('/profile')) {
                                if (notification.type == 'user.follow.accept.notification') {
                                    $.ajax({
                                        type: "GET",
                                        url: "{{ route('frontend.render.component') }}",
                                        data: {
                                            'comp_for': 'follow-req-accept',
                                            'user': notification.sender_id,
                                        },
                                        dataType: "html",
                                        success: function(response) {
                                            $('#single-profile-app').html(response);
                                        }
                                    });
                                }
                            }
                        }

                        if (notification.type == 'chat.room') {
                            jQuery('.unreadmessage-count').text(notification.unreadCount);
                            if ($('.all-message-noti').find('div.notidiv-' + notification.notification_id)
                                .length !==
                                0) {
                                jQuery('.notidiv-' + notification.notification_id).replaceWith(html);
                            } else {
                                $('.dghdghdhyhyhryh').hide();

                                $('.all-message-noti').prepend(html)
                            }
                        }


                        if (notification.type == 'post.uploaded.notification') {
                            $.ajax({
                                type: "get",
                                url: "{{ route('frontend.render.component') }}",
                                data: {
                                    'comp_for': 'feed-post',
                                    'post': notification.post_id
                                },
                                dataType: "json",
                                success: function(response) {
                                    toastr.info("Your post is uploaded successfully!");
                                    jQuery('.notifications-dropdown-div')
                                        .prepend(html);
                                    jQuery('.no-simple-notification')
                                        .hide();
                                    jQuery('.unreadnotifications-count').text(notification
                                        .unreadCount);
                                    jQuery('.unreadnotifications-count').addClass(
                                        'unreadnotifications-note-count');
                                    $('.upload-post-queue-loader').hide();
                                    if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "") ==
                                        "/" ||
                                        document.URL.replace({!! json_encode(env('APP_URL')) !!}, "") ==
                                        "/my-profile") {
                                        if ($('.post-append').find('div.post-' +
                                                response.uuid).length !== 0) {} else {
                                            $('.post-append').prepend(response.html);
                                        }
                                    }

                                    $.ajax({
                                        url: "{{ route('frontend.session-control') }}",
                                        data: {
                                            method: 'put',
                                            for: 'is_uploading',
                                            name: 'false',
                                        },
                                    });
                                }
                            });
                        }

                        if (notification.type == 'post.updated.notification') {
                            $.ajax({
                                type: "get",
                                url: "{{ route('frontend.render.component') }}",
                                data: {
                                    'comp_for': 'feed-post',
                                    'post': notification.post_id
                                },
                                dataType: "json",
                                success: function(response) {
                                    toastr.info("Your post is updated successfully!");
                                    jQuery('.notifications-dropdown-div')
                                        .prepend(html);
                                    jQuery('.no-simple-notification')
                                        .hide();
                                    jQuery('.unreadnotifications-count').text(notification
                                        .unreadCount);
                                    jQuery('.unreadnotifications-count').addClass(
                                        'unreadnotifications-note-count');
                                    $('.update-post-queue-loader').hide();
                                    if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "") ==
                                        "/" ||
                                        document.URL.replace({!! json_encode(env('APP_URL')) !!}, "") ==
                                        "/my-profile") {
                                        if ($('.post-append').find('div.post-' +
                                                response.uuid).length !== 0) {
                                            $('.post-' + response.uuid).replaceWith(response
                                                .html);
                                        } else {
                                            $('.post-append').prepend(response.html);
                                        }
                                    }

                                    $.ajax({
                                        url: "{{ route('frontend.session-control') }}",
                                        data: {
                                            method: 'put',
                                            for: 'is_updating',
                                            name: 'false',
                                        },
                                    });
                                }
                            });
                        }

                        if (notification.type == 'user.follow.request.notification') {
                            jQuery('.follow-dropdown-div')
                                .prepend(html);
                            jQuery('.no-request')
                                .hide();
                            jQuery('.unreadfollow-count').text(notification.unreadCount)
                            jQuery('.unreadfollow-count').addClass('unreadfollow-notiticaton-count')

                            if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "").includes('/profile')) {
                                $.ajax({
                                    type: "get",
                                    url: "{{ route('frontend.render.component') }}",
                                    data: {
                                        'comp_for': 'follow-req-accept',
                                        'user': data.sender_id
                                    },
                                    dataType: "html",
                                    success: function(response) {
                                        $('#single-profile-app').html(response);
                                    }
                                });
                            }
                        }
                    }
                });
            })
            .listen('.NotificationDeleteEvent', (data) => {
                if (data.code == 'bavsjVAFSYufhvQWUVWfvhjwVJHXUy') {
                    if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "").includes('/profile')) {
                        $.ajax({
                            type: "get",
                            url: "{{ route('frontend.render.component') }}",
                            data: {
                                'comp_for': 'follow-req-accept',
                                'user': data.receiver_id
                            },
                            dataType: "html",
                            success: function(response) {
                                $('#single-profile-app').html(response);
                            }
                        });
                    }
                }

                if (data.code == 'skjdgTSDiyvYFssdsdJBKSGUI') {
                    jQuery('.fndiv-' + data.notification_id).remove();
                    jQuery('.unreadfollow-count').text(data.unreadCount['follow']);
                    if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "").includes('/profile')) {
                        $.ajax({
                            type: "get",
                            url: "{{ route('frontend.render.component') }}",
                            data: {
                                'comp_for': 'follow-req-accept',
                                'user': data.sender_id
                            },
                            dataType: "html",
                            success: function(response) {
                                $('#single-profile-app').html(response);
                            }
                        });
                    }
                }

                if (data.code == 'lsjhdusdusgudqy7wugq7wdgi') {
                    jQuery('.fndiv-' + data.notification_id).remove();
                    jQuery('.unreadfollow-count').text(data.unreadCount['follow']);
                }

                if (data.code == 'hvsdsadyfGAHSFyFhFDJSyuSDJ') {
                    jQuery('.fndiv-' + data.notification_id).remove();
                    jQuery('.unreadfollow-count').text(data.unreadCount['follow']);
                    if (document.URL.replace({!! json_encode(env('APP_URL')) !!}, "").includes('/profile')) {
                        $.ajax({
                            type: "get",
                            url: "{{ route('frontend.render.component') }}",
                            data: {
                                'comp_for': 'follow-req-accept',
                                'user': data.receiver_id
                            },
                            dataType: "html",
                            success: function(response) {
                                $('#single-profile-app').html(response);
                            }
                        });
                    }
                }

                if (data.code == 'psojIPJSIDjsIDhBSdjbusdSDuySG' ||
                    data.code == 'KHgYDGSGIYGsidydasdgyufAg' ||
                    data.code == 'HGDisgisgjkGUIgiiyGShdsfdyu') {
                    jQuery('.notidiv-' + data.notification_id).remove();
                    jQuery('.unreadnotifications-count').text(data.unreadCount['notification']);
                }

            }).listen('NewChatMessage', (e) => {

                console.log(e);

                this._markMessageAsSeen = (sender_username) => axios.post(
                        '{{ route('frontend.chat.markasseen') }}', {
                            username: sender_username,
                        }, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            }
                        })
                    .then(res => {

                    })
                    .catch(err => {
                        console.error(err);
                    })

                this._sendMessageNotificationToUser = (sender_username) => axios.post(
                        '{{ route('frontend.chat.send.notification') }}', {
                            username: sender_username,
                        }, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            }
                        })
                    .then(res => {

                    })
                    .catch(err => {
                        console.error(err);
                    })

                function goToBottom() {
                    var height = 0;
                    $('#chattroom-message-list > div').each(function(i, value) {
                        height += parseInt($(this).outerHeight()) + parseFloat($(this).css('margin-bottom'));
                    });
                    height += '';
                    console.log('$(this).outerHeight()', height)
                    $('#chattroom-message-list').animate({
                        scrollTop: height
                    });
                }


                let _message = (e.message) ? e.message.message : null;
                let full_name = e.sender.full_name;
                let sender_username = e.sender.name;
                let attachment = e.attachment;

                let reciever_html = jQuery("#chat-room-message-receiver").clone().appendTo(
                    '#chattroom-message-list[data-chat-room-list="' + sender_username + '"]')

                if (attachment) {
                    reciever_html.find('.chat-single-message_message').html('<img src="' + attachment +
                        '" class="attachment_chat_image show-single-image-modal">')
                } else {
                    reciever_html.find('.chat-single-message_message').html(_message)
                }
                reciever_html.find('.chat-user-name').html(full_name)
                reciever_html.show();

                let _user_message_active = jQuery('#chattroom-message-list[data-chat-room-list="' + sender_username +
                    '"]');

                if (_user_message_active.length == 0) {
                    let chat_room_not_active = jQuery('[data-user-name="' + sender_username +
                        '"] .message-unread-count');

                    let _message_count = parseInt(chat_room_not_active.html());
                    chat_room_not_active.html(_message_count + 1)

                    chat_room_not_active.show();
                    this._sendMessageNotificationToUser(sender_username)
                } else {

                    this._markMessageAsSeen(sender_username)
                    if (e.notification) {
                        $.ajax({
                            type: "GET",
                            url: "{{ route('frontend.notification.render') }}",
                            data: {
                                'notification_id': e.notification.id,
                            },
                            dataType: "html",
                            success: function(html) {
                                if ($('.all-message-noti').find('div.notidiv-' + e.notification.id)
                                    .length !==
                                    0) {
                                    jQuery('.notidiv-' + e.notification.id).replaceWith(html);
                                } else {

                                    $('.all-message-noti').prepend(html)
                                }
                            }
                        });
                    }

                }

                goToBottom()
            });
        // .listen('.NotificationDeleteEvent', (data) => {

        // })

        window.Echo.channel('post-like-channel').listen('.PostLikeEvent', (data) => {
            likeDiv = jQuery('.post-like-count-' + data.post_id);
            previousCount = likeDiv.text();
            Counter(likeDiv, data.count);

        });

        window.Echo.channel('comment-like-channel').listen('.CommentLikeEvent', (data) => {
            commentLikeDiv = jQuery('.comment-like-count-' + data.comment_id);
            previousCount = commentLikeDiv.text();
            Counter(commentLikeDiv, data.count);
        });

        window.Echo.channel('post-comment-channel').listen('.PostCommentEvent', (data) => {
            commentDiv = jQuery('.post-comment-count-' + data.post_id);
            previousCount = commentDiv.text();
            Counter(commentDiv, data.count);

            jQuery('.post-all-comments-' + data.post_id)
                .prepend(data.html);
            jQuery('.post-all-comments-' + data.post_uuid)
                .append(data.html);
            jQuery('.previous-comments-div-' + data.post_id).append(data.singleposthtml);

            $(".scroll-post-div-" + data.post_id).animate({
                scrollTop: $(".scroll-post-div-" + data.post_id).prop("scrollHeight")
            }, 1000);

            $(".post-all-comments-" + data.post_uuid).animate({
                scrollTop: $(".post-all-comments-" + data.post_uuid).prop("scrollHeight")
            }, 1000);

            $("#div1").animate({
                scrollTop: $('#div1').prop("scrollHeight")
            }, 1000)
            if (data.count == 1) {
                jQuery('.no-comment-' + data.post_id)
                    .hide();
            }
        });

        var timeout;
        Echo.join('online')
            .joining((user) => {
                axios.put("/users/" + user.id, {
                        purpose: 'online_session',
                        is_online: 1,
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        }
                    })
                    .then(res => {
                        if (res.data.status) {
                            clearTimeout(timeout)
                            if ($('.online-content-body').find('div.online-user-div-' + user.name).length !==
                                0) {} else {
                                $('.online-content-body').prepend(res.data.friend)
                            }
                        }
                    })
                    .catch(err => {
                        console.error(err);
                    })
            })
            .leaving((user) => {
                axios.put("/users/" + user.id, {
                        purpose: 'online_session',
                        is_online: 0,
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        }
                    })
                    .then(res => {
                        if (res.data.status) {
                            timeout = setTimeout(() => {
                                if ($('.online-content-body').find('div.online-user-div-' + user.name)
                                    .length !== 0) {
                                    $('.online-user-div-' + user.name).remove()
                                }
                            }, 10000);

                        }
                    })
                    .catch(err => {
                        console.error(err);
                    })

            })
    </script>

    <!-- Links of JS files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/external/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('frontend/assets/external/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-wysiwyg.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    {{-- script of image-uploader-library --}}
    <script src="{{ asset('frontend/assets/js/image-uploader.js') }}"></script>

    {{-- Global Scripts --}}
    @include('frontend.scripts.global')
    @stack('js')
    @stack('sub-js')

    {{-- toastr script --}}
    <script>
        @if (Session::has('success'))
            toastr.success("{{ session('success') }}")
        @endif
        @if (Session::has('error'))
            toastr.error("{{ session('error') }}")
        @endif
        @if (isset($errors) && count($errors) > 0)
            @foreach ($errors->all() as $key => $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>
    {{-- script for toastr alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
