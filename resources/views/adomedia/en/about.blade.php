<x-ado-media.master>
    <!-- page-title -->
    <section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1 text-white font-weight-bold font-primary">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /page-title -->

    <!-- progressbar -->
    <section class="section pb-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto text-center">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center">
                            <h2 class="section-title">About Us</h2>

                            <div class="section-border"></div>
                        </div>
                    </div>
                    <p class="lead">A company specializing in the fields of programming, design and montage, as well
                        as providing technical and creative solutions in all fields, with the participation of a
                        specialized team. Our goal is to ensure high quality and quality in our clients' various
                        projects and to strive to provide the best services at the highest value.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/adoabout.png') }}" alt="about" class="img-fluid "
                        style="width:35%">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="progress-block">
                        <h6 class="text-uppercase">Branding Expertise</h6>
                        <div class="progress">
                            <div class="progress-bar" data-percent="85">
                                <span class="skill-number text-dark font-weight-bold"><span
                                        class="count">85</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-block">
                        <h6 class="text-uppercase">Mothion Graghic Expertise</h6>
                        <div class="progress">
                            <div class="progress-bar" data-percent="95">
                                <span class="skill-number text-dark font-weight-bold"><span
                                        class="count">95</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-block">
                        <h6 class="text-uppercase">Web Development Expertise</h6>
                        <div class="progress">
                            <div class="progress-bar" data-percent="79">
                                <span class="skill-number text-dark font-weight-bold"><span
                                        class="count">79</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-block">
                        <h6 class="text-uppercase">Design Expertise</h6>
                        <div class="progress">
                            <div class="progress-bar" data-percent="90">
                                <span class="skill-number text-dark font-weight-bold"><span
                                        class="count">90</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /progressbar -->

    <!-- video -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overlay-secondary video-player">
                        <img src="{{ asset('assets/images/about/video-thumb.jpg') }}" alt="video-thumb"
                            class="img-fluid w-100">
                        <a class="play-icon">
                            <i class="text-center icon-sm icon-box-sm rounded-circle text-white bg-gradient-primary d-block ti-control-play content-center"
                                data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1">
                                <div class="ripple"></div>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /video -->

    <!-- team -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Team</h2>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row no-gutters">
                @forelse ($team as $i)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card hover-shadow">
                            <img src="{{ asset('storage/' . $i->image) }}" alt="team-member" class="card-img-top">
                            <div class="card-body text-center position-relative zindex-1">
                                <h4>
                                    <p class="text-dark">{{ $i->name_en }}</p>
                                </h4>
                                <i>{{ $i->jop_en }}</i>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- /team -->


    <!-- testimonial-slider -->
    <section class="section bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white mb-5">Our Client Testimonails</h2>
                </div>
            </div>
            <div class="row bg-contain" data-background="{{ asset('assets/images/banner/brush.png') }}">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div id="slider" class="ui-card-slider bg-contain">

                        @forelse ($polls as $i)
                            <div class="slide">
                                <div class="card text-center">
                                    <div class="card-body px-5 py-4">
                                        <img src="{{ asset('storage/' . $i->image) }}" alt="user-1"
                                            class="img-fluid rounded-circle mb-4">
                                        <h4 class="text-secondary">{{ $i->name_en }}</h4>
                                        <p>???{{ $i->content_en }}???</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /testimonial-slider -->

    <!-- pricing -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Packages</h2>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row">
                @forelse ($packages as $i)
                    @php
                        $list = json_decode($i->content_en);
                    @endphp
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="card bottom-shape bg-secondary pt-4 pb-5">
                            <div class="card-body text-center">
                                <h4 class="text-white">{{ $i->title_en }}</h4>
                                <p class="text-white mb-4">$ <span
                                        class="display-3 font-weight-bold vertical-align-middle">{{ $i->price }}</span>
                                </p>

                                <ul class="list-unstyled mb-5">
                                    @forelse ($list as $i)
                                        <li class="text-white mb-3">{{ $i }}</li>
                                    @empty
                                    @endforelse

                                </ul>
                                <a href="tel:+972 59-767-6950" target="_blank" class="btn btn-outline-light">Try it
                                    now</a>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </section>
    <!-- /pricing -->

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-logo-slider d-flex align-items-center slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 5550px; transform: translate3d(-1998px, 0px, 0px);">
                                @forelse ($clients as $i)
                                <a href="{{ $i->url }}"
                                class="text-center d-block outline-0 p-4 slick-slide slick-cloned"
                                data-slick-index="-4" aria-hidden="true" tabindex="-1"
                                style="width: 222px;"><img class="d-unset img-fluid"
                                    src="{{ asset('storage/'.$i->image) }}" alt="client-logo"></a>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-ado-media.master>
