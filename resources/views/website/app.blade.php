<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/app-assets/images/ico/log-ico.png') }}" rel="icon">
    <link href="{{ asset('website/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('website/assets/css/main.css') }}" rel="stylesheet">
    @yield('style')
    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                {{-- <h1>UpConstruction<span>.</span></h1> --}}
                <img width="100" src="{{ asset('assets/app-assets/images/ico/log-ico1.png') }}">
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li class="nav-item dropdown dropdown-language">
                        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i
                                class="flag-icon {{ app()->getLocale() == 'ar' ? 'flag-icon-ps' : 'flag-icon-us' }}"></i>
                            <span
                                class="selected-language">{{ app()->getLocale() == 'ar' ? __('common.Arabic') : __('common.English') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    data-language="{{ $localeCode }}">
                                    <i
                                        class="flag-icon {{ $localeCode == 'ar' ? 'flag-icon-ps' : 'flag-icon-us' }}"></i>
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </li> --}}
                    <li><a href="{{route('baitona.home')}}" class="{{ request()->is('baitona/home') ? 'active' : '' }}">بيتنا</a></li>
                    <li><a href="{{route('baitona.about')}}" class="{{ request()->is('baitona/about') ? 'active' : '' }}">من نحن</a></li>
                    <li><a href="{{route('baitona.services')}}">خدماتنا</a></li>
                    {{-- <li><a href="{{route('baitona.team')}}">فريقنا</a></li> --}}
                    <li class="dropdown"><a href="#"><span>برامجنا</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            {{-- @if($program->sections != null)
                            <li class="dropdown"><a href="#"><span>{{$program->title}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                  <li><a href="{{route('')}}">{{$program->sections->title_ar}}</a></li>
                                </ul>
                              </li>
                            @else --}}
                            @foreach ($programs as $program)
                            <li><a href="{{route('baitona.programs' , $program->id)}}">{{$program->title}}</a></li>
                            @endforeach
                            {{-- @endif --}}
                        </ul>
                    </li>
                    <li><a href="{{route('baitona.contact')}}" class="{{ request()->is('baitona/contact') ? 'active' : '' }}">تواصل معنا</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
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
                            <h3>UpConstruction</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End footer info column-->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->
                </div>
            </div>
        </div>
        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    <strong>Copyright &copy; {{ now()->year }}- {{ now()->year + 1 }} <a
                            href="https://www.facebook.com/baitonabcd/?locale=ar_AR"
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
