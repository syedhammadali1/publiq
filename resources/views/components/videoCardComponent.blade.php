 {{-- This component has been used in profile page as video card --}}

 <div class="single-video-card">
     <div class="video-info">
         <a href="{{ route('frontend.single.profile', $post->user->name) }}">
             <img src="{{ $post->user->avatar }}" class="rounded-circle" alt="image" />
         </a>
         <div class="text">
             <h3>
                 <a class="post-modal overflow-hiddenn clickable-element"
                     data-id="{{ $post->id }}">{{ $post->title }} </a>
             </h3>
             <span>Published: {{ $post->created_at->format('d-m-yy') }}</span>
         </div>
     </div>
     <div class="video-image video-profile-main post-modal clickable-element" data-id="{{ $post->id }}">

         @if ($post->is_paid == 0)
             <video src="{{ $post->getFirstMediaUrl('video') }}" alt="paid 0" class="profile-photo-size1"> </video>
         @else
             @if ($post->user_id == auth()->id() ||
                 auth()->user()->hasSubscribed($post->user))
                 <video src="{{ $post->getFirstMediaUrl('video') }}" alt="paid 1 if" class="profile-photo-size1">
                 </video>
             @else
                 <video src="{{ $post->getFirstMediaUrl('video') }}" style="filter: blur(3px);" alt="paid 1 else"
                     class="profile-photo-size1"> </video>
             @endif
         @endif

         <div class="icon">
             <a class="video-btn popup-youtube post-modal clickable-element" data-id="{{ $post->id }}">
                 <i class="flaticon-youtube"></i>
             </a>
         </div>
     </div>
     <ul class="meta-wrap">
         <li class="react">
             <a>
                 <i
                    onclick="userlike({{ $post->id }})" class="{{ $post->isLikedBy(auth()->user()) ? 'fa fa-thumbs-up' : 'flaticon-like' }} post-like-icon-{{ $post->id }} clickable-element">
                 </i>
                 <span class="number post-like-count-{{ $post->id }} show-likes" data-foruse="post" data-post-id="{{ $post->id }}">
                     {{ $post->likers_count }}
                 </span>
             </a>
         </li>
         <li class="comment post-modal" data-id="{{ $post->id }}">
             <a href="#">
                 <i class="ri-chat-3-line"></i>
                 <span class="number post-comment-count-{{ $post->id }}">{{ $post->comments_count }}</span>
             </a>
         </li>
     </ul>
 </div>


 {{-- <script>
     $(document).ready(function() {

         $('.post-modal').on('click', function() {
             element = $(this);
             $.ajax({
                 type: "get",
                 url: "{{ route('frontend.post.modal') }}",
                 data: {
                     id: element.data('id'),
                 },
                 success: function(response) {
                     console.log(response);
                     $('#exampleModal').html(response);
                 }
             });
             $('#exampleModal').modal('show')
         });
     });
 </script> --}}
