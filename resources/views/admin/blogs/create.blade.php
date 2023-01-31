@extends('admin.admin_master')
@section('title', 'اضافة مقالة ')
@section('content')
    <x-page.title :route="route('admin.blog.index')" title="المقالات" title_2="اضافة مقالة " />
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة مقالة  ">


            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="title_ar" lable="العنوان بالعربية" />
            <x-form.input name="title_en" lable="العنوان بالانجليزية" />
            <x-form.input name="writer_ar" lable="الكاتب بالعربية" />
            <x-form.input name="writer_en" lable="الكاتب بالانجليزية" />
           {{-- <div class="row">
            <div class="col-md-2">العلامات بالعربية</div>
            <div class="col-md-10">
                <div class="text-wrap">
                    <div class="example">
                        <div class="form-group mb-0">
                            <select multiple="" name="tag_ar[]"
                                data-role="tagsinput" class="form-control sr-only">

                            </select>
                        </div>
                    </div>
                </div>
            </div>
           </div>

           <div class="row mt-4">
            <div class="col-md-2">العلامات بالانجليزية</div>
            <div class="col-md-10">
                <div class="text-wrap">
                    <div class="example">
                        <div class="form-group mb-0">
                            <select multiple="" name="tag_en[]"
                                data-role="tagsinput" class="form-control sr-only">

                            </select>
                        </div>
                    </div>
                </div>
            </div>
           </div> --}}
            <x-form.textarea name="content_ar" lable="المحتوى بالعربية" id="textarea" />

            <x-form.textarea name="content_en" lable="المحتوى بالانجليزية" id="textarea" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.blog.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
