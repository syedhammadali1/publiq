<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Where The Worlds Meets">
    <meta name="author" content="Ansonika">
    <title>Registeration - PUBLIQ</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons-->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('frontend/authui/assets/img/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" type="image/x-icon"
        href="{{ asset('frontend/assets/authui/assets/img/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="{{ asset('frontend/assets/authui/assets/img/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="{{ asset('frontend/assets/authui/assets/img/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="{{ asset('frontend/assets/authui/assets/img/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('frontend/assets/authui/assets/img/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/authui/assets/img/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/authui/assets/img/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/authui/assets/img/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('frontend/assets/authui/assets/img/css/custom.css') }}" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="{{ asset('frontend/assets/authui/assets/img/js/modernizr.js') }}"></script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1774717065983454');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1774717065983454&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        #toast-container>.toast-error {
            opacity: 1;
            background-color: #bd3131 !important;
            color: white;
            height: 8rem;
            padding-top: 50px;
        }

        .error-help-block {
            color: red;
            /* font-family: inherit; */
            font-weight: bolder;
        }
    </style>


    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            color: white;
            background: url(/frontend/assets/authui/assets/img/login-main-back.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 85vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>

</head>

{{-- <body oncontextmenu="return false"> --}}

<body>

    {{-- <div id="preloader">
        <div data-loader="circle-side"></div>
    </div> --}}
    <!-- /Preload -->

    {{-- <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form --> --}}

    <!--<nav>-->
    <!--	<ul class="cd-primary-nav">-->
    <!--		<li><a href="index.html" class="animated_link">Home</a></li>-->
    <!--		<li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>-->
    <!--		<li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>-->
    <!--		<li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>-->
    <!--		<li><a href="about.html" class="animated_link">About Us</a></li>-->
    <!--		<li><a href="contacts.html" class="animated_link">Contact Us</a></li>-->
    <!--	</ul>-->
    <!--</nav>-->
    <!-- /menu -->

    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-6 content-left login-first-view">
                <div class="content-left-wrapper">
                    <a href="{{ route('frontend.home') }}" id="logo"><img
                            src="{{ asset('frontend/assets/authui/assets/img/img/publiq-logo.png') }}" alt=""
                            ></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="{{ asset('frontend/assets/authui/assets/img/login-page-icon.png') }}"
                                alt="" class="img-fluid"></figure>
                        <h2>We are building a space where there's something for everyone</h2>
                        <ul>
                            <li class="points"><i class="fa fa-check-circle"></i>
                                <p>We want this to be your home away from home.</p>
                            </li>
                            <li class="points"><i class="fa fa-check-circle"></i>
                                <p> Where you're free to express yourself without worrying about censorship.</p>
                            </li>
                            <li class="points"><i class="fa fa-check-circle"></i>
                                <p> Where you can build communities, make friends and earn from your creativity. </p>
                            </li>

                        </ul>
                        <h5 Class="world-meet">PUBLIQ.life is where the world meets.</h5>
                    </div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-6 header p-0" id="start">

                <!--Content before waves-->
                <div class="inner-header flex p-4">
                    @yield('content')
                </div>

                <!--Waves Container-->
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
                <!--Waves end-->

                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>
    <!-- /container-fluid -->

    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- /cd-overlay-content -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>,
                        mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus,
                        pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                        dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                        sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum
                        accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum
                        sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                        dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                        sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('frontend/assets/authui/assets/img/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/authui/assets/img/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/authui/assets/img/js/velocity.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/authui/assets/img/js/functions.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('js')
    @stack('js')



    {{-- <script>
        @if (Session::has('success'))
            toastr.success("{{ session('success') }}")
        @endif
        @if (Session::has('error'))
            toastr.error("{{ session('error') }}")
        @endif
        @if (isset($errors) && count($errors) > 0)
            @foreach ($errors->all() as $key => $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script> --}}

    {{-- <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> --}}
    <!-- Laravel Javascript Validation -->


</body>

</html>
