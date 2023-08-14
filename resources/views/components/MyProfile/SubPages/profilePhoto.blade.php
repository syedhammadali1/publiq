{{-- This component has been used in profile page for photos section --}}


<div class="tab-pane fade" id="photos" role="tabpanel">
    @isset($user)
        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-photo">
                <h3>Photos</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="all-photos-tab" data-bs-toggle="tab" href="#all-photos" role="tab"
                        aria-controls="all-photos" onclick="SubPutP('all-photos')">Free</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="photos-albums-tab" data-bs-toggle="tab" href="#photos-albums" role="tab"
                        aria-controls="photos-albums" onclick="SubPutP('photos-albums')">Paid</a>
                </li>
            </ul>

            <div class="photos-search-box">
                <form class="search-photo">
                    <input type="text" class="input-search" name="keyword" placeholder="Search photo...">
                    <input type="hidden" name="photo_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="all-photos" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-photo.free-photo', [
                        'user_free_photos' => $user->free_posts('images')->paginate(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-photo btn-all-photos" data-page="2"
                    data-last-page="{{ $user->free_posts('images')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->free_posts('images')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="photos-albums" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-photo.paid-photo', [
                        'user_paid_photos' => $user->paid_posts('images')->paginate(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-photo btn-photos-albums" data-page="2"
                    data-last-page="{{ $user->paid_posts('images')->paginate(8)->lastPage() == 1? 1: 2 }}"
                    style={{ $user->paid_posts('images')->paginate(8)->lastPage() == 1? 'display:none': '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    @endisset




    {{-- scripts --}}
    <script>
        // This function updates value of tabs in session
        function SubPutP(params) {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-photo',
                    name: params
                },
                success: function(response) {
                    $("input[name='photo_search_for']").val(params);
                    getTitle(params, 'photo')
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
                    for: 'my-profile-photo',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-photos'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='photo_search_for']").val(result);
                    getTitle(result, 'photo')
                    $('#myTab').removeClass('disabled-tab');
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
                    url: "{{ route('frontend.search.photo') }}",
                    data: $('.search-photo').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.btn-' + div).data('last-page', response.lastPage);
                        $('.title-photo > span').text(response.total);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });


            @if (!isset($noscript))
                // to paginate profile photo
                $(document).on("click", ".load-more-posts-btn-photo", function(e) {
                    page = $(this);
                    e.preventDefault();
                    div = $("input[name='photo_search_for']").val()
                    showLoading('#' + div + '> .row', null);
                    loadMoreToggle(page, 'hide');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.search.photo') }}",
                        data: {
                            'keyword': $(".search-photo > input[name='keyword']").val(),
                            'photo_search_for': div,
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
        function SubPutP(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-photo',
                    name: params
                },
                success: function(response) {
                    $("input[name='photo_search_for']").val(params);
                    getTitle(params, 'photo')
                }
            });
        }

        $(document).ready(function() {

            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile-photo',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-photos'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='photo_search_for']").val(result);
                    getTitle(result, 'photo')
                }
            });

            // This function searchs data according to that's tab/section without loading page

            $('.search-photo').submit(function(e) {
                e.preventDefault();
                div = $("input[name='photo_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-'+div)
                console.log(page);
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.photo') }}",
                    data: $('.search-photo').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.btn-'+div).data('last-page', response.lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate profile photo
            $(document).on("click", ".load-more-posts-btn-photo", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='photo_search_for']").val()
                showLoading('#' + div + '> .row', null)
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.photo') }}",
                    data: {
                        'keyword': $(".search-photo > input[name='keyword']").val(),
                        'photo_search_for': div,
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
