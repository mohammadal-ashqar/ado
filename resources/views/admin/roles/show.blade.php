@extends('admin.admin_master')
@section('title', 'show')
@section('content')
    <x-page.title :route="route('admin.role.index')" title="الصلاحيات" title_2="قائمة الصلاحيات" />
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">الصلاحيات</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>الاسم:</strong>
                                {{ $role->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>قائمة الصلاحيات :</strong>
                                <br>
                                @if (!empty($rolePermissions))
                                <div class="row">
                                    @foreach ($rolePermissions as $v)
                                    <div class="col-md-3">
                                        <label class="label text-info">{{ $v->name }}</label>
                                    </div>
                                        <br>
                                    @endforeach
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-primary mb-5 " href="{{ route('admin.role.index') }}">عودة الى الوراء</a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
