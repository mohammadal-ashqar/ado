@extends('admin.admin_master')
@section('title', 'اضافة عميل ')
@section('content')
    <x-page.title :route="route('admin.client.index')" title="العملاء" title_2="اضافة عميل " />
    <form action="{{ route('admin.client.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <x-form.card card_lable="اضافة عميل  ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="url" lable="الرابط" type="url" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.client.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
        </form>
@stop
