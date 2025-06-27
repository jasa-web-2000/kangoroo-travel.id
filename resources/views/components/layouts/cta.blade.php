<section class="py-24 __container">
    <div class="w-full rounded-3xl overflow-hidden">
        <x-background-blue>
            <div class="p-8 text-center sm:p-16 md:px-24 md:py-20 lg:px-28">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-white !text-4xl">
                        Apakah anda ingin perjalanan travel yang aman dan cepat?
                    </h2>
                    <p class="max-w-lg text-base text-indigo-100 mx-auto mt-4 sm:text-lg">
                        Hubungi kami dan konsultasikan kebutuhan anda, kami siap
                        membantu anda 24 jam.
                    </p>
                </div>
                <div class="flex justify-center gap-4 mt-8 sm:flex-row sm:items-center sm:gap-5">
                    <a href="{{ whatsapp() }}"
                        class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-yellow-500 bg-white hover:bg-yellow-500 text-slate-700 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                        Pesan
                    </a>
                    <a href="{{ route('arsip-travel') }}"
                        class="flex gap-2 px-5 py-2 border-2 border-slate-200 hover:border-yellow-500 bg-transparent hover:bg-yellow-500 text-slate-200 hover:text-slate-200 rounded-lg w-min top-0 hover:top-2 transition-all duration-700 relative">
                        Rute
                    </a>
                </div>
                <ul
                    class="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm font-medium text-white mt-8">
                    @php
                        $list_cta = ['Harga murah', 'Via tol', 'Support 24 jam', 'Mobil ber-AC', 'Door to door'];
                    @endphp
                    @foreach ($list_cta as $item)
                        <li class="inline-flex items-center gap-2">
                            <svg aria-hidden="true" class="h-5 w-5 shrink-0 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51ZM236,128A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Z">
                                </path>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-background-blue>
    </div>

</section>
