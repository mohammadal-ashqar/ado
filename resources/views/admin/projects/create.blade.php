@extends('admin.admin_master')
@section('title', 'اضافة مشروع ')
@section('content')
    <x-page.title :route="route('admin.project.index')" title="المشاريع" title_2="اضافة مشروع " />
    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة مشروع  ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="files[]" lable="المعرض"  multiple="" type="file"/>
            <x-form.input name="url" lable="الرابط" type="url" />

            <x-form.select name="sections" lable="القسم">
                <select name="sections" class="form-select">
                    <option>اختر القسم  </option>
                    <option value="Web Development">تطوير المواقع</option>
                    <option value="Branding"> الهوية البصرية</option>
                    <option value="Digital Market"> التسويق الكتروني</option>
                    <option value="motioMotion Graphic"> موشن جرافيك</option>
                </select>
            </x-form.select>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.project.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
