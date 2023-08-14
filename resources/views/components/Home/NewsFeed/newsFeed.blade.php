@isset($skeleton)
    <div class="news-feed-area">
        <div class="news-feed news-feed-form">
            <h3 class="news-feed-title skeleton skeleton-text"></h3>

            <form>
                <div class="form-group">
                    <div class="skeleton skeleton-news-title-feed-input"
                        style="background-color: #F4F7FC;    padding: 15px 25px;  box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 16px 0 rgb(84 32 104 / 13%);  margin-top: -2%;   color: var(--paragraph-color);   border-radius: 10px;   font-size: 13px;">
                    </div>
                    <span class="text-danger mt-2" id="title" style="display: none" role="alert">
                        <strong> </strong>
                    </span>
                </div>

                <div class="form-group">
                    <div class="skeleton skeleton-textarea"
                        style=" margin-top: 2%;width: 100%;height: 100px;box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 16px 0 rgb(84 32 104 / 13%);background-color: #f4f7fc;border-collapse: separate;padding: 14px;margin-bottom: 3%;">
                    </div>
                    <span class="text-danger mt-2" id="description" style="display: none" role="alert">
                        <strong> </strong>
                    </span>
                </div>

                <div class="form-group " id="photos-hidden-div" style="display: none">
                    <div class="input-images"></div>
                    <span class="text-danger mt-2" id="images" style="display: none" role="alert">
                        <strong> </strong>
                    </span>
                </div>

                <div class="form-group" id="video-hidden-div" style="display: none">
                    <div>
                        <div class="modal-content media-upload-height video-drop upload-media-div">
                            <label for="fileUp" class="btn btn-default media-upload-height" flow-btn="">
                                <h4 class="click"></h4>
                                <img src="https://publicq.amtkpl.com/frontend/assets/images/image-up.png" alt=""
                                    class="upload-post-div-image">
                                <input type="file" class="upload video-input " id="fileUp" name="video"
                                    hidden="" accept=".mp4">


                                <div class="row" style="justify-content: center;">
                                    <div class="col-6">
                                        <div style="justify-content: end;display: flex;">
                                            <button type="button" class="delete-video" style="display: none;">
                                                <i style="font-size: 17px;" class="fa"></i>
                                            </button>
                                        </div>
                                        <video id="vid" style="display: none;width: 100%;height: 100%;"
                                            class="video-play" controls="">
                                            Your browser does not support the video tag.
                                        </video>

                                    </div>
                                </div>

                            </label>
                        </div>
                    </div>
                </div>




                <div class="form-group" id="audio-hidden-div" style="display: none">
                    <div>
                        <div class="modal-content media-upload-height upload-media-div">
                            <label for="audio" class="btn btn-default media-upload-height" flow-btn="">
                                <h4 class="click1"></h4>
                                <img src="https://publicq.amtkpl.com/frontend/assets/images/image-up.png" alt=""
                                    class="upload-post-div-image">
                                <input type="file" class="upload audio-input " id="audio" name="audio"
                                    hidden="" accept=".mp3">


                                <div class="row" style="justify-content: center;">
                                    <div class="col-12" style="margin-top: 8%;">
                                        <div style="justify-content: end;display: flex;">
                                            <button type="button" class="delete-audio">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <audio id="aud" class="audio-play" style="display: none" controls="">
                                        </audio>

                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>


                <ul class="button-group d-flex justify-content-between align-items-center mt-2">
                    @for ($i = 0; $i < 4; $i++)
                        <li class="skeleton photo-btn"
                            style="background-color: transparent;border: none;font-size: 15px;font-weight: 600;color: var(--paragraph-color);position: relative;padding-left: 28px;padding-right: 0;-webkit-transition: var(--transition);transition: var(--transition);">
                            <div class="skeleton skeleton-text"></div>
                        </li>
                    @endfor
                </ul>
                <span class="text-danger mt-2" id="is_paid" style="display: none" role="alert">
                    <strong> </strong>
                </span>


                <div class="go-pubilq mt-4">
                    <div class="skeleton go-pubilq-btn-photo"
                        style="width: 100%;color: white;background-color: #542068;border-radius: 5px;height: 35px;border: none;padding: 7px 1px 7px 1px;">
                    </div>

                </div>
            </form>
        </div>

        <div class="news-feed news-feed-stories">
            <div class="stories-title skeleton skeleton-text">
                {{-- <h3 class="skeleton skeleton-text"></h3> --}}
            </div>

            <div class="row justify-content-center">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-2 col-sm-4 col-4 mx-3">
                        <div class="stories-item">
                            <span class="skeleton skeleton-square-box"
                                style="height: 70px;width: 100px;border-radius: 10px"></span>
                            <div class="d-flex justify-content-center">
                                <span class="skeleton skeleton-text w-100" style="max-width: 8ch !important"></span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>




        @for ($i = 0; $i < 3; $i++)
            <div class="news-feed news-feed-post">
                <div class="post-header d-flex justify-content-between align-items-center">
                    <div class="image">
                        <a href="">
                            <span class="skeleton skeleton-img"></span>
                        </a>
                    </div>
                    <div class="info ms-3 skeleton">
                        <span class="name skeleton skeleton-text"></span>
                        <span class="small-text skeleton skeleton-text"></span>
                    </div>
                </div>
                <div class="post-body word-break">
                    <h6 class="skeleton skeleton-text"></h6>
                    <p class="skeleton skeleton-text">

                    </p>

                    <div class="post-image timeline-post-div skeleton" style="height: 400px">
                        <a> <span>
                                <img class="video-side timeline-image-size " />
                            </span>
                        </a>

                    </div>

                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                        <li class="post-react">
                            <a>
                                <span class="skeleton skeleton-square-box" style="height: 10px">
                                </span>

                            </a>
                        </li>
                        <li class="post-comment">
                            <a class="">
                                <span class="skeleton skeleton-square-box" style="height: 10px">
                                </span>
                            </a>
                        </li>
                        <li class="post-share">
                            <a href="">
                                <span class="skeleton skeleton-square-box" style="height: 10px">
                                </span>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        @endfor

        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.render.home') }}",
                    data: {
                        'render_for': 'newsFeed',
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".news-feed-area").replaceWith(response);
                        }, 1000);
                    }
                });
            });
        </script>
    </div>
