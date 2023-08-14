{{-- This component has been used in profile page for about us section --}}

<div class="tab-pane fade" id="about" role="tabpanel">
    @if (isset($user))
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="about-personal-information">
                    <div class="about-header d-flex justify-content-between align-items-center">
                        <div class="title">Personal Information</div>
                        @if (session()->get('viewedUser')['url'] == 'my')
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-menu"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ route('frontend.settings') }}"><i class="flaticon-edit"></i> Edit
                                            Information</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>

                    <ul class="information-list">
                        @if (session()->get('viewedUser')['url'] == 'my')
                            <li>
                                <span>Email:</span>
                                <a href="mailto:{{ @$user->email }}">{{ @$user->email }}</a>
                            </li>
                        @endif

                        @if (is_null($user->detail->birthday))
                            @if (session()->get('viewedUser')['url'] == 'my')
                                <li><span>Birthday: </span>
                                    <a href="{{ route('frontend.settings') }}">Update Your Birthday</a>
                                </li>
                            @endif
                        @else
                            <li><span>Birthday: </span>
                                {{ @$user->detail->birthday }}
                            </li>
                        @endif

                        {{-- <li><span>Occupation:</span> {{ @$user->type }}</li> --}}

                        @if (session()->get('viewedUser')['url'] == 'my')
                            <li>
                                <span>Phone: </span>
                                @if (is_null($user->detail->phone_no))
                                    <a href="{{ route('frontend.settings') }}">Update Your Phone</a>
                                @else
                                    <a href="tel:{{ $user->detail->phone }}">{{ $user->detail->phone_no }}</a>
                                @endif
                            </li>
                        @endif

                        @if (is_null($user->detail->gender))
                            @if (session()->get('viewedUser')['url'] == 'my')
                                <li><span>Gender: </span>
                                    <a href="{{ route('frontend.settings') }}">Update Your Gender</a>
                                </li>
                            @endif
                        @else
                            <li><span>Gender: </span>
                                {{ @$user->detail->gender }}
                            </li>
                        @endif
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
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-menu"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href=""><i
                                                class="flaticon-edit"></i> Edit Information</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content word-break">
                            <p>
                                @if (is_null($user->detail->about_me))
                                    @if (session()->get('viewedUser')['url'] == 'my')
                                        <li><span>About: </span>
                                            <a href="{{ route('frontend.settings') }}">Update Your About</a>
                                        </li>
                                    @endif
                                @else
                                    {{ @$user->detail->about_me }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
