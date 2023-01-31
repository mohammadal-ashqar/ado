@extends('admin.admin_master')
@section('title', 'قائمة الباقات  ')
@section('content')
 <x-page.title :route="route('admin.package.index')" title="الباقات" title_2="قائمة  الباقات " />
      <x-page.table  name='package' >
        <x-slot name="cardtitle">
        باقة
        </x-slot>
        <x-slot name="th">
          <th>#</th>
          <th>الصورة</th>
          <th>العنوان</th>
          <th>السعر</th>
          <th>الزيارات</th>
          <th>المستخدم</th>
          <th> تاريخ اخر تعديل</th>
          <th >العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($packages as $i)
            <tr>
                <td width="2%">{{ $loop->iteration }}</td>
                <td width="10%"><x-page.td-image :image="$i->image"/></td>
                <td width="40%">{{ $i->title_ar}}</td>
                <td width="10%" class="text-center"><span class="tag tag-gray">{{ $i->price }}</span></td>
                <td width="10%" class="text-center"><span class="tag tag-red">{{ $i->visits }}</span></td>
                <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                <td width="10%"><x-page.td-actions :id="$i->id" name="package"/>
                </td>
              </tr>
            @endforeach

        </x-slot>
      </x-page.table>
@endsection
@section('scripts')
<x-form.delete name="package"/>
@endsection

