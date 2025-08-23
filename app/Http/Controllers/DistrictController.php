<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DistrictController extends Controller
{
    public static function all()
    {
        $jsonFilePath = storage_path('/data/districts.json');

        $json = File::get($jsonFilePath);
        return collect(json_decode($json, true));
    }
}
