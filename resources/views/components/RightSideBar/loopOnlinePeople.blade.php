 @forelse ($onlineUsers as $user)
     @include('components.RightSideBar.single-online-user', [
         'user' => $user,
     ])
 @empty
     <p> No online user</p>
 @endforelse
