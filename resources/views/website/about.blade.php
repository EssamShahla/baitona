@extends('website.app')

@section('title', 'About Baitona')
@section('main-title', 'main-About')
@section('sub-title', 'sub-About')

@section('style')

@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center "
            style="background-image: url({{ asset('website/assets/img/baitona-location.jpeg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>About</h2>
                <ol>
                    <li><a href="{{ route('baitona.home') }}">Home</a></li>
                    <li><a href="">About</a></li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 order-lg-1">
                        <h2>Baitona for Community Development (BCD)</h2>
                        <div class="our-story bg-white">
                            <h4>Est 2003</h4>
                            <h3>Legal Status and Registration:</h3>
                            <p>Legal Status and Registration: Baitona for Community Development (BCD) is a non-governmental
                                and non-profit organization. It was registered in the Ministry of Interior on 20th May 2003
                                under registration NO. 7284. Baitona’s health services are registered in the Ministry of
                                Health under registration NO. “2007/4H”. The registration number of social affairs is 1045
                                on 2nd augh. 2003. BCD also has a license from the Ministry of Education and Hight Education
                                under the number 31511228. </p>
                            <h3>Vision: </h3>
                            <p>"Towards pioneering in providing health, social and developmental services to the Palestinian
                                community"</p>
                            <h3>Mission:</h3>
                            <p>BCD, an independent NGO, seeks to empower the various and most vulnerable segments of
                                Palestinian society in the governorates of Gaza through quality integrated programs (health,
                                educational, social, and developmental) with its commitment to the principles of democracy
                                and human rights</p>
                            <h3>Values:</h3>
                            <p>Observance of the values and customs of society, humanity, social responsibility, ethics,
                                equality and commitment to human rights, and justice.</p>
                            <h3>Beneficiaries:</h3>
                            <ul>
                                <li>
                                    <i class="bi bi-check2-all"></i>Children.
                                </li>
                                <li>
                                    <i class="bi bi-check2-all"></i>Women and men.
                                </li>
                                <li>
                                    <i class="bi bi-check2-all"></i>Youth.
                                </li>
                                <li>
                                    <i class="bi bi-check2-all"></i>Old people.
                                </li>
                                <li>
                                    <i class="bi bi-check2-all"></i>People with disabilities.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="col-lg-7 order-lg-2 about-img"
                            style="background-image: url({{ asset('assets/app-assets/images/ico/log-ico.png') }}); position : static; width:100%;">
                        </div>
                        <div>
                            <h3>Objectives:</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Activating the role of the Palestinian house in
                                    sustainable community development.</li>
                                <li><i class="bi bi-check2-all"></i>Early intervention with the family to take care of
                                    children from the first year of birth.</li>
                                <li><i class="bi bi-check2-all"></i>Reducing psychological and social pressure on children
                                    and their families.</li>
                                <li><i class="bi bi-check2-all"></i>Providing training opportunities for young people to
                                    create a spirit of initiative and leadership in building productive development
                                    projects.</li>
                                <li><i class="bi bi-check2-all"></i>Spreading community awareness about the principles of
                                    democracy and civil society.</li>
                                <li><i class="bi bi-check2-all"></i>Work on rehabilitating women to increase their
                                    participation in community activities aimed at developing their capabilities and
                                    building their independent personality.</li>
                                <li><i class="bi bi-check2-all"></i>Providing appropriate opportunities for women's
                                    participation in economic development through income-generating projects.</li>
                                <li><i class="bi bi-check2-all"></i>Establishing health centers in line with the needs of
                                    the Palestinian society.</li>
                                <li><i class="bi bi-check2-all"></i>Establishing educational centers and institutions and
                                    kindergartens in line with the needs of the Palestinian society.</li>
                                <li><i class="bi bi-check2-all"></i>Establishing cultural centers in line with the needs of
                                    the Palestinian society.</li>
                            </ul>
                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=XpqgK4qBLg4" class="glightbox stretched-link">Watch
                                    Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-p" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="width: 650px; height: 650px; background-image: url({{ asset('website/assets/img/CEO.jpeg') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Abed Elrahman Muzanen</h3>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Job Description</a></h4>
                                <p>CEO</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            {{-- <i class="bi bi-patch-check flex-shrink-0"></i> --}}
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <h4><a href="" class="stretched-link">E-mail</a></h4>
                                <p>abed1407@hotmail.com</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            {{-- <i class="bi bi-brightness-high flex-shrink-0"></i> --}}
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Mobile Number</a></h4>
                                <p>+970599476888</p>
                            </div>
                        </div>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            {{-- <i class="bi bi-brightness-high flex-shrink-0"></i> --}}
                            <i class="fa-solid fa-photo-film"></i>
                            <div>
                                <h4><a href="" class="stretched-link">social media</a></h4>
                                <div>
                                    <div class="d-flex mt-3">
                                        <a href="https://twitter.com/baitonabcd" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                                        <a href="https://www.facebook.com/baitonabcd" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                                        <a href="https://instagram.com/baitonabcd?igshid=NTc4MTIwNjQ2YQ==" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                                        <a href="https://youtube.com/@baitonabcd" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Alt Services Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Ahmed Mohammed Abu Nada</h3>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Job Description</a></h4>
                                <p>Program Manager</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <h4><a href="" class="stretched-link">E-mail</a></h4>
                                <p>ahmed.m.a.nada@gmail.com</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Mobile Number</a></h4>
                                <p>+972598866644</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            {{-- <i class="bi bi-brightness-high flex-shrink-0"></i> --}}
                            <i class="fa-solid fa-photo-film"></i>
                            <div>
                                <h4><a href="" class="stretched-link">social media</a></h4>
                                <div class="social-links d-none d-md-flex align-items-center gap-3">
                                    <a href="https://www.facebook.com/baitonabcd" target="_blank" class="facebook"><i class="bi bi-facebook fs-6"></i></a>
                                    <a href="https://instagram.com/baitonabcd?igshid=NTc4MTIwNjQ2YQ==" target="_blank" class="instagram"><i class="bi bi-instagram fs-6"></i></a>
                                    <a href="https://youtube.com/@baitonabcd" class="youtube" target="_blank"><i class="bi bi-youtube fs-6"></i></a>
                                    <a href="https://wa.me/970599522915" target="_blank" ><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                    </div>
                    <div class="col-lg-6 img-bg"
                        style="width: 650px; height: 650px; background-image: url({{ asset('website/assets/img/ahmed.jpeg') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                </div>
            </div>
        </section>
        <!-- End Alt Services Section 2 -->
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2> The Board Members</h2>
                    {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p> --}}
                </div>
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social" >
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Mahmoud Mohammed-Faraj Mahmoud Al Asali</h4>
                            <span>Chairman</span>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Kamal Deeb Ibraheem Abu Qamar</h4>
                            <span>Vice Chairman</span>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Ola Mahmoud Mohammed Shatat</h4>
                            <span>Treasurer</span>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Mohammed Saadi Mohammed El Aila</h4>
                            <span>Secretary</span>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Naheel Nafez Hassan Al-Sharafi</h4>
                            <span>Member</span>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Osama Ziyad Hassouna Shamlakh</h4>
                            <span>Member</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Haneen Ahmed Abdullah Al-Sammak</h4>
                            <span>Member</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                        <div class="member-img">
                            <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Abed Al Rahman Mahmoud Mohammed Al Muza’nen</h4>
                            <span>Member</span>
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
