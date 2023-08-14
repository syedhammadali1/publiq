{{-- This component has been used in home page for showing login user details --}}
@isset($skeleton)
    <div class="widget widget-view-profile">
        <div class="profile-bg-view skeleton">
        </div>
        <div class="profile-box d-flex justify-content-between align-items-center">
            <a href="">
                <span class="skeleton skeleton-img"></span>
            </a>
            <div class="text ms-2">
                <h3><a href="#" class="overflow-hiddenn skeleton skeleton-text"></a></h3>
                <span class="skeleton skeleton-text"></span>
            </div>
        </div>
        <ul class="profile-statistics skeleton">
            <li>
                <a href="#" class="skeleton">
                    <span class="item-number"></span>
                    <span class="item-text"></span>
                </a>
            </li>
            <li>
                <a href="#" class="skeleton">
                    <span class="item-number"></span>
                    <span class="item-text"></span>
                </a>

            </li>
            <li>
                <a href="#" class="skeleton">
                    <span class="item-number"></span>
                    <span class="item-text"></span>
                </a>
            </li>
        </ul>
        <div class="profile-likes">
            <span class="skeleton skeleton-text"></span>
            <ul>
                <li>
                    <a href="#">
                        <span class="skeleton skeleton-img"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="skeleton skeleton-img"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="skeleton skeleton-img"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="profile-btn">
            <a href="" class="skeleton h-50" style="width: 110px; border-radius: 8px; padding: 10px 25px;"></a>
        </div>
        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.render.home') }}",
                    data: {
                        'render_for': 'widgetViewProfile'
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widget-view-profile").replaceWith(response);
                        }, 1000);
                    }
                });
            });
        </script>
    </div>
@else
    <div class="widget widget-view-profile">
        <img class="profile-bg-view" src={{ $user->cover }} alt="image">
        <div class="profile-box d-flex justify-content-between align-items-center">
            <a href="{{ route('frontend.my-profile') }}">
                <img src="{{ $user->avatar }}" alt="image" class="fix-profile-img-size" />
            </a>
            <div class="text ms-2">
                <h3><a href="{{ route('frontend.my-profile') }}" class="overflow-hiddenn">{{ $user->detail->full_name }}</a>
                </h3>
                <span>{{ $user->name }}</span>
            </div>
        </div>
        <ul class="profile-statistics">
            <li>
                <a href="{{ route('frontend.my-profile') }}" onclick="ProfileSPut(event,'photos')">
                    <span class="item-number">{{ $user->media_count_images }}</span>
                    <span class="item-text">Photos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('frontend.my-profile') }}" onclick="ProfileSPut(event,'Videos')">
                    <span class="item-number">{{ $user->media_count_videos }}</span>
                    <span class="item-text">Videos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('frontend.my-profile') }}" onclick="ProfileSPut(event,'Audios')">
                    <span class="item-number">{{ $user->media_count_audios }}</span>
                    <span class="item-text">Audios</span>
                </a>
            </li>
        </ul>
        @if ($subscriberUsers->isNotEmpty())
        <div class="profile-likes">
            <span>Latest Subscribers</span>
            <ul>
                @foreach ($subscriberUsers as $subscriberUser)
                    <li>
                        <a href="{{ route('frontend.single.profile', $subscriberUser->name) }}">
                            <img src="{{ $subscriberUser->avatar }}" alt="image" />
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        @endif

        <div class="profile-btn">
            <a href="{{ route('frontend.my-profile') }}" class="default-btn">View Profile</a>
        </div>
    </div>

    <script>
        // to handle session
        function ProfileSPut(e, params) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile',
                    name: params
                },
                success: function(response) {
                    $(location).prop('href', '{{ route('frontend.my-profile') }}')
                }
            });
        }
    </script>
@endisset
