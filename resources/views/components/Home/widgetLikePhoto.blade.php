{{-- This component has been used in home page for showing popular images --}}

@isset($skeleton)
    <div class="widget widget-suggested-groups widget-suggested-groups-widgetLikePhoto-{{ $isPaid }}">
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
                        'render_for': 'widgetLikePhoto',
                        'isPaid': {{ $isPaid }}
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widget-suggested-groups-widgetLikePhoto-{{ $isPaid }}")
                                .replaceWith(response);
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

        @isset($mostLikedPhotos)
            @forelse ($mostLikedPhotos as $mostLikedPhoto)
                @if ($isPaid == 1)
                    <article class="item">
                        <a id="video-pr">
                            <span class="clickable-element">
                                <img class="video-side post-modal" data-id="{{ $mostLikedPhoto->id }}"
                                    src="{{ doesFileExists($mostLikedPhoto->getFirstMedia('paidImage'), $mostLikedPhoto->getFirstMediaUrl('paidImage', 'blurimage')) }}" />
                                @if ($mostLikedPhoto->media->count() > 1)
                                    <div class="number-of-post post-modal" data-id="{{ $mostLikedPhoto->id }}">
                                        {{ $mostLikedPhoto->media->count() }}+</div>
                                @endif
                            </span>
                        </a>
                        <div class="info ">
                            <h4 class="title">
                                <a class="post-modal clickable-element"
                                    data-id="{{ $mostLikedPhoto->id }}">{{ $mostLikedPhoto->title }}</a>
                            </h4>
                            <span>{{ $mostLikedPhoto->user->name }}</span>
                            <span class="show-likes" data-foruse="post"
                                data-post-id="{{ $mostLikedPhoto->id }}">{{ $mostLikedPhoto->likers_count }}
                                @if ($mostLikedPhoto->likers_count > 1)
                                    Likes
                                @else
                                    Like
                                @endif
                            </span>
                        </div>
                        @forelse ($mostLikedPhoto->media as $media)
                            <a href="{{ $media->getFullUrl() }}"
                                data-lightbox="{{ $mostLikedPhoto->id }}-mostLikedPhotos-galary"></a>
                        @empty
                        @endforelse
                    </article>
                @else
                    <article class="item">
                        <a id="video-pr"><span class="clickable-element"><img class="video-side post-modal"
                                    data-id="{{ $mostLikedPhoto->id }}"
                                    src="{{ doesFileExists($mostLikedPhoto->getFirstMedia('image'), $mostLikedPhoto->getFirstMediaUrl('image')) }}"
                                    alt="image1" />
                                @if ($mostLikedPhoto->media->count() > 1)
                                    <div class="number-of-post post-modal" data-id="{{ $mostLikedPhoto->id }}">
                                        {{ $mostLikedPhoto->media->count() }}+</div>
                                @endif

                            </span></a>
                        <div class="info">
                            <h4 class="title">
                                <a class="post-modal clickable-element"
                                    data-id="{{ $mostLikedPhoto->id }}">{{ $mostLikedPhoto->title }}</a>
                            </h4>
                            <span>{{ $mostLikedPhoto->user->name }}</span><span class="show-likes"
                                data-post-id="{{ $mostLikedPhoto->id }}" data-foruse="post" >{{ $mostLikedPhoto->likers_count }}
                                @if ($mostLikedPhoto->likers_count > 1)
                                    Likes
                                @else
                                    Like
                                @endif
                            </span>
                        </div>
                        @forelse ($mostLikedPhoto->media as $media)
                            <a href="{{ $media->getFullUrl() }}"
                                data-lightbox="{{ $mostLikedPhoto->id }}-mostLikedPhotos-galary"></a>
                        @empty
                        @endforelse

                    </article>
                @endif
            @empty

                <div>
                    <div class="video-side no-media-image"></div>
                </div>
            @endforelse

            @if ($mostLikedPhotos->isNotEmpty())
                <a class="view-member" href="{{ route('frontend.photos') }}"
                    @if ($isPaid == 0) onclick="HeaderSPut(event,'member-free-photos','member-all-photos')"
                @else
                onclick="HeaderSPut(event,'member-paid-photos','member-all-photos')" @endif>
                    <div class="article-view-all">
                        <button class="article-view-all-btn">VIEW ALL</button>
                    </div>
                </a>
            @endif
        @endisset

    </div>
@endisset
