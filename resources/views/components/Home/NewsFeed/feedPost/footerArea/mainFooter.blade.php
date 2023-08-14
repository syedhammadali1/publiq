<ul class="post-meta-wrap d-flex justify-content-between align-items-center">
    <li class="post-react">
        <a class="clickable-element">
            <i onclick="userlike({{ $user_post->id }})"
                class="{{ $authUser->hasLiked ? 'fa fa-thumbs-up' : 'flaticon-like' }} post-like-icon-{{ $user_post->id }} ">
            </i>
            <span onclick="userlike({{ $user_post->id }})" class="post-like-text-{{ $user_post->id }} ">
                {{ $authUser->hasLiked ? 'Like' : 'Like' }}
            </span>
            <span class="number"></span>
            <span class="post-like-count-{{ $user_post->id }} show-likes" data-foruse="post"
                data-post-id="{{ $user_post->id }}">
                {{ $user_post->likers_count }}
            </span>
        </a>

        <ul class="react-list">
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-1.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-2.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-3.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-4.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-5.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-6.png" alt="Like" /></a>
            </li>
            <li>
                <a href="#"><img src="frontend/assets/images/react/react-7.png" alt="Like" /></a>
            </li>
        </ul>
    </li>
    <li class="post-comment">
        <a class=""><i class="flaticon-comment"></i><span>Comment</span>
            <span class="number post-comment-count-{{ $user_post->id }} post-modal clickable-element"
                data-id="{{ $user_post->id }}">{{ $user_post->comments_count }}
            </span></a>
    </li>
    <div class="dropdown d-flex">
        <li class="post-share dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true">
            <i class="flaticon-share"></i><span>Share</span>
        </li>

        <span class="number-share show-likes" data-foruse="share"
            data-post-id="{{ $user_post->id }}">{{ $user_post->shares->count() }}
        </span>
        <ul class="share-ul-list dropdown-menu"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 32px);"
            data-popper-placement="bottom-start">
            @unless($authUser->id == $user_post->user->id)
                <li>
                    <a class="share-itmes d-flex align-items-center share-post" data-foruse="timeline"
                        data-post_id="{{ $user_post->uuid }}">
                        <i class="flaticon-share"></i>
                        <span>Share On Timeline</span></a>
                </li>
            @endunless

            <li>
                <a class="share-itmes d-flex align-items-center share-post" data-foruse="external"
                    data-post_id="{{ @$user_post->uuid }}">
                    <i class="fa fa-share"></i>
                    <span>External Share</span></a>
            </li>
            {{-- <li>
                <a class="share-itmes d-flex align-items-center">
                    <i class="flaticon-comment-1"></i>
                    <span>Share On Chat</span></a>
            </li> --}}
        </ul>
    </div>
</ul>

<div class="post-footer">
    <div class="footer-image">
        <a href="{{ route('frontend.single.profile', $authUser->name) }}">
            <img src="{{ $authUser->avatar }}" class="rounded-circle" alt="toppings">
        </a>
    </div>
    @include('components.Atom.user-comment')
</div>
@php
$paginated_comment = $user_post
    ->comments()
    ->withCount('likers')
    ->latest()
    ->paginate(1);
@endphp
<div class="post-all-comments-{{ $user_post->id }}">
    @include('components.Home.NewsFeed.comments', [
        'comments' => $paginated_comment,
    ])
</div>
@if ($paginated_comment->lastPage() != 1)
    <div class="more-comments">
        <a class="post-modal" data-id="{{ $user_post->id }}">More Comments+</a>
    </div>
@endif
