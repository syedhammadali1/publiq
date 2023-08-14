<style>
    .skeleton-img-like-member {
        height: 65px;
        width: 100px;
    }
</style>

<div class="@isset($skeletonFor) @else row @endisset load-more-loader @isset($class) {{ $class }} @else load-more-loading-div @endisset"
    @isset($style) style="{{ $style }}" @else style="display: none;" @endisset>
    @isset($skeletonFor)
        @if ($skeletonFor == 'members')
            <div class="item d-flex justify-content-between align-items-center">
                <div class="skeleton skeleton-img-like-member p-1" style="background-color: #bbb;border-radius: 50%">
                </div>


                <div class="w-100 h-100">

                    <div class="skeleton skeleton-text " style="width: 50%;margin-left: 1rem;"> </div>
                    <div class="skeleton skeleton-text mt-2" style="width: 50%;margin-left: 1rem;"></div>
                    <div class="skeleton skeleton-text mt-2" style="width: 50%;margin-left: 1rem;"></div>

                </div>




                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="skeleton skeleton-unmemeber"
                            style="border-radius: 10px;width: 120px;border: none;color: #ffffff;margin-left: 3px;height: 42px;">
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($skeletonFor == 'newsfeedpost')
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
        @endif
        @if ($skeletonFor == 'commentArea')
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 comment-section">
                            <div class="single-video-card">
                                <div class="video-info">
                                    <a href="#" class="rounded-circle skeleton"
                                        style="height: 3rem;width: 3rem;">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 main-comment-section">
                            <div class="single-video-card">
                                <div class="video-info">

                                    <div class="text">
                                        <a href="#">
                                            <h3 class="skeleton" style="height: 12px;width: 7rem;border-radius: 3px;">
                                            </h3>
                                        </a>
                                        <span class="skeleton skeleton-text"></span>
                                    </div>
                                </div>
                                <div class="col-12 word-break comment-single-content">
                                    <p class=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    @else
        <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
            <div class="loading-img"></div>
        </div>
    @endisset
</div>
