<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script>
    const loadingIconHtml =
        `<lord-icon class="sprofile-loading-icon" src="https://cdn.lordicon.com/xjovhxra.json" trigger="loop" colors="primary:#fff,secondary:#08a88a" style="width:32px;height:32px"></lord-icon>`
    const btnCss = {
        'background': 'linear-gradient(91.83deg, #542068 4.56%, #7B215E 94.97%)!important'
    }
    $(document).ready(function() {

        $(document).on("click", ".add-follow", function(e) {
            e.preventDefault();
            childBtn = $($(this).children()[0])

            $.ajax({
                type: "GET",
                url: "{{ route('frontend.send.follow-request', $user->name) }}",
                data: {},
                dataType: 'html',
                beforeSend: function() {
                    $(this).removeClass('add-follow');

                    childBtn.html(loadingIconHtml)
                    childBtn.addClass('btn-profile-linear-gradient')
                },
                success: function(response) {
                    $('#single-profile-app').html(response);
                }
            });
        });

        $(document).on("click", ".pending-follow", function(e) {
            e.preventDefault();
            childBtn = $($(this).children()[0])

            $.ajax({
                type: "GET",
                url: "{{ route('frontend.remove.follow-request', $user->name) }}",
                data: {},
                dataType: 'html',
                beforeSend: function() {
                    $(this).removeClass('pending-follow');
                    childBtn.removeClass('jsagdbuiadf');
                    childBtn.removeClass('ubadycfrg3uf');
                    childBtn.html(loadingIconHtml)
                    childBtn.addClass('btn-profile-linear-gradient')
                },
                success: function(response) {
                    $('#single-profile-app').html(response);
                }
            });
        });

        $(document).on("click", ".accept-follow", function(e) {
            e.preventDefault();
            childBtn = $($(this).children()[0])

            $.ajax({
                type: "GET",
                url: "{{ route('frontend.accept.follow-request', $user->name) }}",
                data: {},
                dataType: 'html',
                beforeSend: function() {
                    $(this).removeClass('accept-follow');
                    childBtn.html(loadingIconHtml)
                    childBtn.addClass('btn-profile-linear-gradient')
                },
                success: function(response) {
                    $('#single-profile-app').html(response);
                    //  $('.unreadfollow-count').text({!! getUserNotificationsCount(auth()->id(), 'follow') !!})

                }
            });
        });

        $(document).on("click", ".decline-follow", function(e) {
            e.preventDefault();
            childBtn = $($($(this).children()[0])[0])
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.decline.follow-request', $user->name) }}",
                data: {},
                dataType: 'html',
                beforeSend: function() {
                    $(this).removeClass('decline-follow');
                    childBtn.html(loadingIconHtml)
                    childBtn.addClass('btn-profile-linear-gradient')
                },
                success: function(response) {
                    $('#single-profile-app').html(response);
                }
            });
        });

        $(document).on("click", ".add-subscribe", function(e) {
            e.preventDefault();
            $('#fullScreenModal').modal('show');
            $('#fullScreenModalLabel').text('Payment Method');
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.render.component') }}",
                data: {
                    'comp_for': 'payment',
                    'user': {!! json_encode($user->name) !!}
                },
                dataType: 'html',
                success: function(response) {
                    $('.fullScreenModalBody').html(response);
                }
            });
            //  $.ajax({
            //      type: "GET",
            //      url: "{{ route('frontend.subscribe', $user->name) }}",
            //      data: {},
            //      dataType: 'html',
            //      success: function(response) {
            //          $('#single-profile-app').html(response);
            //      }
            //  });
        });

        $(document).on("click", ".un-subscribe", function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.unsubscribe', $user->name) }}",
                data: {},
                dataType: 'html',
                success: function(response) {
                    $('#single-profile-app').html(response);
                }
            });
        });

        $(document).on("click", ".block", function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.block.user', $user->name) }}",
                data: {},
                dataType: 'html',
                success: function(response) {
                    $('#single-profile-app').html(response);
                }
            });
        });
        $(document).on("click", ".block-user-btn", function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.block.user', $user->name) }}",
                data: {},
                dataType: 'html',
                success: function(response) {
                  let obj =  JSON.parse(response)
                    toastr.success( obj.name + " blocked successfully");
                }
            });
        });

        $(document).on("click", ".report-user-btn", function(e) {
            e.preventDefault();
            $('#fullScreenModal').modal('show');
            $('#fullScreenModalLabel').text('Report ' + {!! json_encode($user->name) !!});
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.render.component') }}",
                data: {
                    'comp_for': 'report-user',
                    'user': {!! json_encode($user->name) !!}
                },
                dataType: 'html',
                success: function(response) {
                    $('.fullScreenModalBody').html(response);
                }
            });
            //  $.ajax({
            //      type: "GET",
            //      url: "{{ route('frontend.report.user', $user->name) }}",
            //      data: {},
            //      dataType: 'html',
            //      success: function(response) {
            //          $('#single-profile-app').html(response);
            //      }
            //  });
        });





    });
</script>
