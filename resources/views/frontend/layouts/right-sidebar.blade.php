{{-- this is used as a right side bar
   it has  two components one is recentchat and
   second is recent contact --}}

<div class="right-sidebar-area mt-3" data-simplebar>
    @php
        $users = auth()
            ->user()
            ->followings()
            ->whereNotNull('accepted_at')
            ->whereHas('followable', function ($query) {
                $query->whereIsOnline(1);
            })
            ->get()
            ->map(function ($q) {
                return $q->followable;
            });
    @endphp
    @include('components.RightSideBar.recentChatBox', [
        'users' => $users,
    ])
    @include('components.RightSideBar.recentContactBox', [
        'followers' => $users,
    ])
</div>
