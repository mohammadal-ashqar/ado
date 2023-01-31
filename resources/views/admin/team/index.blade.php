@extends('admin.admin_master')
@section('title', 'قائمة الفريق  ')
@section('content')
 <x-page.title :route="route('admin.team.index')" title="الفريق" title_2="قائمة  الفريق " />
      <x-page.table  name='team' >
        <x-slot name="cardtitle">
            عضو
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>الاسم</th>
          <th>الوظيفة</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($team as $i)
            <tr>
                <td width="2%">{{ $loop->iteration }}</td>
                <td width="10%"><x-page.td-image :image="$i->image"/></td>
                <td width="40%">{{ $i->name_ar }}</td>
                <td  width="10%">{{ $i->jop_ar }}</td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="team"/>
                </td>
              </tr>
            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="team"/>
@endsection

