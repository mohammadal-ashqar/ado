<x-ado-media.master-ar>
    <!-- page-title -->
    <section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1 text-white font-weight-bold font-primary">أعمالنا</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /page-title -->

    <!-- project -->
    <section class="section">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>معرض الأعمال</h2>
                    <div class="section-border"></div>
                </div>
            </div>

            <div class="row no-gutters shuffle-wrapper">

                @forelse ($projects as $i)
                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-item">
                            <img src="{{ asset('storage/' . $i->image) }}" alt="project-image" class="img-fluid w-100">
                            <div class="project-hover bg-secondary px-4 py-3">
                                <a href="{{ route('adomedia.ar.portfolio', $i->id) }}"
                                    class="text-white h4">{{ $i->sections }}</a>
                                <a href="{{ route('adomedia.ar.portfolio', $i->id) }}"><i
                                        class="ti-link icon-xs text-white"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- /project -->

</x-ado-media.master-ar>
