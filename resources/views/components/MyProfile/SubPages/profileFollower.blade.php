{{-- This component has been used in profile page for followers section --}}

<div class="tab-pane fade" id="Followers" role="tabpanel">

    @if (isset($user))
        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-follower">
                <h3></h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="all-Following-tab" data-bs-toggle="tab" href="#all-Following" role="tab"
                        onclick="SubPutF('all-Following')" aria-controls="all-Following">Following</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="Followers-added-tab" data-bs-toggle="tab" href="#Followers-added"
                        role="tab" onclick="SubPutF('Followers-added')"
                        aria-controls="Followers-added">Followers</a>
                </li>
            </ul>

            <div class="friends-search-box">
                <form class="seach-follow">
                    <input type="text" class="input-search" name="keyword" placeholder="Search follower...">
                    <input type="hidden" name="follower_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="all-Following" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-follower.following', [
                        'following_users' => $user->my_followings(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-follower btn-all-Following" data-page="2"
                    data-last-page="{{ $user->my_followings(8)->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $user->my_followings(8)->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade " id="Followers-added" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-follower.followers', [
                        'user_followers' => $user->my_followers(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-follower btn-Followers-added" data-page="2"
                    data-last-page="{{ $user->my_followers(8)->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $user->my_followers(8)->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    @endif


    {{-- scripts --}}
    <script>
        // This function updates value of tabs in session

        function SubPutF(params) {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-follower',
                    name: params
                },
                success: function(response) {
                    $("input[name='follower_search_for']").val(params);
                    getTitle(params, 'follower')
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
                    for: 'my-profile-follower',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-Following'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='follower_search_for']").val(result);
                    getTitle(result, 'follower')
                    $('#myTab').removeClass('disabled-tab');
                }
            });
            // This function searchs data according to that's tab/section without loading page

            $('.seach-follow').submit(function(e) {
                e.preventDefault();
                div = $("input[name='follower_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.follower') }}",
                    data: $('.seach-follow').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-follower > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate profile followers
            @if (!isset($noscript))
                $(document).on("click", ".load-more-posts-btn-follower", function(e) {
                    page = $(this);
                    e.preventDefault();
                    div = $("input[name='follower_search_for']").val();
                    showLoading('#' + div + '> .row', null);
                    loadMoreToggle(page, 'hide');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.search.follower') }}",
                        data: {
                            'keyword': $("input[name='keyword'").val(),
                            'follower_search_for': div,
                            'page': page.data('page'),
                        },
                        dataType: "json",
                        success: function(response) {
                            page.data('page', page.data('page') + 1);
                            page.data('last-page', response.lastPage);
                            $('#' + div + '> .row').append(response.html);
                            showLoading('#' + div + '> .row', null)
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

        function SubPutF(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-follower',
                    name: params
                },
                success: function(response) {
                    $("input[name='follower_search_for']").val(params);
                    getTitle(params, 'follower')
                }
            });
        }

        $(document).ready(function() {
          // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile-follower',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-Following'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='follower_search_for']").val(result);
                    getTitle(result, 'follower')
                }
            });
            // This function searchs data according to that's tab/section without loading page

            $('.seach-follow').submit(function(e) {
                e.preventDefault();
                div = $("input[name='follower_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.follower') }}",
                    data: $('.seach-follow').serialize(),
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

            // to paginate profile followers
            $(document).on("click", ".load-more-posts-btn-follower", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='follower_search_for']").val()
                showLoading('#' + div + '> .row', null)
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.follower') }}",
                    data: {
                        'keyword': $("input[name='keyword'").val(),
                        'follower_search_for': div,
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
