@extends('admin.admin_master')
@section('title', 'اضافة باقة')
@section('content')
    <x-page.title :route="route('admin.package.index')" title="الباقات" title_2="اضافة باقة" />
    <form action="{{ route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة باقة ">

            <x-form.input name="image" lable="الصورة" type="file" />
            <x-form.input name="title_ar" lable="الاسم عربي" />
            <x-form.input name="title_en" lable="الاسم انجليزي " />
            <x-form.input name="price" lable="السعر  " />

            <x-form.hr content="بيانات الباقة " />
            <div id="content_ar">
                <div class="inputs">
                    <x-form.input name="content_ar[]" lable=" إضافة بيانات عربي" />
                </div>
            </div>
            <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
            <span class="btn btn-danger" onclick="delete_btn()"><i class="fa fa-trash"></i></span>

            <div class="mt-3"></div>

            <div id="content_en">
                <x-form.input name="content_en[]" lable="إضافة  بيانات انجليزي " />
            </div>
            <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>
            <br>

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="اضافة " />
                    <x-form.a :route="route('admin.package.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop

@section('scripts')
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
