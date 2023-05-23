@extends('website.app')

@section('title', 'Baitona')
@section('main-title', 'main-Index')
@section('sub-title', 'sub-Index')

@section('style')
    <style>
        .swiper-slide {
            position: relative;
            perspective: 1000px;
            /* Define the perspective for the 3D effect */
        }

        .swiper-slide .card {
            position: relative;
            width: 100%;
            height: 50px;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .swiper-slide .card .card-front,
        .swiper-slide .card .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .swiper-slide .card .card-front {
            z-index: 2;
            transform: rotateY(0deg);
        }

        .swiper-slide .card .card-back {
            transform: rotateY(180deg);
        }

        .swiper-slide .card .card-front img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Adjust the image sizing */
        }

        .swiper-slide .card .card-back {
            background-color: #f1f1f1;
            /* Adjust the background color if needed */
            display: flex;
            justify-content: center;
            align-items: center;
            transform: rotateY(180deg);
        }

        .swiper-slide .card .card-back p {
            text-align: center;
            margin: 0;
        }

        .swiper-slide:hover .card {
            transform: rotateY(180deg);
        }
    </style>

@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach ($sliders as $slider)
                <div class="carousel-item @if ($loop->first) active @endif"
                    style="background-image: url('{{ asset($slider->image) }}')">
                    <div class="info d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <h2 data-aos="fade-down">{{ $slider->title_en }}</h2>
                                    <p data-aos="fade-up">{{ $slider->desc_en }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero Section -->
    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Programs</h2>
                </div>
                <ul class="nav nav-tabs row justify-content-center">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>The Community Rehabilitation Program</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>The Education and Training Program</h4>
                        </a>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Local Referral network</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Emergency Program</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>The Community Rehabilitation Program</h3>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Physio & Occupational therapy Center.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i> Speech-language Therapy Clinic.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>Psychosocial Support Unit.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>Al Hanan spatialized Center for autism and.
                                        development delay children
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>Baitona Optic Center.
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all"></i>Baitona center for youth communication.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('website/assets/img/bcd2020.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>The Education and Training Program</h3>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all">
                                        </i>Cultural Child Forum: it provides several
                                        activities for children such as.
                                        <ol>
                                            <li>Librarian activities.</li>
                                            <li>Mobile Library activities.</li>
                                            <li>The summer and winter camps.</li>
                                            <li>Theater activities.</li>
                                            <li>Drawing activities.</li>
                                            <li>Entertainment activities.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all">
                                        </i>Education and Training Center.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('website/assets/img/bcd2020.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Local Referral network</h3>
                                <p>It is important to mention that Baitona leads a local referral network "LRN" consist of
                                    37 active INGO’s, NGOs and CBOs in different sectors (Health, Education, Protection,
                                    etc.). Baitona supervises and follow up all the referral activities. It aims to ensure
                                    the maximum possible accessibility of services for the people with disabilities
                                    including, the health and rehabilitation, education, social, livelihood and empowerment
                                    services.</p>
                                <div><a class="cta-btn py-2 px-3"
                                        style="background-color: #feb900; color:#364d59; border-radius:10px;"
                                        href="http://referral.accessline.ps" target="_blank">Computerized System</a></div>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('website/assets/img/bcd2020.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Emergency Program</h3>
                                <p>The program was established in 2015 in response to the lessons learned from the 2014
                                    escalation in the Gaza Strip with the participation of Humanity and Inclusion (HI). The
                                    program consists of three elements. 1st an activated emergency plan agreed upon by NGOs
                                    and INGOs, 2nd warehouse contains assistive devices, non-food items, and medical
                                    consumables that are distributed during emergencies, and 3rd a total of 70 volunteers
                                    from various specializations, who received trainings about working during emergencies
                                    and crises.</p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('website/assets/img/bcd2020.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                </div>
            </div>
        </section>
        <!-- End Features Section -->
        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{__('common.activity')}}</h2>
                    {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                    quis dolorem dolore earum</p> --}}
                </div>
                <div class="row gy-4">
                    @foreach ($activities as $activity)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card-bg"
                                            style="background-image: url({{ asset($activity->image) }});">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $activity->title_en }}</h4>
                                            <p>{{ $activity->short_desc_en }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Item -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Constructions Section -->
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="section-header">
                <h2>Partners</h2>
            </div>
            <div class="container">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide">
                                <div class="card" style="border: none;">
                                    <div class="card-front">
                                        <img src="{{ asset($partner->image) }}" class="img-fluid"
                                            style="background-size: contain; background-position: center;" alt="">
                                    </div>
                                    <div class="card-back">
                                        <p class="text-center">{{ $partner->name_en }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->
        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Announcements</h2>
                    {{-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel --}}
                    {{-- architecto accusamus fugit aut qui distinctio</p> --}}
                </div>
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($ads as $ad)
                            <div class="col-lg-4 col-md-6 portfolio-item text-center">
                                <a href="{{ route('baitona.announcement_details' , $ad->id) }}">
                                <div class="portfolio-content d-flex flex-column align-items-center">
                                    <img src="{{ asset($ad->image) }}" style="width: 350px; height: 350px;"
                                        class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $ad->title_en }}</h4>
                                        <p>{{ $ad->short_desc_en }}</p>
                                        {{-- <a href="{{ asset('website/assets/img/projects/construction-1.jpg') }}"
                                            title="Construction 1" data-gallery="portfolio-gallery"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> --}}
                                        {{-- <a href="project-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a> --}}
                                    </div>
                                </div>
                            </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Projects Container -->
                </div>
            </div>
        </section>
        <!-- End Our Projects Section -->
        <!-- ======= Our statistics Section ======= -->
        <section id="stats-counter " class="stats-counter section-bg" style="">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6 flip-container">
                        <div class="stats-item d-flex align-items-center w-100 h-100 flipper">
                            <div class="front">
                                <img src="{{ asset('website/assets/img/pop.png') }}" alt="">
                            </div>
                            <div class="back">
                                <p>بنك فلسطين</p>
                                <p>رقم البنك 73 رقم الفرع 424 اسم الفرع البيرة</p>
                                <p>رمز السوفيت AISBPS22XXX
                                    <br>الشيكل PS11111111111111111111111111111
                                    <br>الدولار PS11111111111111111111111111111
                                    <br>الدينار PS11111111111111111111111111111
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 flip-container">
                        <div class="stats-item d-flex align-items-center w-100 h-100 flipper">
                            <div class="front">
                                <img src="{{ asset('website/assets/img/islamsfal.png') }}" alt="">
                            </div>
                            <div class="back">
                                <p>البنك الإسلامي الفلسطيني </p>
                                <p>رقم البنك 73 رقم الفرع 424 اسم الفرع البيرة</p>
                                <p>رمز السوفيت AISBPS22XXX
                                    <br>الشيكل PS11111111111111111111111111111
                                    <br>الدولار PS11111111111111111111111111111
                                    <br>الدينار PS11111111111111111111111111111
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our statistics Section -->
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            @foreach ($videos as $video)
                <div class="container text-center" data-aos="zoom-out">
                    <a href="{{ $video->link }}" class="glightbox play-btn"></a>
                    <h3>{{ $video->title_en }}</h3>
                    {{-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p> --}}
                    <a class="cta-btn" href="#call-to-action">Call To Video</a>
                </div>
            @endforeach
        </section><!-- End Call To Action Section -->
        <!-- ======= Our statistics Section ======= -->
        <section id="stats-counter " class="stats-counter statistics section-bg" style="">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fa-solid fa-people-group color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                    class="purecounter">10</span>
                                <p>Beneficiaries</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                    class="purecounter">10</span>
                                <p>sessions</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fa-solid fa-right-left color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                class="purecounter">10</span>
                                <p>Transfers</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fa-solid fa-person-running color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                    class="purecounter">10</span>
                                <p>Activities and Initiatives</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- End Our statistics Section -->
        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class=" section-header">
                    <h2>News</h2>
                </div>
                <div class="row gy-5">
                    @foreach ($articles as $article)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset($article->image) }}" class="img-fluid"
                                        style="width: 400px; height: 300px;" alt="">
                                    <span class="post-date">{{ $article->title_en }}</span>
                                </div>
                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title">{{ $article->short_desc_en }}</h3>
                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span
                                                class="ps-2">{{ $article->author_name }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="{{route('baitona.article_details' , $article->id)}}" class="readmore stretched-link"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End post item -->
                </div>
            </div>
        </section>
        <!-- End Recent Blog Posts Section -->
    </main>
    <!-- End #main -->
@endsection

@section('script')

@endsection
