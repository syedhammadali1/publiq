@if ($user_post->type == 'text')
    <div class="sidemenu-area " id="sidemenu-area-new">
        <div class="sidemenu-body">
            <div class="sidemenu-nav metisMenu h-100 metismenu " id="sidemenu-nav" data-simplebar="init">
                <div class="simplebar-wrapper-new ">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask ">
                        <div class="simplebar-offset " id="simplebar-offset-new">
                            <div class="simplebar-content-wrapper " id="simplebar-content-wrapper-new">
                                <div class="simplebar-content scroll-post-div-{{ $user_post->id }}"
                                    id="simplebar-content-new">
                                    <div class="recent-contact-box">
                                        <div class="news-feed-area">
                                            <div class="news-feed news-feed-post" id="main-area-single-comment">
                                                <div class="row">
                                                    <div class="col-12">
                                                        @include('components.sub-components.loadmoreloading',
                                                            [
                                                                'skeletonFor' => 'commentArea',
                                                            ])

                                                        <div class="load-more-posts-btn load-previous-posts-btn-post-modal"
                                                            data-post-id="{{ $user_post->id }}" data-page="2"
                                                            data-last-page="{{ $user_post_comments->lastPage() == 1 ? 1 : 2 }}"
                                                            style={{ $user_post_comments->lastPage() == 1 ? 'display:none' : '' }}>
                                                            <a href="#"><i class="flaticon-loading"></i>View
                                                                Previous
                                                                Comments</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 previous-comments-div-{{ $user_post->id }}">
                                                        @include('components.SinglePost.comment.commentLoop',
                                                            [
                                                                'user_post_comments' => $user_post_comments,
                                                            ])
                                                    </div>
                                                </div>
                                                <div class="post-body">
                                                    <form class="post-footer">
                                                        <div class="form-group"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-body" data-simplebar="init">
                                            <div class="simplebar-wrapper" id="simplebar-wrapper">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer">
                                                    </div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" id="simplebar-offset-new">
                                                        <div class="simplebar-content-wrapper"
                                                            id="simplebar-content-wrapper">
                                                            <div class="simplebar-content" id="simplebar-content">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" id="simplebar-placeholder"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal" id="simplebar-horizontal">
                                                <div class="simplebar-scrollbar" id="simplebar-scrollbar">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" id="simplebar-scrollbar-new">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-search-box" id="contact-search-box">
                                            <textarea name="message" class="form-control input-search-new user-comment comment-section-{{ $user_post->id }}"
                                                data-post-id="{{ $user_post->id }}" placeholder="Write a comment..." spellcheck="true"></textarea>
                                            <button type="button" class="new-submit comment-btn"
                                                data-post-id="{{ $user_post->id }}"><i
                                                    class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" id="simplebar-placeholder-new">
                    </div>
                </div>
                <div class="simplebar-track simplebar-horizontal" id="simplebar-track">
                    <div class="simplebar-scrollbar" id="simplebar-scrollbar-two">
                    </div>
                </div>
                <div class="simplebar-track simplebar-vertical" id="new-simplebar-vertical">
                    <div class="simplebar-scrollbar" id="new-simplebar-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
@else

    <div style="height: 490px">
        <div class="simplebar-content scroll-post-div-{{ $user_post->id }}" id="simplebar-content-new">
            <div class="recent-contact-box">
                <div class="news-feed-area">
                    <div class="news-feed news-feed-post" id="main-area-single-comment">
                        <div class="row">
                            <div class="col-12">
                                @include('components.sub-components.loadmoreloading', [
                                    'skeletonFor' => 'commentArea',
                                ])

                                <div class="load-more-posts-btn load-previous-posts-btn-post-modal"
                                    data-post-id="{{ $user_post->id }}" data-page="2"
                                    data-last-page="{{ $user_post_comments->lastPage() == 1 ? 1 : 2 }}"
                                    style={{ $user_post_comments->lastPage() == 1 ? 'display:none' : '' }}>
                                    <a href="#"><i class="flaticon-loading"></i>View Previous
                                        Comments</a>
                                </div>
                            </div>
                            <div class="col-12 previous-comments-div-{{ $user_post->id }}">
                                @include('components.SinglePost.comment.commentLoop', [
                                    'user_post_comments' => $user_post_comments,
                                ])
                            </div>
                        </div>
                        <div class="post-body">
                            <form class="post-footer">
                                <div class="form-group"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contact-body" data-simplebar="init">
                    <div class="simplebar-wrapper" id="simplebar-wrapper">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer">
                            </div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" id="simplebar-offset-new">
                                <div class="simplebar-content-wrapper" id="simplebar-content-wrapper">
                                    <div class="simplebar-content" id="simplebar-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" id="simplebar-placeholder"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" id="simplebar-horizontal">
                        <div class="simplebar-scrollbar" id="simplebar-scrollbar">
                        </div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" id="simplebar-scrollbar-new">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-search-box" id="contact-search-box">
        <textarea name="message" class="form-control input-search-new user-comment comment-section-{{ $user_post->id }}"
            data-post-id="{{ $user_post->id }}" placeholder="Write a comment..." spellcheck="true"></textarea>
        <button type="button" class="new-submit comment-btn" data-post-id="{{ $user_post->id }}"><i
                class="fa fa-paper-plane"></i></button>
    </div>
@endif


<script>
    // $(".scroll-post-div-" + data.post_id).animate({
    //     scrollTop: $(".scroll-post-div-" + data.post_id).prop("scrollHeight")
    // }, 1000);
    var post_id = {!! json_encode($user_post->id) !!};
    var scrolled = {!! json_encode($user_post_comments->lastPage() == 1 ? true : false) !!};
    $(".scroll-post-div-" + post_id).scroll(function() {
        // console.log($(".scroll-post-div-" + post_id).scrollTop() + $(".scroll-post-div-" + post_id).height(), $(
        //     ".scroll-post-div-" + post_id).height());
        if ($(".scroll-post-div-" + post_id).scrollTop() + $(".scroll-post-div-" + post_id).height() - 10 <= $(
                ".scroll-post-div-" + post_id).height()) {
            if (!scrolled) {
                scrolled = true;
                $(".load-previous-posts-btn-post-modal").trigger("click");
            };
        }
    });

    $('.load-previous-posts-btn-post-modal').on("click", function(e) {
        page = $(this);
        e.preventDefault();
        // showLoading('.previous-comments-div-' + page.data('post-id'), null)
        loadMoreToggle(page, 'hide');
        $.ajax({
            type: "GET",
            url: "{{ route('frontend.single.post.render') }}",
            data: {
                'id': page.data('post-id'),
                'page': page.data('page'),
            },
            dataType: "json",
            success: function(response) {
                page.data('page', page.data('page') + 1);
                page.data('last-page', response.lastPage);
                $('.previous-comments-div-' + page.data('post-id')).prepend(response.html);
                // showLoading('.previous-comments-div-' + page.data('post-id'), null)
                loadMoreToggle(page, 'show');
                scrolled = false;
                if (response.lastPage < page.data('page')) {
                    page.hide();
                    scrolled = true;
                }
            }
        });
    });


    $('.comment-btn').on("click", function(e) {
        post_id = $(this).data('post-id');
        comment = $('.comment-section-' + post_id).val();
        if (comment.trim().length > 0) {
            $.ajax({
                type: "POST",
                url: "{{ route('frontend.comment.post') }}",
                data: {
                    'post_id': post_id,
                    'message': comment,
                },
                dataType: "json",
                success: function(response) {
                    $('.comment-section-' + post_id).val('')
                    $('.comment-section-' + post_id).height(40)
                }
            });
        }
    });
</script>
