@extends('admin.admin_master')
@section('title', 'قائمة العملاء  ')
@section('content')
 <x-page.title :route="route('admin.client.index')" title="العملاء" title_2="قائمة  العملاء " />
      <x-page.table  name='client' >
        <x-slot name="cardtitle">
            عميل
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>الرابط</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($clients as $i)
            <tr>
                <td  width="2%">{{ $loop->iteration }}</td>
                <td  width="10%"><x-page.td-image :image="$i->image"/></td>
                <td width="40%"><a href="{{ $i->url }}" target="_blank" class="tag tag-gray">الرابط</a></td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="client"/>
                </td>
              </tr>
            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="client"/>
@endsection

