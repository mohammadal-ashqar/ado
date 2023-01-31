<x-ado-media.master>
    <!-- page-title -->
    <section class="page-title bg-cover" data-background="{{ asset('assets/images/backgrounds/page-title.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="display-1 text-white font-weight-bold font-primary"> {{ $blog->title_en }}</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /page-title -->



  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h3 class="font-tertiary mb-5">{{ $blog->title_en }}</h3>
          <img src="{{ asset('storage/'.$blog->image) }}" alt="post-thumb" class="img-fluid w-100 mb-3">
          <p class="float-left mr-4">{{ $blog->auther }}</p>
          <p>{{ $blog->created_at }}</p>
          <div class="content">
            {{ $blog->content_en }}
          </div>
        </div>
      </div>
    </div>
  </section>


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
        @forelse ($list as $i)
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <article class="card">
              <img src="{{ asset('storage/'.$i->image) }}" alt="post-thumb" class="card-img-top mb-2">
              <div class="card-body p-0">
                <time>{{ $i->created_at->format('Y/m/d | h') }}</time>
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
