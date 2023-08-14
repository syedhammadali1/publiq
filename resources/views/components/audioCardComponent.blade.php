 {{-- This component has been used in profile page as audio card --}}


 <div class="single-video-card">
     <div class="video-info">
         <a href="{{ route('frontend.single.profile', $post->user->name) }}">
             <img src="{{ $post->user->avatar }}" class="rounded-circle" alt="image" />
         </a>

         <div class="text">
             <h3>
                 <a class="overflow-hiddenn post-modal clickable-element"
                     data-id="{{ $post->id }}">{{ $post->title }}</a>
             </h3>
             <span>{{ $post->created_at->diffForHumans() }}</span>
         </div>
     </div>
     <div class="post-modal" data-id="{{ $post->id }}">
         {{-- <img
        src="frontend/assets/images/audio/audio1.jpg"
        alt="image"
      /> --}}
         {{-- <audio src="{{ $post->getFirstMediaUrl('audio') }}">
    <source></audio> --}}
         @if ($post->is_paid == 0)
             <audio controls>
                 <source src="{{ $post->getFirstMediaUrl('audio') }}">
                 Your browser does not support the audio element.
             </audio>
         @else
             @if ($post->user_id == auth()->id() ||
                 auth()->user()->hasSubscribed($post->user))
                 <audio controls>
                     <source src="{{ $post->getFirstMediaUrl('audio') }}">
                     Your browser does not support the audio element.
                 </audio>
             @else
                 <audio controls>
                     <source src="">
                     Your browser does not support the audio element.
                 </audio>
             @endif
         @endif

     </div>
     <ul class="meta-wrap">
         <li class="react">
             <a>
                 <i onclick="userlike({{ $post->id }})"
                     class="{{ $post->isLikedBy(auth()->user()) ? 'fa fa-thumbs-up' : 'flaticon-like' }} post-like-icon-{{ $post->id }} clickable-element">
                 </i>
                 <span class="number post-like-count-{{ $post->id }} show-likes" data-foruse="post"
                     data-post-id="{{ $post->id }}">
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
