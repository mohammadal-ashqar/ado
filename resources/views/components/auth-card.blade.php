     <!-- Page -->
     <div class="page">
        <div class="main-container container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->

                <div class="col-md-6 col-lg-6 col-xl-4 d-none d-md-flex bg-dark">
                    <div class="row wd-100p mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                            <x-application-logo class="my-auto ht-xl-90p wd-md-100p wd-xl-80p mx-auto" alt="logo" />
                        </div>
                    </div>
                </div>
                <!-- The content half -->

                <div class="col-md-6 col-lg-6 col-xl-8 bg-gray-100 py-4" >
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-5 d-flex">
                                            <a href="{{ URL('/') }}">
                                                <x-application-logo class="sign-favicon-a w-50 " alt="logo" />
                                                <x-application-logo class="sign-favicon-b w-50" alt="logo" />
                                            </a>
                                            <h1 class="main-logo1 ms-1 me-0 my-auto tx-28"></h1>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                {{ $slot }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

    </div>
    <!-- End Page -->
