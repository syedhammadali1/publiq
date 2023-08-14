@extends('auth-layouts.app')

@section('content')
    <div id="wizard_container">
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>


        <!-- /top-wizard -->
        <form action="{{ route('password.email') }}" method="POST" id="my-form" class="mt-5">
            @csrf
            @method('POST')
            <i class="fa fa-lock fa-4x" style=" color: #ffffff! important;"></i>


            <div id="middle-wizard">

                <div class="step">
                    <h3 class="" style="margin-bottom: 2rem;text-align: center;"><strong>Reset
                            Password</strong></h3>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                </svg></strong> {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="form-group" style="margin-bottom: 2rem">
                        <input type="text" name="email"
                            class="form-control @error('email') border-danger @enderror  required"
                            placeholder="Email Address or User Name" value="{{ old('email') }}">

                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message == 'These credentials do not match our records.' ? '' : $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <button type="submit" class="form-control"
                        style="background: linear-gradient(91.83deg, #542068 4.56%, #7B215E 94.97%);color: white; border: none;">Send Password Reset Link</button>
                </div>

            </div>

        </form>
    </div>
@endsection
