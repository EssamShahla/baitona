@extends('website.app')

@section('title', 'contact')
@section('main-title', 'contact')
@section('sub-title', 'sub-title')

@section('style')

@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('website/assets/img/baitona-location.jpeg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Contact</h2>
                <ol>
                    <li><a href="{{route('baitona.home')}}">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Our Address</h3>
                            <p>Al- Huria Street, Jabalia North Gaza, Palestine</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>baitona@mail.org</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+970599522915</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">

                    <div class="col-lg-6 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.3003092611825!2d34.48109892463936!3d31.543371974203488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7e42642f6a81%3A0x8cba040a76ef5c4b!2z2KzZhdi52YrYqSDYqNmK2KrZhtinINmE2YTYqtmG2YXZitipINmI2KfZhNiq2LfZiNmK2LEg2KfZhNmF2KzYqtmF2LnZig!5e0!3m2!1sar!2s!4v1683915841912!5m2!1sar!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <iframe
                            src="https://goo.gl/maps/Ti2VJ7wd3YqBf9Th9?coh=178571&entry=tt"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="{{ route('baitona.create-contact') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name_en" class="form-control" id="name_en"
                                        placeholder="{{__('common.name')}}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{__('common.email')}}" required>
                                </div>
                            </div>
                            <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="tel" class="form-control" name="mobile" id="mobile"
                                    placeholder="{{__('common.mobile')}}" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <select class="form-control" name="type" id="type">
                                    <option value="" disabled selected>@lang('common.select')</option>
                                    <option value="1">{{ __('common.suggestions') }}</option>
                                    <option value="2">{{ __('common.complaints') }}</option>
                                    <option value="3">{{ __('common.Other') }}</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message_en" id="message_en" rows="5" placeholder="{{__('common.message')}}" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
