@isset($users)
    @forelse ($users as $user)
        <div class="col-lg-3 col-sm-6">
            @include('components.singleFriendCardComponent', [
                'user' => $user,
                'actionBtn' => true,
            ])
        </div>
    @empty
    @endforelse
@endisset
