@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-audio" role="tabpanel">
                <div class="row">
                    {{-- <div class="col-lg-8 col-sm-12" id="photo-single-one">
                        <img
                            src="https://www.extremetech.com/wp-content/uploads/2019/12/SONATA-hero-option1-764A5360-edit-640x354.jpg">
                    </div>
                    <div class="col-lg-4 col-sm-12" id="photo-single-two">
                        <img
                            src="https://www.extremetech.com/wp-content/uploads/2019/12/SONATA-hero-option1-764A5360-edit-640x354.jpg">
                        <img class="image-two"
                            src="https://www.extremetech.com/wp-content/uploads/2019/12/SONATA-hero-option1-764A5360-edit-640x354.jpg">
                    </div> --}}

                    <div class="flexbin flexbin-margin">
                        <a href="https://unsplash.com/">
                            <img src="https://source.unsplash.com/featured/?man" />
                        </a>
                        <a href="https://unsplash.com/">
                            <img src="https://source.unsplash.com/featured/?woman" />
                        </a>
                        <a href="https://unsplash.com/">
                            <img src="https://source.unsplash.com/featured/?design" />
                        </a>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="single-video-card">

                            <div class="single-page-text">
                                <h3>How to start a online business</h3>
                                <p>Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus
                                    convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas
                                    non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    cubilia Curae; Donec velit neque auctor sit amet aliquam vel ullamcorper sit amet
                                    ligula. Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed porttitor lectus
                                    nibh.</p>

                            </div>
                            <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 10 July, 2021</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="single-video-card">

                                    <ul class="meta-wrap" id="single-page-meta">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="photos-search-box">

                                </div>
                            </div>


                            <div class="col-lg-12 col-sm-12">
                                <h5 style="text-decoration: underline;text-underline-offset: 4px;">Recent Comments</h5>

                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 15 July, 2021</span>
                                        </div>
                                        <p>Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl
                                            tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque
                                            nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et
                                            ultrices posuere cubilia Curae; Donec velit neque auctor sit amet aliquam vel
                                            ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur adipiscing
                                            elit. Sed porttitor lectus nibh.</p>
                                        <a href="#" class="like">Like(2)</a>
                                    </div>
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                                class="cGcvT"></grammarly-extension>
                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                                class="cGcvT"></grammarly-extension>
                                            <form class="post-footer">

                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..." spellcheck="false"></textarea>
                                                </div>
                                            </form>
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

    <style>
        #photo-single-two img {
            height: 49%;
            margin-left: -14px;
        }

        #photo-single-two {
            margin-top: 20px;
        }

        #photo-single-one img {
            height: 100%;
            width: 100%;
        }

        #photo-single-one {
            margin-top: 20px;
        }

        #main-desciption {
            background-color: white;
        }

        .image-two {
            margin-top: 9px;
        }


        .flexbin {
            display: flex;
            overflow: hidden;
            flex-wrap: wrap;
            margin: -2.5px;
        }

        .flexbin:after {
            content: '';
            flex-grow: 999999999;
            min-width: 300px;
            height: 0;
        }

        .flexbin>* {
            position: relative;
            display: block;
            height: 300px;
            margin: 2.5px;
            flex-grow: 1;
        }

        .flexbin>*>img {
            height: 300px;
            object-fit: cover;
            max-width: 100%;
            min-width: 100%;
            vertical-align: bottom;
        }

        .flexbin.flexbin-margin {
            margin: 2.5px;
        }

        @media (max-width: 980px) {
            .flexbin {
                display: flex;
                overflow: hidden;
                flex-wrap: wrap;
                margin: -2.5px;
            }

            .flexbin:after {
                content: '';
                flex-grow: 999999999;
                min-width: 150px;
                height: 0;
            }

            .flexbin>* {
                position: relative;
                display: block;
                height: 150px;
                margin: 2.5px;
                flex-grow: 1;
            }

            .flexbin>*>img {
                height: 150px;
                object-fit: cover;
                max-width: 100%;
                min-width: 100%;
                vertical-align: bottom;
            }

            .flexbin.flexbin-margin {
                margin: 2.5px;
            }
        }

        @media (max-width: 400px) {
            .flexbin {
                display: flex;
                overflow: hidden;
                flex-wrap: wrap;
                margin: -2.5px;
            }

            .flexbin:after {
                content: '';
                flex-grow: 999999999;
                min-width: 100px;
                height: 0;
            }

            .flexbin>* {
                position: relative;
                display: block;
                height: 100px;
                margin: 2.5px;
                flex-grow: 1;
            }

            .flexbin>*>img {
                height: 100px;
                object-fit: cover;
                max-width: 100%;
                min-width: 100%;
                vertical-align: bottom;
            }

            .flexbin.flexbin-margin {
                margin: 2.5px;
            }
        }
    </style>
@endsection
