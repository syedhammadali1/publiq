{{-- This component has been used in home page for showing ads --}}
@isset($skeleton)

{{-- <div class="widget widget-advertisement-ert">
    <h3 class="widget-title">Advertisement</h3>

    <div class="advertisement-image-ert skeleton skeleton-square-box">
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.render.home') }}",
                data: {
                    'render_for': 'widgetAdvertisement',
                },
                dataType: "html",
                success: function(response) {
                    setTimeout(function() {
                        // alert('hhhs')
                        $(".widget-advertisement-ert").replaceWith(response);

                    }, 1000);
                }
            });
        });
    </script>
</div> --}}

<div class="home-video widgetAdvertisement">
    <h3 class="widget-title skeleton skeleton-text"></h3>

    <div class="single-video-home">
        <div class="video-image video-profile-main skeleton">
            <div class=" skeleton skeleton-square-box">
            </div>

            <div class="icon">
                <a class="video-btn popup-youtube post-modal clickable-element">
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
                    'render_for': 'widgetAdvertisement',
                },
                dataType: "html",
                success: function(response) {
                    setTimeout(function() {
                        // alert('hhhs')
                        $(".widgetAdvertisement").replaceWith(response);

                    }, 1000);
                }
            });
        });
    </script>
</div>

@else

<div class="widget widget-advertisement-ert">
    <h3 class="widget-title">Advertisement</h3>

    <div class="advertisement-image-ert">
        <a href="#"><img src="{{ asset('frontend/assets/images/03 (1).jpg') }}" alt="image" /></a>
    </div>
</div>

@endisset
