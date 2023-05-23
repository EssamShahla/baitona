<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('assets/app-assets/images/ico/log-ico.png') }}" rel="icon">
    <link href="{{ asset('website/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    @if (LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
        <!-- Vendor CSS Files -->
        <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('website/assets/css/main.css') }}" rel="stylesheet">

        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
        @yield('style')
        <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->

        <style>
            .topbar .contact-info a:hover {
                color: rgb(233, 233, 233) !important;
                transition: .7s;
            }
        </style>
    @else
        <!-- Vendor CSS Files -->
        <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('website/assets/css/main-rtl.css') }}" rel="stylesheet">




        @yield('style')
        <!-- =======================================================
   * Template Name: UpConstruction
   * Updated: Mar 10 2023 with Bootstrap v5.2.3
   * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
   * Author: BootstrapMade.com
   * License: https://bootstrapmade.com/license/
 ======================================================== -->
        <style>
            .topbar .contact-info a:hover {
                color: rgb(233, 233, 233) !important;
                transition: .7s;
            }
        </style>
    @endif

</head>

<body>
    <!-- ======= Header ======= -->
    <div id="topbar" class="topbar py-4 border-bottom">
        <div class="topbar container-fluid container-xl d-flex justify-content-center justify-content-md-between ">
            <div class="social-links d-none d-md-flex align-items-center gap-3">
                <a href="https://www.facebook.com/baitonabcd" target="_blank" class="facebook"><i
                        class="bi bi-facebook fs-6"></i></a>
                <a href="https://instagram.com/baitonabcd?igshid=NTc4MTIwNjQ2YQ==" target="_blank" class="instagram"><i
                        class="bi bi-instagram fs-6"></i></a>
                <a href="https://youtube.com/@baitonabcd" class="youtube" target="_blank"><i
                        class="bi bi-youtube fs-6"></i></a>
                <a href="https://wa.me/970599522915" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <ul class="contact-info d-flex align-items-center gap-4">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @php
                        $currentLocale = LaravelLocalization::getCurrentLocale();
                        $localeUrl = LaravelLocalization::getLocalizedURL($localeCode, null, [], true);
                        $localeButtonClass = $currentLocale == $localeCode ? 'd-none' : '';
                        $localeFlagIconClass = $localeCode == 'ar' ? 'flag-icon-ps' : 'flag-icon-us';
                    @endphp
                    <a href="{{ $localeUrl }}" class="locale-button {{ $localeButtonClass }}">
                        <span class="flag-icon {{ $localeFlagIconClass }}"></span>
                    </a>
                @endforeach

                <a href="https://wa.me/970599522915" target="_blank"
                    style="font-size: 12px; color:rgba(255, 255, 255, 0.6);"> Donation <i
                        class="fa-brands fa-whatsapp"></i></a>
                <a href="https://e.baitona.ps/application/volunteer/page/get" target="_blank"
                    style="font-size: 12px; color:rgba(255, 255, 255, 0.6);">Volunteering</a>
                <a href="http://127.0.0.1:8000/ar/login" target="_blank"
                    style="font-size: 12px; color:rgba(255, 255, 255, 0.6);"><i class="bi bi-person fs-6"></i></a>

            </ul>
        </div>
    </div><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center my-4">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('baitona.home') }}"
                            class="{{ strtok(Route::currentRouteName(), '') == 'baitona.home' ? 'active' : '' }}">HOME</a>
                    </li>
                    <li><a href="{{ route('baitona.about') }}"
                            class="{{ strtok(Route::currentRouteName(), '') == 'baitona.about' ? 'active' : '' }}">ABOUT</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>PROGRAMS</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            @foreach ($programs as $program)
                                <li><a href="{{ route('baitona.programs', $program->id) }}">{{ $program->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Reports</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('baitona.financial') }}"
                                    class="{{ request()->is('baitona/financial') ? 'active' : '' }}">Financial
                                    Reports</a></li>
                            <li><a href="{{ route('baitona.administrative') }}"
                                    class="{{ request()->is('baitona/administrative') ? 'active' : '' }}">Administrative
                                    Reports</a></li>
                            <li><a href="{{ route('baitona.protocol') }}"
                                    class="{{ request()->is('baitona/protocol') ? 'active' : '' }}">Systems &
                                    Policies</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('baitona.blog') }}"
                            class="{{ strtok(Route::currentRouteName(), '') == 'baitona.blog' ? 'active' : '' }}">Blog</a>
                    </li>


                    {{-- <li class="dropdown"><a href="#"><span>lang</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a> --}}
                    {{-- @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @php
                                    $currentLocale = LaravelLocalization::getCurrentLocale();
                                    $localeUrl = LaravelLocalization::getLocalizedURL($localeCode, null, [], true);
                                    $localeButtonText = $localeCode == 'ar' ? 'عر' : 'en';
                                    $localeButtonClass = $currentLocale == $localeCode ? 'd-none' : 'active';
                                @endphp
                                <a href="{{ $localeUrl }}">
                                    <button class="locale-button {{ $localeButtonClass }} btn">
                                        {{ $localeButtonText }}
                                    </button>
                                </a>
                            @endforeach --}}
                    {{-- </li> --}}


                    <li><a href="{{ route('baitona.contact') }}"
                            class="{{ strtok(Route::currentRouteName(), '') == 'baitona.contact' ? 'active' : '' }}">{{ __('common.contacts') }}</a>
                    </li>
                </ul>
            </nav>
            <!-- .navbar -->
            <a href="{{ route('baitona.home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                {{-- <h1>UpConstruction<span>.</span></h1> --}}
                <img src="{{ asset('assets/app-assets/images/logo/Asset-5.png') }}">
                <!-- <img width="100" src="{{ asset('assets/app-assets/images/ico/log-ico1.png') }}"> -->
            </a>
        </div>
    </header>
    <!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <img src="{{ asset('assets/app-assets/images/ico/log-ico1.png') }}" height="100"
                                alt="">
                            <br>
                            <br>

                            <p>
                                Al- Huria Street, Jabalia <br>
                                North Gaza, Palestine<br><br>
                                <strong>Phone:</strong> +972-2870755<br>
                                <strong>Email:</strong> baitona@mail.org<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="https://twitter.com/baitonabcd" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/baitonabcd" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/baitonabcd?igshid=NTc4MTIwNjQ2YQ==" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://youtube.com/@baitonabcd" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End footer info column-->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('baitona.home') }}">Home</a></li>
                            <li><a href="{{ route('baitona.about') }}">About</a></li>
                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Reports</a></li>
                            <li><a href="{{ route('baitona.blog') }}">Blog</a></li>
                            {{-- <li><a href="#">Systems & Policies</a></li> --}}
                            <li><a href="{{ route('baitona.contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 contact">
                        <form action="" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <h3>Subscribe Now</h3>
                                <div class="col-lg-10 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your Email has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Email</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Other links</h4>
                        <ul>
                            <li><a href="https://e.baitona.ps/login">Staff entry</a></li>
                            <li><a href="https://bha.baitona.ps/login">BHA</a></li>
                            <li><a href="https://e.baitona.ps/application/volunteer/page/get">Volunteering</a></li>
                            <li><a href="http://referral.accessline.ps/Users/login">Remittance Network</a></li>
                            <li><a href="https://baitona.ensany.com/">Baitona Ensany</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Reports</h4>
                        <ul>
                            <li><a href="#">Financial Reports</a></li>
                            <li><a href="#">Administrative Reports</a></li>
                        </ul>
                    </div> -->
                    <!-- End footer links column-->
                </div>
            </div>
        </div>
        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    <strong>Copyright &copy; {{ now()->year }}- {{ now()->year + 1 }} <a
                            href="https://www.facebook.com/baitonabcd"
                            target="_blank">{{ env('APP_NAME') }}</a>.</strong>
                    All rights reserved.
                </div>
                {{-- <div class="credits">
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form:
                    https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
                    Designed by <a href="#/">BootstrapMade</a>
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
