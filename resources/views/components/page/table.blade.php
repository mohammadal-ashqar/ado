           @props(['cardtitle','th','name' ])
           <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">قائمة {{ $cardtitle }} </h3>
                            {{-- @can("$name-create") --}}
                            <a class="btn btn-dark" href="{{ route("admin.$name.create") }}">اضافة {{ $cardtitle }}</a>
                            {{-- @endcan --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                {{-- @can("$name-list") --}}
                                <table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                             {{$th}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                          {{ $tbody }}
                                        </tbody>
                                    </table>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
