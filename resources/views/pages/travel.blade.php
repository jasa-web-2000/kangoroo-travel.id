@extends('app')
@section('content')
    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <x-layouts.article-section>
        {{-- left --}}
        <x-layouts.article-left class="col-span-full lg:col-span-6 lg:pr-24">

            {{-- H2 --}}
            <h2>{{ $title }}</h2>
            <img src="{{ $thumbnail }}" alt="{{ $title }}">
            <p>
                <a href="{{ route('beranda') }}">{{ Str::upper(env('APP_NAME')) }}</a> kini hadir untuk membantu
                perjalanan
                travel anda
                dan keluarga. Kami siap antar jemput anda dari
                {{ Str::title($travel[0]->name) }} menuju {{ Str::title($travel[1]->name) }} atau pun sebaliknya dari
                {{ Str::title($travel[1]->name) }} ke {{ Str::title($travel[0]->name) }}. Dijamin aman, cepat, nyaman,
                dan
                selamat sampai tujuan.
            </p>
            <p>Memilih jasa travel harus selalu berhati-hati, anda sangat disarankan untuk
                membayar biaya travel ketika sudah sampai di tujuan. Modus penipuan kini semakin merambat ke bidang jasa
                travel
                reguler. Banyak yang menjadi agen atau travel abal-abal dengan iming-iming harga murah.
            </p>
            {{-- H3 --}}
            <h3>Harga Travel Murah</h3>
            <p>Kami selalu menawarkan jasa travel dengan harga murah dan terjangkau. Bahkan anda bisa melakukan
                negosiasi
                dengan
                admin langsung jika merasa tidak mampu. Segera hubungi kami untuk negosiasi biaya, kami siap membantu
                anda.
            </p>
            <p>
                Biaya dari {{ Str::title($travel[0]->name) }} menuju {{ Str::title($travel[1]->name) }} bisa berubah
                tergantung situasi. Pesan tiket travel
                <strong>{{ $page }}</strong> 5 hari sebelum
                berangkat agar dapat harga yang lebih murah. Jika
                hari pemesanan dan hari keberangkatan dekat, maka harga mulai naik. Apalagi jika anda memesan tiket
                travel
                pada
                hari raya besar.
            </p>
            {{-- H3 --}}
            <h3>Pilihan Jadwal keberangkatan Banyak</h3>
            <p>Setiap travel tentunya memiliki jadwal keberangkatan tersendiri. Kami juga memiliki jadwal sendiri,
                keberangkatan setiap hari dengan jam-jam tertentu. Dimohon untuk sudah bersiap di titik penjemputan pada
                jam
                tersebut. Jika anda sudah membayar dan anda belum berada di titik penjemputan, maka uang anda akan
                dikembalikan 50%. Jika driver telat menjemput anda, maka anda akan diantar dengan gratis, namun tidak
                mendapat gratis makan. Berikut jadwal keberangkatan travel:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">
                                    {{ Str::title($travel[0]->name) }}</th>
                                <th class="!pr-8">
                                    {{ Str::title($travel[1]->name) }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $jadwal = [['05', '07'], ['10', '13'], ['15', '17'], ['20', '21']];
                            @endphp

                            @foreach ($jadwal as $item)
                                <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                    <td class="!pl-8">
                                        {{ $item[0] }}:00 WIB</td>
                                    <td class="pr-8">
                                        {{ $item[1] }}:00 WIB</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <p>Jadwal tersebut bisa berubah. Jika anda ingin berangkat sesuai jadwal yang diinginkan dan tidak tertera
                di tabel, maka anda harus memesan carter kepada admin. Bisa sesuaikan jam dan hari keberangkatan.</p>
            {{-- H3 --}}
            <h3>Unit Mobil Lengkap</h3>
            <p>Keselamatan dan kenyamanan dalam perjalanan menjadi prioritas kami. Kami akan berusaha sebaik mungkin
                untuk
                meningkatkannya. Setiap mobil yang kamu berangkat selalu dicuci dan di rawat untuk menjamin keselamatan.
                Semua unit telah dilengkapi dengan fasilitas terbaik, seperti AC dan audio. Perjalanan anda semakin
                nyaman
                bersama {{ Str::upper(env('APP_NAME')) }}.
            </p>
            <p>
                Beberapa jenis mobil travel yang akan mengantar anda:
            </p>
            <ul>
                <li>Hiace Commuter 14 Kursi</li>
                <li>Hiace Commuter Semi Luxury 10 Kursi</li>
                <li>Hiace Commuter Luxury 8 Kursi</li>
                <li>Hiace Premio 14 Kursi</li>
                <li>Hiace Premio Semi Luxury 10 Kursi</li>
                <li>Hiace Premio Luxury 8 Kursi</li>
                <li>Alphard/Vellfire</li>
                <li>Innova Reborn</li>
                <li>Innova Grand New</li>
                <li>Avanza New</li>
                <li>Xenia</li>
                <li>Expander</li>
                <li>Hyundai Stargazer</li>
            </ul>
            <p>
                Tapi jika anda memesan carter, anda bisa memilih:
            </p>
            <ul>
                <li>Fortuner</li>
                <li>Pajero</li>
                <li>Mercedes-Benz</li>
                <li>Land Cruiser</li>
            </ul>
            <p>Cukup menarik bukan? Ayo segera pesan travel anda!</p>
            {{-- H3 --}}
            <h3>Rute Travel Lengkap</h3>
            <p>Perlu anda ketahui bahwa kami melayani travel seluruh Indonesia, terutama pada rute
                <strong>{{ $page }}</strong>. Dengan begitu
                kami memiliki banyak <a href="{{ route('arsip-travel') }}">rute travel</a> yang akan membantu anda.
                Selain
                itu, kami juga
                memiliki agen travel di seluruh Indonesia. Baik itu dalam setiap provinsi, kota, kabupaten, hingga
                kecamatan.
            </p>
            <p>Ada beberapa rute travel yang kami rekomendasikan untuk anda, dan mungkin anda tertarik:</p>
            <ul>
                @foreach ($recommendation as $item)
                    <li>
                        <a
                            href="{{ route('jalur-rute-travel', ['asal' => Str::slug($loop->index < 5 ? $travel[0]->name : $travel[1]->name), 'tujuan' => Str::slug($item['name']), 'asalId' => $loop->index < 5 ? $travel[0]->code : $travel[1]->code, 'tujuanId' => $item['code']]) }}">{{ Str::title('Travel ' . ($loop->index < 5 ? $travel[0]->name : $travel[1]->name) . ' ' . $item->name) }}</a>
                    </li>
                @endforeach
            </ul>
            {{-- H2 --}}
            <h2>Kelebihan {{ $page }} PP</h2>
            <p>
                Kami menawarkan jasa travel dengan memperhatikan kepuasan pelanggan. Kami membantu anda 24 jam untuk
                melakukan travel kemana pun di seluruh Indonesia. Berikut kelebihan kami sebagai jasa travel yang akan
                mengantar anda:
            </p>
            <ul>
                <li>Harga murah, terjangkau, dan bisa negosiasi,</li>
                <li>Pembayaran di akhir setelah anda tiba di lokasi tujuan,</li>
                <li>Bisa melakukan pembatalan, pengembalian ulang, dan perubahan jadwal,</li>
                <li>Anda akan dijemput dirumah,</li>
                <li>Tersedia carter drop dan carter pp,</li>
                <li>Semua unit bersih dan memiliki AC,</li>
                <li>Travel reguler 24 jam,</li>
                <li>Travel door to door dan pulang pergi,</li>
                <li>Cepat karena Via tol,</li>
                <li>Bonus makan dan minum.</li>
            </ul>
            {{-- H2 --}}
            <h2>Cara Pesan Travel</h2>
            <p>Pemesanan {{ $page }} dijamin sangat mudah (anti
                ribet pokoknya). Anda tidak wajib datang ke garasi kami, bisa
                dengan langsung memesan secara online. Pemesanan online dibuka 24 jam via kontak whatsapp pada nomor
                {{ phone() }}. Pesan travel via online hanya melayani chat saja, jangan memanggil sembarangan.
            </p>
            <p>Untuk alur pemesanan travel online sebagai berikut:</p>
            <ul>
                <li>Pilih rute anda pada web kami,</li>
                <li>Klik logo whatsapp untuk memulai chat,</li>
                <li>Isi data penumpang seperti nama, jenis kelamin, alamat, tujuan, dan barang bawaan,</li>
                <li>Negosiasi harga dengan admin,</li>
                <li>Anda tinggal menunggu jadwal keberangkatan travel.</li>
            </ul>
            <p>Promo travel selalu tersedia setiap minggu. Kami memberikan diskon s/d 20% per orang. Berikut trik
                mendapatkan promonya, pesan travel pada pagi hari sebelum jam 9, lalu ketika memesan jangan lupa bagikan
                pesanan anda ke sosial media, setelah itu berikan bukti screenshoot kepada kami. Dengan begitu anda bisa
                mengklaim diskon tersebut.
            </p>
            {{-- H2 --}}
            <h2>Rekomendasi Agen {{ $page }}</h2>
            <p>
                Apakah anda sedang mencari agen {{ Str::title('Travel ' . $travel[0]->name) }}
                atau agen
                {{ Str::title('Travel ' . $travel[1]->name) }} terbaik di Indonesia. Jangan khawatir! Kami akan
                siap membantu anda mencari agen travel terpercaya. Siap mengantar anda dengan selamat.
            </p>
            <p>
                Setiap agen yang kami rekomendasikan selalu amanah, kami jamin 100%. Berikut 8 rekomendasi agen travel
                terpercaya:
            </p>
            <ul class="[&>li]:font-semibold [&>li>ul]:font-normal">
                <li>{{ Str::title($travel[0]->name) }}
                    <ul class="!list-decimal">
                        <li>{{ env('APP_NAME') }} (kami)</li>
                        <li><a href="https://mumpunitransjava.com/" target="_blank">Mumpuni Trans Java</a></li>
                        <li>Seraya Trans {{ Str::title($travel[0]->name) }}</li>
                        <li>LNT Trans</li>
                        <li>Agung Group Travel</li>
                    </ul>
                </li>
                <li>{{ Str::title($travel[1]->name) }}
                    <ul class="!list-decimal">
                        <li>{{ env('APP_NAME') }} (kami)</li>
                        <li>Ratu Abadi {{ Str::title($travel[1]->name) }}</li>
                        <li>Safania Trans & Travel</li>
                        <li>Buaya Darat Tour</li>
                        <li>Galaxy Sejahtera</li>
                    </ul>
                </li>
            </ul>
            <p>
                Setiap agen tersebut sudah berpengalaman pada rutenya. Tidak perlu khawatir dijamin aman dan selamat.
            </p>
            {{-- H2 --}}
            <h2>Tips Melakukan Perjalanan Travel</h2>
            <p>
                Perjalanan travel pada umumnya sangat jauh dan lama, terutama
                {{ $page }}. Travel biasanya difokuskan untuk
                perjalanan
                keluar
                kota, seperti dari {{ Str::title($travel[0]->name . ' ke ' . $travel[1]->name) }} atau sebaliknya dari
                {{ Str::title($travel[1]->name . ' ke ' . $travel[0]->name) }}. Bahkan banyak yang menggunakannya untuk
                keluar provinsi dan pulau. Sudah pasti perjalanannya berjam-jam.
            </p>
            <p>
                Anda harus mempersiapkan banyak hal agar anda tetap dalam keadaan sehat dan sampai ke tujuan dengan
                keadaan
                normal. Berikut tipsnya:
            </p>
            <ul>
                <li>Jadwalkan travel jauh-jauh hari agar anda bisa bersiap-siap,</li>
                <li>Selalu jaga kesehatan tubuh anda,</li>
                <li>Siapkan obat-obatan pribadi jika anda sakit, dan bawa obat anti mabuk jika mabuk darat/laut,</li>
                <li>Merapikan semua barang bawaan anda dalam koper atau kardus,</li>
                <li>Pilih posisi duduk yang nyaman menurut anda,</li>
                <li>Bawa makan, minum, dan jajan jika anda merasa makanan yang diberikan oleh petugas kurang.</li>
            </ul>
            {{-- H2 --}}
            <h2>Kesimpulan</h2>
            <iframe class="w-full h-auto aspect-video mb-3"
                src="https://www.youtube.com/embed/JkQtbMABGUo?si=Yjw3V54n_MqENcZ9&autoplay=1" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <p>
                Kami menawarkan anda jasa travel murah dengan banyak kelebihan, seperti harga murah dan fasilitas
                menarik.
                Banyak pilihan mobil dan jadwal keberangkatan. Pemesanan travel yang mudah dan fleksibel. Lalu tunggu
                apa
                lagi? Ayo segera jadwalkan perjalanan
                <strong>{{ $page }}</strong> untuk besok,
                tanggal {{ \Carbon\Carbon::now()->addDay(5)->locale('id')->isoFormat('D MMMM YYYY') }}.
            </p>
        </x-layouts.article-left>



        {{-- right --}}
        <x-layouts.article-right>
            <x-booking :page="$page" />
        </x-layouts.article-right>


    </x-layouts.article-section>
@endsection
