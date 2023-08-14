{{-- This component has been used in home page for showing a single video --}}
@isset($skeleton)
    <div class="home-video widgetWatchVideo">
        <h3 class="widget-title skeleton skeleton-text"></h3>

        <div class="single-video-home">
            <div class="video-image video-profile-main skeleton ">
                <div class="skeleton skeleton-square-box">
                </div>

                <div class="icon">
                    <a class="video-btn popup-youtube post-modal clickable-element">
                        <i class="flaticon-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.render.home') }}",
                    data: {
                        'render_for': 'widgetWatchVideo',
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widgetWatchVideo").replaceWith(response);
                        }, 1000);
                    }
                });
            });
        </script>
    </div>
@else
    <div class="home-video">
        <div class="video-home-title d-flex justify-content-between align-items-center">
            <h3>Watch Video</h3>
        </div>
        <div class="single-video-home">
@if (is_null($getMostLikedVideo))
<div class="video-image video-profile-main ">
    <img src="{{ asset('frontend/assets/images/nomediaavalaible.jpg') }}" alt="image" {{-- height="250"
    width="250" --}}
        class="profile-photo-size1">


    <div class="icon">
        <a class="video-btn popup-youtube" >
            <i class="flaticon-youtube"></i>
        </a>
    </div>
</div>
@else
<div class="video-image video-profile-main post-modal clickable-element" data-id="{{ $getMostLikedVideo->id }}">
    <video src="{{ $getMostLikedVideo->getFirstMediaUrl('video') }}" alt="image" {{-- height="250"
    width="250" --}}
        class="profile-photo-size2"> </video>



    <div class="icon">
        <a class="video-btn popup-youtube post-modal clickable-element" data-id="{{ $getMostLikedVideo->id }}">
            <i class="flaticon-youtube"></i>
        </a>
    </div>
</div>
@endif
        </div>
    </div>
@endisset
