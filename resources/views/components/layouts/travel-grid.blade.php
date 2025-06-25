<div>
    <div
        class="grid grid-cols-1 min-[400px]:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-y-7 gap-x-5">

        @foreach ($featured as $item)
            <div class="rounded-lg overflow-hidden">
                <div class="overflow-hidden w-full h-auto block">

                    <img width="160" height="90" loading="lazy"
                        title="TRAVEL {{ $item[0]['name'] }} - {{ $item[1]['name'] }}" loading="lazy"
                        src="{{ route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($item[0]['name']), 'tujuan' => Str::slug($item[1]['name']), 'asalId' => $item[0]['code'], 'tujuanId' => $item[1]['code']]) }}"
                        class="border-4 w-full h-auto aspect-video border-b-0 rounded-lg rounded-b-none hover:scale-110 transition-all duration-300"
                        alt="Travel">

                </div>
                <a title="TRAVEL {{ $item[0]['name'] }} - {{ $item[1]['name'] }}"
                    href="{{ route('jalur-rute-travel', ['asal' => Str::slug($item[0]['name']), 'tujuan' => Str::slug($item[1]['name']), 'asalId' => $item[0]['code'], 'tujuanId' => $item[1]['code']]) }}"
                    target="__blank"
                    class="bg-blue-600 hover:bg-blue-900 text-slate-300 px-5 py-2 text-sm line-clamp-2 !leading-5 text-center font-bold">Cek
                    Detail</a>
            </div>
        @endforeach
    </div>
</div>
