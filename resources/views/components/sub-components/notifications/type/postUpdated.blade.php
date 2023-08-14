@isset($notification)
    <div class="item d-flex justify-content-between align-items-center notification-hover notidiv-{{ $notification->id }} post-modal @if ($notification_page) my-5 @endif"
        data-id="{{ $notification->data['post_id'] }}">
        <div class="figure">
            @if ($notification_page)
                <div class="comment-notification-page">
                    <img src={{ asset('frontend/assets/images/user-accept.png') }}>
                </div>
            @endif
            <img src="{{ asset('frontend/assets/authui/assets/img/img/apple-touch-icon-72x72-precomposed.png') }}"
                class="rounded-circle" alt="image">
        </div>
        @if (!$notification_page)
            <div class="comment-notification">
                <img src={{ asset('frontend/assets/images/user-accept.png') }} />
            </div>
        @endif

        <div class="text">
            <h4>
                {{-- <a
                    href="{{ route('frontend.single.profile', getUserAttribute($notification->data['receiver_id'], 'username')) }}">
                    {{ @getUserAttribute($notification->data['receiver_id'], 'name') }}
                </a> --}}
            </h4>
            <span>Your Post Has Been Updated Successfully </span>
            <span class="main-color">{{ $notification->created_at->diffForHumans() }}</span>
        </div>
        @if ($new)
            <div class="main-unread">
                <div class="unread-dot"></div>
            </div>
        @endif
    </div>
@endisset
