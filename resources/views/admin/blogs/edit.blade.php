@extends('admin.admin_master')
@section('title', 'تعديل مقالة ')
@section('content')
    <x-page.title :route="route('admin.blog.index')" title="المقالات" title_2="تعديل مقالة " />
    <form action="{{ route('admin.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل مقالة  ">


            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="title_ar" lable="العنوان بالعربية" :value="$blog->title_ar" />
            <x-form.input name="title_en" lable="العنوان بالانجليزية"  :value="$blog->title_en"/>
            <x-form.input name="writer_ar" lable="الكاتب بالعربية"  :value="$blog->writer_en"/>
            <x-form.input name="writer_en" lable="الكاتب بالانجليزية"  :value="$blog->writer_en"/>
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
            <x-form.textarea name="content_ar" lable="المحتوى بالعربية" id="textarea"  :value="$blog->content_ar"/>

            <x-form.textarea name="content_en" lable="المحتوى بالانجليزية" id="textarea"  :value="$blog->content_en"/>

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.blog.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
