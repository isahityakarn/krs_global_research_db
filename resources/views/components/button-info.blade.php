@props(['label'])
@props(['csize' => 'col-lg-12', 'label'])
<div class="{{ $csize }}">
    <div class="form-group text-center">
        <button type="submit" {!! $attributes->merge(['class' => 'btn btn-primary shadow-sm'])!!} style="margin-top: 40px !important;">
            <span class="d-none d-sm-inline-block text-capitalize">{{ $label }}</span>
        </button>
    </div>
</div>
