{{-- This component has been used in home page for showing popular audios --}}

@isset($skeleton)
    <div class="widget widget-suggested-groups widget-suggested-groups-widgetAudio-{{ $isPaid }}">
        <h3 class="widget-title skeleton skeleton-text"></h3>

        @for ($i = 0; $i < 4; $i++)
            <div class="skeleton skeleton-audio-box w-100 mb-4">
            </div>
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
                        'render_for': 'widgetAudio',
                        'isPaid': {{ $isPaid }}
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widget-suggested-groups-widgetAudio-{{ $isPaid }}")
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

        @isset($mostLikedAudios)
            @forelse ($mostLikedAudios as $mostLikedAudio)
                @if ($isPaid == 1)
                    @if (in_array($mostLikedAudio->user_id, $userSubscribableArray) or $mostLikedAudio->user_id == auth()->id())
                        <audio controls="">
                            <source src="{{ $mostLikedAudio->getFirstMediaUrl('audio') }}" type="audio/mp3" />
                        </audio>
                    @else
                        <audio controls="">
                            <source src="" type="audio/mp3" />
                        </audio>
                    @endif
                @else
                    <audio controls="">
                        <source src="{{ $mostLikedAudio->getFirstMediaUrl('audio') }}" type="audio/mp3" />
                    </audio>
                @endif

                {{-- <audio controls="">
                    <source src="{{ $mostLikedAudio->getFirstMediaUrl('audio') }}" type="audio/mp3" />
                </audio> --}}
            @empty

            <div><div class="video-side  no-media-image"></div></div>

            @endisset
        @endforelse


        {{-- <audio controls="">
            <source src="frontend/assets/images/People2.mp3" type="audio/mp3" />
        </audio><audio controls="">
            <source src="frontend/assets/images/People3.mp3" type="audio/mp3" />
        </audio><audio controls="">
            <source src="frontend/assets/images/People4.mp3" type="audio/mp3" />
        </audio> --}}

        @if ($mostLikedAudios->isNotEmpty())
        <article class="mt-3">
            <div class="article-view-all">
                <a class="view-member" href="{{ route('frontend.audios') }}" @if ($isPaid == 0)
                onclick="HeaderSPut(event,'member-free-audio','member-all-audio')"
                @else
                onclick="HeaderSPut(event,'member-paid-audio','member-all-audio')"
                @endif><button class="article-view-all-btn">VIEW
                        ALL</button></a>
            </div>
        </article>

        @endif

    </div>
@endisset
