@extends('admin.admin_master')
@section('title', 'صفحة المستخدمين')
@section('content')
            <x-page.title :route="route('admin.user.index')" title="المستخدمين" title_2="قائمة المستخدمين" />
            <x-page.table  name="user">
                <x-slot name="cardtitle">
                    مستخدم
                </x-slot>
            <x-slot name="th">
                <th>#</th>
                <th>اسم المستخدم</th>
                <th> الايميل</th>
                <th>الصلاحية</th>
                <th> تاريخ اخر تعديل</th>
                <th>العمليات</th>
              </x-slot>
              <x-slot name="tbody">
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <h5 class="badge text-white tag tag-dark">{{ $v }}</h5>
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td><x-page.td-actions :id="$user->id" name="user"/>
                        <a class="btn btn-sm btn-success"
                        href="{{ route('admin.user.show', $user->id) }}"><span
                            class="fe fe-eye"></a>
                    </td>
                  </tr>
                @endforeach
            </x-slot>
 </x-page.table>
@stop
@section('scripts')
<x-form.delete name="user"/>
 @endsection

