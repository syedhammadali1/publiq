@isset($user)
    {{-- @dd($user, $authUser) --}}
    <div class="content-page-box-area content-page-box-area-single-profile">
        <div class="my-profile-inner-box">
            <div class="profile-cover-image">
                <img src="{{ $user->cover }}" alt="toppings">
                <div class="profile-info-box">
                    <div class="inner-info-box d-flex justify-content-between align-items-center">
                        <div class="info-image-1">
                            <a>

                                <img src="{{ $user->avatar }}" alt="toppings" class="profile-image-view">

                            </a>
                        </div>
                        <div class="info-text ms-3 mt-2">
                            <h3><a>{{ $user->detail->full_name }}</a></h3>
                            <span><a>{{ $user->name }}</a></span>

                            <ul class="statistics1">
                                <li>
                                    <a>
                                        <span class="item-number">{{ $user->my_followers_count }}</span>
                                        <span class="item-text">Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="item-number">{{ $user->my_following_count }}</span>
                                        <span class="item-text">Following</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="item-number">{{ $user->my_subscribers_count }}</span>
                                        <span class="item-text">Subscribers</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="item-number">{{ $user->my_subscribeds_count }}</span>
                                        <span class="item-text">Subscribed</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <ul class="statistics">
                            <li>
                                <a>
                                    <span class="item-number">{{ $user->media_count_images }}</span>
                                    <span class="item-text">Photos</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="item-number">{{ $user->media_count_videos }}</span>
                                    <span class="item-text">Videos</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="item-number">{{ $user->media_count_audios }}</span>
                                    <span class="item-text">Audios</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-6" id="single-timeline-new-mobile">
                            @if ($authUser->isFollowingTheUser || $authUser->hasSubscribed)
                                <div class="profile-list-tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        {{-- timeline --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="timeline-tab" data-bs-toggle="tab" href="#timeline"
                                                onclick="SPut('timeline')" role="tab"
                                                aria-controls="timeline">Timeline</a>
                                        </li>

                                        {{-- about --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about"
                                                role="tab" aria-controls="about" onclick="SPut('about')">About</a>
                                        </li>
                                        @if ($authUser->isFollowingTheUser)
                                            {{-- followers --}}
                                            <li class="nav-item">
                                                <a class="nav-link" id="Followers-tab" data-bs-toggle="tab"
                                                    href="#Followers" role="tab" aria-controls="Followers"
                                                    onclick="SPut('Followers')">Followers</a>
                                            </li>
                                        @endif

                                        {{-- subscribers --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="Subscriber-tab" data-bs-toggle="tab" href="#Subscriber"
                                                role="tab" aria-controls="Subscriber"
                                                onclick="SPut('Subscriber')">Subscribers</a>
                                        </li>

                                        {{-- Photos --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#photos"
                                                role="tab" aria-controls="photos" onclick="SPut('photos')">Photos</a>
                                        </li>

                                        {{-- Audios --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="Audios-tab" data-bs-toggle="tab" href="#Audios"
                                                role="tab" aria-controls="Audios" onclick="SPut('Audios')">Audios</a>
                                        </li>

                                        {{-- Videos --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="Videos-tab" data-bs-toggle="tab" href="#Videos"
                                                role="tab" aria-controls="Videos" onclick="SPut('Videos')">Videos</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        @endif
                        <div class="col-6" id="single-profile-social-mobile">
                            <div class="profile-social">
                                <span class="subscribe-div">
                                    @if ($authUser->hasSubscribed)
                                        <span class="un-subscribe">
                                            <button class="unmember-add ">Un-Subscribe</button>
                                        </span>
                                    @else
                                        <span class="add-subscribe">
                                            <button class="member-add"><i class="fa fa-dollar"></i>Subscribe</button>
                                        </span>
                                    @endif
                                </span>

                                @if($authUser->isFollowingTheUser)
                                <span class="for-chat-button">
                                    <span class="chat-msg-btn" style="float: left;">
                                        <button onclick="window.location='{{ route('frontend.chatroom') }}#{{ $user->name }}'" class="member-add chat-msg-req"><span><i class="fa fa-comment" aria-hidden="true"></i>Chat</span></button>
                                    </span>
                                </span>
                                @endif

                                <span class="follow-div">
                                    @if ($authUser->hasRequestedToFollow)
                                        <span class="pending-follow" style="float: left;">
                                            <button class="unmember-add jsagdbuiadf"><span>Requested</span></button>
                                        </span>
                                    @elseif($authUser->isFollowingTheUser)
                                        <span class="pending-follow" style="float: left;">
                                            <button class="member-add ubadycfrg3uf"><span><i class="fa fa-user" aria-hidden="true"></i>Following</span></button>
                                        </span>
                                    @elseif(!$authUser->isFollowingTheUser && $user->isFollowingTheUser)
                                        <span class="add-follow" style="float: left;">
                                            <button class="member-add followback"><span><i class="fa fa-user" aria-hidden="true"></i>Follow Back</span></button>
                                        </span>
                                    @elseif(!$authUser->isFollowingTheUser)
                                        <span class="add-follow" style="float: left;">
                                            <button class="member-add follow"><span><i class="fa fa-user" aria-hidden="true"></i>Follow</span></button>
                                        </span>
                                    @endif
                                    @if ($user->hasRequestedToFollow)
                                        <span class="hasRequestedToFollowUser">
                                            <span class="accept-follow" style="float: left;">
                                                <button class="member-add">Accept</button>
                                            </span>
                                            <span class="decline-follow" style="float: left;">
                                                <button class="member-add ">Decline</button>
                                            </span>
                                        </span>
                                    @endif
                                </span>

                                <span style="float: right;">
                                    <div class="dropdown">
                                        <button id="blockperson" class="" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-ellipsis-vertical"></i>
                                        </button>
                                        <ul id="reportblock" class="dropdown-menu" style="">
                                            {{-- <li id="blocklink">
                                                <a id="blockicon"class="dropdown-item d-flex align-items-center block-user-btn"
                                                    href="#">
                                                    <i class="flaticon-user"></i>
                                                    <p>Block</p>
                                                </a>
                                            </li> --}}
                                            <li id="blocklink">
                                                <a id="blockicon"
                                                    class="dropdown-item d-flex align-items-center report-user-btn"
                                                    data-user="{{ $user->name }}" href="#">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    <p>Report</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($authUser->isFollowingTheUser || $authUser->hasSubscribed)
            <div class="tab-content main-tab">

            </div>
            @include('components.sub-components.loading')
        @else
            <div class="row">
                <div class="private" id="prvate-single-lock">
                    <i class="fa fa-lock" style="font-size: 94px;"></i>
                </div>
                <h1 style="text-align: center;">This Account is Private</h1>
                <div class="private-account-text" style="">
                    <p style="text-align: center;font-size: 21px;">Follow or Subscribe this
                        account to see their photos
                        and
                        videos</p>
                </div>
            </div>
        @endif
    </div>

    @if (!isset($noscript))
        @include('frontend.scripts.singleProfile.profileRequests')
        <script>
            // to handle session
            function SPut(params) {
                $.ajax({
                    url: "{{ route('frontend.session-control') }}",
                    data: {
                        method: 'put',
                        for: 'user-profile',
                        name: params
                    },
                    success: function(response) {
                        $('.main-tab').html('');
                        $('.starter-loading-div').show();
                        $.ajax({
                            type: "GET",
                            url: "{{ route('frontend.profile.page.trigger') }}",
                            data: {
                                for: params
                            },
                            dataType: "html",
                            success: function(response) {
                                $('.main-tab').html(response);
                                $('#' + params + '-tab').addClass("active");
                                $('#' + params).addClass("active show");
                                $('.starter-loading-div').hide();
                            }
                        });

                    }

                });
            }

            $(document).ready(function() {
                $.ajax({
                    url: "{{ route('frontend.session-control') }}",
                    data: {
                        method: 'get',
                        for: 'user-profile',
                    },
                    success: function(result) {
                        var result = result.replace('"', '');
                        var result = result.replace('"', '');
                        if (result == 'null') {
                            var result = 'timeline'
                        }
                        $.ajax({
                            type: "GET",
                            url: "{{ route('frontend.profile.page.trigger') }}",
                            data: {
                                for: result
                            },
                            dataType: "html",
                            success: function(response) {
                                $('.main-tab').html(response);
                                $('#' + result + '-tab').addClass("active");
                                $('#' + result).addClass("active show");
                                $('.starter-loading-div').hide();
                            }
                        });
                    }
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: "{{ route('frontend.session-control') }}",
                    data: {
                        method: 'get',
                        for: 'user-profile',
                    },
                    success: function(result) {
                        var result = result.replace('"', '');
                        var result = result.replace('"', '');
                        if (result == 'null') {
                            var result = 'timeline'
                        }
                        $.ajax({
                            type: "GET",
                            url: "{{ route('frontend.profile.page.trigger') }}",
                            data: {
                                for: result
                            },
                            dataType: "html",
                            success: function(response) {
                                $('.main-tab').html(response);
                                $('#' + result + '-tab').addClass("active");
                                $('#' + result).addClass("active show");
                                $('.starter-loading-div').hide();
                            }
                        });
                    }
                });
            });
        </script>
    @endif

@endisset
