@props(['csize' => 'col-lg-12', 'name', 'type' => 'text', 'label','data'=>''])
<div class="{{ $csize }}">
    <div class="form-group">
      <label for="{{ $name }}" class="text-capitalize">{{ str_replace("_", " ",$label);  }}</label>
        <textarea rows="4" {!! $attributes->merge(['class' => 'form-control']) !!} name="{{ $name }}" id="{{ $name }}" spellcheck="true"
            data-ms-editor="true" style="background-color:#ffeded">
        {{ $data }}
        </textarea>
        @error($name)
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror

    </div>


</div>
