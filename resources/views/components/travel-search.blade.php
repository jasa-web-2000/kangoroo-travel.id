<form method="POST" action={{ route('cari-travel') }} id="cari-travel" target="_blank"
    class="w-full max-w-[400px] sm:max-w-[550px] border border-gray-300 px-4 py-5 md:p-6 grid grid-cols-1 !gap-6 bg-white shadow-lg rounded-lg search">
    @method('POST')
    @csrf
    <div class="grid grid-cols-2 !gap-x-5 !gap-y-3 [&_p]:text-sm [&_p]:text-slate-600 [&_p]:font-semibold">
        @livewire('select-area', ['label' => 'Asal'])
        @livewire('select-area', ['label' => 'Tujuan'])
    </div>
    <div class="[&>*]:w-full [&_span]:mx-auto">
        <x-button text="Cari Travel" :submit="true" class="relative z-[1]" :transparant="false" />
    </div>
    {{-- <a href="{{ Route::currentRouteName() == 'beranda' ? '#!' : route('arsip-agen') }}" id="tombol-cari-travel"
        class="text-sm underline text-blue-600 text-right">Cari agen?</a> --}}
</form>
