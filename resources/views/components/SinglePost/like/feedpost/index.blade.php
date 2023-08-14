<div class="content-page-box-area">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="like-popup-body p-0">
                {{-- <div class="all-notifications-header d-flex justify-content-between align-items-center">
                    <h3>
                        <span class="badge bg-dark">LIKES</span>
                    </h3>
                    <h3>
                        <span class="badge bg-dark">{{ $users->total() }}</span>
                    </h3>
                </div> --}}

                @include('components.SinglePost.like.feedpost.foreach', [
                    'users' => $users,
                    'authId' => $authId,
                    'typeOf' => $typeOf
                ])

                <div class="load-more-posts-btn load-more-posts-btn-like" data-page="2"
                    data-last-page="{{ $users->lastPage() == 1 ? 1 : 2 }}"
                    style={{ $users->lastPage() == 1 ? 'display:none' : '' }}>
                    <a><i class="flaticon-loading"></i> Load More </a>
                </div>
                @include('components.sub-components.loadmoreloading', [
                    'class' => 'load-more-like-page-loading',
                    'style' => 'display:none;z-index:9999',
                ])
            </div>
        </div>
    </div>
</div>

<script>
    $('.load-more-posts-btn-like').on("click", function(e) {
        page = $(this);
        e.preventDefault();
        loadMoreToggle(page, 'hide', '.load-more-like-page-loading');
        $.ajax({
            type: "GET",
            url: "{{ $users->path() }}",
            data: {
                'page': page.data('page'),
            },
            dataType: "json",
            success: function(response) {
                page.data('page', page.data('page') + 1);
                page.data('last-page', response.lastPage);
                $('.like-user-append').append(response.html);
                loadMoreToggle(page, 'show', '.load-more-like-page-loading');
                if (response.lastPage < page.data('page')) {
                    page.hide();
                }
            }
        });
    });
</script>
