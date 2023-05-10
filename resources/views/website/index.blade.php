@extends('website.app')

@section('title', 'Baitona')
@section('main-title', 'main-Index')
@section('sub-title', 'sub-Index')

@section('style')
<style>
    .swiper-slide {
        position: relative;
        perspective: 1000px; /* Define the perspective for the 3D effect */
    }

    .swiper-slide .card {
        position: relative;
        width: 100% ;
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
        object-fit: cover; /* Adjust the image sizing */
    }

    .swiper-slide .card .card-back {
        background-color: #f1f1f1; /* Adjust the background color if needed */
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
        <!-- ======= Get Started Section ======= -->
        {{-- <section id="get-started" class="get-started section-bg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Minus hic non reiciendis ea possimus at quia.</h3>
                            <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa.
                                Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat
                                totam nisi possimus ut delectus dicta.
                            <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa
                                eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Get a quote</h3>
                            <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus
                                enim linead sero park flows.</p>
                            <div class="row gy-3">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        required>
                                </div>
                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                    </div>
                                    <button type="submit">Get a quote</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Quote Form -->
                </div>
            </div>
        </section><!-- End Get Started Section --> --}}
        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>برامجنا</h2>
                </div>
                <ul class="nav nav-tabs row justify-content-center">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Qualification</h4>
                        </a>
                    </li>
                    <!-- End tab nav item -->
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Training and Education</h4>
                        </a>
                        <!-- End tab nav item -->
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Al Hanan Specialist Center</h4>
                        </a>
                    </li>
                    <!-- End tab nav item -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Community Rehabilitation Programme</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate
                                        velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
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
                                <h3>Training and Education Programme</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate
                                        velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores
                                        quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
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
                                <h3>Al Hanan Specialist Center Programme</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate
                                        velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores
                                        quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
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
                    <h2>@lang('common.activities')</h2>
                    {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                    quis dolorem dolore earum</p> --}}
                </div>
                <div class="row gy-4">
                    @foreach ($activities as $activity)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card-bg" style="background-image: url({{ asset($activity->image) }});">
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
                <h2>@lang('common.Partners')</h2>
            </div>
            <div class="container">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-front">
                                        <img src="{{ asset($partner->image) }}" class="img-fluid" alt="">
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
        {{-- <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-mountain-city"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                hic non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                voluptas adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                sit provident adipisci neque.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section --> --}}
        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>@lang('common.Announcements')</h2>
                    {{-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel --}}
                    {{-- architecto accusamus fugit aut qui distinctio</p> --}}
                </div>
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($ads as $ad)
                            <div class="col-lg-4 col-md-6 portfolio-item text-center"
                                style="position: absolute; left: 439.987px; top: 0px; display:flex;">
                                <div class="portfolio-content d-flex flex-column align-items-center">
                                    <img src="{{ asset($ad->image) }}" style="width: 350px; height: 350px;"
                                        class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $ad->title_en }}</h4>
                                        <p>{{ $ad->short_desc_en }}</p>
                                        <a href="{{ asset('website/assets/img/projects/construction-1.jpg') }}"
                                            title="Construction 1" data-gallery="portfolio-gallery"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <a href="project-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
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
        <section id="stats-counter " class="stats-counter section-bg" style="">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                                    class="purecounter">521</span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                                    class="purecounter">521</span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="0" class="purecounter">1463</span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0"
                                    class="purecounter">15</span>
                                <p>Hard Workers</p>
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
                    <h2>@lang('common.News')</h2>
                    {{-- <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p> --}}
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
                                    <a href="blog-details.blade.php" class="readmore stretched-link"><span>Read
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
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team  section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Board of Directors</h2>
                    {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                        dolorem dolore earum</p> --}}
                </div>
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-3.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section>
        <!-- End Our Team Section -->
    </main>
    <!-- End #main -->
@endsection

@section('script')

@endsection
