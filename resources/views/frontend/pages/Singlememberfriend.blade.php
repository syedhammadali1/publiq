@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="my-profile-inner-box">
            <div class="profile-cover-image">
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/my-profile-bg.jpg') }}" alt="image">


                    <div class="profile-info-box">
                        <div class="inner-info-box d-flex justify-content-between align-items-center">
                            <div class="info-image-1">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/my-profile.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="info-text ms-3">
                                <h3><a href="#">William Chandler</a></h3>
                                <span><a href="mailto:matthew@gmail.com">william@gmail.com</a></span>

                                <ul class="statistics">
                                    <li>
                                        <a href="#">
                                            <span class="item-number">59862</span>
                                            <span class="item-text">Friends</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="item-number">8591</span>
                                            <span class="item-text">Follow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="item-number">784514</span>
                                            <span class="item-text">Subscribe</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <ul class="statistics">
                                <li>
                                    <a href="#">
                                        <span class="item-number">59862</span>
                                        <span class="item-text">Photos Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number">8591</span>
                                        <span class="item-text">Videos Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number">784514</span>
                                        <span class="item-text">Audios Post</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="profile-list-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="timeline-tab" data-bs-toggle="tab" href="#timeline"
                                        role="tab" aria-controls="timeline">Timeline</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                        aria-controls="about">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="friends-tab" data-bs-toggle="tab" href="#friends"
                                        role="tab" aria-controls="friends">Friends</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="friends-tab" data-bs-toggle="tab" href="#Followers"
                                        role="tab" aria-controls="friends">Followers</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="friends-tab" data-bs-toggle="tab" href="#Subscriber"
                                        role="tab" aria-controls="friends">Subscribers</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#photos" role="tab"
                                        aria-controls="photos">Photos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#Audios" role="tab"
                                        aria-controls="Audios">Audios</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="Videos-tab" data-bs-toggle="tab" href="#Videos" role="tab"
                                        aria-controls="Videos">Videos</a>
                                </li>
                            </ul>
                        </div>

                        <div class="profile-social">
                            <button class="member-add">Subscribe</button><span style="float: left;"><button
                                    class="unmember-add">UnFriend</button></span>
                            <span style="float: left;"><button class="member-add">Follow</button></span>
                        </div>
                    </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <aside class="widget-area">
                            <div class="widget widget-suggested-groups">
                                <h3 class="widget-title">Most Liked Free Photos</h3>
                                <article class="item"><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos" id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/suggested-groups/groups-4.jpg') }}
                                                alt="image1">
                                            <div class="number-of-post">5+</div>
                                        </span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Preper for your first skateboard jump</a>
                                        </h4><span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div><a
                                        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos"></a>
                                </article>
                                <article class="item" id="multi-popup"><a id="video-pr"><span><img
                                                class="video-side"
                                                src={{ asset('frontend/assets/images/suggested-groups/groups-5.jpg') }}
                                                alt="image1">
                                            <div class="number-of-post">4+</div>
                                        </span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Preper for your first skateboard jump</a>
                                        </h4><span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a href="#" class="thumb"><span
                                            class="fullimage bg3" role="img"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Photography Learning</a></h4>
                                        <span>Alex</span><span>. 3 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a href="#" class="thumb"><span
                                            class="fullimage bg4" role="img"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Traveling The World</a></h4><span>John
                                            Work</span><span>. 4 days ago</span>
                                    </div>
                                </article><a class="view-member" href="">
                                    <div class="article-view-all"><button class="article-view-all-btn">VIEW ALL</button>
                                    </div>
                                </a>
                            </div>
                            <div class="widget widget-who-following">
                                <h3 class="widget-title">Suggestions</h3>
                                <div class="following-item d-flex justify-content-between align-items-center"><a
                                        href=""><img src={{ asset('frontend/assets/images/user/user-42.jpg') }}
                                            class="rounded-circle" alt="user-42"></a><span class="name"><a
                                            href="">Shawn Lynch</a></span><span class="add-friend"><a
                                            href="">View</a></span></div>
                                <div class="following-item d-flex justify-content-between align-items-center"><a
                                        href=""><img src={{ asset('frontend/assets/images/user/user-43.jpg') }}
                                            class="rounded-circle" alt="user-43"></a><span class="name"><a
                                            href="">Kenneth Perry</a></span><span class="add-friend"><a
                                            href="">View</a></span></div>
                                <div class="following-item d-flex justify-content-between align-items-center"><a
                                        href=""><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                            class="rounded-circle" alt="user-44"></a><span class="name"><a
                                            href="">Janet Suarez</a></span><span class="add-friend"><a
                                            href="">View</a></span></div>
                                <div class="following-item d-flex justify-content-between align-items-center"><a
                                        href=""><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                            class="rounded-circle" alt="user-45"></a><span class="name"><a
                                            href="">Brian Mingo</a></span><span class="add-friend"><a
                                            href="">View</a></span></div>
                                <div class="following-item d-flex justify-content-between align-items-center"><a
                                        href=""><img src={{ asset('frontend/assets/images/user/user-46.jpg') }}
                                            class="rounded-circle" alt="user-46"></a><span class="name"><a
                                            href="">Julia Ramos</a></span><span class="add-friend"><a
                                            href="">View</a></span></div>
                                <div class="article-view-all"><a class="view-member"
                                        href="{{ route('frontend.members') }}"><button class="article-view-all-btn">VIEW
                                            ALL</button></a></div>
                            </div>
                            <div class="widget widget-advertisement-ert">
                                <h3 class="widget-title">Advertisement</h3>

                                <div class="advertisement-image-ert">
                                    <a href="#"><img src={{ asset('frontend/assets/images/advertisement.jpg') }}
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="widget widget-suggested-groups">
                                <h3 class="widget-title">Most Liked Free Audios </h3><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People2.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People3.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People4.mp3') }} type="audio/mp3">
                                </audio>
                                <article>
                                    <div class="article-view-all"><a class="view-member" href=""><button
                                                class="article-view-all-btn">VIEW ALL</button></a>
                                </article>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="news-feed-area">
                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href=""><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="">William Chandler</a></span>
                                        <span class="small-text"><a href="#">10 Mins Ago</a></span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Post</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-body">
                                    <h6>Premium Content Of Relaxing Music Will Be Uploaded Soon...</h6>
                                    <p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat.
                                        Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.
                                        Praesent sapien massa convallis a pellentesque nec egestas non nisi. Curabitur non
                                        nulla sit amet nisl tempus convallis quis.</p>
                                    <div class="post-image">
                                        <img src={{ asset('frontend/assets/images/news-feed-post/post-1.jpg') }}
                                            alt="image">
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        <li class="post-react">
                                            <a href="#"><i class="flaticon-like"></i><span>Like</span> <span
                                                    class="number">1499 </span></a>

                                            <ul class="react-list">
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-1.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-2.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-3.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-4.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-5.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-6.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-7.png') }}
                                                            alt="Like"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span
                                                    class="number">599 </span></a>
                                        </li>
                                        <li class="post-share">
                                            {{-- <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a> --}}
                                        </li>
                                    </ul>
                                    <form class="post-footer">
                                        <div class="footer-image">
                                            <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                    class="rounded-circle" alt="image"></a>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href=""><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="">William Chandler</a></span>
                                        <span class="small-text"><a href="#">50 Mins Ago</a></span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Post</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-body">
                                    <h6>Premium Content Of Mothers day special Will Be Uploaded Soon...</h6>
                                    <div class="post-image">
                                        <img src={{ asset('frontend/assets/images/news-feed-post/post-2.jpg') }}
                                            alt="image">
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        <li class="post-react">
                                            <a href="#"><i class="flaticon-like"></i><span>Like</span> <span
                                                    class="number">3 </span></a>

                                            <ul class="react-list">
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-1.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-2.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-3.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-4.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-5.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-6.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-7.png') }}
                                                            alt="Like"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span
                                                    class="number">0 </span></a>
                                        </li>
                                        <li class="post-share">
                                            {{-- <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">0 </span></a> --}}
                                        </li>
                                    </ul>
                                    <form class="post-footer">
                                        <div class="footer-image">
                                            <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                    class="rounded-circle" alt="image"></a>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href=""><img src={{ asset('frontend/assets/images/user/user-36.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="">Maria Dodson</a></span>
                                        <span class="small-text"><a href="#">2 Hours Ago</a></span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Post</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-body">
                                    <p>Keep Smiling ðŸ§¡</p>
                                    <div class="post-image">
                                        <img src={{ asset('frontend/assets/images/news-feed-post/post-3.jpg') }}
                                            alt="image">
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        <li class="post-react">
                                            <a href="#"><i class="flaticon-like"></i><span>Like</span> <span
                                                    class="number">15 </span></a>

                                            <ul class="react-list">
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-1.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-2.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-3.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-4.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-5.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-6.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-7.png') }}
                                                            alt="Like"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span
                                                    class="number">0 </span></a>
                                        </li>
                                        <li class="post-share">
                                            {{-- <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">5 </span></a> --}}
                                        </li>
                                    </ul>
                                    <form class="post-footer">
                                        <div class="footer-image">
                                            <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                    class="rounded-circle" alt="image"></a>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href=""><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="">Karen Williams</a></span>
                                        <span class="small-text"><a href="#">10 Mins Ago</a></span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Post</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-body">
                                    <p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat.
                                        Donec rutrum congue leo eget malesuada.</p>
                                    <div class="post-image">
                                        <img src={{ asset('frontend/assets/images/news-feed-post/post-4.jpg') }}
                                            alt="image">
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        <li class="post-react">
                                            <a href="#"><i class="flaticon-like"></i><span>Like</span> <span
                                                    class="number">1499 </span></a>

                                            <ul class="react-list">
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-1.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-2.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-3.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-4.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-5.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-6.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src={{ asset('assets/images/react/react-7.png') }}
                                                            alt="Like"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span
                                                    class="number">599 </span></a>
                                        </li>
                                        <li class="post-share">
                                            {{-- <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a> --}}
                                        </li>
                                    </ul>
                                    <form class="post-footer">
                                        <div class="footer-image">
                                            <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                    class="rounded-circle" alt="image"></a>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="news-feed news-feed-post">
                                <div class="post-header d-flex justify-content-between align-items-center">
                                    <div class="image">
                                        <a href=""><img src={{ asset('frontend/assets/images/user/user-18.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                    </div>
                                    <div class="info ms-3">
                                        <span class="name"><a href="">Maria Dodson</a></span>
                                        <span class="small-text"><a href="#">2 Hours Ago</a></span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Post</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Post</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="post-image">
                                        <img src={{ asset('frontend/assets/images/news-feed-post/post-5.jpg') }}
                                            alt="image">
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        <li class="post-react">
                                            <a href="#"><i class="flaticon-like"></i><span>Like</span> <span
                                                    class="number">15 </span></a>

                                            <ul class="react-list">
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-1.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-2.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-3.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-4.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-5.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-6.png') }}
                                                            alt="Like"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src={{ asset('frontend/assets/images/react/react-7.png') }}
                                                            alt="Like"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span
                                                    class="number">0 </span></a>
                                        </li>
                                        <li class="post-share">
                                            {{-- <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">5 </span></a> --}}
                                        </li>
                                    </ul>
                                    <form class="post-footer">
                                        <div class="footer-image">
                                            <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                                    class="rounded-circle" alt="image"></a>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="load-more-posts-btn">
                                <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <aside class="widget-area">
                            <div class="home-video">
                                <div class="video-home-title d-flex justify-content-between align-items-center">
                                    <h3>Watch Video</h3>
                                </div>
                                <div class="single-video-home">
                                    <div class="video-image"><img
                                            src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image1">
                                        <div class="icon"><a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube"><i class="flaticon-youtube"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-advertisement-ert">
                                <h3 class="widget-title">Advertisement</h3>

                                <div class="advertisement-image-ert">
                                    <a href="#"><img src={{ asset('frontend/assets/images/advertisement.jpg') }}
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="widget widget-suggested-groups">
                                <h3 class="widget-title">Most Liked Premium Photos</h3>
                                <article class="item"><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos" id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/suggested-groups/groups-4.jpg') }}
                                                alt="image1">
                                            <div class="number-of-post">5+</div>
                                        </span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Preper for your first skateboard jump</a>
                                        </h4><span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div><a
                                        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
                                        data-lightbox="photos"></a><a
                                        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        data-lightbox="photos"></a>
                                </article>
                                <article class="item" id="multi-popup"><a id="video-pr"><span><img
                                                class="video-side"
                                                src={{ asset('frontend/assets/images/suggested-groups/groups-5.jpg') }}
                                                alt="image1">
                                            <div class="number-of-post">4+</div>
                                        </span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Preper for your first skateboard jump</a>
                                        </h4><span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a href="#" class="thumb"><span
                                            class="fullimage bg3" role="img"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Photography Learning</a></h4>
                                        <span>Alex</span><span>. 3 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a href="#" class="thumb"><span
                                            class="fullimage bg4" role="img"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Traveling The World</a></h4><span>John
                                            Work</span><span>. 4 days ago</span>
                                    </div>
                                </article><a class="view-member" href="">
                                    <div class="article-view-all"><button class="article-view-all-btn">VIEW ALL</button>
                                    </div>
                                </a>
                            </div>
                            <div class="widget widget-suggested-groups">
                                <h3 class="widget-title">Most Liked Premium Audios </h3><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People2.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People3.mp3') }} type="audio/mp3">
                                </audio><audio controls="">
                                    <source src={{ asset('frontend/assets/images/People4.mp3') }} type="audio/mp3">
                                </audio>
                                <article>
                                    <div class="article-view-all"><a class="view-member" href=""><button
                                                class="article-view-all-btn">VIEW ALL</button></a>
                                </article>
                            </div>
                            <div class="widget widget-suggested-groups">
                                <h3 class="widget-title">Most Liked Premium Videos</h3>
                                <article class="item"><a id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/video/video-1.jpg') }}
                                                alt="image1"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Preper for your first skateboard jump</a>
                                        </h4><span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/video/video-1.jpg') }}
                                                alt="image1"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Basic how to ride your skateboard</a></h4>
                                        <span>Jordin Wise</span><span>. 2 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/video/video-1.jpg') }}
                                                alt="image1"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Photography Learning</a></h4>
                                        <span>Alex</span><span>. 3 days ago</span>
                                    </div>
                                </article>
                                <article class="item"><a id="video-pr"><span><img class="video-side"
                                                src={{ asset('frontend/assets/images/video/video-1.jpg') }}
                                                alt="image1"></span></a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Traveling The World</a></h4><span>John
                                            Work</span><span>. 4 days ago</span>
                                    </div>
                                </article><a class="view-member" href="">
                                    <div class="article-view-all"><button class="article-view-all-btn">VIEW ALL</button>
                                    </div>
                                </a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="about" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="about-personal-information">
                            <div class="about-header d-flex justify-content-between align-items-center">
                                <div class="title">Personal Information</div>

                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center"
                                                href="{{ route('frontend.settings') }}""><i class="
                                                   flaticon-edit"></i>
                                                Edit Information</a></li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="information-list">
                                <li>
                                    <span>Email:</span> <a href="mailto:info@zust.com">info@publiq.com</a>
                                </li>
                                <li>
                                    <span>Birthday:</span> May 07, 1984
                                </li>
                                <li>
                                    <span>Occupation:</span> UX Designer
                                </li>
                                <li>
                                    <span>Phone:</span> <a href="tel:916-879-7755">916-879-7755</a>
                                </li>
                                <li>
                                    <span>Gender:</span> Men
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="about-details-information">
                            <div class="information-box-content">
                                <div class="information-header d-flex justify-content-between align-items-center">
                                    <div class="title">About Me!</div>

                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="flaticon-menu"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-edit"></i> Edit Information</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-private"></i> Hide Information</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        class="flaticon-trash"></i> Delete Information</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl
                                        tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque
                                        nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et
                                        ultrices posuere cubilia Curae; Donec velit neque auctor sit amet aliquam vel
                                        ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                        Sed porttitor lectus nibh.</p>
                                    <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor
                                        accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim.
                                        Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in
                                        elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at
                                        tellus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="friends" role="tabpanel">
                <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Friends</h3>
                        <span>199</span>
                    </div>

                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-friends" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-1.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-2.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-3.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-4.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-5.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-6.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-7.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-8.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-9.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="recently-added" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">

                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-17.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-18.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-19.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-20.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-21.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-23.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-24.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-25.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="Followers" role="tabpanel">
                <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Followers</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-Following-tab" data-bs-toggle="tab" href="#all-Following"
                                role="tab" aria-controls="all-Following">Following</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Followers-added-tab" data-bs-toggle="tab" href="#Followers-added"
                                role="tab" aria-controls="Followers-added">Followers</a>
                        </li>
                    </ul>

                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-Following" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-1.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-2.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-3.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-4.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-5.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-6.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-7.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-8.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-9.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Followers-added" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-17.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-18.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-19.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-20.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-21.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-23.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-24.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-25.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Subscriber" role="tabpanel">
                <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Subscribers</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-Subscribed-tab" data-bs-toggle="tab" href="#all-Subscribed"
                                role="tab" aria-controls="all-Subscribed">Subscribed</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Subscribed-added-tab" data-bs-toggle="tab"
                                href="#Subscribed-added" role="tab" aria-controls="Subscribed-added">Subscribers</a>
                        </li>
                    </ul>

                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-Subscribed" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-1.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-2.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-3.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-4.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-5.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-6.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-7.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-8.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-9.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/friends/friends-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Subscribed-added" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-1.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-10.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-2.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-11.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">

                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-3.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-12.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-4.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-13.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-5.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-6.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-7.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-16.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-8.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-17.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-9.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-18.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-10.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-19.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-11.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-20.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-12.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-21.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-13.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-14.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-23.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-15.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-24.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src={{ asset('frontend/assets/images/friends/friends-bg-16.jpg') }}
                                                alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src={{ asset('frontend/assets/images/user/user-25.jpg') }}
                                                    alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span>
                                                    <span class="item-text">Photos Posts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span>
                                                    <span class="item-text">Videos Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span>
                                                    <span class="item-text">Audios Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="send-message-btn">
                                                <button type="submit">Paid Content</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
                <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Photos</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-photos-tab" data-bs-toggle="tab" href="#all-photos"
                                role="tab" aria-controls="all-photos">Free</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="photos-albums-tab" data-bs-toggle="tab" href="#photos-albums"
                                role="tab" aria-controls="photos-albums">Paid</a>
                        </li>
                    </ul>

                    <div class="photos-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search photos...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-photos" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        {{-- <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A" class="video-btn popup-youtube">
                                            <i class="flaticon-youtube"></i>
                                        </a>
                                    </div> --}}
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="photos-albums" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        {{-- <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A" class="video-btn popup-youtube">
                                            <i class="flaticon-youtube"></i>
                                        </a>
                                    </div> --}}
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Audios" role="tabpanel">
                <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Audios</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-photos-tab" data-bs-toggle="tab" href="#all-audio"
                                role="tab" aria-controls="all-audio">Free</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="photos-albums-tab" data-bs-toggle="tab" href="#audio-albums"
                                role="tab" aria-controls="audio-albums">Paid</a>
                        </li>
                    </ul>

                    <div class="photos-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search photos...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-audio" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">

                                        {{-- <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A" class="video-btn popup-youtube">
                                            <i class="flaticon-youtube"></i>
                                        </a>
                                    </div> --}}
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="audio-albums" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img
                                                src="{{ asset('frontend/assets/images/user/user-14.jpg') }} class="



                                                rounded-circle"
                                                alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 10 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">

                                        {{-- <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A" class="video-btn popup-youtube">
                                            <i class="flaticon-youtube"></i>
                                        </a>
                                    </div> --}}
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/audio/audio1.jpg') }} alt="image">
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="Videos" role="tabpanel">
                <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Videos</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-free-tab" data-bs-toggle="tab" href="#all-free" role="tab"
                                aria-controls="all-free">Free</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="paid-added-tab" data-bs-toggle="tab" href="#paid-added"
                                role="tab" aria-controls="paid-added">Paid</a>
                        </li>
                    </ul>

                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-free" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="paid-added" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 05 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-14.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">William Chandler</a>
                                            </h3>
                                            <span>Published: 04 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-5.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Christopher Wick</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-22.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Lawrence Morse</a>
                                            </h3>
                                            <span>Published: 21 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-45.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Maynard James</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-15.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Roberto Jones</a>
                                            </h3>
                                            <span>Published: 17 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-44.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Gilbert Ritchie</a>
                                            </h3>
                                            <span>Published: 01 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-video-card">
                                    <div class="video-info">
                                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-27.jpg') }}
                                                class="rounded-circle" alt="image"></a>
                                        <div class="text">
                                            <h3>
                                                <a href="#">Corey Kelly</a>
                                            </h3>
                                            <span>Published: 25 July, 2021</span>
                                        </div>
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
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
                                    </div>
                                    <div class="video-image">
                                        <img src={{ asset('frontend/assets/images/video/video-1.jpg') }} alt="image">

                                        <div class="icon">
                                            <a href="https://www.youtube.com/watch?v=7OsAEnx4L2A"
                                                class="video-btn popup-youtube">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="meta-wrap">
                                        <li class="react">
                                            <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h4 id="model-heading">Upload Your Image Here</h4>
            <img id="open-photo" src={{ asset('frontend/assets/images/image-up.png') }} alt="image">
            <input id="imgupload" type="file" style="display:none;">
        </div>

    </div>
@endsection
