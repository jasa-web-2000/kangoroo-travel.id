<div class="grid grid-cols-4 gap-x-6 gap-y-10">
    @foreach ($agent as $item)
        <div
            class="group col-span-full sm:col-span-2 lg:col-span-1 border relative rounded-xl shadow-xl cursor-pointer overflow-hidden before:absolute before:content-[''] before:z-[2] before:inset-0 before:bg-slate-950/55">
            <img width="160" height="90" loading="lazy" title="Agent Travel {{ $item->name }}"
                src="{{ route('thumbnail-agen-travel', ['asal' => Str::slug($item->name), 'asalId' => $item->code]) }}"
                class="group-hover:scale-125 w-full h-auto object-cover absolute inset-0 scale-100 transition-all duration-500"
                alt="Agent Travel {{ $item->name }}" />
            <div class="z-[2] aspect-[16/12] relative p-5 text-center flex-col flex justify-end h-full">
                <a title="Agent Travel {{ $item->name }}"
                    href="{{ route('agen-travel', ['asal' => Str::slug($item->name), 'asalId' => $item->code]) }}"
                    target="_blank"
                    class="z-10 col-span-full px-5 py-2 border-2 border-blue-600 hover:border-blue-900 bg-blue-600 hover:bg-blue-900 text-slate-200 rounded-lg transition-all relative">
                    Cek Detail
                </a>
            </div>
        </div>
    @endforeach
</div>
