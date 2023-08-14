<div class="news-feed news-feed-post post-{{ $user_post->uuid }}">
    @php
        $authUser = getFeedPostAuthUser($user_post);
        $sharedPost = $user_post->shareOfWithRelations;

    @endphp
    @isset($user_post->isSuggested)
        <p class="suggestforyou">Suggested For You</p>
    @endisset
    <div class="post-header d-flex justify-content-between align-items-center">
        <div class="image">
            <a href="{{ route('frontend.single.profile', $user_post->user->name) }}">
                <img src="{{ $user_post->user->avatar }}" class="rounded-circle" alt="toppings">
            </a>
        </div>

        <div class="info ms-3">
            <span class="name">
                <a
                    href="{{ route('frontend.single.profile', $user_post->user->name) }}">{{ $user_post->user->full_name }}</a>
            </span>
            <span class="small-text"><a>{{ $user_post->created_at->diffForHumans() }}</a></span>
        </div>

        @if (!isset($user_post->isSuggested) && !isset($now_sharing_post)) {{-- yahan shayed prob aye --}}
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="flaticon-menu"></i>
                </button>
                <ul class="dropdown-menu">
                    @if ($user_post->user->id == $authUser->id)
                        <li>
                            <a class="dropdown-item d-flex align-items-center edit-post"
                                data-post_id="{{ $user_post->uuid }}"><i class="flaticon-edit"></i> Edit
                                Post</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center delete-post"
                                data-id="{{ $user_post->uuid }}"><i class="flaticon-trash"></i>
                                Delete
                                Post</a>
                        </li>
                    @else
                        <li>
                            <a class="dropdown-item d-flex align-items-center report-post-btn"
                                data-post_id="{{ $user_post->uuid }}">
                                <i class="flaticon-private"></i>
                                Report Post</a>
                        </li>
                    @endif

                </ul>
            </div>
        @endif
    </div>

    <div class="post-body word-break">
        <h6 class=" @if (!isset($now_sharing_post)) post-modal @endif clickable-element"
            @if (@$sharedPost->type != 'text') data-id="{{ @$sharedPost->id }}"   @endif>{{ $user_post->title }}</h6>
        <p class="description">
            {{ $user_post->description }}
        </p>

        <div style="padding: 10px;box-shadow: 0 4px 8px 0 rgb(0 0 0 / 15%), 0 6px 20px 0 rgb(0 0 0 / 7%);">

            @if (!is_null($sharedPost))
                @include('components.Home.NewsFeed.feedPost.main', [
                    'user_post' => $sharedPost,
                    'inside_sharing_post' => true,
                ])
            @else
                <div class="row ">
                    <div class="private" style="justify-content: center;display: flex;">
                        <div class="no-content-img"></div>
                    </div>
                </div>
            @endif
        </div>

        @if ($user_post->is_paid == 1)
            @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                @include('components.Home.NewsFeed.feedPost.footerArea')
            @endif
        @else
            @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                @include('components.Home.NewsFeed.feedPost.footerArea')
            @endif
        @endif
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".description").shorten({
            "showChars": 100
        });
    });
</script>
