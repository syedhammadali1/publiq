{{-- This component has been used in home page for showing popular videos --}}
@isset($skeleton)
    <div class="widget widget-suggested-groups widget-suggested-groups-widgetVideo">
        <h3 class="widget-title skeleton skeleton-text"></h3>

        @for ($i = 0; $i < 4; $i++)
            <article class="item">
                <a id="video-pr">
                    <span class="clickable-element">
                        <span class="skeleton skeleton-square-box"></span>
                    </span>
                </a>
                <div class="info">
                    <h4 class="title ">
                        <a class="clickable-element"></a>
                    </h4>
                    <span class="skeleton skeleton-text"></span>
                    <span class="skeleton skeleton-text"></span>
                    <span class="skeleton skeleton-text"></span>
                </div>
                <a href="" data-lightbox="mostLikedPhotos-galary"></a>
            </article>
        @endfor

        <a class="view-member skeleton" href="">
            <div class="article-view-all skeleton ">
                <button class="article-view-all skeleton" style="width: 100%; color: white; border: none; padding: 5px 1px 5px 1px;"></button>
            </div>
        </a>

        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.render.home') }}",
                    data: {
                        'render_for': 'widgetVideo',
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widget-suggested-groups-widgetVideo").replaceWith(response);
                        }, 1000);
                    }
                });
            });
        </script>
    </div>
@else
    <div class="widget widget-suggested-groups">
        @if (isset($heading))
            <h3 class="widget-title">{{ $heading }}</h3>
        @endif
        @forelse ($mostLikedVideos as $mostLikedVideo)
            <article class="item">

                <a id="video-pr"><span>
                        {{-- <img class="video-side" src="{{ doesFileExists($getMostLikedVideo->getFirstMedia('video'),$getMostLikedVideo->getFirstMediaUrl('video')) }}"
                        alt="image1" /> --}}
                        <video class="video-side post-modal"
                          data-id="{{ $mostLikedVideo->id }}" src="{{ doesFileExists($mostLikedVideo->getFirstMedia('video'), $mostLikedVideo->getFirstMediaUrl('video')) }}"></video>
                    </span></a>
                <div class="info">
                    <h4 class="title clickable-element">
                        <a class="post-modal" data-id="{{ $mostLikedVideo->id }}">{{ $mostLikedVideo->title }}</a>
                    </h4>
                    <span>{{ @$mostLikedVideo->user->name }}</span><span>{{ $mostLikedVideo->likers_count }}
                        @if ($mostLikedVideo->likers_count > 1)
                            Likes
                        @else
                            Like
                        @endif
                    </span>
                </div>
            </article>

        @empty

        <div><div class="video-side no-media-image"></div></div>

        @endforelse


        @if ($mostLikedVideos->isNotEmpty())

        <a class="view-member" href="{{ route('frontend.videos') }}" onclick="HeaderSPut(event,'member-paid-videos','member-all-videos')">
            <div class="article-view-all">
                <button class="article-view-all-btn">VIEW ALL</button>
            </div>
        </a>
        @endif
    </div>
@endisset
