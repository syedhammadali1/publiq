@isset($users)
    <div class="member-append">
        @forelse ($users as $user)
            <div class="global-single-member-{{ str_replace('.', '-', $user->name) }} py-3">
                @include('components.GlobalSearch.Member.single-member')
            </div>
        @empty
            no member
        @endforelse
    </div>
@endisset
