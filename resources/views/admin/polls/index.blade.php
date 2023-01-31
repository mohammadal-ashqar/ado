@extends('admin.admin_master')
@section('title', 'قائمة الآراء  ')
@section('content')
 <x-page.title :route="route('admin.polls.index')" title="الآراء" title_2="قائمة  الآراء " />
      <x-page.table  name='polls' >
        <x-slot name="cardtitle">
            رأي
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>الاسم</th>
          <th>التعليق</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($polls as $i)
            <tr>
                <td width="5%">{{ $loop->iteration }}</td>
                <td width="10%"><x-page.td-image :image="$i->image"/></td>
                <td width="10%">{{ $i->name_ar }}</td>
                <td>{{ $i->content_ar }}</td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="polls"/>
                </td>
              </tr>
            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="polls"/>
@endsection

