@isset($user)
    <div class="item d-flex justify-content-between align-items-center">
        <div class="figure">
            <a href="{{ route('frontend.single.profile', $user) }}">
                <img src={{ $user->avatar }} class="rounded-circle w-75" alt="image"></a>
        </div>
        <div class="text">
            <h4>
                <a href="{{ route('frontend.single.profile', $user) }}"
                    @if ($user->id == $authId) class="pt-3" @endif>{{ $user->full_name }}
                </a>
            </h4>
        </div>
        @if ($user->id != $authId)
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-3">
                    @if (auth()->user()->hasRequestedToFollow($user))
                        <span class="pending-follow-member" data-username="{{ $user->name }}" data-foruse="like_user"
                            style="float: left;">
                            <button class="unmember-add ">Requested</button>
                        </span>
                    @elseif(auth()->user()->isFollowing($user))
                        <span class="pending-follow-member" data-username="{{ $user->name }}" data-foruse="like_user"
                            style="float: left;">
                            <button class="unmember-add ">Following</button>
                        </span>
                    @elseif(!auth()->user()->isFollowing($user) && $user->isFollowing(auth()->user()))
                        <span class="add-follow-member" data-username="{{ $user->name }}" data-foruse="like_user"
                            style="float: left;">
                            <button class="member-add followback">Follow Back</button>
                        </span>
                    @elseif(!auth()->user()->isFollowing($user))
                        <span class="add-follow-member" data-username="{{ $user->name }}" data-foruse="like_user"
                            style="float: left;">
                            <button class="member-add follow">Follow</button>
                        </span>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endisset
