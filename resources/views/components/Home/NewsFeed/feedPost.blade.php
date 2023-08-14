@if ($user_post->type == 'shared')
    @include('components.Home.NewsFeed.feedPost.shared')
@else
    @include('components.Home.NewsFeed.feedPost.main')
@endif
