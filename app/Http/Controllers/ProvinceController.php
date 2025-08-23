<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProvinceController extends Controller
{

    public static function all()
    {
        $jsonFilePath = storage_path('/data/provinces.json');

        $json = File::get($jsonFilePath);
        return collect(json_decode($json, true))->values();
    }
}
