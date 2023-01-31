@extends('admin.admin_master')
@section('title', 'اضافة خدمة')
@section('content')
    <x-page.title :route="route('admin.service.index')" title="الخدمات" title_2="اضافة خدمة" />
    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <x-form.card card_lable="اضافة خدمة ">

            <x-form.input name="iconName" lable="الأيقونة" />
            <x-form.input name="name_ar" lable="الاسم" />




            <x-form.hr content="البيانات باللغة الانجليزية"/>

            <x-form.input name="name_en" lable="الاسم " />


            <x-form.hr content="الخدمات "/>
            <div id="list_ar">
                <x-form.input name="list_ar[]" lable=" إضافة خدمة عربي" />
            </div>
            <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
            <div class="mt-3"></div>

            <div id="list_en">
                <x-form.input name="list_en[]" lable="إضافة  خدمة انجليزي " />
            </div>
            <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>
            <br>
            <x-form.hr content="المحتوى"/>
            <x-form.textarea name="content_en"  lable=" المحتوى بالانجليزية " />
            <br>
            <x-form.textarea name="content_ar" lable=" المحتوى بالعربية" />
            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="اضافة " />
                    <x-form.a :route="route('admin.service.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
        </form>
@stop

@section('scripts')
<script>
    function add_btn(){
       let x=  document.getElementById("list_en");
       x.innerHTML += `<x-form.input name="list_en[]" lable="إضافة خدمة" />`;
    }

    function add_btn2(){
       let x=  document.getElementById("list_ar");
       x.innerHTML += `<x-form.input name="list_ar[]" lable="إضافة خدمة" />`;
    }

    function delete_btn(input){
        let x=  document.getElementById("list_en");
      let n =  x.closest('');
      console.log(n)
        // x.innerHTML += ``;
    }
</script>
@endsection
