@props(['csize' => 'col-lg-12', 'name', 'label'])
<div class="{{ $csize }}">
    <div class="form-group required">
        <label for="{{ $name }}" class="text-capitalize">{{ str_replace("_", " ",$label);  }}</label>
        <input class="form-control" type="text" value=""
            name="{{ $name }}" id="{{ $name }}" spellcheck="false" data-ms-editor="true">
    </div>
</div>
