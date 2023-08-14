 @isset($notification)
     <div class="item d-flex align-items-center fndiv-{{ $notification->id }}">
         <div class="figure">
             <a
                 href="{{ route('frontend.single.profile', getUserAttribute($notification->data['sender_id'], 'username')) }}">
                 <img src={{ @getUserAttribute($notification->data['sender_id'], 'img') }} class="rounded-circle"
                     alt="image">
             </a>
         </div>

         <div class="content d-flex justify-content-between align-items-center">
             <div class="text">
                 <h4><a
                         href="{{ route('frontend.single.profile', getUserAttribute($notification->data['sender_id'], 'username')) }}">
                         {{ @getUserAttribute($notification->data['sender_id'], 'name') }}</a></h4>
                 <span>Want To Follow You</span>
                 <span>{{ getUserAttribute($notification->data['sender_id'], 'mutual-follow') }} Mutual Followers</span>

             </div>
             <div class="btn-box d-flex align-items-center">
                 <button class="delete-btn noti-follow-action d-inline-block me-2" data-bs-toggle="tooltip"
                     data-bs-placement="top" data-sender-id={{ $notification->data['sender_id'] }} data-action="decline"
                     data-notification-id={{ $notification->id }} type="button" data-bs-original-title="Delete"
                     @isset($page) data-for-page="true" @else data-for-page="false" @endisset
                     aria-label="Delete"><i class="ri-close-line"></i></button>

                 <button class="confirm-btn noti-follow-action d-inline-block " data-bs-toggle="tooltip"
                     data-bs-placement="top" title="" data-sender-id={{ $notification->data['sender_id'] }}
                     data-notification-id={{ $notification->id }} data-action="accept"
                     @isset($page) data-for-page="true" @else data-for-page="false" @endisset
                     type="button" data-bs-original-title="Confirm" aria-label="Confirm"><i
                         class="ri-check-line"></i></button>
             </div>
         </div>
     </div>
 @endisset
