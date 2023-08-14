@extends('frontend.layouts.app')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
@endpush

@section('content')
    <div class="content-page-box-area">
        <div class="my-profile-inner-box">
            <div class="profile-cover-image">
                <div id="cover-croppie" style="display: none"></div>
                <img id="coverDiv" src="{{ auth()->user()->cover }}" alt="toppings">
                <input id="coverchange" type="file" accept="image/png, image/gif, image/jpeg" style="display:none">

                <a id="btn-select-cover" class="edit-cover-btn" onclick="$('#coverchange').trigger('click');">Edit
                    Cover
                </a>
                @include('components.sub-components.loadmoreloading', [
                    'class' => 'edit-cover-btn cover-loading-icon',
                    'style' => 'display: none;background-color: transparent',
                ])

                <a class="edit-cover-btn cover-croppie-actions-btn"
                    style="z-index: 999; bottom: 64px;background: transparent;display: none">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn action-dp-btns" data-toggle="tooltip" data-placement="top"
                            title="Upload">
                            <lord-icon id="btn-upload-cover" src="https://cdn.lordicon.com/btnwcdpq.json" trigger="hover"
                                colors="primary:#fff" style="width:32px;height:32px">
                            </lord-icon>
                        </button>

                        <button type="button" class="btn action-dp-btns" data-toggle="tooltip" data-placement="top"
                            title="Choose another file">
                            <lord-icon onclick="$('#coverchange').trigger('click');"
                                src="https://cdn.lordicon.com/vxsbkmcf.json" trigger="hover" colors="primary:#fff"
                                style="width:32px;height:32px">
                            </lord-icon>
                        </button>

                        <button type="button" class="btn action-dp-btns" data-toggle="tooltip" data-placement="top"
                            title="Cancel">
                            <lord-icon id="btn-close-cover" src="https://cdn.lordicon.com/fdzomkrp.json" trigger="hover"
                                colors="primary:#fff" style="width:32px;height:32px">
                            </lord-icon>
                        </button>
                    </div>
                </a>
            </div>
            <div class="profile-info-box">
                <div class="inner-info-box d-flex justify-content-between align-items-center">
                    <div class="info-image container-dp">
                        <div class="row dp-croppie-actions-btn" style="display: none">
                            <div class="col-4 d-flex justify-content-end ">
                                <div class="action-dp-btns">
                                    <lord-icon id="btn-close-image" src="https://cdn.lordicon.com/fdzomkrp.json"
                                        trigger="hover" colors="primary:#fff" style="width:25px;height:25px">
                                    </lord-icon>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <div class="action-dp-btns">
                                    <lord-icon onclick="$('#dpchange').trigger('click');"
                                        src="https://cdn.lordicon.com/vxsbkmcf.json" trigger="hover" colors="primary:#fff"
                                        style="width:25px;height:25px">
                                    </lord-icon>
                                </div>

                            </div>
                            <div class="col-4 d-flex justify-content-start">
                                <div class="action-dp-btns">
                                    <lord-icon id="btn-upload-image" src="https://cdn.lordicon.com/btnwcdpq.json"
                                        trigger="hover" colors="primary:#fff" style="width:25px;height:25px">
                                    </lord-icon>
                                </div>
                            </div>
                        </div>
                        <div id="dp-croppie" style="display: none"></div>
                        <a>
                            <img id="dpDiv" src="{{ auth()->user()->avatar }}" alt="toppings"
                                class="profile-image-view">
                        </a>
                        <div class="icon">
                            <input id="dpchange" type="file" accept="image/png, image/gif, image/jpeg"
                                style="display:none">
                            <a id="btn-select-image" onclick="$('#dpchange').trigger('click');"><i
                                    class="flaticon-photo-camera"></i></a>
                            {{-- <a id="btn-upload-image" style="display: none">
                                <lord-icon class="upload-profile-img-btn" src="https://cdn.lordicon.com/btnwcdpq.json"
                                    trigger="hover" style="width:32px;height:32px">
                                </lord-icon>
                            </a> --}}
                        </div>
                        @include('components.sub-components.loadmoreloading', [
                            'class' => 'dp-loading-icon child-dp',
                            'style' => 'display: none;background-color: transparent',
                        ])
                    </div>
                    <div class="info-text ms-3 mt-2">
                        <h3>{{ auth()->user()->detail->full_name }}</h3>
                        <span><a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->name }}</a></span>
                        <ul class="statistics1">
                            <li>
                                <a>
                                    <span class="item-number">{{ auth()->user()->my_followers_count }}</span>
                                    <span class="item-text">Followers</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="item-number">{{ auth()->user()->my_following_count }}</span>
                                    <span class="item-text">Following</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="item-number">{{ auth()->user()->my_subscribers_count }}</span>
                                    <span class="item-text">Subscribers</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="item-number">{{ auth()->user()->my_subscribeds_count }}</span>
                                    <span class="item-text">Subscribed</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="statistics">
                        <li>
                            <a>
                                <span class="item-number">{{ auth()->user()->count_media('images') }}</span>
                                <span class="item-text">Total Photos</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="item-number">{{ auth()->user()->count_media('video') }}</span>
                                <span class="item-text">Total Videos</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="item-number">{{ auth()->user()->count_media('audio') }}</span>
                                <span class="item-text">Total Audios</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="profile-list-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="timeline-tab" data-bs-toggle="tab" href="#timeline"
                                onclick="SPut('timeline')" role="tab" aria-controls="timeline">Timeline</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                aria-controls="about" onclick="SPut('about')">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Followers-tab" data-bs-toggle="tab" href="#Followers"
                                role="tab" aria-controls="Followers" onclick="SPut('Followers')">Followers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Subscriber-tab" data-bs-toggle="tab" href="#Subscriber"
                                role="tab" aria-controls="Subscriber" onclick="SPut('Subscriber')">Subscribers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#photos" role="tab"
                                aria-controls="photos" onclick="SPut('photos')">Photos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Audios-tab" data-bs-toggle="tab" href="#Audios" role="tab"
                                aria-controls="Audios" onclick="SPut('Audios')">Audios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Videos-tab" data-bs-toggle="tab" href="#Videos" role="tab"
                                aria-controls="Videos" onclick="SPut('Videos')">Videos</a>
                        </li>
                    </ul>
                </div>

                {{-- <div class="profile-social">
                    <a href="{{ route('frontend.home') }}">
                        <button class="go-pubilq-btn-socail" href="{{ route('frontend.home') }}">GO PUBILQ</button>
                    </a>
                </div> --}}
            </div>
        </div>
        <div class="tab-content main-tab">
            {{-- @include('components.MyProfile.SubPages.profileTimeline', [
                'user' => auth()->user(),
                'mostLikedFreePhotos' => $mostLikedFreePhotos,
                'mostLikedPaidPhotos' => $mostLikedPaidPhotos,
                'mostLikedFreeAudios' => $mostLikedFreeAudios,
                'mostLikedPaidAudios' => $mostLikedPaidAudios,
                'mostLikedPaidVideos' => $mostLikedPaidVideos,
                'suggestedPeoples' => $suggestedPeoples,
            ])
            @include('components.MyProfile.SubPages.profileAbout', [
                'user' => auth()->user(),
            ])
            @include('components.MyProfile.SubPages.profileFollower', [
                'user' => auth()->user(),
            ])
            @include('components.MyProfile.SubPages.profileSubscriber', [
                'user' => auth()->user(),
            ])
            @include('components.MyProfile.SubPages.profilePhoto', [
                'user' => auth()->user(),
            ])
            @include('components.MyProfile.SubPages.profileAudio', [
                'user' => auth()->user(),
            ])
            @include('components.MyProfile.SubPages.profileVideo', [
                'user' => auth()->user(),
            ]) --}}
        </div>
        @include('components.sub-components.loading')
    </div>
