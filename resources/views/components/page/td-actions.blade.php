    {{-- @can("$name-edit") --}}
    <a class=" btn btn-sm btn-primary"
    href="{{ route("admin.$name.edit", $id) }}">
    <span class="fe fe-edit"></span></a>
{{-- @endcan
@can("$name-delete") --}}
<a class="btn btn-sm btn-danger"
    onclick="confirmDestroy({{ $id }}, this)">
    <span class="fe fe-trash-2">
    </span></a>
{{-- @endcan --}}
