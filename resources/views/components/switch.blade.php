<style>
    .form-check-input.red {
        background-color: red;
    }

    .form-check-input.primary {
        background-color: #007bff;
    }
</style>
<script>
    $(document).ready(function() {
        function updateColor() {
            $('.form-check-input').each(function() {
                if ($(this).is(':checked')) {
                    $(this).removeClass('red').addClass('primary');
                } else {
                    $(this).removeClass('primary').addClass('red');
                }
            });
        }

        // Initial color setting
        updateColor();

        // Update color on change
        $('.form-check-input').change(updateColor);
    });
</script>
@props(['csize' => 'col-lg-6', 'name' => 'name', 'check'])
<div class="{{ $csize }}">
    <div class="form-check form-switch">
        <input {{ $attributes->merge(['class' => 'form-check-input red']) }} type="checkbox" id="{{ $name }}"
            {{ $check == 1 ? 'checked' : '' }}>
    </div>
</div>
