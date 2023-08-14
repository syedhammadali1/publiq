@isset($user_post)
    <div class="row">
        <div class="col-lg-2 col-md-12">
            @include('components.SinglePost.comment.commentArea', [
                'user_post' => $user_post,
            ])
        </div>
        <div class="col-lg-8 col-md-12">
            @if ($user_post->type == 'video')
                @include('components.SinglePost.type.video')
            @elseif ($user_post->type == 'images')
                @include('components.SinglePost.type.image')
            @elseif ($user_post->type == 'audio')
                @include('components.SinglePost.type.audio')
            @endif
        </div>
        <div class="col-lg-2 col-md-12">
            @include('components.SinglePost.description.descriptionArea', [
                'user_post' => $user_post,
            ])
        </div>
    </div>
@endisset
