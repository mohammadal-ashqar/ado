@extends('admin.admin_master')
@section('title', 'تعديل  بيانات العميل ')
@section('content')
    <x-page.title :route="route('admin.client.index')" title="العملاء" title_2="  تعديل البيانات" />
    <form action="{{ route('admin.client.update',$client->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')

        <x-form.card card_lable="اضافة عضو للفريق ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="url" lable="الرابط" type="url" :value="$client->url"/>



            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.client.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
        </form>
@stop
