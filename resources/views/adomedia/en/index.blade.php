<x-ado-media.master>
<!-- banner -->
<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
  data-background="{{asset('assets/images/banner/banner2.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">ADO Media</h1>
      </div>
    </div>
  </div>
</section>
<!-- /banner -->

<!-- service -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="section-title">About Us</h2>
        <p class="lead">A company specializing in programming and montage, as well as providing technical and creative solutions in all fields with the participation of a specialized team.</p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
        @forelse ($services as $i)
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card hover-bg-secondary shadow py-4 ">
              <div class="card-body text-center">
                <div class="position-relative">
                  <i ti-crown
                    class="icon-lg icon-box bg-gradient-primary rounded-circle {{ $i->iconName }} mb-5 d-inline-block text-white"></i>
                  <i class="icon-lg icon-watermark text-white {{ $i->iconName }}"></i>
                </div>
                <h4 class="mb-4">{{ $i->name_en }}</h4>
                <p>{{ $i->content_en }}</p>
              </div>
            </div>
          </div>
        @empty

        @endforelse

    </div>
  </div>
</section>
<!-- /service -->

{{-- <!-- about -->
<section class="section-lg position-relative bg-cover" data-background="{{asset('assets/images/backgrounds/about-bg.jpg')}}">
    <img src="{{asset('assets/images/backgrounds/about-bg-overlay.png')}}" alt="overlay" class="overlay-image img-fluid">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6 col-md-8 col-sm-7 col-8">
          <h2 class="text-white mb-4">Who We Are</h2>
          <p class="text-light mb-4">A company specializing in programming and montage, as well as providing technical and creative solutions in all fields with the participation of a specialized team.</p>
          <a href="{{ route('adomedia.index','about') }}" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
          <a class="venobox" data-autoplay="true" data-vbtype="video"
            href="https://www.youtube.com/watch?v=jrkvirglgaQ"><i
              class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about --> --}}

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
      <img src="{{asset('storage/'.$i->image)}}" alt="team-member" class="card-img-top">
      <div class="card-body text-center position-relative zindex-1">
        <h4><p class="text-dark" >{{ $i->name_en }}</p></h4>
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



<!-- project -->
<section class="section">
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Our Feature Works</h2>
        <div class="section-border"></div>
      </div>
    </div>

    <div class="row no-gutters shuffle-wrapper">

        @forelse ($projects as $i)
        <div class="col-lg-4 col-md-6 shuffle-item">
            <div class="project-item">
              <img src="{{asset('storage/'.$i->image)}}" alt="project-image" class="img-fluid w-100">
              <div class="project-hover bg-secondary px-4 py-3">
                <a href="{{ route('adomedia.portfolio',$i->id) }}" class="text-white h4">{{ $i->sections }}</a>
                <a href="{{ route('adomedia.portfolio',$i->id) }}"><i class="ti-link icon-xs text-white"></i></a>
              </div>
            </div>
          </div>
        @empty

        @endforelse

    </div>
  </div>
</section>
<!-- /project -->


<!-- pricing -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Our Smart Pricing Table</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
        @forelse ($packages as $i)
        @php
        $list = json_decode($i->content_en)
        @endphp
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="card bottom-shape bg-secondary pt-4 pb-5">
              <div class="card-body text-center">
                <h4 class="text-white">{{ $i->title_en }}</h4>
                <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">{{ $i->price }}</span></p>

                <ul class="list-unstyled mb-5">
                @forelse ($list as $i)
                <li class="text-white mb-3">{{ $i }}</li>
                @empty

                @endforelse

                </ul>
                <a href="tel:+970597676950" target="_blank" class="btn btn-outline-light">Try it now</a>
              </div>
            </div>
          </div>
        @empty

        @endforelse

    </div>
  </div>
</section>
<!-- /pricing -->

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Latest News</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
        @forelse ($blog as $i )
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <article class="card">
              <img src="{{asset('storage/'.$i->image)}}" alt="post-thumb" class="card-img-top mb-2">
              <div class="card-body p-0">
                <time>{{ $i->created_at->format('Y/M/D |h')."hour" }}</time>
                <a href="{{ route('adomedia.blog',$i->id) }}" class="h4 card-title d-block my-3 text-dark hover-text-underline">{{$i->title_en}}</a>
                <a href="{{ route('adomedia.blog',$i->id) }}" class="btn btn-transparent">Read more</a>
              </div>
            </article>
          </div>
        @empty

        @endforelse


    </div>
  </div>
</section>
<!-- /blog -->

</x-ado-media.master>

