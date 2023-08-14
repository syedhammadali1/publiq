@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="page-banner-box bg-7">
            <h3>Photos</h3>
        </div>

        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-member-photo">
                <h3>Photos</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="member-free-photos-tab" data-bs-toggle="tab" href="#member-free-photos" role="tab"
                        aria-controls="member-free-photos" onclick="SubPutAllPhotos('member-free-photos')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="member-paid-photos-tab" data-bs-toggle="tab" href="#member-paid-photos" role="tab"
                        aria-controls="member-paid-photos" onclick="SubPutAllPhotos('member-paid-photos')">Paid</a>
                </li>
            </ul>

            <div class="photos-search-box">
                <form class="search-photo">
                    <input type="text" class="input-search" name="keyword" placeholder="Search photo...">
                    <input type="hidden" name="photo_search_for" value="member-free-photos">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="member-free-photos" role="tabpanel">
                <div class="row">

                    @include('components.sub-components.profile-photo.free-photo', [
                        'user_free_photos' => $mostLikedFreePhotos,
                    ])
                </div>


                <div class="load-more-posts-btn load-more-posts-btn-member-photos btn-member-free-photos" data-page="2"
                    data-last-page="{{ $mostLikedFreePhotos->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedFreePhotos->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="member-paid-photos" role="tabpanel">
                <div class="row">


                    @include('components.sub-components.profile-photo.paid-photo', [
                        'user_paid_photos' => $mostLikedPaidPhotos,
                    ])
                </div>

               <div class="load-more-posts-btn load-more-posts-btn-member-photos btn-member-paid-photos" data-page="2"
                    data-last-page="{{ $mostLikedPaidPhotos->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $mostLikedPaidPhotos->lastPage() == 1 ? 'display:none' : '' }}>
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
        function SubPutAllPhotos(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'member-all-photos',
                    name: params
                },
                success: function(response) {
                    $("input[name='photo_search_for']").val(params);
                    getTitle(params, 'member-photo')
                }
            });
        }

        $(document).ready(function() {

            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'member-all-photos',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'member-free-photos'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='photo_search_for']").val(result);
                    getTitle(result, 'member-photo')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-photo').submit(function(e) {
                e.preventDefault();
                div = $("input[name='photo_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                console.log(page);
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.allphotos') }}",
                    data: $('.search-photo').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-member-photo > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate photos
            $('.load-more-posts-btn-member-photos').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='photo_search_for']").val()
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.allphotos') }}",
                    data: {
                        'keyword': $("input[name='keyword'").val(),
                        'photo_search_for': div,
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
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
