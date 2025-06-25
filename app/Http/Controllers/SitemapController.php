<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class SitemapController extends Controller
{
    public function all_data()
    {
        $province = collect(Province::all());
        $city = collect(City::all());
        $district = collect(District::all());
        $data = $province->merge($city)->merge($district);

        return $data;
    }

    public function xml($data)
    {
        $xml = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        foreach ($data as $url) {
            $urlElement = $xml->addChild('url');
            $urlElement->addChild('loc', $url);
        }

        $xmlString = $xml->asXML();

        return response($xmlString, 200)
            ->header('Content-Type', 'application/xml');
    }

    public function static_sitemap()
    {

        $data = [
            route('beranda'),
            route('arsip-travel'),
            route('arsip-agen'),
            route('travel-sitemap'),
            route('agen-sitemap'),
        ];

        return $this->xml($data);
    }

    public function agen_sitemap()
    {
        $data = $this->all_data();

        $res = $data->map(function ($item) {
            return route('agen-travel', [
                'asal' => Str::slug($item->name),
                'asalId' => $item->code,
            ]);
        });


        return $this->xml($res);
    }


    public function travel_sitemap()
    {
        $data = $this->all_data();

        $res = $data->map(function ($item) {
            return route('single-travel-sitemap', [
                'asal' => Str::slug($item->name),
                'asalId' => $item->code,
            ]);
        });

        return $this->xml($res);
    }

    public function single_travel_sitemap($asal, $asalId)
    {

        $data = $this->all_data();

        $res = $data->filter(function ($item) use ($asalId) {
            return $asalId != $item->code;
        })->values()->map(function ($item) use ($asal, $asalId) {
            return route('jalur-rute-travel', [
                'asal' => $asal,
                'asalId' => $asalId,
                'tujuan' => Str::slug($item->name),
                'tujuanId' => $item->code,
            ]);
        });

        return $this->xml($res);
    }
}
