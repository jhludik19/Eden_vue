<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

    <title>El Gran Eden - Paraiso Escondido</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon-precomposed" href="{{ asset('web/images/web/favicon-apple.png') }}" />
    <link rel="icon" href="{{ asset('web/images/web/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/jquery.mmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/revolution/css/layers.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/revolution/css/settings.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/revolution/css/navigation.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/sweetalert2.min.css') }}" />

    <link href="{{ asset('web/fonts/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/fonts/flaticon.css') }}" rel="stylesheet" />

    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700') }}"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('web/web/plugin/whatsapp-chat-support.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/web/plugin/components/Font Awesome/css/font-awesome.min.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body>
    <div class="loader loader3">
            <div class="loader-inner">
                <div class="spin">
                    <img src="{{ asset('web/images/web/Logo_Eden.png') }}" alt="Hotel Edén" />
                </div>
            </div>
        </div>
    <nav id="mobile-menu"></nav>
    <div class="wrapper">

        <div id="app" data-csrf="{{ csrf_token() }}">
            @include('web.layouts.header')
            @yield('content')
            @include('web.layouts.footer')
        </div>

        <div class="whatsapp_chat_support wcs_fixed_right" id="example_3" style="margin-right: 70px">
            <div class="wcs_button wcs_button_circle">
                <span class="fa fa-whatsapp"></span>
            </div>

            <div class="wcs_popup">
                <div class="wcs_popup_close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="wcs_popup_header">
                    <span class="fa fa-whatsapp"></span>
                    <strong>Atención al Cliente</strong>

                    <div class="wcs_popup_header_description">Necesitas Ayuda?</div>
                </div>
                <div class="wcs_popup_input" data-number="51973451604">
                    <input type="text" placeholder="Escribenos!" />
                    <i class="fa fa-play"></i>
                </div>
                <div class="wcs_popup_avatar">
                    <img src="{{ asset('web/web/plugin/img/person_5.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
        <div id="contact-notification" class="notification fixed"></div>

    <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('https://maps.google.com/maps/api/js?key=AIzaSyBjtXU1JtLBVn8-AA9ThYXvSl-ylfn5vEU') }}">
    </script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('web/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.thumbs.min.js') }}"></script>
    <script src="{{ asset('web/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{ asset('web/js/countup.min.js') }}"></script>
    <script src="{{ asset('web/js/moment.min.js') }}"></script>
    <script src="{{ asset('web/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('web/js/parallax.min.js') }}"></script>
    <script src="{{ asset('web/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('web/js/instafeed.min.js') }}"></script>
    <script src="{{ asset('web/js/main.js') }}"></script>
    <script src="{{ asset('web/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('web/web/plugin/components/moment/moment.min.js') }}"></script>
    <script src="{{ asset('web/web/plugin/components/moment/moment-timezone-with-data-10-year-range.min.js') }}">
    </script>
    @yield('scripts')
    <script src="{{ asset('web/web/plugin/whatsapp-chat-support.js') }}"></script>

    <script type="text/javascript">
        document.oncontextmenu = function() {
            return false;
        };
    </script>

    <script src="{{ asset('web/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script>
        $("#example_3").whatsappChatSupport({
            defaultMsg: "",
        });
    </script>
    <script
        src="{{ asset('https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-nonce="ac3a67a57eb6ee5b2c057519-" defer=""></script>
</body>

</html>
