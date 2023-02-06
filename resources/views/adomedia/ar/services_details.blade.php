<x-ado-media.master>
<!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">{{ $service->name_ar }}</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card-body">
            <div class="position-relative ">
                <img src="{{ asset('storage/'.$i->image) }}" alt="" width="60%">
            </div>
           <h2 class="mb-4">{{ $service->name_ar }}</h2>
            <p>{{ $service->content_ar }}</p>
          </div>
          <div class="content">
            @php
                $list_ar = json_decode($service->list_ar);
            @endphp
            @forelse ($list_ar as $i)
            <img src="{{ asset('assets/images/ado-dark-logo.png') }}" alt="" width="50px">
            {{ $i }}
            <br>
            @empty

            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>



</x-ado-media.master>