@else
    <div class="news-feed-area news-feed-area-main">
        @if (session()->has('viewedUser'))
            @if (session()->get('viewedUser')['url'] == 'my')
                @include('components.uploadPostComponent')
            @endif
        @else
            @include('components.uploadPostComponent')
        @endif

        @isset($mostPopularPubliqars)
            @include('components.Home.popularPublisher', [
                'mostPopularPubliqars' => $mostPopularPubliqars,
            ])
        @endisset

        <div class="news-feed-area">
            @if (isset($newsFeed))
                <div class="stories-title d-flex justify-content-between align-items-center mb-3">
                    <h5> {{ $newsFeed }}</h5>
                </div>
            @endif


            @isset($user_posts)
                <div class="post-append">
                    @each('components.Home.NewsFeed.feedPost', $user_posts, 'user_post', 'components.Home.NewsFeed.nopost')
                </div>
            @endisset


            <div class="load-more-posts-btn load-more-posts-btn-newsfeed" data-page="2"
                data-last-page="{{ $user_posts->lastPage() == 1 ? 1 : 2 }}" data-showing-suggestion="false"
                style={{ $user_posts->lastPage() == 1 ? 'display:none' : '' }}>
                <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
            </div>
            @include('components.sub-components.loadmoreloading', [
                'skeletonFor' => 'newsfeedpost',
            ])
        </div>


        <script>
            var scrolled = {!! json_encode($user_posts->lastPage() == 1 ? true : false) !!};
            $(document).ready(function() {
                var loadmorebtn = $('.load-more-posts-btn-newsfeed');
                if (loadmorebtn.data('last-page') == 1 && currentRoute == '/') {
                    loadmorebtn.data('showing-suggestion', true);
                    loadmorebtn.show();
                    scrolled = false;
                }
            });

            $(window).scroll(function() {
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
                if (page.data('showing-suggestion')) {
                    data = {
                        'page': page.data('page'),
                        'suggestions': true,
                    }
                } else {
                    data = {
                        'page': page.data('page'),
                    }
                }
                $.ajax({
                    type: "GET",
                    url: "{{ $user_posts->path() }}",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        page.data('page', page.data('page') + 1);
                        page.data('last-page', response.lastPage);
                        if ("suggestedPostHtml" in response) {
                            $('.post-append').append(response.suggestedPostHtml);
                        }
                        $('.post-append').append(response.html);
                        loadMoreToggle(page, 'show');
                        scrolled = false;
                        if (response.lastPage < page.data('page')) {
                            page.hide();
                            scrolled = true;
                            if ("showSuggestion" in response) {
                                if (response.showSuggestion == true) {
                                    page.data('page', 2);
                                    page.data('last-page', response.lastPage);
                                    page.data('showing-suggestion', true);
                                    page.show();
                                    scrolled = false;
                                }
                            }

                        }
                    }
                });
            });


            $(document).ready(function() {



                $(document.body).on('click', '.delete-post', function() {

                    Swal.fire({
                    title: 'Are You Sure',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).closest('.news-feed-post').hide();
                        var uuid = $(this).data('id');
                        $.ajax({
                            type: "POST",
                            url: "/{{ auth()->user()->name }}/" + uuid + '/delete',
                            data: {
                                'uuid': uuid,
                            },
                            success: function(response) {
                                toastr.success("Delete Successfully");
                            }
                        });

                    }
                })


                });

            });
        </script>

    </div>
@endisset
