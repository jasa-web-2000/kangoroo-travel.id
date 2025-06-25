<div class="w-full !mx-0 grid place-items-center __gradient py-20 relative">
    <div class="top-0 left-0 w-full opacity-[0.04] !bg-fixed h-full absolute !z-[2] !bg-[length:80px_80px]"
        style="background: url({{ asset('img/bg-baner.png') }}) ">
    </div>
    <div class="text-center z-[3] px-2">
        <h1 class="!text-white mb-2">{{ config('app.name') . ' Murah ' . date('Y') }}</h1>
        <p class="text-slate-300 mb-7 max-w-[450px]">Temukan kenyamanan dan kemudahan perjalanan dengan layanan
            travel
            reguler kami!</p>
    </div>
    <div class="w-full !z-[2] px-5">
        <div class="container mx-auto flex justify-center items-center last:[&>*]:hidden">
            <x-travel-search />
            <x-agen-search />
        </div>
    </div>
</div>
