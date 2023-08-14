@extends('frontend.layouts.app', [
    'noNeedOfHeader' => true,
    'noNeedOfLSidebar' => true,
    'noNeedOfRSidebar' => true,
    'noNeedOfFooter' => true,
])
@section('content')
    <div class="row h-100 kjshgdyuasbgdagieu">

        <div class="col-lg-8 col-md-12 container h-100" id="single-post-content-model-work">
            <div class="row h-100 w-100 justify-content-center align-items-center">
                <div class="skeleton skeleton-main-single-img" style="height: 75vh;    border-radius: 10px;"></div>

                <div class="content-page-box-area single-post-content-page">
                    <div class="row">
                        <div class="single-page-post-view">
                            <div class="col-md-12 mx-auto">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row" style="justify-content: center;display: grid;">
                                                <div class="col-sm-12">
                                                    <div class="img-box">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12">
            <div class="right-sidebar-area" id="right-sidebar-area" data-simplebar="init">
                <div class="simplebar-wrapper " id="simplebar-wrapper-new" style="margin: -15px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" id="simplebar-offset" style="right: -1.11111px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" id="new-simplebar-content-wrapper"
                                style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" id="new-simplebar" style="padding: 15px;">
                                    <div class="recent-chat-box">
                                        <div class="row">
                                            <div class="news-feed-area" id="description-single-main">
                                                <div class="news-feed news-feed-post" id="single-description-post"
                                                    style="margin-bottom: 0px !important;">
                                                    <div
                                                        class="post-header d-flex justify-content-between align-items-center">

                                                        <div class="skeleton skeleton-single-img"
                                                            style="border-radius: 34px;">
                                                            <div class="rounded-circle skeleton"
                                                                style="height: 3rem;width: 3rem;">

                                                            </div>
                                                        </div>

                                                        <div class="info ms-3">
                                                            <div class="skeleton skeleton-single-name"
                                                                style="height: 10px;width: 100px;"></div>

                                                            <div class="skeleton skeleton-single-name"
                                                                style="height: 10px;margin-top: 7px;width: 75px;">
                                                            </div>
                                                        </div>
                                                        <div class="skeleton skeleton-drop"
                                                            style="height: 8px;width: 100px;"></div>
                                                    </div>

                                                    <div class="post-body word-break">
                                                        <div class="skeleton skeleton-single-names"
                                                            style="height: 10px;width: 76px;"></div>
                                                        <div class="skeleton skeleton-single-des"
                                                            style="height: 10px;width: 100px;margin-top: 10px;">
                                                        </div>
                                                        <ul class="post-meta-wrap d-flex justify-content-between align-items-center"
                                                            id="single-post-reaction">
                                                            <li class="post-react">
                                                                <div class="skeleton skeleton-single-like"
                                                                    style="height: 10px;width: 76px;"></div>
                                                            </li>
                                                            <div class="skeleton skeleton-single-comments"
                                                                style="height: 10px;width: 76px;"></div>

                                                            <div class="skeleton skeleton-single-names"
                                                                style="height: 10px;width: 76px;"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 490px">
                                        <div class="simplebar-content scroll-post-div-270" id="simplebar-content-new"
                                            style="margin: 0px !important;    padding: 0px !important;">
                                            <div class="recent-contact-box" style="margin: 0px !important;">
                                                <div class="news-feed-area">
                                                    <div class="news-feed news-feed-post" id="main-area-single-comment">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <style>
                                                                    .skeleton-img-like-member {
                                                                        height: 65px;
                                                                        width: 100px;
                                                                    }
                                                                </style>

                                                                <div class="  load-more-loader  load-more-loading-div "
                                                                    style="display: none;">

                                                                    <div class="row ">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-3 comment-section">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">
                                                                                            <a href="http://publiq.test/profile/hammo"
                                                                                                class="rounded-circle skeleton"
                                                                                                style="height: 3rem;width: 3rem;">

                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-8 ">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">

                                                                                            <div class="text">
                                                                                                <a
                                                                                                    href="http://publiq.test/profile/hammo">
                                                                                                    <h3 class="skeleton"
                                                                                                        style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                    </h3>
                                                                                                </a>
                                                                                                <span
                                                                                                    class="skeleton skeleton-text"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-12 word-break comment-single-content">
                                                                                            <p class=""></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="load-more-posts-btn load-previous-posts-btn-post-modal"
                                                                    data-post-id="270" data-page="2" data-last-page="1"
                                                                    style="display:none">
                                                                    <a href="#"><i class="flaticon-loading"></i>View
                                                                        Previous
                                                                        Comments</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 previous-comments-div-270">
                                                                <div class="row ">
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-3 comment-section"
                                                                                style="margin: 0px !important;">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">
                                                                                        <a href="#"
                                                                                            class="rounded-circle skeleton"
                                                                                            style="height: 3rem;width: 3rem;">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="background-none col-8 main-comment-section">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">

                                                                                        <div class="text">
                                                                                            <a href="#">
                                                                                                <h3 class="skeleton"
                                                                                                    style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                </h3>
                                                                                            </a>
                                                                                            <span
                                                                                                class="skeleton skeleton-text"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-12 word-break comment-single-content">
                                                                                        <p class=""></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <style>
                                                                    .skeleton-img-like-member {
                                                                        height: 65px;
                                                                        width: 100px;
                                                                    }
                                                                </style>

                                                                <div class="  load-more-loader  load-more-loading-div "
                                                                    style="display: none;">

                                                                    <div class="row ">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-3 comment-section">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">
                                                                                            <a href="http://publiq.test/profile/hammo"
                                                                                                class="rounded-circle skeleton"
                                                                                                style="height: 3rem;width: 3rem;">

                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-8 ">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">

                                                                                            <div class="text">
                                                                                                <a
                                                                                                    href="http://publiq.test/profile/hammo">
                                                                                                    <h3 class="skeleton"
                                                                                                        style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                    </h3>
                                                                                                </a>
                                                                                                <span
                                                                                                    class="skeleton skeleton-text"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-12 word-break comment-single-content">
                                                                                            <p class=""></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="load-more-posts-btn load-previous-posts-btn-post-modal"
                                                                    data-post-id="270" data-page="2" data-last-page="1"
                                                                    style="display:none">
                                                                    <a href="#"><i class="flaticon-loading"></i>View
                                                                        Previous
                                                                        Comments</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 previous-comments-div-270">
                                                                <div class="row ">
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-3 comment-section"
                                                                                style="margin: 0px !important;">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">
                                                                                        <a href="#"
                                                                                            class="rounded-circle skeleton"
                                                                                            style="height: 3rem;width: 3rem;">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="background-none col-8 main-comment-section">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">

                                                                                        <div class="text">
                                                                                            <a href="#">
                                                                                                <h3 class="skeleton"
                                                                                                    style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                </h3>
                                                                                            </a>
                                                                                            <span
                                                                                                class="skeleton skeleton-text"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-12 word-break comment-single-content">
                                                                                        <p class=""></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <style>
                                                                    .skeleton-img-like-member {
                                                                        height: 65px;
                                                                        width: 100px;
                                                                    }
                                                                </style>

                                                                <div class="  load-more-loader  load-more-loading-div "
                                                                    style="display: none;">

                                                                    <div class="row ">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-3 comment-section">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">
                                                                                            <a href="http://publiq.test/profile/hammo"
                                                                                                class="rounded-circle skeleton"
                                                                                                style="height: 3rem;width: 3rem;">

                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-8 ">
                                                                                    <div class="single-video-card"
                                                                                        style="margin: 0px !important">
                                                                                        <div class="video-info">

                                                                                            <div class="text">
                                                                                                <a
                                                                                                    href="http://publiq.test/profile/hammo">
                                                                                                    <h3 class="skeleton"
                                                                                                        style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                    </h3>
                                                                                                </a>
                                                                                                <span
                                                                                                    class="skeleton skeleton-text"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-12 word-break comment-single-content">
                                                                                            <p class=""></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="load-more-posts-btn load-previous-posts-btn-post-modal"
                                                                    data-post-id="270" data-page="2" data-last-page="1"
                                                                    style="display:none">
                                                                    <a href="#"><i class="flaticon-loading"></i>View
                                                                        Previous
                                                                        Comments</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 previous-comments-div-270">
                                                                <div class="row ">
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-3 comment-section"
                                                                                style="margin: 0px !important;">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">
                                                                                        <a href="#"
                                                                                            class="rounded-circle skeleton"
                                                                                            style="height: 3rem;width: 3rem;">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="background-none col-8 main-comment-section">
                                                                                <div class="single-video-card">
                                                                                    <div class="video-info">

                                                                                        <div class="text">
                                                                                            <a href="#">
                                                                                                <h3 class="skeleton"
                                                                                                    style="height: 12px;width: 7rem;border-radius: 3px;">
                                                                                                </h3>
                                                                                            </a>
                                                                                            <span
                                                                                                class="skeleton skeleton-text"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-12 word-break comment-single-content">
                                                                                        <p class=""></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
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
                                                    <div class="simplebar-wrapper" id="simplebar-wrapper"
                                                        style="margin: 0px;">
                                                        <div class="simplebar-height-auto-observer-wrapper">
                                                            <div class="simplebar-height-auto-observer">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-mask">
                                                            <div class="simplebar-offset" id="simplebar-offset-new"
                                                                style="right: 0px; bottom: 0px;">
                                                                <div class="simplebar-content-wrapper"
                                                                    id="simplebar-content-wrapper"
                                                                    style="height: auto; overflow: hidden;">
                                                                    <div class="simplebar-content" id="simplebar-content"
                                                                        style="padding: 0px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-placeholder" id="simplebar-placeholder"
                                                            style="width: auto; height: 0px;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-horizontal"
                                                        id="simplebar-horizontal" style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar" id="simplebar-scrollbar"
                                                            style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-vertical"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar" id="simplebar-scrollbar-new"
                                                            style="transform: translate3d(0px, 0px, 0px); display: none; height: 287px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-search-box" id="contact-search-box">
                                        <div class="skeleton skeleton-single-timeimg" style="height: 63px;"></div>
                                        <button type="button" class="new-submit comment-btn"
                                            data-post-id="270"></button>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder-new"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal">
                                <div class="simplebar-scrollbar" id="new-barsimple"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical">
                                <div class="simplebar-scrollbar" id="new-scroll-vertical"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {

                $.ajax({
                    type: "get",
                    url: "{{ route('frontend.single.post.render') }}",
                    data: {
                        id: {!! $post->id !!},
                    },
                    dataType: 'json',
                    success: function(response) {
                        $(".kjshgdyuasbgdagieu").replaceWith(response.html);
                        $('.btn-close').remove();
                    }
                });
            });
        </script>
    </div>
@endsection
