<style>
    .share-post-pop-main {
        padding-top: 23px;
        overflow-y: scroll;
        height: 400px;
    }
</style>

<div class="col-lg-12 col-md-12">
    <div class="news-feed-area">
        <div class="news-feed news-feed-form">
            <form class="share-post-form" enctype="multipart/form-data">
                <input type="hidden" name="post" value="{{ $user_post->uuid }}">

                <div class="form-group">
                    <input name="title" class="form-control news-title-feed-input mb-2" placeholder="Enter Title" />
                    <span class="text-danger mt-3" id="titleerror" style="display: none" role="alert">
                        <strong> </strong>
                    </span>
                </div>

                <div class="form-group">
                    <textarea placeholder="Write Something Here" class="form-control mb-2" id="editor" name="description"></textarea>
                    <span class="text-danger mt-2" id="descriptionerror" style="display: none" role="alert">
                        <strong> </strong>
                    </span>
                </div>

                <div class="share-post-pop-main">
                    @include('components.Home.NewsFeed.feedPost', [
                        'authUser' => $authUser,
                        'user_post' => $user_post,
                        'now_sharing_post' => true,
                    ])
                </div>

                <div class="go-pubilq mt-4">
                    <button class="go-pubilq-btn" type="submit">Post</button>
                    @include('components.sub-components.loadmoreloading', [
                        'class' => 'gopubliq-post-share-btn',
                    ])
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.share-post-form').submit(function(e) {
        e.preventDefault();
        btn = $('.go-pubilq-btn');
        loadMoreToggle(btn, 'hide', '.gopubliq-post-share-btn');
        $.ajax({
            type: "POST",
            url: "{{ route('frontend.share.post') }}",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                loadMoreToggle(btn, 'show', '.gopubliq-post-share-btn');
                toastr.success('Successfuly shared');
                if (currentRoute == '/') {
                    $('.post-append').prepend(response.html);
                }
                $('.mediumModalClose').trigger('click');
            },
            error: function(errors) {
                $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                    valueOfElement) {
                    $('#' + indexInArray + 'error').show();
                    $('#' + indexInArray + 'error' + ' > strong').text(valueOfElement)
                });
                loadMoreToggle(btn, 'show', '.gopubliq-post-share-btn');
            }
        });
    });
</script>
