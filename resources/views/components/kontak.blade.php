@php
    $menu = [
        [phone(), whatsapp()],
        // [email(), 'mailto:' . email()],
    ];

@endphp

@foreach ($menu as $key => $item)
    <li>
        <a target="_blank" href="{{ $item[1] ?? route(Str::slug($item[0])) }}"
            class="whitespace-nowrap hover:text-blue-50">{{ $item[0] }}</a>
    </li>
@endforeach
