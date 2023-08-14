@isset($user_subscriptions)
    @forelse ($user_subscriptions as $user_subscribed)
        <div class="col-lg-3 col-sm-6">
            @include('components.singleFriendCardComponent', [
                'user' => $user_subscribed->subscribable,
                // 'paidBtn' => true,
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
