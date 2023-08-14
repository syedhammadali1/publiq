@extends('frontend.layouts.app')


@section('content')
    <div id="single-profile-app">
        @include('components.MyProfile.singleProfile', [
            'user' => $user,
            'authUser' => $authUser,
        ])
    </div>
    </div>
@endsection
