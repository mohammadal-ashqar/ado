@props(['type' => 'text', 'value' => '', 'lable' => false, 'name','value'=>''])
<div class="form-group ">
    <div class="row">
        <div class="col-md-2" >
            @if ($lable)
                <label for="{{ $name }}" class="form-label">{{ $lable }}</label>
            @endif
        </div>
            <div class="col-md-10">
            <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
                placeholder="{{ $lable }}" value="{{ old($name,$value) }}" {{ $attributes }}
                {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
            @error($name)
                <div class="invalid-feedback">
                    {{ $message }}

                </div>
                @enderror
            </div>
            </div>
        </div>

