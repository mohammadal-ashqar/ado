@extends('admin.admin_master')
@section('title', 'الصلاحيات')
@section('content')
    <x-page.title :route="route('admin.role.index')" title="الصلاحيات" title_2="قائمة الصلاحيات" />
    <x-page.table name="role">
        <x-slot name="cardtitle">
            صلاحيات
        </x-slot>
        <x-slot name="th">
            <th>#</th>
            <th> الاسم</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->created_at }}</td>
                    <td>
                        <x-page.td-actions :id="$role->id" name="role" />
                        <a class="btn btn-sm btn-success" href="{{ route('admin.role.show', $role->id) }}"><span
                                class="fe fe-eye"></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-page.table>
@endsection
@section('scripts')
    <x-form.delete name="role" />
@endsection
