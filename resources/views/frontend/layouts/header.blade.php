{{-- this is used as a header  or navbar which is sticky on all pages --}}

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="main-responsive-menu">
            <div class="mobile-global-search-new">
            @include('components.GlobalSearch.mobile-search')
        </div>
            <div class="responsive-burger-menu d-lg-none mobile-menu-burger">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('frontend.home') }}" class="navbar-brand d-flex align-items-center">
                <img src={{ asset('frontend/assets/images/logo(1).png') }} alt="image" class="site-logo">
            </a>

            <div class="search-box m-auto tablet-search-view">
                <form action="{{ route('frontend.global.search') }}" class="global-search-form">
                    <div class="row search-select-category">
                        <div class="col-3 p-1">
                            <select class="global-search-filter" name="global_search_filter">
                                {{-- <option value="" disabled selected>Filter By</option> --}}
                                <option @if (request()->global_search_filter == 'Member') selected @endif value="Member">Member
                                </option>
                                <option @if (request()->global_search_filter == 'Post') selected @endif {{-- @isset(request()->global_search_filter) @if (request()->global_search_filter == 'Post') selected @endif --}}
                                    value="Post">Post
                                </option>
                            </select>
                        </div>
                        <div class="col-6">
                            <input type="text" class="input-search global-search-input" id="global-search"
                                name="global_search_keyword" placeholder="Search..."
                                value="{{ request()->global_search_keyword }}" autocomplete="off">

                        </div>
                        <div class="col-3"><button type="submit"><i class="ri-search-line"></i></button></div>
                    </div>
                </form>


                <ul id="myUL" class="global-search-suggestions">
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-burger-menu m-auto">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>



                <div class="search-box m-auto">
                    <form action="{{ route('frontend.global.search') }}" class="global-search-form">
                        <div class="row search-select-category">
                            <div class="col-3 p-1">
                                <select class="global-search-filter" name="global_search_filter">
                                    {{-- <option value="" disabled selected>Filter By</option> --}}
                                    <option @if (request()->global_search_filter == 'Member') selected @endif value="Member">Member
                                    </option>
                                    <option @if (request()->global_search_filter == 'Post') selected @endif {{-- @isset(request()->global_search_filter) @if (request()->global_search_filter == 'Post') selected @endif --}}
                                        value="Post">Post
                                    </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" class="input-search global-search-input" id="global-search"
                                    name="global_search_keyword" placeholder="Search..."
                                    value="{{ request()->global_search_keyword }}" autocomplete="off">

                            </div>
                            <div class="col-3"><button type="submit"><i class="ri-search-line"></i></button></div>
                        </div>
                    </form>


                    <ul id="myUL" class="global-search-suggestions">
                    </ul>
                </div>



                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{ route('frontend.home') }}" class="home-btn"><i class="flaticon-home"></i></a>
                    </div>

                    {{-- noti --}}
                    <div class="option-item">
                        <div class="dropdown friend-requests-nav-item">
                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="friend-requests-btn">
                                    <i class="flaticon-user"></i>
                                    <span
                                        class="unreadfollow-count">{{ getUserNotificationsCount(auth()->id(), 'follow') }}</span>
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="friend-requests-header d-flex justify-content-between align-items-center">
                                    <h3>Follow Requests</h3>
                                    <i class="flaticon-menu"></i>
                                </div>

                                <div class="friend-requests-body" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -15px -15px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content follow-dropdown-div"
                                                        style="padding: 0px 15px 15px;">

                                                        @include('components.sub-components.notifications.followNotification')

                                                        <div class="view-all-requests-btn">
                                                            <a onclick="HeaderSPut(event,'follow-notifications','notification-page')"
                                                                class="default-btn">View All
                                                                Requests</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 660px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 185px; transform: translate3d(0px, 0px, 0px); display: block;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option-item">
                        <div class="dropdown messages-nav-item setMarkAsRead" data-action='open' data-foruse='message'>
                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="messages-btn">
                                    <i class="flaticon-email"></i>
                                    <span
                                        class="unreademailnot unreadmessage-count">{{ getUserNotificationsCount(auth()->id(), 'message') }}</span>
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="messages-header d-flex justify-content-between align-items-center">
                                    <h3>Messages</h3>
                                    <i class="flaticon-menu"></i>
                                </div>
                                <div class="messages-body" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -15px -15px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content all-message-noti" style="padding: 0px 15px 15px;">
                                                        @include('components.sub-components.notifications.messageNotification')
                                                        <div class="view-all-messages-btn">
                                                            <a href="/chatroom" class="default-btn">View All
                                                                Messages</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 660px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 185px; transform: translate3d(0px, 0px, 0px); display: block;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option-item">
                        <div class="dropdown notifications-nav-item setMarkAsRead" data-action='open' data-foruse='notification'>
                            <a href="{{ route('frontend.notifications') }}" class="dropdown-bs-toggle" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="notifications-btn">
                                    <i class="flaticon-bell"></i>
                                    <span
                                        class="unreadnotifications-count">{{ getUserNotificationsCount(auth()->id(), 'notification') }}</span>
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="notifications-header d-flex justify-content-between align-items-center">
                                    <h3>Notifications</h3>
                                    <i class="flaticon-menu"></i>
                                </div>
                                <div class="notifications-body" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -15px -15px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content notifications-dropdown-div"
                                                        style="padding: 0px 15px 15px;">
                                                        @include('components.sub-components.notifications.notification',
                                                            [
                                                                'notification_page' => false,
                                                                'notifications' => getAuthUnreadNotification(),
                                                                'new' => hasAuthUnreadNotification(),
                                                            ])
                                                        <div class="view-all-notifications-btn">
                                                            <a onclick="HeaderSPut(event,'all-notifications','notification-page')"
                                                                class="default-btn">View All
                                                                Notifications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 612px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 200px; transform: translate3d(0px, 0px, 0px); display: block;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="option-item">
                        <div class="dropdown notifications-nav-item">
                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="notifications-btn">
                                    <i class="flaticon-bell"></i>
                                    <span>1</span>
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="notifications-header d-flex justify-content-between align-items-center">
                                    <h3>Notifications</h3>
                                    <i class="flaticon-menu"></i>
                                </div>
                                <div class="notifications-body" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -15px -15px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 0px 15px 15px;">
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-11.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="like-notification">
                                                                <img
                                                                    src={{ asset('frontend/assets/images/like.png') }} />
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">James Vanwin</a></h4>
                                                                <span>Likes Your Post Content</span>
                                                                <span class="main-color">20 Minites Ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-12.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="comment-notification">
                                                                <img
                                                                    src={{ asset('frontend/assets/images/comments.png') }} />
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">Harry Lopez</a></h4>
                                                                <span>Commented On Your Post</span>
                                                                <span class="main-color">2 Days Ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-13.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="subs-notification">
                                                                <img
                                                                    src={{ asset('frontend/assets/images/subs.png') }} />

                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">Matthew Smith</a></h4>
                                                                <span>Subscribe To Your Content</span>
                                                                <span class="main-color">3 Days Ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="subs-notification">
                                                                <img
                                                                    src={{ asset('frontend/assets/images/subs.png') }} />
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">James Vanwin</a></h4>
                                                                <span>Subscribe To Your Content</span>
                                                                <span class="main-color">20 Minites Ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-6.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">Harry Lopez</a></h4>
                                                                <span>Sent You A Friend Request</span>
                                                                <span class="main-color">2 Days Ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="item d-flex justify-content-between align-items-center">
                                                            <div class="figure">
                                                                <a href="#"><img
                                                                        src={{ asset('frontend/assets/images/user/user-7.jpg') }}
                                                                        class="rounded-circle" alt="image"></a>
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">Matthew Smith</a></h4>
                                                                <span>Add A Photo In Design Group</span>
                                                                <span class="main-color">3 Days Ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="view-all-notifications-btn">
                                                            <a href="{{ route('frontend.notifications') }}"
                                                                class="default-btn">View All Notifications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 612px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 200px; transform: translate3d(0px, 0px, 0px); display: block;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- noti --}}


                    <div class="option-item">
                        <a href="{{ route('frontend.my-profile') }}">
                            <div class="menu-profile">

                                <img id="header-profile" src={{ auth()->user()->avatar }} class="rounded-circle"
                                    alt="image">

                                <span class="name">{{ auth()->user()->detail->first_name }}</span>
                                <span class="status-online"></span>
                            </div>
                        </a>
                    </div>
                    <div class="option-item">
                        <div class="dropdown profile-nav-item">
                            <a href="{{ route('frontend.my-profile') }}" class="dropdown-bs-toggle" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu">
                                <div class="profile-header">
                                    <h3>{{ auth()->user()->detail->full_name }}</h3>
                                    <a href="mailto:William@gmail.com">{{ auth()->user()->email }}</a>
                                </div>
                                <ul class="profile-body">
                                    <li><i class="flaticon-user"></i> <a href="{{ route('frontend.my-profile') }}">My
                                            Profile</a></li>
                                    <li><i class="flaticon-settings"></i> <a
                                            href="{{ route('frontend.settings') }}">Setting</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            <i class="flaticon-logout"> </i>

                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <span class="notification-count-mobile notification-animation-mobile">0</span>
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('frontend.home') }}" class="home-btn"><i
                                    class="flaticon-home"></i></a>
                        </div>

                        {{-- noti --}}
                        <div class="option-item">
                            <a onclick="HeaderSPut(event,'follow-notifications','notification-page')">
                                <div class="friend-requests-nav-item">
                                    <div class="friend-requests-btn">
                                        <i class="flaticon-user"></i>
                                        <span
                                            class="unreadfollow-count">{{ getUserNotificationsCount(auth()->id(), 'follow') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="option-item">
                            <a href="{{ route('frontend.chatroom') }}">
                                <div class="messages-nav-item">
                                    <div class="messages-btn">
                                        <i class="flaticon-email"></i>
                                        <span class="unreademailnot">2</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="option-item">
                            <a onclick="HeaderSPut(event,'all-notifications','notification-page')">
                                <div class="notifications-nav-item">
                                    <div class="notifications-btn">
                                        <i class="flaticon-bell"></i>
                                        <span
                                            class="unreadnotifications-count">{{ getUserNotificationsCount(auth()->id(), 'notification') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="option-item">
                            <a href="{{ route('frontend.my-profile') }}">
                                <div class="menu-profile">

                                    <img id="header-profile" src={{ auth()->user()->avatar }} class="rounded-circle"
                                        alt="image">

                                    <span class="name">{{ auth()->user()->detail->first_name }}</span>
                                    <span class="status-online"></span>
                                </div>
                            </a>
                        </div>
                        <div class="option-item">
                            <div class="dropdown profile-nav-item">
                                <a href="{{ route('frontend.my-profile') }}" class="dropdown-bs-toggle"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                </a>

                                <div class="dropdown-menu">
                                    <div class="profile-header">
                                        <h3>{{ auth()->user()->detail->full_name }}</h3>
                                        <a href="mailto:William@gmail.com">{{ auth()->user()->email }}</a>
                                    </div>
                                    <ul class="profile-body">
                                        <li><i class="flaticon-user"></i> <a
                                                href="{{ route('frontend.my-profile') }}">My
                                                Profile</a></li>
                                        <li><i class="flaticon-settings"></i> <a
                                                href="{{ route('frontend.settings') }}">Setting</a></li>

                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                <i class="flaticon-logout"> </i>

                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('sub-js')
    <script>
        $(document).on('click', '.global-search-suggestions li a', function() {
            $('.global-search-input').val($(this).text());
            $('.global-search-suggestions').hide();
            $('.global-search-form').submit();
        })

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        $('.global-search-input').on('keyup', function(e) {
            e.preventDefault();
            filter = $('.global-search-filter').val();
            keyword = $(this).val();
            $('.global-search-suggestions').show();
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.global.search') }}",
                data: {
                    'global_search_filter': filter,
                    'suggestion': keyword
                },
                success: function(response) {
                    $(".global-search-suggestions").html('');
                    $.each(response.data, function(indexInArray, valueOfElement) {
                        $(".global-search-suggestions").append(
                            `<li value="${valueOfElement}"><a href="#"> ${capitalizeFirstLetter(valueOfElement)}</a></li>`
                        );
                    });
                }
            });

        });
    </script>
@endpush
