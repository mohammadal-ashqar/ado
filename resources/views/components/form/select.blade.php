@props(['type' => 'text', 'value' => '', 'lable' => false, 'name','value'=>''])
<div class="form-group ">
    <div class="row">
        <div class="col-md-2" >
            @if ($lable)
                <label class="form-label">{{ $lable }}</label>
            @endif
        </div>
            <div class="col-md-10">
              {{ $slot }}
                @error($name)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
        </div>


