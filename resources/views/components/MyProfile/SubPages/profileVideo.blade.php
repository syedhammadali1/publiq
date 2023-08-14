{{-- This component has been used in profile page for videos section --}}


<div class="tab-pane fade" id="Videos" role="tabpanel">
    @isset($user)
        <div class=" friends-inner-box-style d-flex justify-content-between  align-items-center ">
            <div class="title title-video">
                <h3>Videos</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="all-free-tab" data-bs-toggle="tab" href="#all-free" role="tab"
                        aria-controls="all-free" onclick="SubPutV('all-free')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="paid-added-tab" data-bs-toggle="tab" href="#paid-added" role="tab"
                        aria-controls="paid-added" onclick="SubPutV('paid-added')">Paid</a>
                </li>
            </ul>

            <div class="friends-search-box">
                <div class="friends-search-box">
                    <form class="search-video">
                        <input type="text" class="input-search" name="keyword" placeholder="Search Video...">
                        <input type="hidden" name="video_search_for">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade" id="all-free" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-video.free-video', [
                        'user_free_videos' => $user->free_posts('video')->paginate(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-video btn-all-free" data-page="2"
                    data-last-page="{{ $user->free_posts('video')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->free_posts('video')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="paid-added" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-video.paid-video', [
                        'user_paid_videos' => $user->paid_posts('video')->paginate(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-video btn-paid-added" data-page="2"
                    data-last-page="{{ $user->paid_posts('video')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->paid_posts('video')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    @endisset



    {{-- scripts --}}
    <script>
        // This function updates value of tabs in session

        function SubPutV(params) {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-video',
                    name: params
                },
                success: function(response) {
                    $("input[name='video_search_for']").val(params);
                    getTitle(params, 'video')
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
                    for: 'my-profile-video',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-free'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='video_search_for']").val(result);
                    getTitle(result, 'video')
                    $('#myTab').removeClass('disabled-tab');
                }
            });

            // This function searchs data according to that's tab/section without loading page
            $('.search-video').submit(function(e) {
                e.preventDefault();
                div = $("input[name='video_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.video') }}",
                    data: $('.search-video').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-video > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });


            @if (!isset($noscript))
                // to paginate profile video
                $(document).on("click", ".load-more-posts-btn-video", function(e) {
                    page = $(this);
                    e.preventDefault();
                    div = $("input[name='video_search_for']").val();
                    showLoading('#' + div + '> .row', null);
                    loadMoreToggle(page, 'hide');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.search.video') }}",
                        data: {
                            'keyword': $(".search-video > input[name='keyword'").val(),
                            'video_search_for': div,
                            'page': page.data('page'),
                        },
                        dataType: "json",
                        success: function(response) {
                            page.data('page', page.data('page') + 1);
                            page.data('last-page', response.lastPage);
                            $('#' + div + '> .row').append(response.html);
                            showLoading('#' + div + '> .row', null);
                            loadMoreToggle(page, 'show');
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

        function SubPutV(params) {
            console.log('video');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-video',
                    name: params
                },
                success: function(response) {
                    $("input[name='video_search_for']").val(params);
                    getTitle(params, 'video')
                }
            });
        }

        $(document).ready(function() {
          // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile-video',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-free'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='video_search_for']").val(result);
                    getTitle(result, 'video')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-video').submit(function(e) {
                e.preventDefault();
                div = $("input[name='video_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.video') }}",
                    data: $('.search-video').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate profile video
            $(document).on("click", ".load-more-posts-btn-video", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='video_search_for']").val()
                showLoading('#' + div + '> .row', null)
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.video') }}",
                    data: {
                        'keyword': $(".search-video > input[name='keyword'").val(),
                        'video_search_for': div,
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
