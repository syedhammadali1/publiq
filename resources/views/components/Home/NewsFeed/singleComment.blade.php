@isset($comment)
    <div class="post-footer">
        <div class="footer-image">
            <a href="{{ route('frontend.single.profile', $comment->user->name) }}">
                <img src="{{ $comment->user->avatar }}" class="rounded-circle" alt="toppings">
            </a>
        </div>
        <div class="form-group word-break">

            <div class="form-control">
                <h6>{{ $comment->user->full_name }}</h6>
                <pre style="margin-bottom: -3px;border-radius: 11px;white-space: pre-wrap;" class="word-break">{{ $comment->message }}</pre>
            </div>
            <ul class="comment-react" style="list-style: none;padding-left: 0rem;padding-top: 10px;font-size: 15px">
                <li>
                    <div class="row">
                        <div class="col-6 text-start">
                            <a class="clickable-element">
                                <i class="{{ $comment->isLikedBy($authUser) ? 'fa fa-thumbs-up' : 'flaticon-like' }} comment-like-icon-{{ $comment->id }} comment-like"
                                    id="flaticon-like" data-comment-id="{{ $comment->id }}"></i>
                                (<span class="px-1 number comment-like-count-{{ $comment->id }} show-likes"
                                    data-foruse="comment"
                                    data-comment-id="{{ $comment->id }}">{{ $comment->likers_count }}</span>)
                            </a>
                        </div>
                        <div class="col-6 text-end">
                            <span class="mr-5">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endisset
