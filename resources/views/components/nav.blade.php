@php
    $menu = [['Beranda'], ['Travel', route('arsip-travel')], ['Galeri'], ['Kontak']];

@endphp

@foreach ($menu as $key => $item)
    <li>
        <a href="{{ $item[1] ?? route(Str::slug($item[0])) }}"
            class="whitespace-nowrap {{ Str::slug($item[0]) == Route::currentRouteName() ? '!text-yellow-700 active' : '' }} hover:text-yellow-700 ">{{ $item[0] }}</a>
    </li>
@endforeach
