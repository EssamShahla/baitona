<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Baitona</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/app-assets/images/ico/log-ico.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
 
    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/vendors-rtl.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/charts/apexcharts.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
        {{--        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/tables/datatable/datatables.css') }}"> --}}
        {{--        <link rel="stylesheet" type="text/css" --}}
        {{--              href="{{ asset('assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}"> --}}
        {{--        <link rel="stylesheet" type="text/css" --}}
        {{--              href="{{ asset('assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}"> --}}
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/forms/select/select2.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/themes/bordered-layout.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/themes/semi-dark-layout.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/charts/chart-apex.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/forms/form-file-uploader.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/pages/authentication.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/forms/form-wizard.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/pages/modal-create-app.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css-rtl/custom-rtl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
        <!-- END: Custom CSS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Almarai', sans-serif;
            }

            button.delete-btn.bs-tooltip,
            button.user-delete-btn.bs-tooltip {
                background: none;
                border: none;
                color: #000000 !important;
            }

            button.bs-tooltip.edit_btn {
                background: no-repeat;
                border: none;
                color: #000000 !important;
            }

            .toast-message {
                margin-right: 30px !important;
            }
        </style>
    @else
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/vendors.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/charts/apexcharts.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/themes/bordered-layout.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/themes/semi-dark-layout.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/vendors/css/forms/select/select2.min.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/plugins/charts/chart-apex.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/pages/authentication.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/plugins/forms/form-wizard.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/plugins/forms/form-validation.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/app-assets/css/pages/modal-create-app.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <!-- END: Custom CSS-->
        <style>
            button.delete-btn.bs-tooltip,
            button.user-delete-btn.bs-tooltip {
                background: none;
                border: none;
                color: #000000;
            }

            button.bs-tooltip.edit_btn {
                background: no-repeat;
                border: none;
                color: #000000 !important;
            }

            button#create_btn {
                float: right !important;
            }

            form#search_form {
                margin-left: 23px !important;
            }

            div#datatable_length,
            div#datatable_info {
                margin-left: 25px;
            }
        </style>
    @endif

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                {{-- <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul> --}}
                {{-- <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul> --}}
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language">
                    <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon {{ app()->getLocale() == 'ar' ? 'flag-icon-ps' : 'flag-icon-us' }}"></i>
                        <span
                            class="selected-language">{{ app()->getLocale() == 'ar' ? __('common.Arabic') : __('common.English') }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                data-language="{{ $localeCode }}">
                                <i class="flag-icon {{ $localeCode == 'ar' ? 'flag-icon-ps' : 'flag-icon-us' }}"></i>
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                <div class="badge rounded-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{ asset('assets/app-assets/images/pages/eCommerce/1.png') }}" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{ asset('assets/app-assets/images/pages/eCommerce/7.png') }}" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="3">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{ asset('assets/app-assets/images/pages/eCommerce/2.png') }}" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="2">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{ asset('assets/app-assets/images/pages/eCommerce/3.png') }}" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iMac Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{ asset('assets/app-assets/images/pages/eCommerce/5.png') }}" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-15.jpg') }}"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-3.jpg') }}"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">@lang('common.app_name')</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="{{ asset('assets/app-assets/images/portrait/small/image 8.png') }}"
                                alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                            Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{ asset('assets/app-assets/images/icons/xls.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{ asset('assets/app-assets/images/icons/jpg.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{ asset('assets/app-assets/images/icons/pdf.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{ asset('assets/app-assets/images/icons/doc.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-8.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-1.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-14.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-6.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href=""><span class="brand-logo">
                            {{-- <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                        x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span> --}}
                            {{-- <h2 class="brand-text">@lang('common.app_name')</h2> --}}
                            <img src="{{ asset('assets/app-assets/images/logo/Group-12.png') }}" height="35"
                                alt="">
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Dashboard">{{ __('common.Dashboard') }}</span></li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'admin' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.home') }}</span></a>
                </li>
                {{-- @if (auth('admin')->user()->hasAnyPermission([
                            'show_users',
                            'create_users',
                            'edit_users',
                            'delete_users',
                            'show_roles',
                            'create_roles',
                            'edit_roles',
                            'delete_roles',
                        ])) --}}
                    <li class=" navigation-header"><span
                            data-i18n="User & Roles-permission">{{ __('common.users') . ' & ' . __('common.roles') }}</span>
                    </li>
                    {{-- @if (auth('admin')->user()->hasAnyPermission(['show_users', 'create_users', 'edit_users', 'delete_users'])) --}}
                        <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'users' ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href="{{ route('users.index') }}"><i
                                    data-feather="user"></i><span class="menu-title text-truncate"
                                    data-i18n="Table">{{ __('common.users') }}</span></a>
                        </li>
                    {{-- @endif --}}
                    {{-- @if (auth('admin')->user()->hasAnyPermission(['show_roles', 'create_roles', 'edit_roles', 'delete_roles'])) --}}
                        <li
                            class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'roles_manager' ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href="{{ route('roles_manager.index') }}"><i
                                    data-feather="home"></i><span class="menu-title text-truncate"
                                    data-i18n="Table">{{ __('common.roles') }}</span></a>
                        </li>
                    {{-- @endif --}}
                {{-- @endif --}}
                <li class=" navigation-header"><span
                        data-i18n="Dashboard">{{ __('common.managment') . ' ' . __('common.content') }}</span></li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'articles' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('articles.index') }}"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.articles') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'partners' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('partners.index') }}"><i
                            data-feather="share-2"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.partners') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'sliders' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('sliders.index') }}"><i
                            data-feather="sliders"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.sliders') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'videos' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('videos.index') }}"><i
                            data-feather="video"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.videos') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'reports' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('reports.index') }}"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.reports') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'programs' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('programs.index') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.programs') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'sections' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('sections.index') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.sections') }}</span></a>
                </li>
                <li class="nav-item {{ strtok(Route::currentRouteName(), '.') == 'contact' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('contacts.index') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Table">{{ __('common.contacts') }}</span></a>
                </li>

                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    @section('main-content')
                        <div class="row">
                            <div class="col-xl-2 col-md-4 col-sm-6">
                                @php
                                    use App\Models\Article;
                                    $articlesCount = Article::count('id');
                                @endphp
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-danger p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="file-text" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">{{ $articlesCount }}</h2>
                                        <p class="card-text">{{ __('common.articles') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6">
                                @php
                                    use App\Models\Partner;
                                    $partnersCount = Partner::count('id');
                                @endphp
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-success p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="share-2" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">{{ $partnersCount }}</h2>
                                        <p class="card-text">{{ __('common.partners') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6">
                                @php
                                    use App\Models\Slider;
                                    $slidersCount = Slider::count('id');
                                @endphp
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-info p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="sliders" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">{{ $slidersCount }}</h2>
                                        <p class="card-text">{{ __('common.sliders') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6">
                                @php
                                    use App\Models\Video;
                                    $videosCount = Video::count('id');
                                @endphp
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-secondary p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="video" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">{{ $videosCount }}</h2>
                                        <p class="card-text">{{ __('common.videos') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6">
                                @php
                                    use App\Models\Report;
                                    $reportsCount = Report::count('id');
                                @endphp
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-primary p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="file-text" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">{{ $reportsCount }}</h2>
                                        <p class="card-text">{{ __('common.reports') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @show
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/tables/datatable/datatables.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    {{-- <script src="{{ asset('assets/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('assets/app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/cleave/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/file-uploaders/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/charts/chart-chartjs.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/charts/chart-apex.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/pages/auth-login.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/pages/modal-edit-user.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/forms/form-file-uploader.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js') }}"></script>
    <script src="{{ asset('assets/app-assets/js/scripts/forms/form-select2.js') }}"></script>

    @section('scripts')
    @show


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

        var selectedIds = function() {
            return $("input[name='table_ids[]']:checked").map(function() {
                return this.value;
            }).get();
        };

        $(document).on('change', "#select_all", function(e) {
            this.checked ? $(".table_ids").each(function() {
                this.checked = true
            }) : $(".table_ids").each(function() {
                this.checked = false
            })
            $('#delete_btn').attr('data-id', selectedIds().join());
            $('.status_btn').attr('data-id', selectedIds().join());
            if (selectedIds().join().length) {
                $('#delete_btn').prop('disabled', '');
                $('.status_btn').prop('disabled', '');
            } else {
                $('#delete_btn').prop('disabled', 'disabled');
                $('.status_btn').prop('disabled', 'disabled');
            }
        });

        $(document).on('change', ".table_ids", function(e) {
            if ($(".table_ids:checked").length === $(".table_ids").length) {
                $("#select_all").prop("checked", true)
            } else {
                $("#select_all").prop("checked", false)
            }
            $('#delete_btn').attr('data-id', selectedIds().join());
            $('.status_btn').attr('data-id', selectedIds().join());
            console.log(selectedIds().join().length)
            if (selectedIds().join().length) {
                $('#delete_btn').prop('disabled', '');
                $('.status_btn').prop('disabled', '');
            } else {
                $('#delete_btn').prop('disabled', 'disabled');
                $('.status_btn').prop('disabled', 'disabled');
            }
        });

        $(document).on('submit', '.ajax_form', function(e) {
            // $('.submit_btn').prop('disabled', true);
            e.preventDefault();
            var form = $(this);
            var url = $(this).attr('action');
            var method = $(this).attr('method');
            var reset = $(this).data('reset');
            var Data = new FormData(this);
            $('.submit_btn').attr('disabled', 'disabled');
            $('.fa-spinner.fa-spin').show();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            $.ajax({
                url: url,
                type: method,
                data: Data,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.invalid-feedback').html('');
                    $('.is-invalid ').removeClass('is-invalid');
                    form.removeClass('was-validated');
                }
            }).done(function(data) {
                console.log(data);
                if (data.status) {
                    toastr.success('@lang('common.done_successfully')');
                    if (reset === true) {
                        form[0].reset();
                        $('.submit_btn').removeAttr('disabled');
                        $('.fa-spinner.fa-spin').hide();
                        $('.modal').modal('hide');
                        // $("#city_id").selectpicker("refresh");
                        // $("#country_id").selectpicker("refresh");
                        dt_adv_filter.draw();
                        $('#add_btn_2').attr('hidden', true);
                    } else {
                        var url = $('#cancel_btn').attr('href');
                        window.location.replace(url);
                    }
                } else {
                    if (data.message) {
                        toastr.error(data.message);
                    } else {
                        toastr.error('@lang('common.something_wrong')');
                        console.log(data.errors)
                        console.log(111)
                        $.each(data.errors, function(index, value) {
                            toastr.error(value);
                        });
                    }
                    $('.submit_btn').removeAttr('disabled');
                    $('.fa-spinner.fa-spin').hide();
                }
            }).fail(function(data) {
                if (data.status === 422) {
                    var response = data.responseJSON;
                    $.each(response.errors, function(key, value) {
                        // toastr.error(value);
                        var str = (key.split("."));
                        if (str[1] === '0') {
                            key = str[0] + '[]';
                        }
                        console.log(key);
                        $('[name="' + key + '"], [name="' + key + '[]"]').addClass('is-invalid');
                        $('[name="' + key + '"], [name="' + key + '[]"]').closest('.form-group')
                            .find('.invalid-feedback').html(value[0]);
                        $('[name="' + key + '"], [name="' + key + '[]"]').parent().find(
                            '.invalid-feedback').html(value[0]);
                    });
                } else {
                    toastr.error('@lang('common.something_wrong')');
                    console.log(data.status)
                    $.each(data.errors, function(index, value) {
                        toastr.error(value);
                    })
                }
                $('.submit_btn').removeAttr('disabled');
                $('.fa-spinner.fa-spin').hide();
            });
        });

        $(document).on("click", ".delete-btn", function(e) {
            e.preventDefault();
            var urls = url + $(this).data('id') + '/destroy';
            console.log(urls);
            Swal.fire({
                title: '@lang('common.delete_confirmation')',
                text: "@lang('common.confirm_delete')",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '@lang('common.delete')',
                cancelButtonText: '@lang('common.cancel')',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false,
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: urls,
                        method: 'DELETE',
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                    }).done(function(data) {
                        if (data.status) {
                            Swal.fire({
                                icon: 'success',
                                title: '@lang('common.deleted_successfully')',
                                {{-- text: '@lang('common.deleted_successfully')', --}}
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                            dt_adv_filter.draw();
                        } else {
                            toastr.warning('@lang('common.not_deleted')');
                            Swal.fire({
                                icon: 'info',
                                title: '@lang('common.not_deleted')',
                                {{-- text: '@lang('common.not_deleted')', --}}
                                customClass: {
                                    confirmButton: 'btn btn-info'
                                }
                            });
                        }
                    }).fail(function() {
                        toastr.error('@lang('common.something_wrong')');
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: '@lang('common.delete_canceled')',
                        // text: 'Your imaginary file is safe :)',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                }
            });
        });

        $(document).on('click', '.status_btn', function(e) {
            var urls = url + 'update_all_status';
            var status = $(this).val();
            // console.log(status, $(this).data('id'));
            $.ajax({
                url: urls,
                method: 'PUT',
                type: 'PUT',
                data: {
                    ids: $(this).data('id'),
                    status: status,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    if (data.status) {
                        toastr.success('@lang('common.done_successfully')');
                        dt_adv_filter.draw();
                    } else {
                        toastr.error('@lang('common.something_wrong')');
                    }
                }
            });
        });

        $('#search_btn').on('click', function(e) {
            dt_adv_filter.draw();
            e.preventDefault();
        });
        document.addEventListener('keypress', (event) => {
            let keyCode = event.keyCode ? event.keyCode : event.which;
            if (keyCode == 13) {
                dt_adv_filter.draw();
                e.preventDefault();
            }
        });
        $('#clear_btn').on('click', function(e) {
            $('#search_form')[0].reset();
            $('select').val("").trigger("change")
            dt_adv_filter.draw();
            e.preventDefault();
        });
    </script>
</body>
<!-- END: Body-->

</html>
