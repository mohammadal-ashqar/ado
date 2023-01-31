@extends('admin.admin_master')
@section('title', 'تعديل الباقة ')
@section('content')
    <x-page.title :route="route('admin.package.index')" title="الباقات" title_2="تعديل الباقة" />
    <form action="{{ route('admin.package.update', $package->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-form.card card_lable="تعديل الباقة ">

            <x-form.input name="image" lable="الصورة" type="file" />
            <x-form.input name="title_ar" lable=" الاسم عربي" :value="$package->title_ar" />
            <x-form.input name="title_en" lable="الاسم انجليزي" :value="$package->title_ar" />
                <x-form.input name="price" lable="السعر" :value="$package->price" />
                <x-form.hr content="بيانات الباقة " />
                <div id="content_ar">
                @foreach ($n as $i)
                <div class="inputs">
                <x-form.input name="content_ar[]" lable=" إضافة بيانات عربي" :value="$i"/>
                </div>
                @endforeach
            </div>
            <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
            <div class="mt-3"></div>

            <div id="content_en">
                @foreach ($n2 as $i)
                <div class="inputs">
                <x-form.input name="content_en[]" lable=" إضافة بيانات انجليزي" :value="$i"/>
                </div>
                @endforeach
            </div>
            <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>

          <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل"></x-form.button>
                    <x-form.a :route="route('admin.package.index')" title="إلغاء"></x-form.a>
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
@section("scripts")
<script>
    function add_btn() {
        let x = document.getElementById("content_en");
        x.innerHTML += `
                <div class="inputs">
                <x-form.input name="content_en[]" lable="إضافة باقة" />
                </div>`;}

    function add_btn2() {
        let x = document.getElementById("content_ar");
        x.innerHTML += `
                <div class="inputs">
                <x-form.input name="content_ar[]" lable="إضافة باقة" />
                </div>`;
            }

    function getInputs() {
        let inputs = document.getElementsByClassName("inputs");
        // let arr = [];
        // for(input of inputs){
        //     let index = 0;
        //     arr[index] = input ;
        //     index++;
        //     console.log(arr[index])
        // }

        return inputs;
}
    function delete_btn() {
        let inputs = getInputs();
        let s = inputs.item(inputs.length - 1);
        s.innerHTML = "";
        // //    inputs = inputs.slice(-1).pop();
        //     // s = inputs[inputs.length-2]
        //     // s.innerHTML = "";

        //     console.log(inputs)

        //     inputs.pop()
        //     console.log(inputs)

        //     //   let s= inputs.item(inputs.length-1);
        //     //   for( let n =0; n < (inputs.length-1); n++){
        //     //     console.log(inputs[n])
        //     //      let s= inputs.item(inputs.length-1);
        //     //      s.innerHTML = "";
        //     //   }

        //     // inputs =  getInputs();

        //     //    console.log(s)
        //     //    inputs = getInputs()
        //     //    console.log(inputs)
    }
</script>
@endsection
