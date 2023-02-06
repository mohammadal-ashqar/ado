@extends('admin.admin_master')
@section('title', 'اضافة مستخدم')
@section('content')
    <x-page.title :route="route('admin.user.index')" title="المستخدمين" title_2="اضافة مستخدم" />


    {{-- @can('users-create') --}}
    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        <x-form.card card_lable="اضافة مستخدم ">

            <x-form.input name="name" lable="الاسم" />
            <x-form.input name="email" lable="البريد الاكتروني" type="email" />
            <x-form.input name="password" lable=" كلمة المرور" type="password" />
            <x-form.input name="confirm-password" lable=" تاكيد كلمة المرور" type="password" />

            <x-form.select name="type" lable="نوع المستخدم">
                <select name="type" class="form-select ">
                    <option>اختر نوع المستخدم </option>
                    <option value="admin">آدمن</option>
                    <option value="user">مستخدم </option>
                </select>
            </x-form.select>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <strong class="form-label">الصلاحيات:</strong>
                    </div>
                    <div class="col-md-10">
                        <div class="SumoSelect" tabindex="0" role="button" aria-expanded="true">
                            <select multiple="multiple" class="testselect2 SumoUnder" tabindex="-1" name="role_name[]">
                                @forelse ($roles as $i)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @empty
                                @endforelse

                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="اضافة صلاحيات " />
                    <x-form.a :route="route('admin.user.index')" title="عودة الى الوراء" />
                </x-form.card-footer>
            </x-slot>
        </x-form.card>
    </form>
    {{-- @endcan --}}
    </div>
    </div>
    <!-- /Col -->

    </div>
    <!-- row closed -->

    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
