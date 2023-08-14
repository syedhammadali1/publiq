<div class="news-feed news-feed-post">

    <div class="post-header d-flex justify-content-between align-items-center">
        <div class="image">
            <a href="{{ route('frontend.single.profile', $user_post->user) }}">
                <img src="{{ $user_post->user->avatar }}" class="rounded-circle" alt="image" />
            </a>
        </div>
        <div class="info ms-3">
            <span class="name"><a href="">{{ $user_post->user->name }}</a></span>
            <span class="small-text"><a href="#">{{ $user_post->created_at->diffForHumans() }}</a></span>
        </div>
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="flaticon-menu"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit
                        Post</a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i>
                        Hide
                        Post</a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i>
                        Delete
                        Post</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="post-body">
        <h6>{{ $user_post->title }}</h6>
        <p>
            {{ $user_post->description }}
        </p>

        @if ($user_post->type == 'images')

            <div class="post-image">
                <a href="{{ $user_post->getFirstMediaUrl('image') }}"
                    data-lightbox="{{ $user_post->id }}-timeline-galary"><span><img class="video-side"
                            src="{{ $user_post->getFirstMediaUrl('image') }}" alt="image1" />
                        <div class="number-of-post">{{ $user_post->media->count() }}</div>
                    </span></a>
                @forelse ($user_post->media as $media)
                    <a href="{{ $media->getFullUrl() }}" data-lightbox="{{ $user_post->id }}-timeline-galary"></a>
                @empty
                @endforelse
            </div>
        @elseif ($user_post->type == 'video')
            <div class="post-image">
                <video src="{{ $user_post->getFirstMediaUrl('video') }}" alt="image" max-height=70% width=100%
                    controls>
                </video>

            </div>
        @elseif ($user_post->type == 'audio')
            <div class="post-image">
                <audio controls>
                    <source src="{{ $user_post->getFirstMediaUrl('audio') }}">
                    Your browser does not support the audio element.
                </audio>
            </div>
        @endif
        <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
            <li class="post-react">
                <a><i class="flaticon-like" onclick="userlike({{ $user_post->id }})"></i><span>Like</span>
                    <span class="number post-like-count-{{ $user_post->id }}" id="{{ $user_post->id }}">
                        {{ $user_post->likers_count }}
                    </span></a>

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
                <a href="#"><i class="flaticon-comment"></i><span>Comment</span>
                    <span class="number">599 </span></a>
            </li>
            <li class="post-share">
                <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">0 </span></a>
            </li>
        </ul>
        <form class="post-footer">
            <div class="footer-image">
                <a href="#"><img src="frontend/assets/images/user/user-1.jpg" class="rounded-circle"
                        alt="image" /></a>
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
            </div>
        </form>
    </div>

    {{-- scripts --}}
    <script>
        // to like post
        function userlike(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('frontend.like.post') }}",
                data: {

                    id: id
                },
                success: function(data) {
                    var val = $('#' + id).text(data.count);
                }
            });
        }
    </script>
</div>


{{-- @push('sub-js')
    <script>
        // to like post
        function userlike(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('frontend.like.post') }}",
                data: {

                    id: id
                },
                success: function(data) {
                    var val = $('#' + id).text(data.count);
                }
            });
        }
    </script>
@endpush --}}
