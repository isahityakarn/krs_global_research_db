@props(['csize' => 'col-lg-12', 'name', 'label', 'check' => ''])
<div class="{{ $csize }}">
    <div class="form-check form-check-inline"   style="margin-top: 40px !important;">
     <input type="checkbox" id="{{ $name }}" name="{{ $name }}" {!! $attributes->merge(['class' => 'btn btn-primary shadow-sm'])!!}>
     <label class="m-0 ml-1" for="{{ $name }}">{{ $label }}</label>   
    </div>
</div>
