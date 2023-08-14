@extends('frontend.layouts.app')

@section('content')
    <div class="content-page-box-area">
        <div class="page-banner-box bg-4">
            <h3>Member</h3>
        </div>

        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
            <div class="title title-member-users">
                <h3>Member</h3>
                <span></span>
            </div>

            <div class="friends-search-box">
                <form class="search-friend">
                    <input type="text" class="input-search" placeholder="Search Members" name="keyword">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="member-all-users" role="tabpanel">
                <div class="row justify-content-center">
                    @include('components.sub-components.member.member-lop', [
                        'users' => $users,
                    ])
                </div>

                <div class="load-more-posts-btn load-more-posts-btn-member btn-member-all-users" data-page="2"
                    data-last-page="{{ $users->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $users->lastPage() == 1 ? 'display:none' : '' }}>
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>
            @include('components.sub-components.loadmoreloading')

        </div>
    </div>
@endsection

@push('sub-js')
    <script>
        $(document).ready(function() {
            getTitle('member-all-users', 'member-users')

            // This function searchs data according to that's tab/section without loading page
            $('.search-friend').submit(function(e) {
                e.preventDefault();
                div = 'member-all-users';
                showLoading('#' + div + '> .row', null)
                page = $('.btn-' + div)
                console.log(page);
                page.show();
                page.data('page', 1);
                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.search.allmembers') }}",
                    data: $('.search-friend').serialize(),
                    dataType: "json",
                    success: function(response) {
                        showLoading('#' + div + '> .row', null)
                        page.data('page', page.data('page') + 1);
                        $('#' + div + '> .row').html(response.html);
                        $('.title-member-users > span').text(response.total);
                        $('.btn- ' + div).data('last-page', response
                            .lastPage);
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                        }
                    }
                });
            });

            // to paginate members
            $('.load-more-posts-btn-member').on("click", function(e) {
                page = $(this);
                e.preventDefault();
                div = 'member-all-users'
                showLoading('#' + div + '> .row', null)
                loadMoreToggle(page, 'hide');

                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.search.allmembers') }}",
                    data: {
                        'keyword': $("input[name='keyword'").val(),
                        'member_search_for': div,
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
        });
    </script>
@endpush
