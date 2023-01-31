<x-ado-media.master-ar>
    <!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg')}}">
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
  <section>
    <div class="container-fluid px-0">
      <div class="row no-gutters shuffle-wrapper">

        @forelse ($projects->files as $i)
        <div class="col-lg-4 col-md-6 shuffle-item">
            <div class="project-item">
              <img src="{{ asset('storage/'.$i)}}" alt="project-image" class="img-fluid w-100">
            </div>
          </div>
        @empty

        @endforelse

      </div>
    </div>
  </section>
  <!-- /project -->


</x-ado-media.master-ar>
