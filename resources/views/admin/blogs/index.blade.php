@extends('admin.admin_master')
@section('title', 'قائمة المدونة  ')
@section('content')
 <x-page.title :route="route('admin.blog.index')" title="المدونة" title_2="قائمة  المدونة " />
      <x-page.table  name='blog' >
        <x-slot name="cardtitle">
            مقالة
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>العنوان</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($blogs as $i)
            <tr>
                <td width="2%">{{ $loop->iteration }}</td>
                <td width="10%"><x-page.td-image :image="$i->image"/></td>
                <td width="40%">{{ $i->title_ar }}</td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td  width="10%"><x-page.td-actions :id="$i->id" name="blog"/>
                </td>
              </tr>

            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="blog"/>
@endsection

