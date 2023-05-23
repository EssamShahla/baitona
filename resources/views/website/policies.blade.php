@extends('website.app')

@section('title', 'policies Baitona')
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

                <h2>Systems And Policies</h2>
                <ol>
                    <li><a href="{{ route('baitona.home') }}">HOME</a></li>
                    <li><a href="">Systems And Policies</a></li>
                </ol>

            </div>
        </div>

    </main>
    <!-- End #main -->

    <!-- ======= Our Team Section ======= -->
    <section id="protocol" class="protocol">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Systems And Policies</h2>
                {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p> --}}
            </div>
            <div class="row gy-5">
                <table class="table table-bordered border-dark">
                    <thead>

                        <tr>
                        <tr>
                            <th colspan="3" class="text-center table-active">Structural</th>
                        </tr>
                        <th class="table-active" scope="col">#</th>
                        <th class="table-active" scope="col">Name</th>
                        <th class="table-active" scope="col">File</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reports as $structural)
                            @if ($structural->type == 3)
                                <tr>
                                    <th> {{ $structural->id }}</th>
                                    <td>{{ $structural->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $structural->file }}">
                                            File for the {{ $structural->year }} </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <thead>
                        <tr>
                            <th colspan="3" class="text-center table-active">Systems</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $system)
                            @if ($system->type == 4)
                                <tr>
                                    <th> {{ $system->id }}</th>
                                    <td>{{ $system->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $system->file }}">
                                            File for the {{ $system->year }} </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3" class="text-center table-active">Policies</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $policy)
                            @if ($policy->type == 5)
                                <tr>
                                    <th> {{ $policy->id }}</th>
                                    <td>{{ $policy->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $policy->file }}">
                                            File for the {{ $policy->year }} </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3" class="text-center table-active">Protocols</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $protocol)
                            @if ($protocol->type == 6)
                                <tr>
                                    <th> {{ $protocol->id }}</th>
                                    <td>{{ $protocol->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $protocol->file }}">
                                            File for the {{ $protocol->year }} </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3" class="text-center table-active">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $evidence)
                            @if ($evidence->type == 7)
                                <tr>
                                    <th> {{ $evidence->id }}</th>
                                    <td>{{ $evidence->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $evidence->file }}">
                                            File for the {{ $evidence->year }} </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3" class="text-center table-active">Other</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $other)
                            @if ($other->type == 8)
                                <tr>
                                    <th> {{ $other->id }}</th>
                                    <td>{{ $other->year }}</td>
                                    <td>
                                        <a class="file-upload" href="{{ $other->file }}">
                                            File for the {{ $other->year }} </a>
                                    </td>
                                </tr>
                            @endif
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
