@extends('admin.admin_master')
@section('title', 'تعديل المف الشخصي ')
@section('content')
    <x-page.title :route="route('admin.team.index')" title="الفريق" title_2="  تعديل البيانات" />
    <form action="{{ route('admin.team.update',$team->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')

        <x-form.card card_lable="اضافة عضو للفريق ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="name_ar" lable="الاسم" :value="$team->name_ar"/>
            <x-form.input name="jop_ar" lable="الوظيفة"  :value="$team->jop_ar" />
                <x-form.hr content="البيانات باللغة الانجليزية"/>

            <x-form.input name="name_en" lable="الاسم انجليزي" :value="$team->name_en" />
            <x-form.input name="jop_en" lable=" الوظيفة انجليزي"  :value="$team->jop_en"/>
                <x-form.hr content="حسابات التواصل الاجتماعي"/>
            <x-form.input name="facebook" lable="فيس بوك" type="url"  :value="$team->facebook"/>
            <x-form.input name="instegram" lable="انستقرام" type="url"  :value="$team->instegram"/>
            <x-form.input name="behance" lable="بي هانس" type="url" :value="$team->behance" />
            <x-form.input name="twiter" lable="تويتر" type="url" :value="$team->twiter" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.team.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
        </form>
@stop
