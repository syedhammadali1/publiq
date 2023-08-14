@isset($array)
    <style>
        .p23232323ayment {
            height: 280px;
            border-radius: 20px;
            background: #fff;
        }

        .p23232323ayment_header {
            background: #542068;
            padding: 20px;
            border-radius: 20px 20px 0px 0px;

        }

        .check121i25762t {
            margin: 0px auto;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #fff;
            text-align: center;
        }

        .check121i25762t i {
            vertical-align: middle;
            line-height: 50px;
            font-size: 30px;
        }

        .gdhfgyuebtyecheck {
            text-align: center;
        }

        .gdhfgyuebtyecheck h1 {
            font-size: 25px;
            padding-top: 25px;
        }

        .gdhfgyuebtyecheck a {
            width: 200px;
            height: 35px;
            color: #fff;
            border-radius: 30px;
            padding: 5px 10px;
            background: #542068;
            transition: all ease-in-out 0.3s;
        }

        .gdhfgyuebtyecheck a:hover {
            text-decoration: none;
            background: #000;
        }

        .theme-dark .p23232323ayment {
            border: 1px solid #f2f2f2;
            background: rgb(0, 0, 0) ! important;
            border: 1px solid #404040 ! important;
        }

        .theme-dark .gdhfgyuebtyecheck h1 {
            color: #fff ! important;
        }

        .theme-dark .gdhfgyuebtyecheck p {
            color: #fff ! important;
        }
    </style>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12">
                <div class="p23232323ayment">
                    <div class="p23232323ayment_header">
                        <div class="check121i25762t">
                            @if (array_key_exists('icon', $array))
                                <i class="{{ $array['icon'] }}" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-check121i25762t" aria-hidden="true"></i>
                            @endif
                        </div>
                    </div>
                    <div class="gdhfgyuebtyecheck">
                        <h1>
                            @if (array_key_exists('heading', $array))
                                {{ $array['heading'] }}
                            @endif
                        </h1>
                        <p>
                            @if (array_key_exists('simple-content', $array))
                                {{ $array['simple-content'] }}
                            @endif
                            @if (array_key_exists('content', $array))
                                {{ $array['content'] }}, You will be redirected in <span
                                    class="count">{{ $array['redirect_time'] / 1000 }}</span> secounds.
                            @endif
                        </p>
                        @if (array_key_exists('route', $array))
                            <a href="{{ $array['route'] }}">Go to Home</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (array_key_exists('heading', $array))
        @if (array_key_exists('should_redirect', $array))
            @if ($array['should_redirect'] == true)
                <script>
                    $(document).ready(function() {
                        var currentRoute = document.URL.replace({!! json_encode(env('APP_URL')) !!}, "")
                        $('.count').each(function() {
                            $(this).prop('Counter', {!! $array['redirect_time'] !!}).animate({
                                Counter: $(this).text()
                            }, {
                                duration: {!! $array['redirect_time'] !!},
                                easing: 'linear',
                                step: function(now) {
                                    $(this).text(Math.round(now / 1000));
                                }
                            });
                        });
                        var timeSet = setTimeout(() => {
                            if (currentRoute.includes("/profile")) {
                                $('.fullScreenModalClose').trigger('click');
                            } else {
                                $(location).prop('href', '{!! $array['redirect_path'] !!}')
                            }
                        }, {!! $array['redirect_time'] !!});
                        $('.fullScreenModalClose').on("click", function(e) {
                            clearTimeout(timeSet);
                            $('.fullScreenModalBody').html(`@include('components.sub-components.loadMoreModal')`);
                        });
                    });
                </script>
            @endif
        @endif

        @if (array_key_exists('just_close_model', $array))
            @if ($array['just_close_model'] == true)
                <script>
                    $(document).ready(function() {
                        var currentRoute = document.URL.replace({!! json_encode(env('APP_URL')) !!}, "")
                        $('.count').each(function() {
                            $(this).prop('Counter', 0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: {!! $array['redirect_time'] !!},
                                easing: 'linear',
                                step: function(now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                        var timeSet = setTimeout(() => {
                            $('.fullScreenModalClose').trigger('click');
                        }, {!! $array['redirect_time'] !!});
                        $('.fullScreenModalClose').on("click", function(e) {
                            clearTimeout(timeSet);
                            $('.fullScreenModalBody').html(`@include('components.sub-components.loadMoreModal')`);
                        });
                    });
                </script>
            @endif
        @endif
    @endif

@endisset
