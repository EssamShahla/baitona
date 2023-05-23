@extends('website.app')
@section('title' , 'Blog')
@section('main-title' , 'main-title')
@section('sub-title' , 'sub-title')
@section('style')
@endsection
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('website/assets/img/baitona-location.jpeg') }});">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Blog</h2>
    <ol>
      <li><a href="{{route('baitona.home')}}">Home</a></li>
      <li>Blog</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4 posts-list">

  @foreach ($articleall as $article)
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

    {{-- <div class="blog-pagination">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div><!-- End blog pagination --> --}}

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
@section('scripts')

    @endsection
