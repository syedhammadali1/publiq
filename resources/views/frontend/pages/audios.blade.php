@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="page-banner-box bg-9">
            <h3>Audio</h3>
        </div>

        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-member-audio">
                <h3>Audios</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="member-free-audio-tab" data-bs-toggle="tab" href="#member-free-audio" role="tab"
                        aria-controls="member-free-audio" onclick="SubPutAllAudio('member-free-audio')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="member-paid-audio-tab" data-bs-toggle="tab" href="#member-paid-audio" role="tab"
                        aria-controls="member-paid-audio" onclick="SubPutAllAudio('member-paid-audio')">Paid</a>
                </li>
            </ul>

            <div class="photos-search-box">
                <form class="search-audio">
                    <input type="text" class="input-search" name="keyword" placeholder="Search audio...">
                    <input type="hidden" name="audio_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="member-free-audio" role="tabpanel">
                <div class="row">


                    @include('components.sub-components.profile-audio.free-audio', [
                        'user_free_audios' => $mostLikedFreeAudios,
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-member-audio btn-member-free-audio" data-page="2"
                    data-last-page="{{ $mostLikedFreeAudios->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedFreeAudios->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>


            </div>


            <div class="tab-pane fade" id="member-paid-audio" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-audio.paid-audio', [
                        'user_paid_audios' => $mostLikedPaidAudios,
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-member-audio btn-member-paid-audio" data-page="2"
                    data-last-page="{{ $mostLikedPaidAudios->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedPaidAudios->lastPage() == 1 ? 'display:none' : '' }}>
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
        function SubPutAllAudio(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'member-all-audio',
                    name: params
                },
                success: function(response) {
                    $("input[name='audio_search_for']").val(params);
                    getTitle(params, 'member-audio')
                }
            });
        }

        $(document).ready(function() {

            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'member-all-audio',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'member-free-audio'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='audio_search_for']").val(result);
                    getTitle(result, 'member-audio')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-audio').submit(function(e) {
                e.preventDefault();
                div = $("input[name='audio_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                console.log(page);
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.allaudios') }}",
                    data: $('.search-audio').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-member-audio > span').text(response.total);
                        $('.btn-' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate audios
            $('.load-more-posts-btn-member-audio').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='audio_search_for']").val()
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.allaudios') }}",
                    data: {
                        'keyword': $(".search-audio > input[name='keyword']").val(),
                        'audio_search_for': div,
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('#' + div + '> .row').append(response.html);
                        loadMoreToggle(page, 'show');
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                        showLoading('#' + div + '> .row', null)
                    }
                });
            });
        });
    </script>
@endpush
