{{-- This component has been used in right sidebar for chatbox section --}}
<div class="main-post-loader upload-post-queue-loader" @if (session()->get('is_uploading') == 'false' || is_null(session()->get('is_uploading'))) style="display: none" @endif>
    <div class="post-loader"></div><span>
        <h2 class="main-loader-title">Post Uploading</h2>
    </span>
</div>
<div class="main-post-loader update-post-queue-loader" @if (session()->get('is_updating') == 'false' || is_null(session()->get('is_updating'))) style="display: none" @endif>
    <div class="post-loader"></div><span>
        <h2 class="main-loader-title">Post Updating</h2>
    </span>
</div>
{{-- @dd(session()->get('media_uploading')); --}}
<div class="Uploading" @if (session()->get('media_uploading') == 'false' || is_null(session()->get('media_uploading'))) style="display: none" @endif>
    <div class="post-loader"></div><span>
        <h2 class="main-loader-title">Uploading</h2>
    </span>
</div>
<div class="recent-chat-box">
    <div class="title">
        <h3>Recent Chat</h3>
    </div>

    <div class="chat-body" data-simplebar>
        @foreach ($users as $item)
            <div class="chat-item"  onclick="window.location='{{ route('frontend.chatroom') }}#{{ $item->name }}'">
                <a href="#"><img src="{{ $item->avatar }}" class="rounded-circle" alt="image" /></a>
                <span class="name overflow-hiddenn"><a href="#">{{ $item->full_name }}</a></span>
                <span class="status-online"></span>
            </div>
        @endforeach
    </div>
</div>
