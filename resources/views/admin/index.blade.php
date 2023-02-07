@extends('admin.admin_master')
@section('title', ' لوحة التحكم')
@section('content')
    <x-page.title :route="route('admin.index')" title="لوحة التحكم" title_2="الرئيسية " />
    <!-- row -->
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">إدارة المحتوى</div>
                </div>
                <div class="main-content-left main-content-left-mail card-body pt-0 ">
                    <div class="main-settings-menu">
                        <nav class="nav main-nav-column">


                            <a class="nav-link thumb active mb-2" href="{{ route('admin.index') }}"><i class="fe fe-home"></i>
                                الرئيسية </a>

                            @can('project-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.project.index') }}"><i
                                        class="fe fe-layers"></i> المشاريع </a>
                            @endcan
                            @can('package-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.package.index') }}"><i
                                        class="fe fe-shopping-cart"></i>الباقات</a>
                            @endcan
                            @can('service-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.service.index') }}"><i
                                        class="fe fe-slack"></i>الخدمات</a>
                            @endcan
                            @can('blog-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.blog.index') }}"><i
                                        class="fe fe-file-text"></i>المدونة</a>
                            @endcan
                            @can('client-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.client.index') }}"><i
                                        class="fe fe-user"></i> العملاء</a>
                            @endcan
                            @can('polls-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.polls.index') }}"><i
                                        class="fe fe-message-circle"></i>الآراء</a>
                            @endcan
                            @can('role-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.role.index') }}"><i
                                        class="fe fe-lock"></i> الصلاحيات</a>
                            @endcan
                            @can('user-list')
                                <a class="nav-link border-top-0 thumb mb-2" href="{{ route('admin.user.index') }}"><i
                                        class="fe fe-users"></i> المستخدمين</a>
                            @endcan
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card card-img-holder">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-end  mt-2">
                                    <span class="text-primary ">
                                        <i class="fe fe-hash tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-start text-end">
                                    <p class="card-text text-muted mb-1"> المشاريع</p>
                                    <h3>{{ $projects->count() }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card card-img-holder">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-end  mt-2">
                                    <span class="text-primary ">
                                        <i class="fe fe-image tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-start">
                                    <p class="card-text text-muted mb-1">الخدمات</p>
                                    <h3>{{ $services->count() }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card card-img-holder">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-end  mt-2">
                                    <span class="text-primary">
                                        <i class="fe fe-file-text tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-start">
                                    <p class="card-text text-muted mb-1">الزيارات الشهرية</p>
                                    <h3>{{ $visits->visits }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card card-img-holder">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-end  mt-2">
                                    <span class="text-primary">
                                        <i class="fe fe-users tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-start">
                                    <p class="card-text text-muted mb-1">المستخدمين</p>
                                    <h3>{{ $users }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body ht-100p">
                            <div>
                                <h6 class="card-title mb-1">المشروع الاكثر مشاهدة</h6>
                            </div>
                            <div id="basicSlider" class="ms-animating">
                                <div class="MS-content">
                                    <div class="item" style="margin-left: -155.969px;">
                                        <a href="javascript:void(0);"> <img src="../assets/img/photos/7.jpg" alt="">
                                        </a>
                                    </div>

                                    @foreach ($projects as $i)
                                        <div class="item">
                                            <a href="{{ route('adomedia.ar.portfolio', $i->id) }}" target="_blank">
                                                @if ($i->image)
                                                    <img src="{{ asset('storage/' . $i->image) }}" alt="">
                                                @endif

                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body ht-100p">
                            <div>
                                <h6 class="card-title mb-1">الخدمة الاكثر مشاهدة</h6>
                            </div>
                            <div id="basicSlider" class="ms-animating">
                                <div class="MS-content">
                                    <div class="item" style="margin-left: -155.969px;">
                                        <a href="javascript:void(0);"> <img src="../assets/img/photos/7.jpg"
                                                alt=""> </a>
                                    </div>

                                    @foreach ($services as $i)
                                        <div class="item">
                                            <a href="{{ route('adomedia.ar.service', $i->id) }}" target="_blank">
                                                @if ($i->image)
                                                    <img src="{{ asset('storage/' . $i->image) }}" alt="">
                                                @endif

                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection
