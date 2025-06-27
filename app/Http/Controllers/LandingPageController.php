<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class LandingPageController extends Controller
{
    public $province;
    public $city;
    public $featured;
    public $agent;

    public function __construct()
    {

        $this->province = Province::whereIn("code", [31, 32, 33, 34])->get();
        $this->city = City::whereIn("code", [3273, 3303, 3578, 5171])->get();
        $this->featured = [
            $this->province[1],
            $this->province[0],
            $this->province[2],
            $this->province[1],
            $this->province[2],
            $this->province[3],
            $this->province[2],
            $this->city[2],
            $this->city[0],
            $this->province[2],
            $this->province[2],
            $this->city[1],
            $this->province[3],
            $this->city[2],
            $this->city[0],
            $this->city[2],
            $this->province[2],
            $this->province[0],
            $this->province[2],
            $this->city[3],
            $this->city[3],
            $this->city[2],
            $this->province[1],
            $this->city[2],
        ];
        $this->agent = $this->province->merge($this->city);
    }


    public function beranda()
    {

        return view('pages.home', [
            'title' => Str::title('Jasa Travel Terbaik No. 1 Seluruh Indonesia'),
            'desc' => Str::title('Jasa travel terbaik No. 1 di Indonesia. Nikmati perjalanan aman dan nyaman ke berbagai destinasi favorit di seluruh Indonesia.'),
            'featured' => array_chunk($this->featured, 2),
            'agent' => $this->province->merge($this->city),

        ]);
    }

    public function kontak()
    {
        return view('pages.kontak', [
            'title' => Str::title('Hubungi Kami Untuk Pemesanan Travel'),
            'desc' => Str::title('Pesan travel mudah dan cepat! Layanan antar jemput, carter drop/pp, dan jadwal fleksibel. Hubungi kami sekarang juga.'),
        ]);
    }

    public function galeri()
    {
        return view('pages.galeri', [
            'title' => Str::title('Hubungi Kami Untuk Pemesanan Travel'),
            'desc' => Str::title('Pesan travel mudah dan cepat! Layanan antar jemput, carter drop/pp, dan jadwal fleksibel. Hubungi kami sekarang juga.'),
        ]);
    }

    public function cariTravel(Request $request)
    {
        $validation = $request->validate([
            "asal_provinsi" => "required|integer|exists:indonesia_provinces,code",
            "asal_kotakab" => "nullable|integer|exists:indonesia_cities,code",
            "asal_kecamatan" => "nullable|integer|exists:indonesia_districts,code",

            "tujuan_provinsi" => "required|integer|exists:indonesia_provinces,code",
            "tujuan_kotakab" => "nullable|integer|exists:indonesia_cities,code",
            "tujuan_kecamatan" => "nullable|integer|exists:indonesia_districts,code",
        ]);

        $dataRes = [
            Str::slug(District::where('code', $request->asal_kecamatan)->first()?->name ??
                City::where('code', $request->asal_kotakab)->first()?->name ??
                Province::where('code', $request->asal_provinsi)->first()?->name) ?? NULL,

            Str::slug(District::where('code', $request->tujuan_kecamatan)->first()?->name ??
                City::where('code', $request->tujuan_kotakab)->first()?->name ??
                Province::where('code', $request->tujuan_provinsi)->first()?->name) ?? NULL,

            $request->asal_kecamatan ?? $request->asal_kotakab ?? $request->asal_provinsi ?? 0,

            $request->tujuan_kecamatan ?? $request->tujuan_kotakab ?? $request->tujuan_provinsi ?? 0,
        ];

        return redirect()->route('jalur-rute-travel', $dataRes);
    }

    public function cariAgen(Request $request)
    {
        $validation = $request->validate([
            "asal_provinsi" => "required|integer|exists:indonesia_provinces,code",
            "asal_kotakab" => "nullable|integer|exists:indonesia_cities,code",
            "asal_kecamatan" => "nullable|integer|exists:indonesia_districts,code",
        ]);

        $dataRes = [
            Str::slug(District::where('code', $request->asal_kecamatan)->first()?->name ??
                City::where('code', $request->asal_kotakab)->first()?->name ??
                Province::where('code', $request->asal_provinsi)->first()?->name) ?? NULL,

            $request->asal_kecamatan ?? $request->asal_kotakab ?? $request->asal_provinsi ?? 0,
        ];

        return redirect()->route('agen-travel', $dataRes);
    }

    public function jalurRuteTravel($asal, $tujuan, $asalId, $tujuanId)
    {
        $asalRes = $this->checkCode($asalId);
        $tujuanRes = $this->checkCode($tujuanId);

        if ((Str::slug($asalRes->name) != $asal || Str::slug($tujuanRes->name) != $tujuan) || $asalId == $tujuanId) {
            abort(404);
        }

        if (Route::currentRouteName() === 'thumbnail-jalur-rute-travel') {
            return ThumbnailController::generateThumbnail(["TRAVEL", $asalRes->name, $tujuanRes->name]);
        }

        $page = Str::title("Travel $asalRes->name $tujuanRes->name");

        $province = Province::whereNotIn('code', [$asalId, $tujuanId])->limit(5)->inRandomOrder()->get();
        $city = City::whereNotIn('code', [$asalId, $tujuanId])->limit(8)->inRandomOrder()->get();
        $district = District::whereNotIn('code', [$asalId, $tujuanId])->limit(12)->inRandomOrder()->get();
        $recommendation = $province->merge($city)->merge($district)->shuffle()->take(9);
        $recommendation->splice(5, 0, [$asalRes]);

        return view('pages.travel', [
            'page' => $page,
            'title' => Str::title("$page Terpercaya " . date('Y')),
            'desc' => Str::title("Jasa $page Hari Ini dengan Jadwal 24 Jam, Harga Terjangkau, Bonus Makan, dan Via Tol"),
            'travel' => [$asalRes, $tujuanRes],
            'recommendation' => $recommendation,
            'thumbnail' => route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($asalRes['name']), 'tujuan' => Str::slug($tujuanRes['name']), 'asalId' => $asalRes['code'], 'tujuanId' => $tujuanRes['code']]),
        ]);
    }

    public function agenTravel($asal, $asalId)
    {
        $asalRes = $this->checkCode($asalId);
        if (Str::slug($asalRes->name) != $asal) {
            abort(404);
        }

        if (Route::currentRouteName() === 'thumbnail-agen-travel') {
            return ThumbnailController::generateThumbnail(["AGEN TRAVEL", $asalRes->name]);
        }

        $page = Str::title("Agen Travel $asalRes->name");

        return view('pages.agen', [
            'page' => $page,
            'title' => Str::title("7 $page Murah " . date('Y')),
            'desc' => Str::title("7 Rekomendasi $page Profesional Terbaik No. 1 di tahun " . date('Y') . " dengan harga murah"),
            'agent' => $asalRes,
            'thumbnail' => route('thumbnail-agen-travel', ['asal' => Str::slug($asalRes->name), 'asalId' => $asalRes->code]),
        ]);
    }


    public function checkCode($code)
    {
        // $name = Str::slug($name);
        if ($code <= 92) {
            $res = Province::where('code', $code)->firstOrFail();
        } elseif ($code <= 110101) {
            $res = City::where('code', $code)->firstOrFail();
        } else {
            $res = District::where('code', $code)->firstOrFail();
        }
        return $res;
    }

    public function arsipTravel()
    {
        return view('pages.arsip-travel', [
            'title' => "Arsip Travel Termurah " . date('Y'),
            'desc' => config('app.name') . " Menawarkan Travel Termurah dan Terbaik No. 1 di Pulau Sumatera, Jawa, dan Bali",
            'featured' => array_chunk($this->featured, 2),
        ]);
    }

    public function arsipAgen()
    {
        return view('pages.arsip-agen', [
            'title' => "Arsip Agen Travel Termurah " . date('Y'),
            'desc' => "Arsip Agen Travel Termurah dan Terbaik No. 1 di Indonesia",
            'agent' => $this->province->merge($this->city),
        ]);
    }
}
