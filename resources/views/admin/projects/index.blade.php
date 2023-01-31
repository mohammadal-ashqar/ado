@extends('admin.admin_master')
@section('title', 'قائمة المشاريع  ')
@section('content')
 <x-page.title :route="route('admin.project.index')" title="المشاريع" title_2="قائمة  المشاريع " />
      <x-page.table  name='project' >
        <x-slot name="cardtitle">
            مشروع
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>القسم</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($projects as $i)
            <tr>
                <td width="2%">{{ $loop->iteration }}</td>
                <td width="10%"><x-page.td-image :image="$i->image"/></td>
                <td  width="40%">{{ $i->sections }}</td>
                <td  width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="project"/>
                </td>
              </tr>

            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="project"/>
@endsection

