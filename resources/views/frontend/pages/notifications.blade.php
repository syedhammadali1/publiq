@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">

<div class="main-notification-single-ui">
        <div class="friends-inner-box-style d-flex justify-content-between align-items-center notification-single-ui">
            {{-- <div class="title title-member-video">
                <h3>Videos</h3>
                <span></span>
            </div> --}}

            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" id="all-notifications-tab" data-bs-toggle="tab" href="#all-notifications" role="tab"
                        aria-controls="all-notifications"
                        onclick="SubPutAllNotifications('all-notifications')">Notifications</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="follow-notifications-tab" data-bs-toggle="tab" href="#follow-notifications"
                        role="tab" aria-controls="follow-notifications"
                        onclick="SubPutAllNotifications('follow-notifications')">Follow Request</a>
                </li>
            </ul>

            {{-- <div class="friends-search-box">
                <form class="search-video">
                    <input type="text" class="input-search" name="keyword" placeholder="Search video...">
                    <input type="hidden" name="video_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div> --}}

            <input type="hidden" name="notification_search_for">

        </div>
    </div>
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade" id="all-notifications" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.notifications.pages.notification', [
                        'notifications' => getAuthAllNotification(),
                    ])
                </div>

            </div>

            <div class="tab-pane fade" id="follow-notifications" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.notifications.pages.follow', [
                        'notifications' => getAuthUnreadFollowNotification(),
                    ])
                </div>


            </div>

            @include('components.sub-components.loadmoreloading')
        </div>
    </div>
@endsection

@push('sub-js')
    <script>
        // This function updates value of tabs in session
        function SubPutAllNotifications(params) {
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'notification-page',
                    name: params
                },
                success: function(response) {

                    $("input[name='notification_search_for']").val(params);
                }
            });
        }

        $(document).ready(function() {

            // This ajax request gets value of tabs from session and make tab active according to session value

            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'notification-page',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-notifications'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='notification_search_for']").val(result);
                }
            });




            // to paginate photos
            $('.load-more-posts-btn-notifiction').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='notification_search_for']").val()
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.notification.search') }}",
                    data: {
                        'notification_search_for': div,
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('.notifications-append-div').append(response.html);
                        loadMoreToggle(page, 'show');
                        showLoading('#' + div + '> .row', null)
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            $('.load-more-posts-btn-follownotifications').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = $("input[name='notification_search_for']").val()
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.notification.search') }}",
                    data: {
                        'notification_search_for': div,
                        'page': page.data('page'),
                    },
                    dataType: "json",
                    success: function(response) {
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        $('.follownotifications-append-div').append(response.html);
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
