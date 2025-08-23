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
                <a href="{{ route('beranda') }}">{{ Str::upper(env('APP_NAME')) }}</a> siap menemani perjalanan Anda dan
                keluarga dengan layanan antar-jemput dari
                {{ Str::title($travel[0]['name']) }} menuju {{ Str::title($travel[1]['name']) }} serta sebaliknya dari
                {{ Str::title($travel[1]['name']) }} ke {{ Str::title($travel[0]['name']) }}. Kami mengutamakan keamanan,
                kenyamanan, dan ketepatan waktu agar perjalanan Anda selalu menyenangkan dan sampai dengan selamat.
            </p>
            <p>Saat memilih jasa travel, Anda perlu berhati-hati dan disarankan untuk melakukan pembayaran setelah tiba di
                tujuan. Saat ini, modus penipuan semakin marak di sektor jasa travel reguler, dengan banyak agen atau travel
                palsu yang menawarkan harga murah namun tidak dapat dipercaya.
            </p>
            {{-- H3 --}}
            <h3>Harga Tiket Travel Terjangkau</h3>
            <p>
                Kami menyediakan jasa travel dengan harga yang terjangkau dan ramah di kantong. Jika Anda merasa perlu, Anda
                juga dapat langsung bernegosiasi dengan admin kami. Jangan ragu untuk menghubungi kami kapan saja, kami siap
                membantu menemukan solusi biaya terbaik untuk Anda.
            </p>
            <p>
                Biaya perjalanan dari {{ Str::title($travel[0]['name']) }} ke {{ Str::title($travel[1]['name']) }} bersifat
                dinamis dan dapat berubah sesuai kondisi. Untuk mendapatkan tarif terbaik, sebaiknya pesan tiket travel
                melalui <strong>{{ $page }}</strong> paling lambat 1 hari sebelum keberangkatan. Jika memesan
                terlalu dekat dengan jadwal keberangkatan, harga tiket cenderung meningkat, terutama saat momen hari raya
                atau libur panjang.
            </p>
            {{-- H3 --}}
            <h3>Jadwal Travel Sangat Responsif</h3>
            <p>Setiap layanan travel memiliki jadwal keberangkatan yang berbeda-beda, begitu juga dengan kami. Kami melayani
                keberangkatan setiap hari pada waktu-waktu tertentu. Harap pastikan Anda sudah siap di lokasi penjemputan
                sesuai jadwal yang telah ditentukan. Apabila Anda telah melakukan pembayaran tetapi tidak berada di titik
                penjemputan saat waktu jemput, kami hanya mengembalikan 50% dari biaya.
            </p>
            <p>
                Namun, jika sopir terlambat
                menjemput, Anda akan diantar tanpa biaya tambahan, meskipun fasilitas makan gratis tidak diberikan. Berikut
                adalah jadwal keberangkatan kami:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">
                                    Dari {{ Str::title($travel[0]['name']) }}</th>
                                <th class="!pr-8">
                                    Dari {{ Str::title($travel[1]['name']) }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $jadwal = [
                                    ['06', '07'],
                                    ['08', '10'],
                                    ['11', '11'],
                                    ['14', '13'],
                                    ['15', '15'],
                                    ['17', '18'],
                                    ['19', '21'],
                                    ['21', '22'],
                                ];
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
            <p>
                Jadwal keberangkatan dapat berubah sewaktu-waktu. Jika Anda ingin berangkat pada waktu yang tidak tercantum
                dalam tabel, silahkan lakukan pemesanan carter langsung dengan admin. Waktu dan hari keberangkatan bisa
                disesuaikan sesuai kebutuhan Anda.

            </p>
            {{-- H3 --}}
            <h3>Armada/Mobil Travel Lengkap</h3>
            <p>
                Keselamatan dan kenyamanan Anda selama perjalanan adalah fokus utama kami. Kami selalu berupaya meningkatkan
                kualitas layanan dengan merawat dan membersihkan setiap kendaraan secara rutin sebelum keberangkatan. Semua
                armada kami dilengkapi dengan fasilitas unggulan, seperti AC dan sistem audio, agar perjalanan Anda bersama
                {{ Str::upper(env('APP\_NAME')) }} terasa lebih nyaman dan menyenangkan.

            </p>

            <p>
                Berikut adalah beberapa jenis armada/mobil travel yang akan menemani perjalanan Anda:
            </p>
            <ul>
                <li>Mini Bus</li>
                <li>Elf Long</li>
                <li>Hiace Commuter</li>
                <li>Hiace Premio</li>
                <li>Innova Reborn</li>
                <li>Innova Grand New</li>
                <li>Avanza New</li>
                <li>Calya</li>
                <li>Xenia</li>
            </ul>
            <p>
                Mobil yang telah kami sebutkan tidak bisa dipilih jika menggunakan layanan travel reguler. Tapi jika anda
                memesan carter drop atau carter pulang pergi (pp), maka anda bisa memilih mobil/armada yang tersedia:
            </p>
            {{-- <iframe class="w-full h-auto aspect-video mb-3"
                src="https://www.youtube.com/embed/JkQtbMABGUo?si=Yjw3V54n_MqENcZ9&autoplay=1" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe> --}}
            <p>
                Menarik banget, kan? Yuk, segera pesan travel kamu sekarang juga dan nikmati perjalanan yang nyaman!
            </p>
            {{-- H3 --}}
            <h3>Rute Travel Lengkap yang kami layani:</h3>
            <p>
                Kami menyediakan layanan travel ke seluruh penjuru Indonesia, dengan fokus utama pada rute
                <strong>{{ $page }}</strong>. Tersedia berbagai pilihan <a href="{{ route('arsip-travel') }}">rute
                    travel</a> yang dapat memudahkan perjalanan Anda. Jaringan agen kami pun tersebar luas, mulai dari
                tingkat provinsi, kota, kabupaten, hingga kecamatan di seluruh Pulau Sumatera, Jawa, hingga Bali. Kami siap
                melayani kebutuhan transportasi Anda di mana saja.

            </p>
            <p>
                Berikut beberapa rute travel pilihan yang kami rekomendasikan untuk Anda, yang mungkin sesuai dengan
                kebutuhan perjalanan Anda:

            </p>
            <ul>
                @foreach ($recommendation as $item)
                    <li>
                        <a
                            href="{{ route('jalur-rute-travel', ['asal' => Str::slug($loop->index < 5 ? $travel[0]['name'] : $travel[1]['name']), 'tujuan' => Str::slug($item['name']), 'asalId' => $loop->index < 5 ? $travel[0]['id'] : $travel[1]['id'], 'tujuanId' => $item['id']]) }}">{{ Str::title('Travel ' . ($loop->index < 5 ? $travel[0]['name'] : $travel[1]['name']) . ' ' . $item['name']) }}</a>
                    </li>
                @endforeach
            </ul>
            {{-- H2 --}}
            <h2>Kelebihan Menggunakan {{ $page }} PP</h2>
            <p>
                Kami menyediakan layanan travel dengan fokus utama pada kepuasan pelanggan. Siap melayani Anda 24 jam sehari
                untuk perjalanan ke berbagai daerah di seluruh Indonesia. Berikut ini beberapa keunggulan yang membuat jasa
                travel kami menjadi pilihan terbaik untuk perjalanan Anda:
            </p>
            <ul>

                <li>Tarif terjangkau dengan opsi negosiasi harga,</li>
                <li>Pembayaran dilakukan setelah Anda sampai di tujuan,</li>
                <li>Fleksibel dengan layanan pembatalan, pengembalian, dan perubahan jadwal,</li>
                <li>Penjemputan langsung dari rumah Anda,</li>
                <li>Tersedia layanan carter sekali jalan maupun pulang-pergi,</li>
                <li>Kendaraan selalu bersih dan dilengkapi AC,</li>
                <li>Layanan travel reguler selama 24 jam,</li>
                <li>Sistem door-to-door untuk keberangkatan dan pulang,</li>
                <li>Perjalanan lebih cepat melalui jalur tol,</li>
                <li>Gratis bonus makan dan minuman.</li>


            </ul>
            {{-- H2 --}}
            <h2>Cara Mudah Memesan Travel</h2>
            <p>
                Proses pemesanan {{ $page }} sangat praktis dan tanpa ribet. Anda tidak perlu datang langsung ke
                garasi; cukup pesan secara online. Layanan pemesanan online kami aktif 24 jam melalui WhatsApp di nomor
                {{ phone() }}. Mohon untuk hanya mengirim pesan chat dan tidak melakukan panggilan suara sembarangan.

            </p>
            <p>Berikut adalah langkah-langkah pemesanan travel secara online: </p>
            <ul>
                <li>Pilih rute perjalanan Anda melalui website kami,</li>
                <li>Klik ikon WhatsApp untuk mulai menghubungi admin,</li>
                <li>Isi data penumpang seperti nama, jenis kelamin, alamat penjemputan, tujuan, dan detail barang bawaan,
                </li>
                <li>Lakukan negosiasi harga jika diperlukan,</li>
                <li>Tunggu jadwal keberangkatan sesuai informasi yang diberikan oleh admin.</li>

            </ul>
            <p>
                Kami selalu menghadirkan promo menarik setiap minggu! Dapatkan diskon hingga 20% per orang.

                Berikut trik untuk mendapatkan promo tersebut:
            <ul>
                <li>Lakukan pemesanan travel di pagi hari sebelum jam 09.00,</li>
                <li>Bagikan pesanan Anda ke media sosial (Instagram, Facebook, dll),</li>
                <li>Kirimkan bukti screenshot kepada admin kami melalui WhatsApp.</li>

            </ul>

            Dengan langkah tersebut, Anda langsung berhak mengklaim diskon spesial dari kami!
            </p>
            {{-- H2 --}}
            <h2>Rekomendasi Jasa {{ $page }}</h2>
            <p>
                Sedang mencari jasa {{ Str::title('Travel ' . $travel[0]['name']) }} atau
                {{ Str::title('Travel ' . $travel[1]['name']) }} terbaik di Indonesia? Tenang, Anda berada di tempat yang
                tepat! {{ Str::upper(env('APP_NAME')) }} siap membantu Anda menemukan agen travel terpercaya yang akan
                mengantar Anda dengan aman dan nyaman sampai tujuan.

            </p>
            <p>
                Setiap layanan travel tentu memiliki keunggulan dan kekurangan tersendiri. Oleh karena itu, penting bagi
                Anda untuk memilih jasa travel yang paling sesuai dengan kebutuhan perjalanan Anda, baik dari segi harga,
                fasilitas, kenyamanan, maupun keamanannya.
            </p>
            {{-- H2 --}}
            <h2>Tips travel agar lebih nyaman dan aman</h2>
            <p>
                Perjalanan dengan jasa travel umumnya menempuh jarak jauh dan memerlukan waktu yang tidak sebentar, terutama
                pada rute yang satu ini. Layanan ini biasanya digunakan untuk mobilitas antar kota, seperti dari
                {{ Str::title($travel[0]['name'] . ' ke ' . $travel[1]['name']) }} maupun sebaliknya,
                {{ Str::title($travel[1]['name'] . ' ke ' . $travel[0]['name']) }}. Bahkan, banyak penumpang memanfaatkan
                travel untuk bepergian antar provinsi hingga lintas pulau, sehingga durasi perjalanan bisa mencapai beberapa
                jam atau lebih.

            </p>
            <p>
                Agar tetap sehat dan bugar selama perjalanan serta tiba di tujuan dengan kondisi prima, ada beberapa hal
                yang perlu Anda persiapkan. Berikut tips yang bisa Anda ikuti:
            </p>
            <ul>
                <li>Pesan tiket jauh-jauh hari untuk mendapatkan harga terbaik dan memastikan ketersediaan tempat duduk.
                </li>
                <li>Konfirmasi ulang jadwal keberangkatan dan titik penjemputan kepada admin sebelum hari H.</li>
                <li>Siapkan identitas diri dan data lengkap saat memesan, seperti nama, alamat jemput, dan nomor yang bisa
                    dihubungi.</li>
                <li>Bawa barang seperlunya dan hindari membawa bawaan berlebihan agar perjalanan lebih nyaman.</li>
                <li>Datang lebih awal ke lokasi penjemputan untuk menghindari keterlambatan.</li>
                <li>Pastikan HP Anda aktif selama perjalanan agar mudah dihubungi oleh sopir atau pihak travel.</li>
                <li>Jaga kebersihan dan kenyamanan bersama selama di dalam kendaraan.</li>
                <li>Jika ada perubahan jadwal, segera hubungi admin untuk penyesuaian.</li>
            </ul>

            {{-- H2 --}}
            <h2>Kesimpulan</h2>

            <p>
                Kami menghadirkan layanan travel dengan harga terjangkau dan berbagai keunggulan, mulai dari pilihan armada
                yang beragam hingga jadwal keberangkatan yang fleksibel. Proses pemesanan juga sangat mudah dan praktis.
                Jadi, tunggu apa lagi? Segera atur perjalanan Anda ke <strong>{{ $page }}</strong> untuk tanggal
                {{ \Carbon\Carbon::now()->addDay(5)->locale('id')->isoFormat('D MMMM YYYY') }}!
            </p>
        </x-layouts.article-left>



        {{-- right --}}
        <x-layouts.article-right>
            <x-booking :page="$page" />
        </x-layouts.article-right>


    </x-layouts.article-section>
@endsection
