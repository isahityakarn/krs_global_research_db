@props(['csize' => 'col-lg-12', 'name', 'type' => 'text', 'label'])
<div class="{{ $csize }}">
    <div class="form-group">
        <label for="{{ $name }}" class="text-capitalize">{{ str_replace("_", " ",$label);  }}</label>
        <input {!! $attributes->merge(['class' => 'form-control']) !!} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}">
        @error($name)
        <span class="text-danger">
          {{ $message }}
        </span>
        @enderror
    </div>
</div>
