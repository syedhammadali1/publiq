 @isset($notification)
     <div class="item d-flex justify-content-between align-items-center notification-hover notidiv-{{ $notification->id }}">
         <div class="figure">
             @if ($notification_page)
                 <div class="subs-notification-page">
                     <img src={{ asset('frontend/assets/images/subs.png') }}>
                 </div>
             @endif
             <a
                 href="{{ route('frontend.single.profile', getUserAttribute($notification->data['sender_id'], 'username')) }}">
                 <img src={{ @getUserAttribute($notification->data['sender_id'], 'img') }} class="rounded-circle"
                     alt="image">
             </a>
         </div>
         @if (!$notification_page)
             <div class="subs-notification">
                 <img src={{ asset('frontend/assets/images/subs.png') }} />
             </div>
         @endif

         <div class="text">
             <h4>
                 <a
                     href="{{ route('frontend.single.profile', getUserAttribute($notification->data['sender_id'], 'username')) }}">
                     {{ @getUserAttribute($notification->data['sender_id'], 'name') }}
                 </a>
             </h4>
             <span>Subscribe To Your Content</span>
             <span class="main-color">{{ $notification->created_at->diffForHumans() }}</span>
         </div>
         @if ($new)
             <div class="main-unread">
                 <div class="unread-dot"></div>
             </div>
         @endif
     </div>
 @endisset
