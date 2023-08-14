@extends('auth-layouts.app')

@section('content')
    <div id="wizard_container">
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form action="{{ route('register') }}" method="POST" id="register-form">
            @csrf
            @method('POST')
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="step">
                    <h3 class="main_question"><strong>1/2</strong>Signup below to be the one of the first
                        to Go PUBLIQ</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="firstname"
                                    class="form-control required @error('firstname') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="lastname"
                                    class="form-control required @error('lastname') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('lastname') }}">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control required" placeholder="Username"
                                    value="{{ old('username') }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control required" placeholder="Email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control required" placeholder="Password"
                                    value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control required"
                                    placeholder="Password Confirmation" value="{{ old('password_confirmation') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select class="form-control" name="country" required>
                                    <option selected value="">Region</option>
                                    <option @if (old('country') == 'Europe') selected @endif value="Europe">
                                        Europe
                                    </option>
                                    <option @if (old('country') == 'Asia') selected @endif value="Asia">Asia
                                    </option>
                                    <option @if (old('country') == 'North America') selected @endif value="North America">
                                        North America</option>
                                    <option @if (old('country') == 'South America') selected @endif value="South America">
                                        South America</option>
                                    <option @if (old('country') == 'Oceania') selected @endif value="Oceania">
                                        Oceania</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <select class="form-control" name="type" required>
                                    <option selected value="">Type</option>
                                    <option @if (old('type') == 'Author') selected @endif value="Author">
                                        Author
                                    </option>
                                    <option @if (old('type') == 'User') selected @endif value="User">User
                                    </option>
                                </select>
                            </div>
                        </div> --}}
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <input type="number" name="age" class="form-control" placeholder="Age"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (this.value <= this.min) this.value = this.min;"
                                    onkeypress="return /[0-9]/i.test(event.key)" maxlength="2" min="18"
                                    value="{{ old('age') }}">
                            </div>
                        </div> --}}
                        <div class="col-6">
                            <div class="form-group">
                                {{-- <input type="date" name="dob" class="form-control" min="1947-01-01" max="2100-01-01"> --}}

                                <input type="date" name="dob" class="form-control" placeholder="DOB" min="1947-01-01"
                                    max="2100-01-01"
                                    oninput="javascript: if (this.value > this.max) this.value = this.max;if (this.value <= this.min) this.value = this.min;"
                                    value="{{ old('dob') }}">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-6">
                            <div class="form-group radio_input">
                                <label class="container_radio">Male
                                    <input type="radio" name="gender" value="Male" class="required"
                                        @if (old('gender') == 'Male') checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Female
                                    <input type="radio" name="gender" value="Female" class="required"
                                        @if (old('gender') == 'Female') checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="form-group terms">
                        <label class="container_check">Please accept our <a href="#" data-toggle="modal"
                                data-target="#terms-txt">Terms and conditions</a>
                            <input type="checkbox" name="terms" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- /step-->


                <div class="submit step">
                    <h3 class="main_question"><strong>2/2</strong>How did you hear about our company?</h3>
                    <div class="form-group">
                        <label class="container_check version_2">Google Search Engine
                            <input type="checkbox" name="question_2[]" value="Google Search Engine"
                                @if (in_array('Google Search Engine', old('question_2', []))) checked @endif class="required uncheck"
                                onchange="getVals(this, 'question_2');">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="container_check version_2">A friend of mine
                            <input type="checkbox" name="question_2[]" value="A friend of mine"
                                @if (in_array('A friend of mine', old('question_2', []))) checked @endif class="required uncheck"
                                onchange="getVals(this, 'question_2');">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="container_check version_2">Print Advertise
                            <input type="checkbox" name="question_2[]" value="Print Advertise"
                                @if (in_array('Print Advertise', old('question_2', []))) checked @endif class="required uncheck"
                                onchange="getVals(this, 'question_2');">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="container_check version_2">Newspaper
                            <input type="checkbox" name="question_2[]" value="Newspaper"
                                @if (in_array('Newspaper', old('question_2', []))) checked @endif class="required uncheck"
                                onchange="getVals(this, 'question_2');">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="container_check version_2">Other
                            <input type="checkbox" name="question_2[]" id="home" value="Other" class="required"
                                @if (in_array('Other', old('question_2', []))) checked @endif onchange="getVals(this, 'question_2');">
                            <span class="checkmark"></span>
                        </label>
                        <div class="form-group" style="display: none" id="textarea">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="250"
                                name="additional_comments" placeholder="Additional Comments"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display(['data-callback' => 'recapchaValidation']) !!}
                        @error('g-recaptcha-response')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <!-- /step-->
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <p class="float-left text-white text-capitalize"><a class="font-weight-bold "
                        href="{{ route('login') }}">Login</a>, if you are already registered.</p>
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="button" name="process" onclick="alert('Please verify that you are not a robot')"
                    class="submit HGHsdghsd">Submit</button>
            </div>

            <!-- /bottom-wizard -->
        </form>
    </div>
@endsection

@push('js')
    <!-- Wizard script -->
    <script src="{{ asset('frontend/assets/authui/assets/img/js/survey_func.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\StoreUserRequest', '#register-form') !!}
    <script>
        $(document).ready(function() {

            $("#home").change(function() {
                if (this.checked) {
                    $(".uncheck").prop('checked', false);
                    $("#textarea").css('display', 'block');
                } else {
                    $("#textarea").css('display', 'none');
                }
            });
            $(".uncheck").change(function() {
                if (this.checked) {
                    $("#home").prop('checked', false);
                    $("#textarea").css('display', 'none');
                }
            });
        });

        function recapchaValidation() {
            $('.HGHsdghsd').prop("type", 'submit');
            $('.HGHsdghsd').prop("onclick", null).off("click");
        }
    </script>
@endpush
