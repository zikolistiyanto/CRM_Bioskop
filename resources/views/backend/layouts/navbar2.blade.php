<div class="th-menu-wrapper">
    <div class="text-center th-menu-area">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img src="assets/img/logo.svg" alt="Webteck"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Digital Agency</a></li>
                        <li><a href="home-web-development.html">Web Development</a></li>
                        <li><a href="home-software-company.html">Software Company</a></li>
                        <li><a href="home-startup-company.html">Startup Company</a></li>
                        <li><a href="home-it-solution.html">IT Solution</a></li>
                        <li><a href="home-web-agency.html">Web Agency</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Services Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="project.html">Project</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<nav class="fixed top-0 z-20 items-center w-full bg-blue-200 border-gray-200 start-0 ">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assets/img/logo.png" class="h-8" alt="Flowbite Logo" />
            {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span> --}}
        </a>
        <div class="flex items-center space-x-1 md:order-2 md:space-x-2">
            <a href="#"
                class="text-blue-50 hover:text-blue-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 focus:outline-none hidden md:hidden lg:block bg-blue-800">Hubungi
                Kami</a>
            <a href="#"
                class="text-blue-900 bg-gray-50 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 focus:outline-none hidden md:hidden lg:block hover:text-white ring-blue-800 outline-blue-800 border-blue-800">Daftar/Masuk</a>
            <button data-collapse-toggle="mega-menu" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full lg:flex md:w-auto lg:order-1">
            <ul class="flex flex-col font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                        aria-current="page">Pendampingan
                    </a>
                </li>
                <li>
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                        class="flex items-center justify-between w-full px-1 py-2 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">
                        Pelatihan
                        <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="mega-menu-dropdown"
                        class="z-50 hidden w-full mt-1 bg-white border-gray-200 shadow-sm border-y">
                        <div
                            class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 lg:max-w-screen-xl sm:grid-cols-2 md:grid-cols-3 md:px-6">
                            <ul aria-labelledby="mega-menu-full-dropdown-button">
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Online Stores</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Segmentation</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Marketing CRM</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Marketing CRM</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Online Stores</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Segmentation</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Marketing CRM</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hidden md:block">
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Audience Management</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Creative Tools</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block p-3 rounded-lg hover:bg-gray-50">
                                        <div class="font-semibold">Marketing Automation</div>
                                        <span class="text-sm text-gray-500">Connect with third-party
                                            tools that you're already using.</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Berita
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Unduh
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Profil

                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Tenaga
                        Ahli
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Merchandise
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent md:hidden lg:hidden">Hubungi
                        Kami
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block px-1 py-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent md:hidden lg:hidden">Daftar/Masuk
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="menu-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="header-logo">
                    <a class="icon-masking" href="{{ url('/') }}"><span
                            data-mask-src="{{ asset('assets/img/Logo.png') }}" class="mask-icon"></span><img
                            src={{ asset('assets/img/Logo.png') }} alt="Webteck"></a>
                </div>
            </div>
            <div class="col-auto">
                <nav class="main-menu d-none d-lg-inline-block">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="">Pendampingan</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/puskesmas') }}">PUSKESMAS</a></li>
                                <li><a href="{{ url('/rsud') }}">RSUD</a></li>
                                <li><a href="{{ url('/labkesda') }}">LABKESDA</a></li>
                                <li><a href="{{ url('/bapelkes') }}">BAPELKES</a></li>
                                <li><a href="{{ url('/dlh') }}">DLH</a></li>
                                <li><a href="{{ url('/upbd') }}">UPDB</a></li>
                                <li><a href="{{ url('/smkn') }}">SMKN</a></li>
                                <li><a href="{{ url('/spam') }}">SPAM</a></li>
                                <li><a href="{{ url('/upt-umum') }}">UPT UMUM</a></li>
                                <li><a href="{{ url('/pemda-pemkot') }}">PEMDA/PEMKOT</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="about.html">Pelatihan</a></li> --}}
                        <li class="menu-item-has-children">
                            <a href="#">Pelatihan</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Pelatihan 2023</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('agenda.index') }}">Agenda Kegiatan</a></li>
                                        <li><a href="{{ route('pelatihan.bootcamp2') }}">Bootcamp BLUD 2
                                                Hari</a></li>
                                        <li><a href="{{ route('pelatihan.bootcamp3') }}">Paket Bootcamp 3
                                                Hari</a></li>
                                        <li><a href="{{ route('pelatihan.online') }}">Pelatihan Online</a>
                                        </li>
                                        <li><a href="{{ route('pelatihan.ramadan') }}">Bootcamp Ramadhan 2
                                                Hari</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pelatihan 2022</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/pelatihan-2022') }}">Rekap Pelatihan BLUD
                                                2022</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pelatihan 2021</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/pelatihan-2021') }}">Rekap Pelatihan BLUD
                                                2021</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Berita</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                                <li><a href="{{ url('/artikel') }}">Kabar BLUD/BLU</a></li>
                                <li><a href="{{ url('/video') }}">Video Tutorial</a></li>
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Unduh</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/sop-blud') }}">SOP BLUD</a></li>
                                <li><a href="{{ url('/dasar-hukum') }}">Dasar Hukum</a></li>
                                <li><a href="{{ url('/persyaratan') }}">Persyaratan Penerapan BLUD</a></li>
                                <li><a href="{{ url('/penilaian') }}">Penilaian Dan Penetapan BLUD</a></li>
                                <li><a href="{{ url('/implementasi-ppk-blud') }}">Implementasi PPK-BLUD</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/syncore') }}">Syncore BLUD</a></li>
                                <li><a href="{{ url('/profil/narasumber') }}">Narasumber BLUD/BLU</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Tenaga Ahli</a>
                        </li>
                        <li>
                            <a href="{{ url('merchandise') }}">Merchandise</a>
                        </li>
                    </ul>
                </nav>
                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                        class="far fa-bars"></i></button>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="header-button">
                    <a href="" class="shadow-none th-btn">Hubungi Kami
                        {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                    </a>
                    @auth @if (Auth::user())
                        <form method="GET" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="shadow-none th-btn-w">Logout

                            </button>

                        </form>
                    @endif @endauth

                    @guest
                        <a href="{{ route('register') }}" class="shadow-none th-btn-w">Daftar/Masuk
                            {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                        </a>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</div>
