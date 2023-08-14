@isset($comment)
    <div class="row">
        <div class="post-body word-break">
            <div class="post-comment-list">
                <div class="comment-list">
                    <div class="comment-image">
                        <a href="{{ route('frontend.single.profile', $comment->user->name) }}">
                            <img src="{{ $comment->user->avatar }}" class="rounded-circle" alt="user">
                        </a>
                    </div>
                    <div class="comment-info w-100">
                        <div class="comment-info-section">
                            <a href="{{ route('frontend.single.profile', $comment->user->name) }}">
                                <h3>{{ $comment->user->full_name }}</h3>
                            </a>

                            <pre style="margin-bottom: -3px;border-radius: 11px;white-space: pre-wrap;" class="word-break">{{ $comment->message }}</pre>

                        </div>
                        <ul class="comment-react" style="list-style: none;padding-left: 0rem;font-size: 15px">
                            <li class="w-100 mt-2">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <a class="clickable-element">
                                            <i class="{{ $comment->has_liked ? 'fa fa-thumbs-up' : 'flaticon-like' }} comment-like-icon-{{ $comment->id }} comment-like"
                                                id="flaticon-like" data-comment-id="{{ $comment->id }}"></i>
                                            (<span class="px-1 number comment-like-count-{{ $comment->id }} show-likes"
                                                data-foruse="comment"
                                                data-comment-id="{{ $comment->id }}">{{ $comment->likers_count }}</span>)
                                        </a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endisset
