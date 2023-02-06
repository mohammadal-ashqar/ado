@extends('admin.admin_master')
@section('title', 'اضافة صلاحيات ')
@section('content')
    <x-page.title :route="route('admin.role.index')" title="الصلاحيات" title_2="اضافة صلاحيات" />

    @can('role-create')
        <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <x-form.card card_lable="اضافة صلاحية ">

                <x-form.input name="name" lable="الاسم" />
               
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <strong class="form-label">القيود:</strong>
                        </div>
                        <div class="col-md-10">
                            <div class="SumoSelect" tabindex="0" role="button" aria-expanded="true">
                                <select multiple="multiple" class="testselect2 SumoUnder" tabindex="-1" name="permission[]">
                                    @forelse ($permission as $value)
                                    <option selected value="{{ $value->id }}">{{ $value->name }}</option>
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
                        <x-form.a :route="route('admin.role.index')" title="عودة الى الوراء" />
                    </x-form.card-footer>
                </x-slot>

            </x-form.card>
        </form>
    @endcan
@stop