@endsection

@push('js')
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    @include('frontend.scripts.myProfile.croppieImageUploadAjax')
    <script>
        var OldNavActive;

        function SPut(params) {

            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'put',
                    for: 'my-profile',
                    name: params
                },
                success: function(response) {
                    $('.main-tab').html('');
                    $('.starter-loading-div').show();

                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.profile.page.trigger') }}",
                        data: {
                            for: params
                        },
                        dataType: "html",
                        success: function(response) {
                            if (OldNavActive != 'timeline') {
                                $('.nav-' + OldNavActive).removeClass("active");
                            }
                            if (params != 'timeline') {
                                $('.nav-' + params).addClass("active");
                            }
                            OldNavActive = params;
                            $('.main-tab').html(response);
                            $('#' + params + '-tab').addClass("active");
                            $('#' + params).addClass("active show");
                            $('.starter-loading-div').hide();
                            $('#myTab').removeClass('disabled-tab');


                        }
                    });

                }
            });
        }

        $(document).ready(function() {
            $('#myTab').addClass('disabled-tab');
            $.ajax({
                url: "{{ route('frontend.session-control') }}",
                data: {
                    method: 'get',
                    for: 'my-profile',
                },
                success: function(result) {
                    var result = result.replace('"', '');
                    var result = result.replace('"', '');
                    if (result == 'null') {
                        var result = 'timeline'
                    }
                    OldNavActive = result;
                    $.ajax({
                        type: "GET",
                        url: "{{ route('frontend.profile.page.trigger') }}",
                        data: {
                            for: result
                        },
                        dataType: "html",
                        success: function(response) {
                            $('.main-tab').html(response);
                            $('#' + result + '-tab').addClass("active");
                            $('#' + result).addClass("active show");
                            $('.starter-loading-div').hide();
                            $('#myTab').removeClass('disabled-tab');

                        }
                    });

                }
            });


            $('#dp-croppie').hover(function() {
                $('.delete-profile-img-btn').css('display', 'block');

            }, function() {
                $('.delete-profile-img-btn').css('display', 'none');
            });
        });
    </script>
@endpush
