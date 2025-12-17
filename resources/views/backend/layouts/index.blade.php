<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Blud.co.id</title>
    <meta name="type" content="website" />
    <meta name="title" content="Home - BLUD.co.id" />
    <meta name="description"
        content="Detail Data Pendampingan BLUD # Kota / Kabupaten Jumlah Puskesmas Mitra Kami Apa Layanan yang Kami Sediakan? Kami Selalu Berusaha Memberikan Layanan Terbaik untuk Menunjang Kebutuhan Anda Pra BLUD Program &hellip; Home Read More &raquo;" />
    <meta name="url" content="https://blud.co.id" />
    <meta name="site_name" content="BLUD.co.id" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/img/favicons/favicon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicons/favicon.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Icon Booctraps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}
    @stack('css')

</head>

<body>
    {{-- <div id="preloader" class="preloader ">
        <button class="th-btn th-radius preloaderCls">Cancel Preloader </button>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="B" class="characters">B</span>

                    <span preloader-text="L" class="characters">L</span>

                    <span preloader-text="U" class="characters">U</span>

                    <span preloader-text="D" class="characters">D</span>

                    <span preloader-text="." class="characters">.</span>

                    <span preloader-text="C" class="characters">C</span>

                    <span preloader-text="O" class="characters">O</span>

                    <span preloader-text="." class="characters">.</span>

                    <span preloader-text="I" class="characters">I</span>

                    <span preloader-text="D" class="characters">D</span>
                </div>
            </div>
        </div>
    </div> --}}
    @include('layouts.navbar')
    @yield('content')


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    @include('layouts.footer')

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>

    <!-- gsap -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- ScrollTrigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>

    <!-- Particles JS -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>

    <script src="{{ asset('assets/js/particles-config.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/maps_data.json') }}"></script> -->
    @stack('js')

    <script>
        const popupEl = document.querySelector('#popup')
        if (popupEl) {
            const popup = new bootstrap.Modal(popupEl)
            window.addEventListener('load', () => popup.show())
        }
    </script>

</body>

</html>
