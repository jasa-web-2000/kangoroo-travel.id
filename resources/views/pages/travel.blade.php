@extends('app')
@section('content')
    @php

        $asal = Str::slug($travel[0]['name']);
        $asalId = $travel[0]['id'];
        $tujuan = Str::slug($travel[1]['name']);
        $tujuanId = $travel[1]['id'];
    @endphp

    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <x-layouts.article-section>
        {{-- left --}}
        <x-layouts.article-left class="col-span-full lg:col-span-6 lg:pr-24">
            {{-- @dd($travel) --}}
            <img src="{{ $thumbnail }}" alt="{{ $title }}" title="{{ $title }}">

            <p>
                <a title="{{ $page }}"
                    href="{{ route('jalur-rute-travel', [
                        'asal' => Str::slug($travel[0]['name']),
                        'asalId' => $travel[0]['id'],
                        'tujuan' => Str::slug($travel[1]['name']),
                        'tujuanId' => $travel[1]['id'],
                    ]) }}"><strong>{{ $page }}</strong>
                </a>adalah
                layanan perjalanan transportasi yang membantu anda bepergian
                ke luar kota atau bahkan ke luar provinsi dengan biaya relatif
                murah, jadwal 24 jam, dan pastinya nyaman.
            </p>

            <p>
                Layanan travel door to door kini telah tersedia di banyak kota yang
                ada di Indonesia. Seperti di daerah {{ Str::title($travel[0]['name']) }} ataupun di daerah
                {{ Str::title($travel[1]['name']) }}. Kalo kami, hanya fokus di seluruh Kecamatan,
                Kota/Kabupaten, hingga Provinsi yang ada di Pulau Jawa dan Bali.
            </p>

            <p>
                Jika anda berasal dari {{ Str::title($travel[0]['name']) }}, anda bisa langsung saja menuju
                garasi kami. Anda bisa komunikasi langsung kepada driver dan admin
                untuk memastikan. Namun untuk daerah {{ Str::title($travel[1]['name']) }}, kami hanya
                melayani secara online saja.
            </p>

            <p>
                Jarak dari {{ Str::title($travel[0]['name']) }} menuju {{ Str::title($travel[1]['name']) }} lumayan jauh.
                Jadi
                pastikan anda tidak salah memilih jasa travel. Kami sangat
                memprioritaskan kenyamanan dan keselamatan para pelanggan kami.
            </p>

            <h2>Penyedia Layanan {{ $title }} Terbaik</h2>

            <img src="{{ asset('img/tour-travel.jpg') }}" title="Layanan Travel dari {{ env('APP_NAME') }}"
                alt="Layanan
                Travel dari {{ env('APP_NAME') }}">


            <p>
                <a href="{{ route('beranda') }}" title="{{ route('beranda') }}">
                    {{ env('APP_NAME') }}</a>
                adalah penyedia jasa travel dengan rute seluruh daerah di Pulau Jawa
                dan Bali. Berusaha untuk terus menjangkau banyak rute agar menjadi
                jasa transportasi terbaik No. 1 di Indonesia. Dan membantu semua
                pelanggan yang ingin bepergian dengan biaya yang murah.
            </p>

            <p>
                Pada tahun 2018, kami sudah mulai membuka layanan pada rute
                {{ Str::title($travel[0]['name']) }} ke {{ Str::title($travel[1]['name']) }} ataupun sebaliknya. Layanan
                yang
                pastinya sangat berkualitas dan terbaik dibanding jasa travel
                lainnya. Hingga saat ini, layanan pada rute ini masih berjalan
                dengan normal.
            </p>

            <h2>Keunggulan Menggunakan Jasa Travel</h2>

            <p>
                Setiap jasa transportasi tentunya memiliki keunggulan tersendiri.
                Namun anda harus menyesuaikan dengan kebutuhan anda dan memilih yang
                terbaik. Jika banyak fasilitas tapi harga tidak cocok, ya mending
                jangan. Jika harga murah namun pelayanan buruk, yang mending jangan
                juga!
            </p>

            <p>
                Berikut kami infokan keunggulan menggunakan jasa travel dari
                {{ env('APP_NAME') }}:
            </p>

            <h3>Harga Murah dan Terjangkau</h3>

            <p>
                Harga murah dan terjangkau kok. Kami tidak bisa melampirkan harga di
                sini. Sebaiknya anda menghubungi admin dan melakukan negosiasi
                langsung. Dengan begitu anda tidak perlu mengeluarkan biaya yang
                banyak.
            </p>

            <p>
                Harga {{ $title }} yang kami tawarkan biasanya sudah termasuk biaya
                lainnya, seperti:
            </p>

            <ul>
                <li>Bensin travel</li>
                <li>Free bagasi 15 kg</li>
                <li>Tiket tol jika ada tol</li>
                <li>Bonus makan untuk rute tertentu</li>
                <li>Bonus minum 1 botol dan snack</li>
                <li>Tiket tempat wisata jika tujuan anda ke suatu objek wisata</li>
            </ul>

            <p>
                Nah sudah lumayan murah kan? Jadi tunggu apa lagi, ayo pesan travel
                anda sekarang juga dengan menghubungi admin kami pada nomor whatsapp
                <a title="whatsapp {{ phone() }}" target="_blank" href="{{ whatsapp() }}"
                    rel="nofollow noreferrer noindex">
                    {{ phone() }}</a>.
            </p>

            <h3>Harga Travel Didiskon Hingga 10%</h3>

            <p>
                Pada hari-hari tertentu, kami akan memberikan berbagai promo menarik
                yang bisa anda klaim. Salah satunya adalah dikson travel sampai
                dengan 10% per tiket. Promo hanya berlaku untuk 1 tiket ya. Untuk
                mendapatkan promo, silahkan pantau website kami secara berkala, kami
                akan memberikan informasi lebih lanjut.
            </p>

            <h3>Sistem Door to Door</h3>
            <p>
                Terlalu ribet jika berangkat harus datang ke garasi travel. Tenang
                saja kami kini memberikan <strong><a target="_blank" title="{{ $page }}"
                        href="https://traveljawa.web.id/travel/dari-{{ $asal }}/ke-{{ $tujuan }}/{{ $asalId }}/{{ $tujuanId }}"><strong>{{ $page }}</strong>
                    </a></strong> dengan sistem
                door to door. Kami akan jemput pelanggan langsung dari pintu ke
                pintu. Anda tidak akan diminta tambahan biaya oleh driver. yang
                penting anda telah negosiasikan harga kepada admin ketika melakukan
                pemesanan dan sudah saling setuju.
            </p>

            <h3>Bisa Meminta Pulang Pergi</h3>

            <p>
                Biasanya anda akan hanya diantar sampai tujuan, kemudian driver
                pulang atau mengantar pelanggan lain. Tapi jika anda tidak mau ribet
                melakukan pemesanan ulang Travel {{ Str::title($travel[1]['name']) }} untuk kepulangan,
                maka bisa langsung request saat itu juga. Harga akan sama dengan
                harga ketika berangkat dari {{ Str::title($travel[0]['name']) }}.
            </p>

            <p>
                Cuman, kami tidak langsung mengantar anda pulang karena kami juga
                masih memiliki pelanggan lain yang masih ada di mobil. Jadi, kami
                bisa melakukan pengantaran untuk pulang jika sudah lebih dari 10 jam
                ketika anda tiba.
            </p>

            <p>
                Contoh anda tiba di {{ Str::title($travel[1]['name']) }} pada jam 10 pagi. Kami hanya
                bisa mengantar anda pulang dari {{ Str::title($travel[1]['name']) }} ke
                {{ Str::title($travel[0]['name']) }}
                pada jam 8 malam. Jadi jaraknya sekitar 10 jam.
            </p>

            <h3>Sopir Profesional</h3>

            <p>
                Setiap sopir yang kami miliki telah berpengalaman dalam membawa unit
                ke berbagai daerah di Pulau jawa dan Bali. Mereka juga pasti sudah
                bersertifikat dan berlisensi. Semua sopir bahkan admin harus
                mengikuti SOP yang dimiliki perusahaan. Mereka dituntut ramah dan
                jujur kepada setiap pelanggan.
            </p>

            <p>
                Jika anda mendapati sopir kami membawa mobil dengan ugal-ugalan,
                bersikap tidak sopan, meminta/meminjam uang, maka sebaiknya anda
                melaporkannya pada nomor whatsapp {{ phone() }}.
            </p>

            <h3>Banyak Pilihan Rute Travel</h3>

            <p>
                Tak hanya rute {{ $page }}, kami juga memiliki banyak
                <a href="{{ route('arsip-travel') }}" title="rute travel">
                    rute travel</a> lainnya. Berikut daftar rute travel terbaik:
            </p>

            @foreach ($recommendation as $item)
                <li>
                    <a
                        href="{{ route('jalur-rute-travel', ['asal' => Str::slug($loop->index < 5 ? $travel[0]['name'] : $travel[1]['name']), 'tujuan' => Str::slug($item['name']), 'asalId' => $loop->index < 5 ? $travel[0]['id'] : $travel[1]['id'], 'tujuanId' => $item['id']]) }}">{{ Str::title('Travel ' . ($loop->index < 5 ? $travel[0]['name'] : $travel[1]['name']) . ' ' . $item['name']) }}</a>
                </li>
            @endforeach

            <img class="mt-5"
                src="{{ route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($travel[1]['name']), 'tujuan' => Str::slug($travel[0]['name']), 'asalId' => $travel[1]['id'], 'tujuanId' => $travel[0]['id']]) }}"
                alt="Travel {{ $travel[1]['name'] }} {{ $travel[0]['name'] }}"
                title="Travel {{ $travel[1]['name'] }} {{ $travel[0]['name'] }}">




            <h2>Jadwal Keberangkatan Travel</h2>

            <p>
                Kami akan berusaha membuat jadwal sefleksibel mungkin. Anda tidak
                perlu khawatir terlambat jika menggunakan jasa travel dari kami.
                Memilih {{ env('APP_NAME') }} sangat rekomendasi karena memiliki jadwal keberangkatan
                setiap hari. Untuk jamnya sendiri sangat bervariasi tapi tetap 24
                jam. untuk lebih lanjut silahkan tanyakan kepada admin.
            </p>

            <p>
                Tapi, jika anda memesan carter pada <a target="_blank" title="Travel {{ $travel[1]['name'] }} {{ $travel[0]['name'] }}"
                    href="https://traveljawa.web.id/travel/dari-{{ $tujuan }}/ke-{{ $asal }}/{{ $tujuanId }}/{{ $asalId }}"><strong>
                        Travel {{ $travel[1]['name'] }} {{ $travel[0]['name'] }}
                    </strong>
                </a>, anda
                bisa memilih jam keberangkatan kapan saja yang anda mau. Carter
                hampir mirip seperti rental mobil plus driver. Jadi semua kebutuhan
                anda akan kami sanggupi.
            </p>

            <h2>Armada/Unit/Mobil Travel</h2>

            <p>
                Banyak armada/unit/mobil yang kami miliki, mulai dari Hiace, Elf
                Long, Innova, Avanza, Xenia, Calya, dan lain-lain. Untuk jasa travel
                reguler, anda tidak bisa memilih mobil yang akan digunakan, namun
                anda dijamin akan tetap nyaman selama perjalanan.
            </p>

            <p>
                Semua mobil tersebut telah dilengkapi dengan ac. Tidak akan merasa
                panas selama perjalanan. Sopir maupun pelanggan juga tidak boleh
                merokok. Kursi juga sudah bisa direbahkan (Reclining seat), jadi
                bisa anda sesuaikan untuk kenyamanan.
            </p>

            <h2>Pesan Tiket {{ $page }} Sekarang!</h2>

            <p>
                Pemesanan travel sangat mudah. Anda bisa melakukannya secara daring.
                Cukup hubungi nomor whatsapp {{ phone() }} dan anda akan
                disuruh untuk mengisi form reservasi. Simpan form reservasinya
                sebaik mungkin. Anda akan diminta oleh driver ketika menaiki mobil.
            </p>

            <p>
                Khusus pemesanan untuk Hari
                {{ \Carbon\Carbon::now()->addDay()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}, anda
                akan mendapatkan diskon 10%. Cukup dengan mengklik tombol whatsapp di kanan bawah layar maka
                anda otomatis diarahkan ke whatsapp admin kami.
            </p>

            <p>
                Jadi tunggu apa lagi, pesan travel sekarang juga. Jangan sampai
                kehabisan tiket. Travel ini memiliki sistem door to door, pulang
                pergi, 24 jam, via tol, bonus makan. Dengan <strong>{{ $title }}</strong>
                Kami siap antar jemput anda kapanpun anda mau.
            </p>
        </x-layouts.article-left>



        {{-- right --}}
        <x-layouts.article-right>
            <x-booking :page="$page" />
        </x-layouts.article-right>


    </x-layouts.article-section>
@endsection
