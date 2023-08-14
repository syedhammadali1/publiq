{{-- This component has been used in profile page for audios section --}}

<div class="tab-pane fade" id="Audios" role="tabpanel">
    @isset($user)
        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-audio">
                <h3>Audios</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="all-audio-tab" data-bs-toggle="tab" href="#all-audio" role="tab"
                        aria-controls="all-audio" onclick="SubPutA('all-audio')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="audio-albums-tab" data-bs-toggle="tab" href="#audio-albums" role="tab"
                        aria-controls="audio-albums" onclick="SubPutA('audio-albums')">Paid</a>
                </li>
            </ul>

            <div class="photos-search-box">
                <form class="search-audio">
                    <input type="text" class="input-search" name="keyword" placeholder="Search photos..." />
                    <input type="hidden" name="audio_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="all-audio" role="tabpanel">
                <div class="row">

                    @include('components.sub-components.profile-audio.free-audio', [
                        'user_free_audios' => $user->free_posts('audio')->paginate(8),
                    ])

                </div>

                <div class="load-more-posts-btn load-more-posts-btn-audio btn-all-audio" data-page="2"
                    data-last-page="{{ $user->free_posts('audio')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->free_posts('audio')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="audio-albums" role="tabpanel">
                <div class="row">

                    @include('components.sub-components.profile-audio.paid-audio', [
                        'user_paid_audios' => $user->paid_posts('audio')->paginate(8),
                    ])

                </div>

                <div class="load-more-posts-btn load-more-posts-btn-audio btn-audio-albums" data-page="2"
                    data-last-page="{{ $user->paid_posts('audio')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->paid_posts('audio')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    @endisset



    {{-- scripts --}}
    <script>
        // This function updates value of tabs in session
        // to handle session
        function SubPutA(params) {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-audio',
                    name: params
                },
                success: function(response) {
                    $("input[name='audio_search_for']").val(params);
                    getTitle(params, 'audio');
                    $('#myTab').removeClass('disabled-tab');

                }
            });
        }

        $(document).ready(function() {
            // This ajax request gets value of tabs from session and make tab active according to session value
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile-audio',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-audio'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='audio_search_for']").val(result);
                    getTitle(result, 'audio')
                    $('#myTab').removeClass('disabled-tab');
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-audio').submit(function(e) {
                e.preventDefault();
                div = $("input[name='audio_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);

                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.audio') }}",
                    data: $('.search-audio').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-audio > span').text(response.total);
                        $('.btn-' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            @if (!isset($noscript))
                // to paginate profile audio
                $(document).on("click", ".load-more-posts-btn-audio", function(e) {
                    page = $(this);
                    e.preventDefault();
                    div = $("input[name='audio_search_for']").val()
                    showLoading('#' + div + '> .row', null)
                    loadMoreToggle(page, 'hide');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.search.audio') }}",
                        data: {
                            'keyword': $(".search-audio > input[name='keyword'").val(),
                            'audio_search_for': div,
                            'page': page.data('page'),
                        },
                        dataType: "json",
                        success: function(response) {
                            page.data('page', page.data('page') + 1);
                            page.data('last-page', response.lastPage);
                            $('#' + div + '> .row').append(response.html);
                            loadMoreToggle(page, 'show');
                            showLoading('#' + div + '> .row', null)
                            if (response.lastPage < page.data('page')) {
                                page.hide();
                            }
                        }
                    });
                });
            @endif
        });
    </script>
</div>

{{-- @push('sub-js')
    <script>
        // This function updates value of tabs in session
        // to handle session
        function SubPutA(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-audio',
                    name: params
                },
                success: function(response) {
                    $("input[name='audio_search_for']").val(params);
                    getTitle(params, 'audio')
                }
            });
        }

        $(document).ready(function() {
            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile-audio',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-audio'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='audio_search_for']").val(result);
                    getTitle(result, 'audio')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-audio').submit(function(e) {
                e.preventDefault();
                div = $("input[name='audio_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);

                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.audio') }}",
                    data: $('.search-audio').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.btn-' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate profile audio
            $(document).on("click", ".load-more-posts-btn-audio", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='audio_search_for']").val()
                showLoading('#' + div + '> .row', null)
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.audio') }}",
                    data: {
                        'keyword': $(".search-audio > input[name='keyword'").val(),
                        'audio_search_for': div,
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('#' + div + '> .row').append(response.html);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                        showLoading('#' + div + '> .row', null)
                    }
                });
            });
        });
    </script>
@endpush --}}
