@isset($user_post_comments)
    @forelse ($user_post_comments->reverse() as $comment)
        @include('components.SinglePost.comment.singleComment')
    @empty
        @include('components.SinglePost.comment.noComment', [
            'post' => $user_post,
        ])
    @endforelse
@endisset
