 {{-- @isset($notification)
     <div class="item d-flex justify-content-between align-items-center">
         <div class="figure">
             <a href="{{ route('frontend.single.profile', getUserAttribute($notification->data['from'], 'username')) }}"><img
                     src={{ @getUserAttribute($notification->data['from'], 'img') }}
                     class="
                 rounded-circle" alt="image"></a>
         </div>
         <div class="text">
             <h4>
                 <a
                     href="{{ route('frontend.single.profile', getUserAttribute($notification->data['from'], 'username')) }}">
                     {{ @getUserAttribute($notification->data['from'], 'name') }}
                 </a>
             </h4>
             <span>{{ $notification->data['message'] }}</span>
             <span class="main-color">23/5/2022 - 02:11 AM</span>
         </div>
         <div class="icon">
             <a href="{{ route('frontend.single.profile', @getUserAttribute($notification->data['from'], 'username')) }}"><i
                     class="er"></i></a>
         </div>
     </div>
 @endisset --}}
