@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="all-notifications-body">
            <div class="all-notifications-header d-flex justify-content-between align-items-center">
                <h3>Messages</h3>

                <div class="dropdown">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i>
                                Edit Notifications</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i>
                                Hide Notifications</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i>
                                Delete Notifications</a></li>
                    </ul>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-11.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Russe Smith</a></h4>
                    <span><a href="{{ route('frontend.single.message') }}">Hello Dear I Want Talk To You</a></span>
                    <span class="main-color"><a href="{{ route('frontend.single.message') }}">23/5/2022 - 02:11
                            AM</a></span>
                </div>
                <div class="friend-requests-btn"
                    style="
            position: relative;
            margin-right: 5px;
        ">
                    <i class="flaticon-email"
                        style="
            /* color: var(--white-color); */
            font-size: 25px;
            -webkit-transition: var(--transition);
            transition: var(--transition);
            display: inline-block;
        "></i>
                    <span
                        style="
            position: absolute;
            top: -2px;
            right: -5px;
            display: block;
            width: 15px;
            height: 15px;
            line-height: 15px;
            border-radius: 50%;
            font-size: 10px;
            background-color: #3ED7FF;
            color: var(--white-color);
            text-align: center;
            -webkit-transition: var(--transition);
            transition: var(--transition);
        ">3</span>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-12.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">James Vanwin</a></h4>
                    <span><a href="{{ route('frontend.single.message') }}">Hello Dear I Want Talk To You</a></span>
                    <span class="main-color"><a href="{{ route('frontend.single.message') }}">23/5/2022 - 02:11
                            AM</a></span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-13.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Matthew Smith</a></h4>
                    <span><a href="{{ route('frontend.single.message') }}">Thanks For Connecting!</a></span>
                    <span class="main-color"><a href="{{ route('frontend.single.message') }}">23/5/2022 - 02:11
                            AM</a></span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Herta Smith</a></h4>
                    <span>Start following you</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Francis L. Tay</a></h4>
                    <span>Comment on your post</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Laura Hildebrandt</a></h4>
                    <span>Subscribed To you</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Martha Wilkes</a></h4>
                    <span>Like Your Photo</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Howard Harris</a></h4>
                    <span>Like Your Video</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}"><img
                            src={{ asset('frontend/assets/images/user/user-45.jpg') }} class="rounded-circle"
                            alt="image"></a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">Martha Wilkes</a></h4>
                    <span>Start following you</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="{{ route('frontend.single.message') }}">
                        <img src={{ asset('frontend/assets/images/user/user-30.jpg') }} class="rounded-circle"
                            alt="image">
                    </a>
                </div>
                <div class="text">
                    <h4><a href="{{ route('frontend.single.message') }}">David Gibson</a></h4>
                    <span>Subscribed To you</span>
                    <span class="main-color">23/5/2022 - 02:11 AM</span>
                </div>
                <div class="icon">
                    <a href="#"><i class="er"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
