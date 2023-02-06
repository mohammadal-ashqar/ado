@extends('admin.admin_master')
@section('title', 'show')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">المستخدم</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            المستخدم</span>
                    </div>
                </div>
            </div>
            <!-- row opened -->
            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0">المستخدم</h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>الاسم:</strong>
                                        {{ $user->name }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>البريد:</strong>
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>الصلاحيات:</strong>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge text-dark">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <a class="btn btn-primary waves-effect waves-light" href="{{ route('admin.user.index') }}">
                                    رجوع</a>
                            </div>
                            <div class="card-footer">
                            </div>
                        @endsection
