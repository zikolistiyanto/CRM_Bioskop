 <!--==============================
    Mobile Menu
  ============================== -->
 <div class="th-menu-wrapper">
     <div class="text-center th-menu-area">
         <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
         <div class="mobile-logo">
             <a href="{{ route('homepage') }}"><img src="{{ asset('assets/img/Logo.png') }}" alt="Logo-BLUD"></a>
         </div>
         <div class="th-mobile-menu">
             <ul>
                 <li>
                     <a href="{{ route('homepage') }}">Beranda</a>
                 </li>
                 <li>
                     <a href="{{ route('layanan') }}">Layanan</a>
                 </li>
                 <li class="menu-item-has-children">
                     <a>Profile</a>
                     <ul class="sub-menu">
                         <li><a href="{{ url('/syncore') }}">Syncore BLUD</a></li>
                         <li><a href="{{ url('/profil/narasumber') }}">Narasumber BLUD/BLU</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="{{ route('layanan') }}">Layanan</a>
                 </li>
                 <li>
                     <a href="{{ route('ahliBLUD') }}">Tenaga Ahli BLUD</a>
                 </li>
                 <li class="menu-item-has-children">
                     <a>Unduh</a>
                     <ul class="sub-menu">
                         <li><a href="{{ url('/sop-blud') }}">SOP BLUD</a></li>
                         <li><a href="{{ url('/penilaian') }}">Penilaian Dan Penetapan BLUD</a></li>
                         <li><a href="{{ url('/dasar-hukum') }}">Dasar Hukum</a></li>
                         <li><a href="{{ url('/implementasi-ppk-blud') }}">Implementasi PPK-BLUD</a></li>
                         <li><a href="{{ url('/persyaratan') }}">Persyaratan Penerapan BLUD</a></li>
                     </ul>
                 </li>
                 <li class="menu-item-has-children">
                     <a>Berita</a>
                     <ul class="sub-menu">
                         <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                         <li><a href="{{ url('/artikel') }}">Kabar BLUD/BLU</a></li>
                         <li><a href="{{ url('/video') }}">Video Tutorial</a></li>
                         <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                         <li><a href="{{ url('/faq') }}">FAQ</a></li>
                     </ul>
                 </li>
                 <li class="menu-item-has-children">
                     <a>Portofolio</a>
                     <ul class="sub-menu">
                         <li><a href="{{ url('/portofolio/pendampinganBLUD') }}">Pendampingan BLUD Persampahan</a></li>
                         <li><a href="#">Pendampingan BLU</a></li>
                         <li><a href="{{ route('laporankinerja') }}">Laporan Kinerja BLUD</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="https://wa.me/6287804900800" target="_blank">Konsultasi Gratis</a>
                 </li>
                 @auth
                     <li class="menu-item-has-children">
                         <a>Akun</a>
                         <ul class="sub-menu">
                             <li><a href="{{ route('profile') }}">Profile</a></li>
                             <li>
                                 <form method="GET" action="{{ route('logout') }}">
                                     @csrf
                                     <button type="submit" class="dropdown-item text-danger d-flex align-items-center">
                                         <i class="fas fa-sign-out-alt me-2"></i> Logout
                                     </button>
                                 </form>
                             </li>
                         </ul>
                     </li>
                 @endauth
                 @guest
                     <li><a href="{{ route('register') }}">Register</a></li>
                 @endguest
             </ul>
         </div>
     </div>
 </div>
 <!--==============================
