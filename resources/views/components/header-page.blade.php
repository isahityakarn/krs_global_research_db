@props(['url' => '#', 'headerName', 'buttonName', 'display' => 'yes'])
<div class="card-header py-3 d-flex justify-content-between">
    <h4 class="m-0 font-weight-bold">
        <span class="text-capitalize">{{ str_replace('_', ' ', $headerName) }}</span>
    </h4>

    @if ($display == 'yes')
        <a class="btn btn-primary shadow-sm btn-sm" href="{{ url($url) }}">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            <span class="d-none d-sm-inline-block">{{ $buttonName }}</span>
        </a>
    @endif

</div>
