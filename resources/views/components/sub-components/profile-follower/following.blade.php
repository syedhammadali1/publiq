@isset($following_users)
    @forelse ($following_users as $following_user)
        <div class="col-lg-3 col-sm-6">
            @include('components.singleFriendCardComponent', [
                'user' => $following_user->followable,
            ])
        </div>
    @empty
        <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-users" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No user found</p>
            </div>
        </div>
    @endforelse
@endisset
