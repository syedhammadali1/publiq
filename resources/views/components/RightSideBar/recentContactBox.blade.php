{{-- This component has been used in right sidebar for contactbox section --}}


<div class="recent-contact-box">
    <div class="title">
        <h3>Contact</h3>
    </div>
    <div class="contact-search-box">
        <form class="seach-online-people">
            <input type="text" name="keyword" class="input-search" placeholder="Search" />
            <button type="submit"><i class="ri-search-line"></i></button>
        </form>
    </div>
    <div class="contact-body online-content-body" >
        @include('components.RightSideBar.loopOnlinePeople', [
            'onlineUsers' => $followers,
        ])
    </div>
</div>

<script>
    $('.seach-online-people').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ route('frontend.search.online') }}",
            data: $('.seach-online-people').serialize(),
            dataType: "html",
            success: function(response) {
                $('.online-content-body').html(response)
            }
        });
    });
</script>
