@isset($notification)
    @forelse ($notifications as $notification)
        @include('components.sub-components.notifications.type.userFollowRequest', [
            'page' => true,
        ])
    @empty
        <p class="no-request"></p>
    @endforelse
@else
    @forelse (getAuthUnreadFollowNotification() as $notification)
        @include('components.sub-components.notifications.type.userFollowRequest')
    @empty
        <p class="no-request"></p>
    @endforelse
@endisset
