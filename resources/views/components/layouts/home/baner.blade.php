<div class="w-full !mx-0 grid place-items-center __gradient py-20 relative">
    <div class="top-0 left-0 w-full opacity-[0.04] !bg-fixed h-full absolute !z-[2] !bg-[length:80px_80px]"
        style="background: url({{ asset('img/bg-baner.png') }}) ">
    </div>
    <div class="text-center z-[3] px-2">
        <h1 class="!text-white mb-2">{{ config('app.name')}}</h1>
        <p class="text-slate-200 mb-7 max-w-[450px] mx-auto">{{ config('app.name') }} menawarkan Travel seluruh Jawa
            dengan dengan aman, nyaman, dan harga murah! Ayo pesan travel anda sekarang juga!</p>
    </div>
    <div class="w-full !z-[2] px-5">
        <div class="container mx-auto flex justify-center items-center {{-- last:[&>*]:hidden --}}">
            <x-travel-search />
            {{-- <x-agen-search /> --}}
        </div>
    </div>
</div>
