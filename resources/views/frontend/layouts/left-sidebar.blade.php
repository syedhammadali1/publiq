{{-- this is used as a left side bar in which we are showing logined user tabs --}}

<div class="sidemenu-area mt-2">
    <div class="responsive-burger-menu d-lg-none d-block">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item  @if (request()->route()->getName() == 'frontend.home') active @endif ">
                <a href={{ route('frontend.home') }} class="nav-link">
                    <span class="icon"><i class="flaticon-newspaper"></i></span>
                    <span class="menu-title">News Feed</span>
                </a>
            </li>
            <li class="nav-item @if (request()->route()->getName() == 'frontend.notifications') active @endif">
                <a href={{ route('frontend.notifications') }} class="nav-link">
                    <span class="icon"><i class="flaticon-bell"></i></span>
                    <span class="menu-title">Notifications</span>
                </a>
            </li>
            <li class="nav-item @if (request()->route()->getName() == 'frontend.chatroom') active @endif">
                <a href={{ route('frontend.chatroom') }} class="nav-link">
                    <span class="icon"><i class="flaticon-comment-1"></i></span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            {{-- <li class="nav-item @if (request()->route()->getName() == 'frontend.my-profile')  @endif">
                <a href={{ route('frontend.my-profile') }} class="nav-link">
                    <span class="icon"><i class="flaticon-friends"></i></span>
                    <span class="menu-title">Friends</span>
                </a>
            </li> --}}
            <li class="nav-item nav-Followers @if (request()->route()->getName() == 'frontend.my-profile' && session()->get('my-profile') == 'Followers') active @endif">
                <a onclick="HeaderSPut(event,'Followers','my-profile')" href={{ route('frontend.my-profile') }}
                    class="nav-link">
                    <span class="icon"><i class="flaticon-friends"></i></span>
                    <span class="menu-title">Followers</span>
                </a>
            </li>
            <li class="nav-item nav-Subscriber @if (request()->route()->getName() == 'frontend.my-profile' && session()->get('my-profile') == 'Subscriber') active @endif">
                <a onclick="HeaderSPut(event,'Subscriber','my-profile')" href={{ route('frontend.my-profile') }}
                    class="nav-link">
                    <span class="icon"><i class="flaticon-team"></i></span>
                    <span class="menu-title">Subscribers</span>
                </a>
            </li>
            <li class="nav-item nav-photos @if (request()->route()->getName() == 'frontend.my-profile' && session()->get('my-profile') == 'photos') active @endif">
                <a onclick="HeaderSPut(event,'photos','my-profile')" href={{ route('frontend.photos') }}
                    class="nav-link">
                    <span class="icon"><i class="flaticon-gallery"></i></span>
                    <span class="menu-title">My Photos</span>
                </a>
            </li>
            <li class="nav-item nav-Videos @if (request()->route()->getName() == 'frontend.my-profile' && session()->get('my-profile') == 'Videos') active @endif">
                <a onclick="HeaderSPut(event,'Videos','my-profile')" href={{ route('frontend.videos') }}
                    class="nav-link">
                    <span class="icon"><i class="flaticon-video"></i></span>
                    <span class="menu-title">My Videos</span>
                </a>
            </li>
            <li class="nav-item nav-Audios @if (request()->route()->getName() == 'frontend.my-profile' && session()->get('my-profile') == 'Audios') active @endif">
                <a onclick="HeaderSPut(event,'Audios','my-profile')" href={{ route('frontend.audios') }}
                    class="nav-link">
                    <span class="icon">
                        <i class="fa fa-volume-up"></i>
                    </span>
                    <span class="menu-title">My Audios</span>
                </a>
            </li>
            <!-- <li class="nav-item @if (request()->route()->getName() == 'frontend.video') active @endif">
                <a href={{ route('frontend.live-chat') }} class="nav-link">
                    <span class="icon"><i class="flaticon-video"></i></span>
                    <span class="menu-title">Video</span>
                </a>
            </li>
            <li class="nav-item @if (request()->route()->getName() == 'frontend.weather') active @endif">
                <a href={{ route('frontend.weathers') }} class="nav-link">
                    <span class="icon"><i class="flaticon-cloudy"></i></span>
                    <span class="menu-title">Weather</span>
                </a>
            </li>
            <li class="nav-item @if (request()->route()->getName() == 'frontend.marketplace') active @endif">
                <a href={{ route('frontend.marketplaces') }} class="nav-link">
                    <span class="icon"><i class="flaticon-online-shopping"></i></span>
                    <span class="menu-title">Marketplace</span>
                </a>
            </li> -->
            @auth

                <li class="nav-item ">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <span class="icon"><i class="flaticon-logout"></i></span>
                        <span class="menu-title"> {{ __('Logout') }}
                        </span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">
                        <span class="icon"><i class="flaticon-user"></i></span>
                        <span class="menu-title">Login</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <span class="icon"><i class="flaticon-information"></i></span>
                        <span class="menu-title">Register</span>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</div>


@push('sub-js')
    <script>
        function HeaderSPut(e, params, forSession) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: forSession,
                    name: params
                },
                success: function(response) {
                    if (forSession == 'my-profile') {
                        $(location).prop('href', '{{ route('frontend.my-profile') }}')
                    }
                    if (forSession == 'notification-page') {
                        $(location).prop('href', '{{ route('frontend.notifications') }}')
                    }

                    if (forSession == 'member-all-photos') {
                        $(location).prop('href', '{{ route('frontend.photos') }}')
                    }
                    if (forSession == 'member-all-videos') {
                        $(location).prop('href', '{{ route('frontend.videos') }}')
                    }
                    if (forSession == 'member-all-audio') {
                        $(location).prop('href', '{{ route('frontend.audios') }}')
                    }
                }
            });
        }
    </script>
@endpush
