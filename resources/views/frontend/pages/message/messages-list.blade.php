<div class="messages-profile-box">
    <a href="#">
        <img src="{{ $user->avatar['avatar'] }}" class="rounded-circle" alt="image">
    </a>
    <h3>
        {{ $user->full_name }}
    </h3>
</div>

<div class="messages-chat-container" id="messages-chat-container">
    @include('frontend.pages.message.message-single', [
        'message' => $message,
    ])
</div>
<div class="chat-list-footer">
    <form class="d-flex align-items-center" id="chat-form">
        <div class="btn-box d-flex align-items-center me-3">
            <button class="file-attachment-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                title="File Attachment" type="button">
                <i class="ri-attachment-2"></i>
            </button>
            <button class="emoji-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emoji"
                type="button"><i class="ri-user-smile-line"></i></button>
        </div>
        <input type="text" class="form-control" name="chat_message" placeholder="Type your message...">
        <button type="submit" class="send-btn d-inline-block">Send</button>
    </form>
</div>
