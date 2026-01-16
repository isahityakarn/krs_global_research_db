@props(['csize' => 'col-lg-6', 'options' => [], 'name', 'label', 'check' => ''])
{{-- {{ dd($check) }} --}}
<div class="{{ $csize }}">
    <div class="form-group">
        <label for="{{ $name }}" class="text-capitalize">{{ str_replace('_', ' ', $label) }}</label>
        <select class="form-control mb-3" name={{ $name }} id={{ $name }}
            style="background-color:#ffeded">
            <option value="" class="text-capitalize">Choose One</option>
            @foreach ($options as $item)
                <option class="text-capitalize" value="{{ $item->id }}"
                    @if ($check == $item->id) selected="selected" @endif>

                    <span class="text-capitalize">{{ $item->name }}</span>
                </option>
            @endforeach
        </select>
        @error($name)
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
