@extends('website.app')

@section('title' , $thisProgram->title)

@section('style')

@endsection

@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('website/assets/img/baitona-location.jpeg') }});">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>{{$thisProgram->title}}</h2>
    <ol>
      <li><a href="{{route('baitona.home')}}">Home</a></li>
      <li>{{$thisProgram->title}}</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>The Community Rehabilitation Program</h2>
      <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p> -->
    </div>
    @php
        $time=0;
    @endphp
    <div class="row gy-4">
      @foreach($sections as $section)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{$time+=100}}">
        <div class="service-item  position-relative">
          <div class="" >
            <!-- <i class="fa-solid fa-mountain-city"></i> -->
            <img src="{{ $section->image }}" width="100" height="100"  alt="">
          </div>
          <h3>{{ $section->title_en }}</h3>
          <p>{{ $section->desc_en }}</p>
        </div>
      </div><!-- End Service Item -->
      @endforeach

      <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
          </div>
          <h3>Speech-language Therapy Clinic</h3>
          <p>The speech and language clinic provide the speech language therapy for all people including children, adult and old ages.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-compass-drafting"></i>
          </div>
          <h3>Ledo Markt</h3>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-trowel-bricks"></i>
          </div>
          <h3>Asperiores Commodit</h3>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-helmet-safety"></i>
          </div>
          <h3>Velit Doloremque</h3>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
          </div>
          <h3>Dolori Architecto</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div> -->

    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
    </div>

    <div class="slides-2 swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{ asset('website/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{ asset('website/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection


@section('script')
@endsection
