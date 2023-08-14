@extends('auth-layouts.app')

@section('content')
    <div id="wizard_container" class="mt-md-5 pt-md-5">
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>

        <!-- /top-wizard -->
        <form action="{{ route('login') }}" method="POST" id="my-form" class="mt-4">
            @csrf
            @method('POST')

            <div id="middle-wizard">

                <div class="step">
                    <h3 class="" style="margin-bottom: 2rem;text-align: center;"><strong>LOGIN</strong></h3>

                    <div class="form-group" style="margin-bottom: 2rem">
                        <input type="text" name="email"
                            class="form-control @error('email') border-danger @enderror  required"
                            placeholder="Enter email or username" value="{{ old('email') }}">

                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message == 'These credentials do not match our records.' ? '' : $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group" style="margin-bottom: 2rem">
                        <input type="password" name="password"
                            class="form-control @error('password') border-danger @enderror required"
                            placeholder="Enter password" value="{{ old('password') }}">
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="container_check ">
                            <span style="font-size: 1.2rem">{{ __('Remember me') }}</span>
                            <input type="checkbox" name="remember" class="required uncheck" value="1">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    @error('email')
                        @if ($message == 'These credentials do not match our records.')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    @enderror

                    {{-- <button type="submit" style="width: 25rem;height: 2.34rem;background-color: #4D1D5E;color: white; border: none;">submit</button> --}}
                    <button type="submit" class="form-control"
                        style="background: linear-gradient(91.83deg, #542068 4.56%, #7B215E 94.97%); color: white; border:  1px solid white;">Submit</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <br>
                    <h4 style="text-align: center">or</h4>
                    <br>

                    <div style="text-align:center">
                        <a href="{{ route('register') }}" style="color: white;text-align: center">Sign Up</a>
                    </div>
                    <!-- /row -->

                </div>
                <!-- /step-->
            </div>
            <!-- /middle-wizard -->
            <!-- /bottom-wizard -->
        </form>
    </div>
@endsection
