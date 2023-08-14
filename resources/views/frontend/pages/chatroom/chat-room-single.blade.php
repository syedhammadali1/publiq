@foreach ($messages as $message)
    @if ($message->user_id == $chat_with->id)
        <div class="chat-message-left"  @if ($message->attachment_url) style="background:white;" @endif>
            <div class="flex-shrink-1 rounded py-2 px-3">
                <div class="mb-1 chat-inner"><span>
                        <p class="font-weight-bold text-dark">{{ $chat_with->full_name }}</p>
                    </span><span>
                        <div class=" small text-nowrap mt-1 chat-timer">
                            {{ $message->created_at->format('h:i A') }}
                        </div>
                    </span></div>
                @if ($message->attachment_url)
                    <img src="{{ $message->attachment_url }}" class="attachment_chat_image show-single-image-modal" />
                @else
                    {{ $message->message }}
                @endif
            </div>
        </div>
    @else
        <div class="chat-message-right">
            <div class="flex-shrink-1 rounded py-2 px-3">
                <div class="mb-1 chat-inner">
                    <span>
                        <p class="font-weight-bold">You</p>
                    </span>
                    <span>
                        <div class="text-muted small text-nowrap mt-1 chat-timer">
                            {{ $message->created_at->format('h:i A') }}
                        </div>
                    </span>
                </div>
                @if ($message->attachment_url)
                    <img src="{{ $message->attachment_url }}" class="attachment_chat_image show-single-image-modal" />
                @else
                    {{ $message->message }}
                @endif
            </div>
        </div>
    @endif
@endforeach
{{-- <div class="chat-message-right pb-4">
    <div class="flex-shrink-1 rounded py-2 px-3 mr-3">
        <div class="mb-1 chat-inner"><span>
                <p class="font-weight-bold">You</p>
            </span><span>
                <div class="text-muted small text-nowrap mt-1 chat-timer">2:34 am
                </div>
            </span></div>Lorem ipsum dolor sit amet,
        vis erat denique in, dicunt prodesset te vix.
    </div>
</div>

<div class="chat-message-left pb-4">
    <div class="flex-shrink-1  rounded py-2 px-3 ml-3">
        <div class="mb-1 chat-inner"><span>
                <p class="font-weight-bold">Sharon Lessman</p>
            </span><span>
                <div class="text-muted small text-nowrap mt-1 chat-timer">2:34 am
                </div>
            </span></div>
        <span class="chat-single-message">
            Sit meis deleniti
            eu, pri vidit meliore docendi ut, an eum erat animal commodo.
        </span>
    </div>
</div> --}}
