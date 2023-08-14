<div class="news-feed news-feed-post post-{{ $user_post->uuid }}">
    @php
        $authUser = getFeedPostAuthUser($user_post);
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

        @if (!isset($user_post->isSuggested) && !isset($now_sharing_post))
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
                                @if (!isset($now_sharing_post)) data-id="{{ $user_post->uuid }}" data-element-type="" @endif><i
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
        @endif
    </div>

    <div class="post-body word-break">
        @if ($user_post->type == 'text' || $user_post->type == 'null')
            @if ($user_post->is_paid == 0)
                @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                    <h6 class="post-modal clickable-element"
                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                        {{ $user_post->title }}
                    </h6>
                    <p class="description">
                        {{ $user_post->description }}
                    </p>
                @else
                    <h6 class="post-modal clickable-element "
                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                        {{ $user_post->title }}</h6>
                    <p class="paidText ">
                        {{ $user_post->description }}
                    </p>
                @endif
            @else
                @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                    <h6 class="post-modal clickable-element"
                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                        {{ $user_post->title }}
                    </h6>
                    <p class="description">
                        {{ $user_post->description }}
                    </p>
                @else
                    <h6 class="post-modal clickable-element "
                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                        {{ $user_post->title }}
                    </h6>
                    <p class="paidText">
                        {{ $user_post->description }}
                    </p>
                @endif
            @endif
        @else
            <h6 class="post-modal clickable-element"
                @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                {{ $user_post->title }}</h6>
            <p class="description">
                {{ $user_post->description }}
            </p>
        @endif


        @if ($user_post->type == 'images')
            <div class="post-image timeline-post-div">
                @if ($user_post->media_count > 1)
                    <div class="over-post-image">
                        <div class="number-timeline-of-photos post-modal "
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                            {{ $user_post->media_count - 1 }}+ </div>
                    </div>
                @endif
                <a> <span>
                        @if ($user_post->is_paid == 0)
                            @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                                <div class="post-main-con">
                                    <img class="video-side post-modal post-timeline-image"
                                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif
                                        src="{{ $user_post->getFirstMediaUrl('image') }}" alt="image1">
                                </div>
                            @else
                                <div class="post-main-con">
                                    <img class="video-side post-modal post-timeline-image"
                                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif
                                        src="{{ asset('frontend/assets/images/nomediaavalaible.jpg') }}"
                                        alt="image1" />
                                </div>
                            @endif
                        @else
                            @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                                <div class="post-main-con">
                                    <img class="video-side post-modal post-timeline-image"
                                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif
                                        src="{{ $user_post->getFirstMediaUrl('paidImage') }}" alt="image1" />
                                </div>
                            @else
                                <div class="post-main-con">
                                    <img class="video-side post-modal post-timeline-image"
                                        @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif
                                        src="{{ $user_post->getFirstMediaUrl('paidImage', 'blurimage') }}"
                                        alt="image1" />
                                </div>
                            @endif
                        @endif
                    </span>
                </a>
            </div>
        @elseif ($user_post->type == 'video')
            <div class="post-image timeline-post-div">
                @if ($user_post->is_paid == 0)
                    @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                        <div class="main-video-post-timeline post-modal"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="video" @endif>
                            <video src="{{ $user_post->getFirstMediaUrl('video') }}" alt="image"
                                class="timeline-video-post" controls>
                            </video>
                        </div>
                    @else
                        <video src="" alt="image" class="timeline-video-post post-modal"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" @endif controls>
                        </video>
                    @endif
                @else
                    @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                        <div class="main-video-post-timeline post-modal"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="video" @endif>
                            <video src="{{ $user_post->getFirstMediaUrl('video') }}" alt="image"
                                class="timeline-video-post" controls>
                            </video>
                        </div>
                    @else
                        <img class="video-side timeline-image-size post-modal"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" @endif
                            src="{{ asset('frontend/assets/images/video_is_paid.png') }}" alt="image1" />
                    @endif
                @endif

            </div>
        @elseif ($user_post->type == 'audio')
            <div class="post-image timeline-post-div audio-post-tiem">
                @if ($user_post->is_paid == 0)
                    @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                        <audio controls class="audio-check-ojwo111"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                            <source src="{{ $user_post->getFirstMediaUrl('audio') }}">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <audio controls class="audio-check-ojwo111"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                            <source src="">
                            Your browser does not support the audio element.
                        </audio>
                    @endif
                @else
                    @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                        <audio controls class="audio-check-ojwo111"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif>
                            <source src="{{ $user_post->getFirstMediaUrl('audio') }}">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <img class="video-side timeline-image-size post-modal"
                            @if (!isset($now_sharing_post) && $user_post->type != 'text') data-id="{{ $user_post->id }}" data-element-type="" @endif
                            src="{{ asset('frontend/assets/images/audio_is_paid.jpg') }}" />
                    @endif
                @endif

            </div>
        @endif


        @if (!isset($now_sharing_post) && !isset($inside_sharing_post)) {{-- when user open the post for shaing --}}
            @if ($user_post->is_paid == 1)
                @if ($user_post->user_id == $authUser->id || $authUser->hasSubscribed)
                    @include('components.Home.NewsFeed.feedPost.footerArea')
                @endif
            @else
                @if ($authUser->isFollowingTheUser || $authUser->id == $user_post->user_id || $authUser->hasSubscribed)
                    @include('components.Home.NewsFeed.feedPost.footerArea')
                @endif
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
