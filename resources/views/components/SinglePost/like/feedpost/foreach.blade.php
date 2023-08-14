@isset($users)
    <div class="like-user-append">
        @forelse ($users as $user)
            <div class="like-single-user-{{ str_replace('.', '-', $user->name) }} pb-2">
                @include('components.SinglePost.like.feedpost.single')
            </div>
        @empty
            @if ($typeOf == 'like')
                <div class="row ">
                    <div class="private" style="justify-content: center;display: flex;">
                        <div class="no-like-img"></div>
                    </div>
                </div>
            @endif
            @if ($typeOf == 'share')
                <div class="row ">
                    <div class="private" style="justify-content: center;display: flex;">
                        <div class="no-share-img"></div>
                    </div>
                </div>
            @endif
        @endforelse
    </div>
@endisset
