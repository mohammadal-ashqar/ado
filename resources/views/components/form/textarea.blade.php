@props(['lable'=>false,'name','value'=>''])

@if ($lable)
<label for="{{ $name }}">{{ $lable }}</label>
@endif
<textarea
rows="6"
name="{{ $name }}"
id="{{ $name }}"
{{ $attributes->class([
    'form-control',
    'is-invalid'=>$errors->has($name)])
}}
>{{ old($name,$value) }}</textarea>
@error($name)
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
