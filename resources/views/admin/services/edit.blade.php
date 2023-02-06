@extends('admin.admin_master')
@section('title', 'تعديل الخدمات ')
@section('content')
    <x-page.title :route="route('admin.service.index')" title="الخدمات" title_2="تعديل الخدمات" />
    <form action="{{ route('admin.service.update', $service->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-form.card card_lable="اضافة خدمة ">
            <x-form.input name="image" lable="صورة" type="file" />

            <x-form.input name="iconName" lable="الأيقونة" :value="$service->iconName" />
            <x-form.input name="name_ar" lable="الاسم" :value="$service->name_ar" />




            <x-form.hr content="البيانات باللغة الانجليزية"/>

            <x-form.input name="name_en" lable="الاسم " :value="$service->name_en" />


            <x-form.hr content="الخدمات "/>
            <div id="list_ar">
                @foreach ($n as $i)
                <x-form.input name="list_ar[]" lable=" إضافة خدمة عربي" :value="$i"/>
                @endforeach
            </div>
            <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
            <div class="mt-3"></div>

            <div id="list_en">
                @foreach ($n2 as $i)
                <x-form.input name="list_en[]" lable=" إضافة خدمة انجليزي" :value="$i"/>
                @endforeach
            </div>
            <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>
            <br>
            <x-form.hr content="المحتوى"/>
            <x-form.textarea name="content_en"  lable=" المحتوى بالانجليزية " :value="$service->content_en" />
            <br>
            <x-form.textarea name="content_ar" lable=" المحتوى بالعربية" :value="$service->content_ar" />

          <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل"></x-form.button>
                    <x-form.a :route="route('admin.service.index')" title="إلغاء"></x-form.a>
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
