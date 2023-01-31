@extends('admin.admin_master')
@section('title', 'اضافة عضو للفريق')
@section('content')
    <x-page.title :route="route('admin.team.index')" title="الفريق" title_2="اضافة عضو للفريق" />
    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة عضو للفريق ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="name_ar" lable="الاسم" />
            <x-form.input name="jop_ar" lable="الوظيفة" />
            <x-form.hr content="البيانات باللغة الانجليزية" />

            <x-form.input name="name_en" lable="الاسم انجليزي" />
            <x-form.input name="jop_en" lable=" الوظيفة انجليزي" />
            <x-form.hr content="حسابات التواصل الاجتماعي" />

            <x-form.input name="facebook" lable="فيس بوك" type="url" />
            <x-form.input name="instegram" lable="انستقرام" type="url" />
            <x-form.input name="behance" lable="behance" type="url" />
            <x-form.input name="twiter" lable="تويتر" type="url" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.team.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