Header Area
==============================-->
 <header class="th-header header-layout2">
     <div class="header-top">
         <div class="container">
             <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                 <div class="col-auto d-none d-lg-block">
                     <div class="header-links">
                         <ul>
                             {{-- <li><i class="fas fa-map-location"></i>Jln.Nogotirto No.15B, Gamping, Sleman, Yogyakarta
                                 55392</li> --}}
                             <li><i class="fas fa-phone"></i><a href="tel:+6281804900800">081 804 900 800 (Partnership
                                     BLUD)</a></li>
                             <li><i class="fas fa-envelope"></i><a
                                     href="mailto:partnership@blud.co.id">partnership@blud.co.id</a>
                             <li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-auto">
                     <div class="header-social">
                         <span class="social-title">Follow Us On : </span>
                         <a href="https://www.facebook.com/BLUD.co.id/" target="_blank"><i
                                 class="fab fa-facebook-f"></i></a>
                         <a href="https://www.instagram.com/syncore.blud/" target="_blank"><i
                                 class="fab fa-instagram"></i></a>
                         <a href="https://www.youtube.com/c/BLUDcoid" target="_blank"><i class="fab fa-youtube"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="sticky-wrapper">
         <!-- Main Menu Area -->
         <div class="menu-area">
             <div class="container">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-auto">
                         <div class="header-logo">
                             <a class="icon-masking" href="{{ url('/') }}"><span
                                     data-mask-src="{{ asset('assets/img/Logo.png') }}" class="mask-icon"></span><img
                                     src={{ asset('assets/img/Logo.png') }} alt="Logo-BLUD"></a>
                         </div>
                     </div>
                     <div class="col-auto">
                         <nav class="main-menu d-none d-lg-inline-block">
                             <ul>
                                 <li>
                                     <a href="{{ route('homepage') }}">Beranda</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('layanan') }}">Layanan</a>
                                 </li>
                                 <li class="menu-item-has-children mega-menu-wrap">
                                     <a>Profil</a>
                                     <ul class="mega-menu">
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/syncore') }}">Syncore BLUD
                                                         <p>Informasi Lengkap Seputar Kami</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/profil/narasumber') }}">Narasumber BLUD/BLU
                                                         <p>Informasi Lengkap Seputar Narasumber BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="{{ route('ahliBLUD') }}">Tenaga Ahli BLUD</a>
                                 </li>
                                 <li class="menu-item-has-children mega-menu-wrap">
                                     <a>Unduh</a>
                                     <ul class="mega-menu">
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/sop-blud') }}">SOP BLUD
                                                         <p>Berisi dokumen SOP BLUD</p>
                                                     </a>
                                                 </li>
                                                 <li><a href="{{ url('/penilaian') }}">Penilaian Dan Penetapan BLUD
                                                         <p>Berisi dokumen Penilaian dan Penetapan BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/dasar-hukum') }}">Dasar Hukum
                                                         <p>Berisi dokumen Dasar Hukum Badan Layanan Umum Daerah</p>
                                                     </a>
                                                 </li>
                                                 <li><a href="{{ url('/implementasi-ppk-blud') }}">Implementasi
                                                         PPK-BLUD
                                                         <p>Berisi Dokumen implementasi PPK-BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/persyaratan') }}">Persyaratan Penerapan BLUD
                                                         <p>Berisi dokumen Persyaratan Penetapan BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children mega-menu-wrap">
                                     <a>Berita</a>
                                     <ul class="mega-menu">
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/artikel') }}">Artikel
                                                         <p>Informasi artikel BLUD terbaru</p>
                                                     </a>
                                                 </li>
                                                 <li><a href="{{ url('/artikel') }}">Kabar BLUD/BLU
                                                         <p>Informasi berita terbaru BLUD/BLU</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/video') }}">Video Tutorial
                                                         <p>Video tutorial seputar BLUD</p>
                                                     </a>
                                                 </li>
                                                 <li><a href="{{ url('/gallery') }}">Gallery
                                                         <p>Informasi event BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/faq') }}">FAQ
                                                         <p>Informasi mengenai pertanyaan dan jawaban seputar BLUD</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children mega-menu-wrap">
                                     <a>Portofolio</a>
                                     <ul class="mega-menu">
                                         <li>
                                             <ul>
                                                 <li><a href="{{ url('/portofolio/pendampinganBLUD') }}">Pendampingan
                                                         BLUD Persampahan
                                                         {{-- <p>Informasi artikel BLUD terbaru</p> --}}
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="#">Pendampingan BLU
                                                         {{-- <p>Video tutorial seputar BLUD</p> --}}
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>
                                             <ul>
                                                 <li><a href="{{ route('laporankinerja') }}">Laporan Kinerja BLUD
                                                         {{-- <p>Informasi mengenai pertanyaan dan jawaban seputar BLUD</p> --}}
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </nav>
                         <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                 class="far fa-bars"></i></button>
                     </div>
                     <div class="col-auto gap-2 d-none d-lg-block">
                         <div class="header-button">
                             <a href="https://wa.me/6287804900800" target="_blank"
                                 class="shadow-none th-btn rounded-pill">Konsultasi Gratis
                                 {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                             </a>
                             <div class="dropdown hover-dropdown position-relative">
                                 <div id="userDropdown" class="d-flex align-items-center user-icon">
                                     <i class="text-white fas fa-user-circle fa-3x"></i> {{-- Ikon Profile --}}
                                 </div>
                                 <ul class="py-2 mt-3 shadow-lg dropdown-menu rounded-3"
                                     aria-labelledby="userDropdown">
                                     <div class="dropdown-arrow"></div> {{-- Pucuk Dropdown --}}
                                     @auth
                                         <li>
                                             <a href="{{ route('profile') }}"
                                                 class="dropdown-item text-dark d-flex align-items-center">
                                                 <i class="fas fa-user me-2"></i> Profile
                                             </a>
                                         </li>
                                         <li>
                                             <form method="GET" action="{{ route('logout') }}">
                                                 @csrf
                                                 <button type="submit"
                                                     class="dropdown-item text-danger d-flex align-items-center">
                                                     <i class="fas fa-sign-out-alt me-2"></i> Logout
                                                 </button>
                                             </form>
                                         </li>
                                     @endauth
                                     @guest
                                         <li>
                                             <a href="{{ route('register') }}"
                                                 class="dropdown-item text-dark d-flex align-items-center">
                                                 <i class="fas fa-user-plus me-2"></i> Register
                                             </a>
                                         </li>
                                     @endguest
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </header>
