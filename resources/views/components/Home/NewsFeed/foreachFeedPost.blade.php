@isset($user_posts)
    @each('components.Home.NewsFeed.feedPost', $user_posts, 'user_post', 'components.Home.NewsFeed.nopost')
@endisset
