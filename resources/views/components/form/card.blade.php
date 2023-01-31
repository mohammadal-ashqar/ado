  @props(['card_lable','buttons'])

  <!-- row -->
  <div class="row row-sm">
    <div class="col-lg-10 m-5">
        <div class="card">
            <div class="card-body">
                <div class="mb-4 main-content-label">{{ $card_lable }}</div>
                {{ $slot }}
            </div>
              {{ $footer }}
        </div>
    </div>
    <!-- /Col -->
</div>
<!-- row closed -->
</div>
</div>

