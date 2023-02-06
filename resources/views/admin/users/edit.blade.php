@extends('admin.admin_master')
@section('title', 'تعديل بيانات المستخدم ')
@section('content')
    <x-page.title :route="route('admin.user.index')" title="المستخدمين" title_2="تعديل بيانات المستخدم" />
    @can('user-edit')
    <form action="{{ route('admin.user.update', $user->id) }}" method="POSt" >
        @csrf
        @method('PUT')
        <x-form.card card_lable="تعديل بيانات المستخدم">
            <x-form.input name="name" lable="الاسم" :value="$user->name"/>
            <x-form.input name="email" lable="البريد الاكتروني" type="email" :value="$user->email"/>
            <x-form.input name="password" lable=" كلمة المرور" type="password"/>
            <x-form.input name="confirm-password" lable=" تاكيد كلمة المرور" type="password"/>
           
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <strong class="form-label">الصلاحيات:</strong>
                    </div>
                    <div class="col-md-10">
                        <div class="SumoSelect" tabindex="0" role="button" aria-expanded="true">
                            <select multiple="multiple" class="testselect2 SumoUnder" tabindex="-1" name="roles[]">
                                @forelse ($roles as $i)
                                    <option value="{{ $i }}" @selected($userRole)>{{ $i }}</option>
                                @empty
                                @endforelse

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل بيانات المستخدم"></x-form.button>
                    <x-form.a :route="route('admin.user.index')" title="عودة الى الوراء"></x-form.a>
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
    @endcan
@stop
