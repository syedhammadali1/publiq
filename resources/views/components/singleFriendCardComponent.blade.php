{{-- This component has been used in profile page as card --}}
@isset($user)
    <div class="single-friends-card">
        <div class="friends-image">
            <a href="{{ route('frontend.single.profile', $user->name) }}">
                @if ($user->getFirstMediaUrl('cover') == '')
                    <img src="{{ asset('frontend/assets/images/my-profile-bg.jpg') }}" alt="toppings"
                        class="background-img-height">
                @else
                    <img src="{{ $user->getFirstMediaUrl('cover') }}" alt="toppings" class="background-img-height">
                @endif
            </a>
            <div class="icon">
                <a href="{{ route('frontend.single.profile', $user->name) }}"><i class="flaticon-user"></i></a>
            </div>
        </div>
        <div class="friends-content">
            <div class="friends-info d-flex justify-content-between align-items-center">
                <a href="{{ route('frontend.single.profile', $user->name) }}">
                    <img src="{{ $user->avatar }}" alt="toppings" class="fix-profile-img-size">
                </a>
                <div class="text ms-3">
                    <h3>
                        <a href="{{ route('frontend.single.profile', $user->name) }}" class="overflow-hiddenn"
                            style="max-width: 12ch;">{{ @$user->name }}</a>
                    </h3>
                    <span>{{ $user->mutual_followers_count }} Mutual Followers</span>
                </div>
            </div>
            <ul class="statistics">
                <li>
                    <a>
                        <span class="item-number">{{ $user->count_media('images') }}</span>
                        <span class="item-text">Photos Posts</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="item-number">{{ $user->count_media('video') }}</span>
                        <span class="item-text">Videos Post</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="item-number">{{ $user->count_media('audio') }}</span>
                        <span class="item-text">Audios Posts</span>
                    </a>
                </li>
            </ul>
            @isset($paidBtn)
                <div class="button-group d-flex justify-content-between align-items-center">
                    <div class="send-message-btn">
                        <button type="submit">Paid Content</button>
                    </div>
                </div>
            @endisset

            @isset($actionBtn)
                {{-- <div class="button-grou d-flex justify-content-between align-items-center">
                    <div class="add-friend">
                        <button type="submit">Subscribe</button>
                    </div>
                    <div class="send-message">
                        <button type="submit">Follow</button>
                    </div>
                </div> --}}
            @endisset

        </div>
    </div>
@endisset
