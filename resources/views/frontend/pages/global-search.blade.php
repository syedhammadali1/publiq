@extends('frontend.layouts.app')

@section('content')
    <div class="content-page-box-area">
        <div class="row global-search-single">
            <div class="col-lg-6 col-md-12">
                @if ($for == 'member')
                    <div class="all-notifications-body">
                        <div class="all-notifications-header d-flex justify-content-between align-items-center">
                            <h3>Members ({{ $users->total() }})</h3>
                        </div>

                        @include('components.GlobalSearch.Member.member-loop', [
                            'users' => $users,
                        ])

                        <div class="load-more-posts-btn load-more-posts-btn-member" data-page="2"
                            data-last-page="{{ $users->lastPage() == 1 ? 1 : 2 }}"
                            style={{ $users->lastPage() == 1 ? 'display:none' : '' }}>
                            <a><i class="flaticon-loading"></i> Load More Members</a>
                        </div>
                        @include('components.sub-components.loadmoreloading',[
                            'skeletonFor' => 'members',
                        ])
                    </div>
                @endif

                @if ($for == 'post')
                    <div class="news-feed-area" id="new-post">
                        @isset($user_posts)
                            <div class="post-append">
                                @forelse ($user_posts as $user_post)
                                    @include('components.Home.NewsFeed.feedPost', [
                                        'user_post' => $user_post,
                                    ])
                                @empty
                                    No post
                                @endforelse
                            </div>
                        @endisset
                        <div class="load-more-posts-btn load-more-posts-btn-newsfeed" data-page="2"
                            data-last-page="{{ $user_posts->lastPage() == 1 ? 1 : 2 }}"
                            style={{ $user_posts->lastPage() == 1 ? 'display:none' : '' }}>
                            <a><i class="flaticon-loading"></i> Load More Posts</a>
                        </div>
                        @include('components.sub-components.loadmoreloading', [
                            'skeletonFor' => 'newsfeedpost',
                        ])
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection

@push('sub-js')
    @if ($for == 'post')
        <script>
            var scrolled = {!! json_encode($user_posts->lastPage() == 1 ? true : false) !!};
            $(window).scroll(function() {
                // console.log($(window).scrollTop() + $(window).height(), $(document).height() - 200);
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                    if (!scrolled) {
                        scrolled = true;
                        $(".load-more-posts-btn-newsfeed").trigger("click");
                    };
                }
            });
            $('.load-more-posts-btn-newsfeed').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ $user_posts->path() }}",
                    data: {
                        'global_search_keyword': {!! json_encode(request()->global_search_keyword) !!},
                        'global_search_filter': {!! json_encode(request()->global_search_filter) !!},
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('.post-append').append(response.html);
                        loadMoreToggle(page, 'show');
                        scrolled = false;
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                            scrolled = true;
                        }
                    }
                });
            });
        </script>
    @endif

    @if ($for == 'member')
        <script>
            var scrolled = {!! json_encode($users->lastPage() == 1 ? true : false) !!};
            $(window).scroll(function() {
                // console.log($(window).scrollTop() + $(window).height(), $(document).height() - 200);
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                    if (!scrolled) {
                        scrolled = true;
                        $(".load-more-posts-btn-member").trigger("click");
                    };
                }
            });
            $('.load-more-posts-btn-member').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ $users->path() }}",
                    data: {
                        'global_search_keyword': {!! json_encode(request()->global_search_keyword) !!},
                        'global_search_filter': {!! json_encode(request()->global_search_filter) !!},
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('.member-append').append(response.html);
                        loadMoreToggle(page, 'show');
                        scrolled = false;
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                            scrolled = true;
                        }
                    }
                });
            });




            // $(document).on("click", ".add-follow-member", function(e) {
            //     e.preventDefault();
            //     user = $(this);
            //     username = user.data('username');
            //     foruser = user.data('foruse');
            //     if (foruser == 'global_search') {
            //         data = {
            //             'global_search': true
            //         }
            //     }
            //     $.ajax({
            //         type: "GET",
            //         url: "/send-follow-request" + "/" + username,
            //         data: data,
            //         dataType: 'html',
            //         success: function(response) {
            //             $('.global-single-member-' + username.replace(".", "-")).html(response);
            //         }
            //     });
            // });

            // $(document).on("click", '.pending-follow-member', function(e) {
            //     e.preventDefault();
            //     user = $(this);
            //     username = $(this).data('username');
            //     foruser = user.data('foruse');
            //     if (foruser == 'global_search') {
            //         data = {
            //             'global_search': true
            //         }
            //     }
            //     $.ajax({
            //         type: "GET",
            //         url: "/remove-follow-request" + "/" + username,
            //         data: data,
            //         dataType: 'html',
            //         success: function(response) {
            //             $('.global-single-member-' + username.replace(".", "-")).html(response);
            //         }
            //     });
            // });
        </script>
    @endif

@endpush
