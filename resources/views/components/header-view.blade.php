@props(['headerName'])
<div class="offcanvas-header">
    <h3 class="offcanvas-title text-capitalize">{{ str_replace('_', ' ', $headerName) }}</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
</div>