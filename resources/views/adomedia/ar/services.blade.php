<x-ado-media.master-ar>
<!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">خدماتنا</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <!-- service -->
  <section class="section">
    <div class="container">
      <div class="row">

        @forelse ($services as $i)
        <div class="col-lg-4 mb-4 ">
            <div class="card hover-bg-secondary shadow py-4 ">
              <div class="card-body text-center">
                <div class="position-relative">
                  <i ti-crown
                    class="icon-lg icon-box bg-gradient-primary rounded-circle {{ $i->iconName }} mb-5 d-inline-block text-white"></i>
                  <i class="icon-lg icon-watermark text-white {{ $i->iconName }}"></i>
                </div>
                <h4 class="mb-4">{{ $i->name_ar }}</h4>
                <p>{{ $i->content_ar }}</p>
              </div>
            </div>
          </div>
        @empty

        @endforelse
      </div>
    </div>
  </section>
  <!-- /service -->


</x-ado-media.master-ar>

