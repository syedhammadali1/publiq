 <div class="item d-flex justify-content-between align-items-center notidiv-{{ $notification->id }} notification-hover-chat"
     onclick="window.location='{{ route('frontend.chatroom') }}#{{ @getUserAttribute($notification->data['sender_id'], 'username') }}'">
     <div class="figure">
         <a
             href="{{ route('frontend.chatroom') }}#{{ @getUserAttribute($notification->data['sender_id'], 'username') }}"><img
                 src={{ @getUserAttribute($notification->data['sender_id'], 'img') }} class="rounded-circle"
                 alt="image"></a>
     </div>
     <div class="text">
         <h4><a> {{ @getUserAttribute($notification->data['sender_id'], 'name') }}</a></h4>
         <span class="textforunseenmsg">
             @if ($notification->data['last_message'] == 'Attachment')
                 <i class="fa fa-paperclip" aria-hidden="true"></i>
             @endif
             {{ $notification->data['last_message'] }}
         </span>
         @if ($notification->data['unseen'] != 0)
             <span class="unseenmsg">
                 {{ $notification->data['unseen'] }}
             </span>
         @endif
     </div>
 </div>
