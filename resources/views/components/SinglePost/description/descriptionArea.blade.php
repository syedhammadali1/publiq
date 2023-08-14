@isset($user_post)
    <div class="right-sidebar-area" id="right-sidebar-area" data-simplebar="init">
        <div class="simplebar-wrapper " id="simplebar-wrapper-new">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" id="simplebar-offset">
                    <div class="simplebar-content-wrapper" id="new-simplebar-content-wrapper">
                        <div class="simplebar-content" id="new-simplebar">
                            <div class="recent-chat-box">
                                <div class="row">
                                    <div class="news-feed-area" id="description-single-main">
                                        <div class="news-feed news-feed-post" id="single-description-post">
                                            <div
                                                @if ($user_post->type != 'text') class="post-header d-flex justify-content-between align-items-center" @else class="post-header d-flex  align-items-center" @endif>
                                                <div class="image">
                                                    <a href="{{ route('frontend.single.profile', $user_post->user) }}">
                                                        <img src="{{ $user_post->user->avatar }}" class="rounded-circle"
                                                            alt="image">
                                                    </a>
                                                </div>
                                                <div class="info ms-3">
                                                    <span class="name"><a
                                                            href="{{ route('frontend.single.profile', $user_post->user) }}">{{ $user_post->user->full_name }}</a></span>
                                                    <span
                                                        class="small-text">{{ $user_post->created_at->diffForHumans() }}</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="flaticon-menu"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        @if ($user_post->user->id == auth()->id())
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center edit-post"
                                                                    data-post_id="{{ $user_post->uuid }}"><i
                                                                        class="flaticon-edit"></i> Edit
                                                                    Post</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center"><i
                                                                        class="flaticon-trash"></i>
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
                                            </div>

                                            <div class="post-body word-break">
                                                <h6 class="dismiss-modall">{{ $user_post->title }}</h6>
                                                <p class="description">{{ $user_post->description }}</p>
                                                <ul class="post-meta-wrap d-flex justify-content-between align-items-center"
                                                    id="single-post-reaction">
                                                    <li class="post-react">
                                                        <a class="clickable-element">
                                                            <i onclick="userlike({{ $user_post->id }})"
                                                                class="{{ $user_post->has_liked ? 'fa fa-thumbs-up' : 'flaticon-like' }} post-like-icon-{{ $user_post->id }}"
                                                                id="flaticon-like"></i>
                                                            <span onclick="userlike({{ $user_post->id }})"
                                                                class="post-like-text-{{ $user_post->id }}">{{ $user_post->has_liked ? 'Liked' : 'Like' }}</span>
                                                            </span>
                                                            <span
                                                                class="number post-like-count-{{ $user_post->id }} show-likes"
                                                                data-foruse="post" id="like-count-respon"
                                                                data-post-id="{{ $user_post->id }}">{{ @$user_post->likers_count }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <a class=""><i
                                                                class="flaticon-comment"></i><span>Comment</span>
                                                            <span class="number post-comment-count-{{ $user_post->id }}"
                                                                id="number">{{ @$user_post->comments_count }}</span></a>
                                                    </li>
                                                    {{-- <li class="post-share">
                                                        <a ><i class="flaticon-share"></i>
                                                            <span>Share</span>
                                                            <span class="number show-likes" data-foruse="share"
                                                                data-post-id="{{ $user_post->id }}">{{ @$user_post->shares->count() }}
                                                            </span></a>
                                                    </li> --}}
                                                    <div class="dropdown d-flex">
                                                        <li class="post-share dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                            <i class="flaticon-share"></i><span>Share</span>
                                                        </li>

                                                        <span class="desc-number-share show-likes" data-foruse="share"
                                                            data-post-id="{{ $user_post->id }}">{{ $user_post->shares->count() }}
                                                        </span>


                                                        <ul class="share-ul-list dropdown-menu"
                                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 32px);"
                                                            data-popper-placement="bottom-start">
                                                            @unless(auth()->id() == $user_post->user->id)
                                                                <li>
                                                                    <a class="share-itmes d-flex align-items-center share-post"
                                                                        data-foruse="timeline"
                                                                        data-post_id="{{ $user_post->uuid }}">
                                                                        <i class="flaticon-share"></i>
                                                                        <span>Share On Timeline</span></a>
                                                                </li>
                                                            @endunless
                                                            <li>
                                                                <a class="share-itmes d-flex align-items-center share-post"
                                                                    data-foruse="external"
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


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @if ($user_post->type != 'text')
                                @include('components.SinglePost.comment.commentArea', [
                                    'user_post' => $user_post,
                                    'user_post_comments' => $user_post_comments,
                                ])
                            @endif
                        </div>
                        <div class="simplebar-placeholder-new"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal">
                        <div class="simplebar-scrollbar" id="new-barsimple"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical">
                        <div class="simplebar-scrollbar" id="new-scroll-vertical"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endisset


<script>
    $(document).ready(function() {
        $(".description").shorten({
            "showChars": 100
        });
    })  
</script>
