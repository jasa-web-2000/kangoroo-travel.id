<?php

namespace App\Http\Controllers;

use claviska\SimpleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ThumbnailController extends Controller
{
    public static function generateThumbnail($text)
    {
        $lines = $text;
        $image = new SimpleImage('img/bg-thumbnail.jpg');

        if (!is_array($text)) {
            $wrappedText = wordwrap($text, 20, "\n");
            $lines = explode("\n", $wrappedText);
        }

        foreach ($lines as $key => $item) {
            $image->text($item, [
                'color' => '#fff',
                'size' => 100,
                'yOffset' => -150 + ($key * 120),
                'fontFile' => public_path('font/Poppins-Regular.ttf'),
            ]);
        }


        $image->text(phone(), [
            'color' => '#000',
            'size' => 65,
            'yOffset' => 305,
            'fontFile' => public_path('font/Poppins-Regular.ttf'),
        ]);

        $imageData = $image->toDataUri(null, 15);

        return response()->make(file_get_contents($imageData), 200, [
            'Content-Type' => 'image/jpeg',
        ]);
    }
}
