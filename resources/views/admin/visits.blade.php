@extends('admin.admin_master')
@section('title', 'صفحة الزيارات')
@section('content')
            <x-page.title :route="route('admin.visits')" title="الزيارات" title_2="قائمة الزيارات" />
            <x-page.table  name="visits">
                <x-slot name="cardtitle">
                    زيارات
                </x-slot>
            <x-slot name="th">
                <th>#</th>
                <th> الزيارات</th>
                <th> تاريخ  </th>
              </x-slot>
              <x-slot name="tbody">
                @foreach ($visits as  $i)
                <tr>
                    <td width="1%">{{ $loop->iteration }}</td>
                    <td  width="70%" class="text-center"><i class="tag tag-red text-lg-center ">{{ $i->visits }}</i></td>
                    <td>{{ $i->created_at }}</td>
                  </tr>
                @endforeach
            </x-slot>
 </x-page.table>
@stop


