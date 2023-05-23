@extends('website.app')

@section('title', 'Financial Baitona')
@section('main-title', 'main-About')
@section('sub-title', 'sub-About')

@section('style')
    <style>
        .file-upload:hover {
            transition: 1s;
            color: #1c00ab;
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center "
            style="background-image: url({{ asset('website/assets/img/baitona-location.jpeg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Financial Reports</h2>
                <ol>
                    <li><a href="{{ route('baitona.home') }}">HOME</a></li>
                    <li><a href="">Financial</a></li>
                </ol>

            </div>
        </div>

    </main>
    <!-- End #main -->

    <!-- ======= Our Team Section ======= -->
    <section id="protocol" class="protocol">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2> Financial Reports Table</h2>
                {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p> --}}
            </div>
            <div class="row gy-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Year</th>
                            <th scope="col">File</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($financials as $financial)
                        <tr>
                            <th>{{ $financial->id }}</th>
                            <td>{{ $financial->year }}</td>
                            <td>
                                <a class="file-upload"
                                    href="{{$financial->file }}">
                                    Report for the year {{ $financial->year }} </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Our Team Section -->

@endsection

@section('script')

@endsection
