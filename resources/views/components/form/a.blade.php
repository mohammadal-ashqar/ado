@props(['title','route'])
<a   {{ $attributes->class(['btn btn-danger waves-effect waves-light text-light'] )}} href="{{ $route }}">
    {{ $title }}
</a>
