@extends('app')
@section('content')
    <div class="[&_.baner]:pb-40">
        <x-default-baner :title="$title" :desc="$desc" />
    </div>
    <div class="__container grid place-items-center -my-32 pb-44">
        <form id="reservasi"
            class="w-full max-w-[400px] sm:max-w-[550px] border border-gray-300 px-4 py-5 md:p-6 grid grid-cols-1 !gap-6 bg-white shadow-lg rounded-lg search">
            @method('POST')
            @csrf
            <div
                class="grid grid-cols-1 !gap-x-5 !gap-y-4 [&_p]:text-sm [&_p]:text-slate-600 [&_p]:font-semibold [&_label]:inline [&_label]:text-sm [&_label]:font-medium [&_label]:cursor-pointer [&>div>div]:mt-1 [&_input]:w-full [&_input]:border [&_input]:cursor-pointer [&_input]:text-sm [&_input]:border-slate-300 [&_input]:p-2 [&_input]:rounded focus:[&_input]:border-yellow-700 focus:[&_input]:outline-yellow-700">
                {{-- Nama --}}
                <div>
                    <label for="nama" class="">Nama Pemesan</label>
                    <div class="">
                        <input required id="nama" type="text" autocomplete="off" class="">
                    </div>
                </div>

                {{-- Alamat Penjemputan --}}
                <div>
                    <label for="penjemputan" class="">Alamat Penjemputan</label>
                    <div class="">
                        <input required id="penjemputan" type="text" autocomplete="off" class="">
                    </div>
                </div>

                {{-- Alamat Pengantaran --}}
                <div>
                    <label for="pengantaran" class="">Alamat Pengantaran</label>
                    <div class="">
                        <input required id="pengantaran" type="text" autocomplete="off" class="">
                    </div>
                </div>

                {{-- Tanggal --}}
                <div>
                    <label for="tanggal" class="">Tanggal</label>
                    <div class="">
                        <input required id="tanggal" type="datetime-local" autocomplete="off" class="">
                    </div>
                </div>

                {{-- Jumlah Penumpang --}}
                <div>
                    <label for="penumpang" class="">Jumlah Penumpang</label>
                    <div class="">
                        <input required id="penumpang" type="number" min="1" autocomplete="off" class="">
                    </div>
                </div>

                {{-- Catatan / Bawaan --}}
                <div>
                    <label for="catatan" class="">Catatan / Bawaan</label>
                    <div class="">
                        <textarea required id="catatan" rows="3"
                            class="w-full border cursor-pointer text-sm border-slate-300 p-2 rounded focus:border-yellow-700 focus:outline-yellow-700"></textarea>
                    </div>
                </div>
            </div>
            <div class="[&>*]:w-full [&_span]:mx-auto">
                <x-button text="Reservasi" :submit="true" class="relative z-[1]" :transparant="false" />
            </div>
        </form>

    </div>
    <section class="__container py-6">

    </section>


    <script>
        const bookingForm = document.querySelector('#reservasi')
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault()

            const telp = '{{ phone() }}';
            const telpResult = telp.replace(/\D/g, '')

            function jadwal(time) {
                const date = new Date(time);

                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');

                return `${day}-${month}-${year} ${hours}:${minutes}`;

            }

            const data = {
                'nama': e.target[2].value,
                'penjemputan': e.target[3].value,
                'pengantaran': e.target[4].value,
                'jadwal': jadwal(e.target[5].value),
                'penumpang': e.target[6].value,
                'catatan': e.target[7].value,
            }

            const text =
                `FORM Reservasi *Arman Trans*%0A%0ASaya ingin memesan travel!%0A*Nama* : ${data.nama}%0A*Penjemputan* : ${data.penjemputan}%0A*Pengantaran* : ${data.pengantaran}%0A*Jadwal* : ${data.jadwal}%0A*Jumlah PNP* : ${data.penumpang} orang%0A*Catatan / Bawaan* : ${data.catatan}%0A%0A{{ env('APP_URL') }}`

            window.open(`https://wa.me/${telpResult}/?text=${text}`, '_blank')

        })
    </script>
@endsection
