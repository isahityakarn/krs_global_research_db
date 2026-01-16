@props(['csize' => 'col-lg-6', 'name', 'type' => 'text', 'label'])
<div class="{{ $csize }}">
    <div class="form-group">
        <label for="{{ $name }}" class="text-capitalize">{{ str_replace("_", " ",$label);  }}</label>
        <input {!! $attributes->merge(['class' => 'form-control']) !!} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" style="background-color:#ffeded;font-weight: 500 !important;">
        @error($name)
        <span class="text-danger">
          {{ $message }}
        </span>
        @enderror
    </div>
</div>
