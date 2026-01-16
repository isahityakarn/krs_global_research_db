@props(['size' => '100px', 'url' => '', 'name' => 'img_show'])
<div>
    @if($url)
        <img src="{{ asset($url) }}" class="img-fluid" id="{{ $name }}" width="{{ $size }}" />
    @elseif($url=='null')
    <img src="{{ asset('home/img/noimg.png') }}" class="img-fluid" id="{{ $name }}" width="{{ $size }}" />
    @else
        <img src="{{ asset('home/img/noimg.png') }}" class="img-fluid" id="{{ $name }}" width="{{ $size }}" />
    @endif


</div>
