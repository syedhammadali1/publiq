@if ($user_post->type == 'text' || $user_post->type == 'shared')
    @include('components.Home.NewsFeed.feedPost.footerArea.shareFooter')
@else
    @include('components.Home.NewsFeed.feedPost.footerArea.mainFooter')
@endif
