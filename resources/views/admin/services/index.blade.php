@extends('admin.admin_master')
@section('title', 'قائمة الخدمات  ')
@section('content')
 <x-page.title :route="route('admin.service.index')" title="الخدمات" title_2="قائمة  الخدمات " />
      <x-page.table  name='service' >
        <x-slot name="cardtitle">
            خدمة
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الأيقونة</th>
          <th>الاسم</th>
          <th>المحتوى</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($services as $i)
            <tr>
                <td  width="2%">{{ $loop->iteration }}</td>
                <td width="10%">{{ $i->iconName }}</td>
                <td width="10%">{{ $i->name_ar }}</td>
                <td width="40%">{{ $i->content_ar }}</td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="service"/>
                </td>
              </tr>
            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="service"/>
@endsection

