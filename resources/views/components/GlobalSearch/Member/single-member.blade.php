@isset($user)
    <div class="item d-flex justify-content-between align-items-center">
        <div class="figure">
            <a href="{{ route('frontend.single.profile', $user) }}"><img src={{ $user->avatar }} class="rounded-circle"
                    alt="image"></a>
        </div>
        <div class="text">
            <h4><a href="{{ route('frontend.single.profile', $user) }}">{{ $user->full_name }}</a></h4>
            <span>{{ $user->mutual_followers_count }} Mutual Followers</span>
            <span class="main-color">{{ $user->name }}</span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                @if (auth()->user()->hasRequestedToFollow($user))
                    <span class="pending-follow-member" data-username="{{ $user->name }}" data-foruse="global_search"
                        global_search style="float: left;">
                        <button class="unmember-add ">Requested</button>
                    </span>
                @elseif(auth()->user()->isFollowing($user))
                    <span class="pending-follow-member" data-username="{{ $user->name }}" data-foruse="global_search"
                        style="float: left;">
                        <button class="unmember-add ">Following</button>
                    </span>
                @elseif(!auth()->user()->isFollowing($user) && $user->isFollowing(auth()->user()))
                    <span class="add-follow-member" data-username="{{ $user->name }}" data-foruse="global_search"
                        style="float: left;">
                        <button class="member-add followback">Follow Back</button>
                    </span>
                @elseif(!auth()->user()->isFollowing($user))
                    <span class="add-follow-member" data-username="{{ $user->name }}" data-foruse="global_search"
                        style="float: left;">
                        <button class="member-add follow">Follow</button>
                    </span>
                @endif
            </div>
        </div>
    </div>
@endisset
