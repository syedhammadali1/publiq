{{-- This component has been used in profile page for subscribers section --}}


<div class="tab-pane fade" id="Subscriber" role="tabpanel">
    @isset($user)
        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-subscriber">
                <h3>Subscribers</h3>
                <span></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="all-Subscribed-tab" data-bs-toggle="tab" href="#all-Subscribed" role="tab"
                        onclick="SubPutS('all-Subscribed')" aria-controls="all-Subscribed">Subscribed</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="Subscribed-added-tab" data-bs-toggle="tab" href="#Subscribed-added"
                        onclick="SubPutS('Subscribed-added')" role="tab"
                        aria-controls="Subscribed-added">Subscribers</a>
                </li>
            </ul>

            <div class="friends-search-box">
                <form class="search-subscriber">
                    <input type="text" class="input-search" name="keyword" placeholder="Search friends..." />
                    <input type="hidden" name="subscriber_search_for">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="all-Subscribed" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-subscriber.subscribed', [
                        'user_subscriptions' => $user->my_subscriptions(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-subscriber btn-all-Subscribed" data-page="2"
                    data-last-page="{{ $user->my_subscriptions(8)->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $user->my_subscriptions(8)->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="Subscribed-added" role="tabpanel">
                <div class="row">
                    @include('components.sub-components.profile-subscriber.subscribers', [
                        'user_subscribers' => $user->my_subscribers(8),
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-subscriber btn-Subscribed-added" data-page="2"
                    data-last-page="{{ $user->my_subscribers(8)->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $user->my_subscribers(8)->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')
        </div>
    @endisset

    {{-- script --}}
    <script>
        // This function updates value of tabs in session
        function SubPutS(params) {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile-subscriber',
                    name: params
                },
                success: function(response) {
                    $("input[name='subscriber_search_for']").val(params);
                    getTitle(params, 'subscriber');
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
                    for: 'my-profile-subscriber',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'all-Subscribed'
                    }
                    $('#' + result + '-tab').addClass("active");
                    $('#' + result).addClass("active show");
                    $("input[name='subscriber_search_for']").val(result);
                    getTitle(result, 'subscriber');
                    $('#myTab').removeClass('disabled-tab');
                }
            });

            $('.search-subscriber').submit(function(e) {
                e.preventDefault();
                div = $("input[name='subscriber_search_for']").val()
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.subscriber') }}",
                    data: $('.search-subscriber').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-subscriber > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            @if (!isset($noscript))
                $(document).on("click", ".load-more-posts-subscriber", function(e) {
                    page = $(this);
                    e.preventDefault();
                    div = $("input[name='subscriber_search_for']").val();
                    showLoading('#' + div + '> .row', null);
                    loadMoreToggle(page, 'hide');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.search.subscriber') }}",
                        data: {
                            'keyword': $("input[name='keyword'").val(),
                            'subscriber_search_for': div,
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
