@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="all-messages-body">
            <div class="all-messages-header d-flex justify-content-between align-items-center">
                <h3>Messages</h3>

                <div class="dropdown">

                </div>
            </div>

            <div class="loader-body-message">
                @include('components.sub-components.loading')
            </div>

            <div class="message-body">

            </div>
        </div>
    </div>
@endsection

