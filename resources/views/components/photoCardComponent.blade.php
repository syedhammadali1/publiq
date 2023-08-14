 {{-- This component has been used in profile page as  photo card --}}

 {{-- {{ dd($post) }} --}}
 <div class="single-video-card">
     <div class="video-info">
         <a href="{{ route('frontend.single.profile', $post->user->name) }}">
             <img src="{{ $post->user->avatar }}" class="rounded-circle" alt="image" />
         </a>
         <div class="text">
             <h3>
                 <a class="post-modal overflow-hiddenn clickable-element" data-id="{{ $post->id }}">{{ $post->title }}</a>
             </h3>
             <span>Published: {{ $post->created_at->format('d-m-yy') }}</span>
         </div>
     </div>
     <div class="video-image image-profile-main post-modal clickable-element" data-id="{{ $post->id }}">
         {{-- {{ dd( $post->getFirstMedia('image')) }} --}}
         {{-- @dd($post->media_count); --}}
         @if ($post->media_count > 1)

         <div class="over-inner-of-photos">
            <div class="number-inner-of-photos post-modal" data-id="">
               {{$post->media_count - 1}}+ </div>
        </div>

         @endif

         @if ($post->is_paid == 0)
             <a><span><img class="video-side profile-photo-size1 post-modal clickable-element" data-id="{{ $post->id }}"
                         src="{{ doesFileExists($post->getFirstMedia('image'), $post->getFirstMediaUrl('image')) }}"
                         alt="image1" />
                     {{-- <div class="number-of-post">{{ $post->media->count() }}</div> --}}
                     {{-- @dd($post->media->count()) --}}
                 </span></a>
         @else
             @if ($post->user_id == auth()->id() ||
                 auth()->user()->hasSubscribed($post->user))
                 <a>
                     <span>
                         <img class="video-side profile-photo-size1 post-modal clickable-element" data-id="{{ $post->id }}"
                             src="{{ doesFileExists($post->getFirstMedia('paidImage'), $post->getFirstMediaUrl('paidImage')) }}"
                             alt="image1" />
                     </span>
                 </a>
             @else
                 <a><span>
                         <img class="video-side profile-photo-size1 post-modal clickable-element" data-id="{{ $post->id }}"
                             src="{{ doesFileExists($post->getFirstMedia('paidImage'), $post->getFirstMediaUrl('paidImage', 'blurimage')) }}"
                             alt="image1" />
                     </span>
                 </a>
             @endif

             {{-- <div class="number-of-post">{{ $post->media->count() }}</div> --}}
             {{-- @dd($post->media->count()) --}}
         @endif



     </div>
     <ul class="meta-wrap">
         <li class="react">
             <a>
                 <i
                   onclick="userlike({{ $post->id }})"  class="{{ $post->isLikedBy(auth()->user()) ? 'fa fa-thumbs-up' : 'flaticon-like' }} post-like-icon-{{ $post->id }} clickable-element">
                 </i>
                 <span class="number  post-like-count-{{ $post->id }} show-likes" data-foruse="post" data-post-id="{{ $post->id }}">
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
