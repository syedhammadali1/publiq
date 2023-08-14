@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="page-banner-box bg-10">
            <h3>Video</h3>
        </div>

        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-member-video">
                <h3>Videos</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="member-free-videos-tab" data-bs-toggle="tab" href="#member-free-videos"
                        role="tab" aria-controls="member-free-videos"
                        onclick="SubPutAllVideos('member-free-videos')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="member-paid-videos-tab" data-bs-toggle="tab" href="#member-paid-videos"
                        role="tab" aria-controls="member-paid-videos"
                        onclick="SubPutAllVideos('member-paid-videos')">Paid</a>
                </li>
            </ul>

            <div class="friends-search-box">
                <form class="search-video">
                    <input type="text" class="input-search" name="keyword" placeholder="Search video...">
                    <input type="hidden" name="video_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="member-free-videos" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-video.free-video', [
                        'user_free_videos' => $mostLikedFreeVideos,
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-member-videos btn-member-free-videos" data-page="2"
                    data-last-page="{{ $mostLikedFreeVideos->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedFreeVideos->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="member-paid-videos" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-video.paid-video', [
                        'user_paid_videos' => $mostLikedPaidVideos,
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-member-videos btn-member-paid-videos" data-page="2"
                    data-last-page="{{ $mostLikedPaidVideos->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedPaidVideos->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>

            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    </div>
@endsection

@push('sub-js')
    <script>
        // This function updates value of tabs in session
        function SubPutAllVideos(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'member-all-videos',
                    name: params
                },
                success: function(response) {
                    $("input[name='video_search_for']").val(params);
                    getTitle(params, 'member-video')
                }
            });
        }

        $(document).ready(function() {

            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'member-all-videos',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'member-free-videos'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='video_search_for']").val(result);
                    getTitle(result, 'member-video')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-video').submit(function(e) {
                e.preventDefault();
                div = $("input[name='video_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                console.log(page);
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.allvideos') }}",
                    data: $('.search-video').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-member-video > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate videos
            $('.load-more-posts-btn-member-videos').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='video_search_for']").val()
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.allvideos') }}",
                    data: {
                        'keyword': $("input[name='keyword'").val(),
                        'video_search_for': div,
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
        });
    </script>
@endpush
