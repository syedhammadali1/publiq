@extends('frontend.layouts.app')


@section('content')
    {{-- @dd(@$success) --}}
    <div class="content-page-box-area">
        <div class="page-banner-box">
            <h3>Account Setting</h3>
        </div>

        <div class="account-setting-list-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-information-tab" data-bs-toggle="tab" href="#profile-information"
                        role="tab" aria-controls="profile-information">Account</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab"
                        aria-controls="notification">Terms & Conditions</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="privacy-tab" data-bs-toggle="tab" href="#privacy" role="tab"
                        aria-controls="privacy">Privacy Policy</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-bs-toggle="tab" href="#message" role="tab"
                        aria-controls="message">Help & Support</a>
                </li>


            </ul>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile-information" role="tabpanel">
                <form class="account-setting-form personal-info" method="POST">
                    @csrf
                    @method('post')
                    <h3>Account Information</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email is required" name="email"
                                    value="{{ auth()->user()->email }}" readonly>
                            </div>

                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" placeholder="User name is required"
                                    value="{{ auth()->user()->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First name is required "
                                    value="{{ auth()->user()->detail->first_name }}" name="first_name"
                                    @error('first_name')  @enderror>
                                @error('first_name')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name is required"
                                    value="{{ auth()->user()->detail->last_name }}" name="last_name"
                                    @error('last_name')  @enderror>
                                @error('last_name')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Birthday</label>
                                {{-- <input type="date" class="form-control" placeholder="Birthday" id="datepicker" name="birthday" value="{{ auth()->user()->detail->birthday }}" @error('birthday') --}}
                                <input type="date" class="form-control" placeholder="Birthday is required" name="birthday"
                                    value="{{ auth()->user()->detail->birthday }}" @error('birthday')  @enderror>
                                @error('birthday')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone No:</label>
                                <input type="number" class="form-control" placeholder="Phone no is required" name="phone_no"
                                    value="{{ auth()->user()->detail->phone_no }}" @error('phone_no')  @enderror>

                                @error('phone_no')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            {{-- <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" placeholder="Gender" name="gender" value="{{ auth()->user()->detail->gender }}" @error('gender')

                            @enderror>
                            @error('gender')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                        value="Male" {{ auth()->user()->detail->gender == 'Male' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"
                                        value="Female" {{ auth()->user()->detail->gender == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                </div>

                                @error('gender')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea id="about-me-tex" name="about_me" class=" @error('about_me') is-invalid @enderror"> {{ auth()->user()->detail->about_me }}</textarea>
                                @error('about_me')
                                    <span class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn" id="update-btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="privacy" role="tabpanel">
                <div class="account-setting-form">
                    <h3>Privacy Policy</h3>

                    <div class="row">
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.<br />
                        <br />
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.<br />
                        <br />
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="notification" role="tabpanel">
                <div class="account-setting-form">
                    <h3>Terms & Conditions</h3>

                    <div class="row">
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.<br />
                        <br />
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.<br />
                        <br />
                        Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque
                        auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Sed porttitor lectus nibh.
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="message" role="tabpanel">
                <form class="account-setting-form">

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="William"
                                    value="{{ auth()->user()->detail->first_name }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Chandler"
                                    value="{{ auth()->user()->detail->last_name }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-21">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="info@publiq.com"
                                    value="{{ auth()->user()->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Feedback</label>
                                <textarea id="help-tex">Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn" id="help-submit-btn"
                                onclick="toastr.success('Thanks For Your Feedback')">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script>
        $(function() {
            $('.personal-info').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "{{ route('frontend.setting.update', auth()->id()) }}",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        toastr.success('Profile Updated')
                    },

                    error: function(errors) {
                        $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                            valueOfElement) {
                            //  $('#' + indexInArray).show();
                            //  $('#' + indexInArray + ' > strong').html(valueOfElement)
                            loadMoreToggle(btn, 'show');
                            toastr.error(valueOfElement)
                        });
                    }
                });

            });
        });
    </script>
@endsection
