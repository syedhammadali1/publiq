@isset($user)
    <div class="contact-item online-user-div-{{ $user->name }}">
        <a href="{{ route('frontend.single.profile', $user) }}">
            <img src="{{ $user->avatar }}" class="rounded-circle" alt="image" /></a>
        <span class="name"><a href="{{ route('frontend.single.profile', $user) }}"
                class="overflow-hiddenn">{{ $user->name }}</a></span>
        <span class="status-online"></span>
    </div>
@endisset
