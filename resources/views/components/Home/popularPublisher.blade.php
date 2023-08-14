{{-- This component has been used in home page for showing most popular publiqers --}}

@if ($mostPopularPubliqars->isNotEmpty())

<div class="news-feed news-feed-stories">
    <div class="stories-title d-flex justify-content-between align-items-center">
        <h3>Most Popular Publiqers</h3>
        <span><a href="{{ route('frontend.members') }}">See All</a></span>
    </div>

    <div class="row">
        @forelse ($mostPopularPubliqars as $mostPopularPubliqar)
            <div class="col-lg-2 col-sm-4 col-4">
                <div class="stories-item">
                    <a href="{{ route('frontend.single.profile', $mostPopularPubliqar) }}">
                        <img src="{{ $mostPopularPubliqar->avatar }}" alt="no image" />
                    </a>
                    <span>
                        <a href="{{ route('frontend.single.profile', $mostPopularPubliqar) }}" class="overflow-hiddenn"
                            style="max-width: 8ch; !important">{{ $mostPopularPubliqar->name }}</a>
                    </span>
                </div>
            </div>
        @empty
        @endforelse

    </div>
</div>

@endif

