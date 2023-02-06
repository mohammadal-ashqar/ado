@extends('admin.admin_master')
@section('title', 'تعديل الصلاحيات ')
@section('content')
    <x-page.title :route="route('admin.role.index')" title="الصلاحيات" title_2="تعديل الصلاحيات" />
    @can('role-edit')
    <form action="{{ route('admin.role.update', $role->id) }}" method="POSt" >
        @csrf
        @method('PUT')
        <x-form.card card_lable="تعديل الصلاحيات">
            <x-form.input name="name" lable="الاسم" value="{{ $role->name }}"/>
                <strong>Permission:</strong>
                <br />
                @foreach ($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                        {{ $value->name }}</label>
                    <br />
                @endforeach
            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل الصلاحيات"></x-form.button>
                    <x-form.a :route="route('admin.role.index')" title="عودة الى الوراء"></x-form.a>
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
    @endcan
@stop
