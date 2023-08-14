@isset($notifications)
    @forelse ($notifications as $notification)
        @if ($notification->type == 'App\Notifications\UserPostLikeNotification')
            @include('components.sub-components.notifications.type.postLike', [
                'notification' => $notification,
                'notification_page' => $notification_page,
                'new' => $new,
            ])
        @endif
        @if ($notification->type == 'App\Notifications\UserPostCommentNotification')
            @include('components.sub-components.notifications.type.postComment', [
                'notification' => $notification,
                'notification_page' => $notification_page,
                'new' => $new,
            ])
        @endif
        @if ($notification->type == 'App\Notifications\UserSubscribeNotification')
            @include('components.sub-components.notifications.type.userSubscribe', [
                'notification' => $notification,
                'notification_page' => $notification_page,
                'new' => $new,
            ])
        @endif
        @if ($notification->type == 'App\Notifications\UserFollowAcceptNotification')
            @include('components.sub-components.notifications.type.userFollowAccept', [
                'notification' => $notification,
                'notification_page' => $notification_page,
                'new' => $new,
            ])
        @endif
        @if ($notification->type == 'App\Notifications\UserPostUploadedNotification')
            @include('components.sub-components.notifications.type.postUploaded', [
                'notification' => $notification,
                'notification_page' => $notification_page,
                'new' => $new,
            ])
        @endif
    @empty
        <div class="no-simple-notification"></div>
    @endforelse
@endisset
