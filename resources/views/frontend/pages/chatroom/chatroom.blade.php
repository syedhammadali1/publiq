@extends('frontend.layouts.app')
@section('content')
    <div class="content-page-box-area">
        <div id="snippetContent">
            <main class="content mt-0">
                <div class="container p-0 w-100 m-0 mw-100">
                    <div class="card card-chat-room">
                        <div class="row g-0  h-100">
                            <div class="col-12 col-lg-5 col-xl-3 border-right">
                                <div class="px-4 d-none d-md-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1"> <input type="text"
                                                class="form-control my-3 search-friends" placeholder="Search..."></div>
                                    </div>
                                </div>
                                <div class="userpanel">

                                    @foreach (auth()->user()->getFriends() as $user)
                                        <div data-user-name="{{ $user->name }}" data-full-name="{{ $user->full_name }}"
                                            data-user-avatar="{{ $user->avatar }}"
                                            class="list-group-item list-group-item-action border-0 single-chat-room-start">
                                            {{-- <div class="badge bg-success float-right">5</div> --}}
                                            <div class="d-flex align-items-center friend-list-users"> <img
                                                    src="{{ $user->avatar }}" class="rounded-circle mr-1"
                                                    alt=" {{ $user->full_name }}" width="40" height="40">
                                                <div class="flex-grow-1 m-lg-2 mt-2"> {{ $user->full_name }}
                                                    <div class="small typing" style="display:none">
                                                        Typing...
                                                    </div>
                                                </div>
                                                <span class="badge bg-primary rounded-pill message-unread-count"
                                                    style="display: none;background-color: var(--main-color) !important;">0</span>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <a href="#" class="list-group-item list-group-item-action border-0">
                                        <div class=" float-right">
                                            <div class="skeleton skeleton-brigde"
                                                style="height: 18px;width: 19px;border-radius: 4px;"></div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <div class="skeleton skeleton-member-chat-img"
                                                style="height: 40px;width: 40px;border-radius: 50px;">
                                            </div>
                                            <div class="main-member-chat-skeleton" style="padding-left: 10px;">
                                                <div class="skeleton skeleton-text-name-member"
                                                    style="height: 10px;width: 100px;margin-top: 6%;">
                                                </div>
                                                <div class="skeleton skeleton-text-member-status"
                                                    style="height: 10px;width: 70px; margin-top: 3%;"></div>
                                            </div>
                                        </div>
                                    </a> --}}
                                    <div>
                                        <hr class="d-block d-lg-none mt-1 mb-0">
                                    </div>
                                </div>
                                <hr class="d-block d-lg-none mt-1 mb-0">
                            </div>
                            <div class="col-12 col-lg-7 col-xl-9 position-relative">
                                <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                    <div class="d-flex align-items-center py-1">
                                        <div class="position-relative" id="chat-with-image">
                                            <a href="" data-chat-profile-link>
                                                <img src="/frontend/assets/images/noimage.png" class="rounded-circle mr-1"
                                                    alt="Sharon Lessman" width="40" height="40">
                                            </a>

                                        </div>
                                        <div class="flex-grow-1 pl-3" id="chat-with-username">
                                            <a href="" data-chat-profile-link>
                                                <strong></strong>
                                            </a>
                                            {{-- <div class="text-muted small"><em>Typing...</em></div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="skeletion-chat-item" style="display: none">
                                    <div class="main-member-online-chat-skeleton" style="padding-left: 10px;">
                                        <div class="skeleton skeleton-text-online-name-member"
                                            style="height: 10px; width: 100px; margin-top: 6%;">
                                        </div>
                                        <div class="skeleton skeleton-text-online-member-status"
                                            style="height: 10px;width: 70px;margin-top: 3%;">
                                        </div>
                                    </div>
                                    <div class="main-member-online-chat-skeleton" style=" padding-left: 10px;">
                                        <div class="skeleton skeleton-text-online-name-member"
                                            style="height: 10px;width: 100px;margin-top: 6%;">
                                        </div>
                                        <div class="skeleton skeleton-text-online-member-status"
                                            style="height: 10px;width: 70px;margin-top: 3%;">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                    <div class="d-flex align-items-center py-1">
                                        <div class="position-relative">
                                            <div class="skeleton skeleton-member-online-img"
                                                style="
                                                        height: 40px;
                                                        width: 40px;
                                                        border-radius: 50px;
                                                        ">
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                <div class="position-relative" id="chattroom-message-body">
                                    <div class="chat-messages p-4" id="chattroom-message-list">
                                        <div class="chat-message-right pb-4">
                                            <div>
                                                <div class="skeleton skeleton-chat-name"
                                                    style="height: 10px;width: 100px;float: right;">
                                                </div>
                                                <div class="skeleton skeleton-chat-des"
                                                    style="height: 10px;width: 300px;margin-top: 6%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-message-left pb-4">
                                            <div>

                                                <div class="skeleton skeleton-chat-name" style="height: 10px;width: 100px;">
                                                </div>
                                                <div class="skeleton skeleton-chat-name"
                                                    style="height: 10px;width: 300px;margin-top: 3%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="chat-form">
                                    @include('frontend.pages.chatroom.chat-form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id='chat-room-message-temp' class="chat-message-right">
        <div class="flex-shrink-1 rounded py-2 px-3">
            <div class="mb-1 chat-inner"><span>
                    <p class="font-weight-bold chat-user-name">You</p>
                </span><span>
                    <div class="text-muted small text-nowrap mt-1 chat-timer">2:34 am
                    </div>
                </span></div> <span class="chat-single-message_message word-break">

            </span>
        </div>
    </div>
    <div id='chat-room-message-receiver' class="chat-message-left" style="display: none">
        <div class="flex-shrink-1 rounded py-2 px-3">
            <div class="mb-1 chat-inner">
                <span>
                    <p class="font-weight-bold  chat-user-name">You</p>
                </span>
                <span>
                    <div class="small text-nowrap mt-1 chat-timer">
                        2:34 am
                    </div>
                </span>
            </div>
            <span class="chat-single-message_message word-break">

            </span>
        </div>
    </div>

    @push('head')
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/chatroom.css?v=1') }}" />
    @endpush
    @pushOnce('sub-js')
        <script>
            let chat_image_ids = [];

            function chatActive() {
                var _url_userName = window.location.hash.split("#")[1];
                jQuery('[data-user-name]').removeClass('active')
                jQuery('[data-user-name="' + _url_userName + '"]').addClass('active');

            }

            function refreshFileComponent() {
                $('.chat-add-more-image').hide().siblings().remove();
                showAndHideDiv(['.message_attachment_label'],['.chat-image-container']);

                chat_image_ids = [];
            }

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
            var _chat_with_id;
            var _url_userName = window.location.hash.split("#")[1];
            $(document).ready(function() {
                if (window.location.hash && window.location.hash.split("#").length > 1) {

                    var _single_user_chat = jQuery('[data-user-name="' + _url_userName + '"]');
                    var _userName = _single_user_chat.attr('data-user-name')
                    var _userFullName = _single_user_chat.attr('data-full-name')
                    var _userAvatar = _single_user_chat.attr('data-user-avatar')
                    jQuery('#chat-with-username strong').html(_userFullName);
                    jQuery('#chat-with-image img').attr('src', _userAvatar);

                    startChatRoom(_url_userName)
                } else {

                    let _single_user_chat = jQuery('.userpanel .list-group-item:first-child');
                    var _userName = _single_user_chat.attr('data-user-name')
                    var _userFullName = _single_user_chat.attr('data-full-name')
                    var _userAvatar = _single_user_chat.attr('data-user-avatar')
                    jQuery('#chat-with-username strong').html(_userFullName);
                    jQuery('#chat-with-image img').attr('src', _userAvatar);
                    window.location = '#' + _userName;
                    startChatRoom(_userName)
                }
            });

            window.onhashchange = function() {
                var _url_userName = window.location.hash.split("#")[1];
                var _single_user_chat = jQuery('[data-user-name="' + _url_userName + '"]');
                var _userName = _single_user_chat.attr('data-user-name')
                var _userFullName = _single_user_chat.attr('data-full-name')
                var _userAvatar = _single_user_chat.attr('data-user-avatar')
                jQuery('#chat-with-username strong').html(_userFullName);
                jQuery('#chat-with-image img').attr('src', _userAvatar);
                startChatRoom(_url_userName)
            }




            function startChatRoom(username) {

                jQuery('#chattroom-message-list').attr('data-chat-room-list', username)
                jQuery("#chattroom-message-list").html($(".skeletion-chat-item").clone().show())

                jQuery('[data-user-name="' + username + '"] .message-unread-count').html('0')
                jQuery('[data-user-name="' + username + '"] .message-unread-count').hide()

                jQuery('[data-chat-profile-link]').attr('href', '/profile/' + username)

                refreshFileComponent();

                chatActive()
                $.ajax({
                    type: 'GET',
                    url: '{{ route('frontend.chat.get.single') }}/' + username,
                    success: function(data) {
                        if ('cannot_chat' in data) {
                            // jQuery('#chat-form').addClass('cannot_chat').html('');
                            jQuery('#chat-form').addClass('cannot_chat');
                        } else {
                            if (jQuery('#chat-form').hasClass('cannot_chat')) {
                                jQuery('#chat-form').removeClass('cannot_chat');
                            };
                        }
                        jQuery('#chat_with').val(data.chat_with.id)
                        _chat_with_id = data.chat_with.id
                        $("#chattroom-message-list").html(data.html);
                        goToBottom()
                    }
                });
            }

            jQuery('.single-chat-room-start').click(function() {
                var _single_user_chat = jQuery(this);
                var _userName = _single_user_chat.attr('data-user-name')
                var _userFullName = _single_user_chat.attr('data-full-name')
                var _userAvatar = _single_user_chat.attr('data-user-avatar')
                jQuery('#chat-with-username strong').html(_userFullName);
                jQuery('#chat-with-image img').attr('src', _userAvatar);
                window.location = '#' + _userName;;
                jQuery('#chat-form')[0].reset();
                // startChatRoom(_userName)
            })




            $(document).on('submit', '#chat-form', function() {

                jQuery('#message_box').removeClass('message-error')
                if (!jQuery('#message_box').val() && !jQuery('#message_attachment').val()) {
                    jQuery('#message_box').addClass('message-error')
                    return false;
                }
                var formData = new FormData(this);
                if (chat_image_ids.length != 0) {
                    const urlArray = chat_image_ids.map(function(object) {
                        return object.url;
                    });
                    formData.append('urlArray', urlArray);
                }
                $.ajax({
                    type: 'POST',
                    url: '{{ route('frontend.chat.store') }}',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        // jQuery("#chat-room-message-temp").addClass('sending')

                        // const file = jQuery('#message_attachment')[0].files
                        // if (file.length > 0) {

                        //     for (var i = 0; i < file.length; i++) {

                        //         let reciever_html = jQuery("#chat-room-message-temp").clone().appendTo(
                        //             '#chattroom-message-list')
                        //         let _message = jQuery('#chat-form #message_box').val();
                        //         reciever_html.show();
                        //         reciever_html.find('.chat-single-message_message').html('<img src="' + URL
                        //             .createObjectURL(file[i]) + '" class="attachment_chat_image">')
                        //     }
                        // } else {
                        //     let reciever_html = jQuery("#chat-room-message-temp").clone().appendTo(
                        //         '#chattroom-message-list')
                        //     let _message = jQuery('#chat-form #message_box').val();
                        //     reciever_html.find('.chat-single-message_message').html(_message)
                        //     reciever_html.show();
                        // }

                        // jQuery("#chattroom-message-list .sending").removeAttr('id')

                        // jQuery('#message_box').val('')
                        // jQuery('#message_attachment').val('')
                        // jQuery('.chat-image-preview-container').html('')

                        // goToBottom()

                        jQuery("#chat-room-message-temp").addClass('sending')

                        const file = chat_image_ids;

                        if (file.length > 0) {
                            for (var i = 0; i < file.length; i++) {
                                let reciever_html = jQuery("#chat-room-message-temp").clone().appendTo(
                                    '#chattroom-message-list')
                                let _message = jQuery('#chat-form #message_box').val();
                                reciever_html.show();
                                reciever_html.find('.chat-single-message_message').html('<img src="' +
                                    chat_image_ids[i].url +
                                    '" class="attachment_chat_image show-single-image-modal">')
                            }
                        } else {
                            let reciever_html = jQuery("#chat-room-message-temp").clone().appendTo(
                                '#chattroom-message-list')
                            let _message = jQuery('#chat-form #message_box').val();
                            reciever_html.find('.chat-single-message_message').html(_message)
                            reciever_html.show();
                        }

                        jQuery("#chattroom-message-list .sending").removeAttr('id')

                        jQuery('#message_box').val('')
                        jQuery('#message_attachment').val('')
                        // jQuery('.chat-image-preview-container').html('')
                        $(".chat-image-div").remove();
                        showAndHideDiv(['.message_attachment_label'], [
                            '.chat-image-preview-container-parent',
                            '.chat-add-more-image', '.chat-image-container'
                        ]);


                        goToBottom()
                    },
                    success: function(data) {
                        //alert(data);
                        chat_image_ids = [];

                        return false;


                    },
                    complete: function() {
                        //  alert("Data uploaded successfully.");
                        jQuery("#chattroom-message-list .sending").removeClass('sending')
                        goToBottom()

                        return false;

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //    alert("Some problem occurred, please try again.");
                        return false;

                    }
                });
                return false;

            });




            Echo.private(`chat.` + window.Laravel.user)
                .listenForWhisper('typing', (e) => {
                    jQuery('[data-user-name="' + e.name + '"] .typing').show()
                    setTimeout(() => {
                        jQuery('[data-user-name="' + e.name + '"] .typing').hide()
                    }, 1000);
                });
            // and when someone types in a few keywords
            $("#message_box").on('keyup', function(e) {
                Echo.private(`chat.` + _chat_with_id)
                    .whisper('typing', {
                        name: '{{ auth()->user()->name }}',
                    });

            });

            $(".search-friends").on('keyup', function() {
                var value = $(this).val().toLowerCase()
                // console.log(value)
                $(".userpanel .friend-list-users").each(function() {
                    if ($(this).text().toLowerCase().search(value) > -1) {
                        $(this).closest('.single-chat-room-start').show();
                        // $(this).prev('.subjectName').last().show();
                    } else {
                        // $(this).hide();
                        $(this).closest('.single-chat-room-start').hide();

                    }
                });
            })

            // image-preview-work
            $(document).on('click', '.message_attachment_label', function(e) {
                e.preventDefault();

                $('.chat-image-container').toggle(700);
                $('.chat-image-preview-container').children().hide();
                $('#message_attachment').val('');
            });


            let obj = $(".chat-image-container");


            document.getElementById('message_attachment').addEventListener('change', () => {
                let chat_images_files = document.getElementById('message_attachment').files;

                let fileType = chat_images_files[0].type.substring(0, 5);
                handleFileUploadChat(chat_images_files, obj, fileType);
            });

            obj.on('dragenter', function(e) {
                e.stopPropagation();
                e.preventDefault();
            });

            obj.on('dragover', function(e) {
                e.stopPropagation();
                e.preventDefault();
            });

            obj.on('drop', function(e) {
                e.preventDefault();
                let files = e.originalEvent.dataTransfer.files;
                document.getElementById('message_attachment').files = files;
                let fileType = files[0].type.substring(0, 5);
                handleFileUploadChat(files, obj, fileType);
            });

            $(document).on('dragenter', function(e) {
                e.stopPropagation();
                e.preventDefault();
            });

            $(document).on('dragover', function(e) {
                e.stopPropagation();
                e.preventDefault();
                //  obj.css('border', '2px dotted #0B85A1');
            });

            $(document).on('drop', function(e) {
                e.stopPropagation();
                e.preventDefault();
            });
        </script>
    @endpushOnce
@endsection
