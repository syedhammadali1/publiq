@isset($comments)
    @foreach ($comments->reverse() as $comment)
        @include('components.Home.NewsFeed.singleComment', [
            'comment' => $comment,
        ])
    @endforeach
@endisset
