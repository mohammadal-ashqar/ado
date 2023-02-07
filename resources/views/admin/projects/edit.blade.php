@extends('admin.admin_master')
@section('title', 'تعديل مشروع ')
@section('content')
    <x-page.title :route="route('admin.project.index')" title="المشاريع" title_2="تعديل مشروع " />
    <form action="{{ route('admin.project.update',$project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل مشروع  ">

            <x-form.input name="image" lable="صورة" type="file" />
            <x-form.input name="files[]" lable="المعرض" type="file" multiple="" />
            <x-form.input name="url" lable="الرابط" type="url" :value="$project->url" />

            <x-form.select name="sections" lable="القسم">
                <select name="sections" class="form-select">
                    <option>اختر القسم  </option>
                    <option value="Web Development" @selected($project->sections == 'Web Development')>تطوير المواقع</option>
                    <option value="Branding"       @selected($project->sections == 'Branding')> الهوية البصرية</option>
                    <option value="Digital Market"  @selected($project->sections == 'Digital Market')> التسويق الكتروني</option>
                    <option value="Motion Graphic"  @selected($project->sections == 'Motion Graphic')> موشن جرافيك</option>
                </select>
            </x-form.select>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.project.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@stop
