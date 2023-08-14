@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="page-banner-box bg-9">
            <h3>Single Video Page</h3>
        </div>

        {{-- <div class="all-birthday-body">
        <div class="birthday-header">
            <h3>Today Birthday</h3>
        </div>

        <div class="birthday-send-box">
            <div class="send-item">
                <a href=""><img src={{ asset("frontend/assets/images/user/user-41.jpg") }} class="rounded-circle" alt="image"></a>

                <div class="send-content">
                    <h3>
                        <a href="">James Vanwin</a>
                    </h3>
                    <span>10 July, 2021</span>

                    <form class="d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Write someting">
                        <button type="submit" class="send-btn d-inline-block">Send</button>
                    </form>
                </div>
            </div>
            <div class="send-item">
                <a href=""><img src={{ asset("frontend/assets/images/user/user-42.jpg") }} class="rounded-circle" alt="image"></a>

                <div class="send-content">
                    <h3>
                        <a href="">William Garcia</a>
                    </h3>
                    <span>10 July, 2021</span>

                    <form class="d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Write someting">
                        <button type="submit" class="send-btn d-inline-block">Send</button>
                    </form>
                </div>
            </div>
            <div class="send-item">
                <a href=""><img src={{ asset("frontend/assets/images/user/user-43.jpg") }} class="rounded-circle" alt="image"></a>

                <div class="send-content">
                    <h3>
                        <a href="">Annie Ferrier</a>
                    </h3>
                    <span>10 July, 2021</span>

                    <form class="d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Write someting">
                        <button type="submit" class="send-btn d-inline-block">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="birthday-list-box">
            <div class="birthday-header">
                <h3>Upcoming Birthday</h3>
            </div>

            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-1.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Vanwin</a>
                                </h3>
                                <span>11 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-2.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Reynolds</a>
                                </h3>
                                <span>12 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-3.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Warren</a>
                                </h3>
                                <span>12 July, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-4.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Heriberto</a>
                                </h3>
                                <span>13 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-5.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">James</a>
                                </h3>
                                <span>14 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-6.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">David</a>
                                </h3>
                                <span>15 July, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-7.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Willie</a>
                                </h3>
                                <span>18 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-8.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Edith</a>
                                </h3>
                                <span>18 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-9.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Thompson</a>
                                </h3>
                                <span>21 July, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-10.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Torres</a>
                                </h3>
                                <span>20 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-11.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Calvin</a>
                                </h3>
                                <span>12 July, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-12.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Christine</a>
                                </h3>
                                <span>25 July, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="birthday-list-box">
            <div class="birthday-header">
                <h3>August</h3>
            </div>

            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-13.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Matthew</a>
                                </h3>
                                <span>01 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-14.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Donahue</a>
                                </h3>
                                <span>01 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-15.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Rosemary</a>
                                </h3>
                                <span>01 August, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-16.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Bostrom</a>
                                </h3>
                                <span>11 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-17.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">John</a>
                                </h3>
                                <span>12 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-18.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Barnes</a>
                                </h3>
                                <span>13 August, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-19.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Bettyann</a>
                                </h3>
                                <span>15 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-20.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Chappell</a>
                                </h3>
                                <span>16 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-21.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Tommie</a>
                                </h3>
                                <span>17 August, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-21.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Maurice</a>
                                </h3>
                                <span>21 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-22.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Sandra</a>
                                </h3>
                                <span>23 August, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-23.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">M. Huff</a>
                                </h3>
                                <span>25 August, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="birthday-list-box">
            <div class="birthday-header">
                <h3>September</h3>
            </div>

            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-24.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Norma</a>
                                </h3>
                                <span>02 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-25.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Rhoades</a>
                                </h3>
                                <span>03 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-26.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Alice</a>
                                </h3>
                                <span>05 September, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-27.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Callihan</a>
                                </h3>
                                <span>09 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-28.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Leona</a>
                                </h3>
                                <span>12 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-29.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Walker</a>
                                </h3>
                                <span>14 September, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-30.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Barbara</a>
                                </h3>
                                <span>12 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-31.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Fleming</a>
                                </h3>
                                <span>18 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-32.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Zimmerman</a>
                                </h3>
                                <span>22 September, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-33.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Anthony</a>
                                </h3>
                                <span>23 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-34.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Michael</a>
                                </h3>
                                <span>26 September, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="list-content">
                            <a href=""><img src={{ asset("frontend/assets/images/user/user-35.jpg") }} class="rounded-circle" alt="image"></a>
                            <div class="text">
                                <h3>
                                    <a href="">Romero</a>
                                </h3>
                                <span>29 September, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
            <div class="single-video-card">
                <div class="video-info">
                    <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }} class="rounded-circle"
                            alt="image"></a>
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

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-audio" role="tabpanel">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="single-video-card">
                            <div style="justify-content: center;display: flex;">
                                <img src={{ asset('frontend/assets/images/videosingle.jpg') }} alt="image">
                            </div>
                            <div class="single-page-text">
                                <h3>How to start a online business</h3>
                                <p>Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus
                                    convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas
                                    non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    cubilia Curae; Donec velit neque auctor sit amet aliquam vel ullamcorper sit amet
                                    ligula. Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed porttitor lectus
                                    nibh.</p>
                                <h5 style="text-decoration: underline;text-underline-offset: 4px;">Recent Comments</h5>
                            </div>

                            <div class="col-lg-6s col-sm-6">
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
                                            <form class="post-footer">

                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
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
@endsection
