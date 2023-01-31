@extends('admin.admin_master')
@section('title', 'تعديل الصور ')
@section('content')
    <x-page.title :route="route('admin.polls.index')" title="الفيدوهات" title_2="تعديل الصور" />
    <form action="{{ route('admin.polls.update', $poll->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-form.card card_lable="تعديل الصور">

            <x-form.input name="image" lable="الصورة" type="file" />
            <x-form.input name="name_ar" lable="الاسم" :value="$poll->name_ar" />
            <x-form.input name="content_ar" lable="المحتوى" :value="$poll->content_ar" />
            <x-form.hr content="البيانات باللغة الانجليزية" />
            <x-form.input name="name_en" lable="الاسم انجليزي" :value="$poll->name_en" />
            <x-form.input name="content_en" lable=" المحتوى انجليزي" :value="$poll->content_en" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل"></x-form.button>
                    <x-form.a :route="route('admin.polls.index')" title="إلغاء"></x-form.a>
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
