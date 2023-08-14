@isset($user_post)

    <div class="row h-100">
        @if ($user_post->type != 'text')
            <button type="button" class="btn-close fullScreenModalClose post-modal-close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="fa fa-close"></i></button>
            <div class="col-lg-8 col-md-12 container h-100" id="single-post-content-model-work">
                @if ($user_post->type == 'video')
                    @include('components.SinglePost.type.video')
                @elseif ($user_post->type == 'images')
                    <div class="row h-100 w-100 justify-content-center align-items-center">
                        @include('components.SinglePost.type.image')
                    </div>
                @elseif ($user_post->type == 'audio')
                    @include('components.SinglePost.type.audio')
                @endif
            </div>
        @else
            <style>
                #right-sidebar-area {
                    width: 77% ! important;
                    top: 5.3rem ! important;
                }


                #single-post-reaction .post-react i {
                    font-size: 15px !important;
                    color: #542068;
                    position: relative;
                    top: 2px;
                    margin-right: 8px !important;
                }

                #single-post-reaction .post-react span {
                    font-size: 14px !important;
                }

                #single-post-reaction .post-react .number {
                    color: var(--paragraph-color);
                    margin-left: 10px !important;
                    border-left: 1px solid #e1e1e1;
                    padding-left: 12px !important;
                    font-size: 14px !important;
                }

                #single-post-reaction .post-comment i {
                    font-size: 15px !important;
                    color: #542068;
                    position: relative;
                    top: 3px !important;
                    margin-right: 8px !important;
                }

                #single-post-reaction .post-comment span {
                    font-size: 14px !important;
                }

                #single-post-reaction .post-comment .number {
                    color: var(--paragraph-color);
                    margin-left: 10px !important;
                    border-left: 1px solid #e1e1e1;
                    padding-left: 12px !important;
                    font-size: 14px !important;
                }

                #single-post-reaction .post-share i {
                    font-size: 15px !important;
                    position: relative;
                    top: 3px !important;
                    margin-right: 8px !important;
                }

                #single-post-reaction .post-share span {
                    font-size: 14px !important;
                }

                #single-post-reaction .post-share .number {
                    color: var(--paragraph-color);
                    margin-left: 10px !important;
                    border-left: 1px solid #e1e1e1;
                    padding-left: 12px !important;
                    font-size: 14px !important;
                }

                #simplebar-content-new {
                    padding: 15px ! important;
                    height: 100%;
                    overflow: hidden scroll;
                }

                .news-feed-area .news-feed-post .post-header .info {
                    width: 89%;
                }
            </style>

            <div class="col-lg-3 col-md-12">
                @include('components.SinglePost.comment.commentArea', [
                    'user_post' => $user_post,
                    'user_post_comments' => $user_post_comments,
                ])
            </div>
        @endif

        <div @if ($user_post->type != 'text') class="col-lg-3 col-md-12" @else class="col-lg-9 col-md-12" @endif>
            @include('components.SinglePost.description.descriptionArea', [
                'user_post' => $user_post,
            ])
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // var newHeight = $('.fullScreenModalBody').height();
            // $(".img-box").height(newHeight);
            // $(".img-box").css('height', newHeight + 'px' + ' !important');
            // $(".img-box").attr('style', 'height:' + newHeight + 'px !important');

            $(".scroll-post-div-" + {!! json_encode($user_post->id) !!}).animate({
                scrollTop: $(".scroll-post-div-" + {!! json_encode($user_post->id) !!}).prop("scrollHeight")
            }, 1000);
            url = {!! json_encode(route('frontend.single.post', ['user' => $user_post->user, 'post' => $user_post])) !!}

            window.history.pushState(PerviousUrl, PerviousUrl, url)
            if (window.history && window.history.pushState) {
                $(window).on('popstate', function() {
                    $('#fullScreenModal').modal('hide')
                    $(window).unbind('popstate');
                    $('.fullScreenModalBody').html(`@include('components.sub-components.loadMoreModal')`);
                });
            }
        });
    </script>
@endisset
