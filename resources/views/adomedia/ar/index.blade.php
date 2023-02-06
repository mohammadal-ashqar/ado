<x-ado-media.master-ar>
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
        <h2 class="section-title"> خدماتنا </h2>
        <p class="lead">شركة متخصصة في البرمجة والمونتاج، فضلاً عن تقديم الحلول التقنية والإبداعية في جميع المجالات بمشاركة فريق متخصص.</p>
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
                <a href="{{ route('adomedia.service',$i->id) }}"> <h4 class="mb-4">{{ $i->name_ar }}</h4></a>
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


<!-- team -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>فريقنا</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row no-gutters">
   @forelse ($team as $i)
   <div class="col-lg-3 col-sm-6">
    <div class="card hover-shadow">
      <img src="{{asset('storage/'.$i->image)}}" alt="team-member" class="card-img-top">
      <div class="card-body text-center position-relative zindex-1">
        <h4><p class="text-dark" >{{ $i->name_ar }}</p></h4>
        <i>{{ $i->jop_ar }}</i>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>أعمالنا</h2>
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
        <h2>باقاتنا</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
        @forelse ($packages as $i)
        @php
        $list = json_decode($i->content_ar)
        @endphp
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="card bottom-shape bg-secondary pt-4 pb-5">
              <div class="card-body text-center">
                <h4 class="text-white">{{ $i->title_ar }}</h4>
                <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">{{ $i->price }}</span></p>

                <ul class="list-unstyled mb-5">
                @forelse ($list as $i)
                <li class="text-white mb-3">{{ $i }}</li>
                @empty

                @endforelse

                </ul>
                <a href="tel:+970597676950" target="_blank" class="btn btn-outline-light">حاول الأن</a>
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
        <h2>المدونة</h2>
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
                <a href="{{ route('adomedia.blog',$i->id) }}" class="h4 card-title d-block my-3 text-dark hover-text-underline">{{$i->title_ar}}</a>
                <a href="{{ route('adomedia.blog',$i->id) }}" class="btn btn-transparent">إقرأ المزيد</a>
              </div>
            </article>
          </div>
        @empty

        @endforelse


    </div>
  </div>
</section>
<!-- /blog -->

</x-ado-media.master-ar>

