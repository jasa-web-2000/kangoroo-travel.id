<{{ $submit ? 'button type=submit' : 'a href=' . whatsapp() . ' ' . ($blank ? 'target=_blank' : '') }}
    class="px-3 py-1.5 rounded-md group border border-blue-600 {{ $transparant ? 'bg-transparent hover:bg-blue-700 text-blue-700 hover:text-slate-100' : 'bg-blue-700 hover:bg-transparent text-slate-100 hover:text-blue-700' }} shadow-lg transform active:scale-y-95 transition-transform flex items-center {{ $class }}">

    @if ($svg)
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-5 mr-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $svg }}" />
        </svg>
    @endif


    <span>{{ $text }}</span>
    </{{ $submit ? 'button' : 'a' }}>
