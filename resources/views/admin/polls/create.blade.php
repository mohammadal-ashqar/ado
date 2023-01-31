@extends('admin.admin_master')
@section('title', 'اضافة رأي')
@section('content')
    <x-page.title :route="route('admin.polls.index')" title="الآراء" title_2="اضافة رأي" />
    <form action="{{ route('admin.polls.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <x-form.card card_lable="اضافة رأي ">

            <x-form.input name="image" lable="الصورة"  type="file"/>
            <x-form.input name="name_ar" lable="الاسم" />
            <x-form.input name="content_ar" lable="المحتوى" />
            <x-form.hr content="البيانات باللغة الانجليزية"/>
            <x-form.input name="name_en" lable="الاسم انجليزي" />
            <x-form.input name="content_en" lable=" المحتوى انجليزي" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="اضافة رأي" />
                    <x-form.a :route="route('admin.polls.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
        </form>
@stop
