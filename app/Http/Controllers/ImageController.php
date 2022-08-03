<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public static function createThumbnail($route,$w,$h)
    {
        $img = Image::make(str_replace("public", "storage", $route));
        $thumb=$img->resize($w, $h);
        $path = 'public/course/flyers/thumbnails/'.$thumb->basename;
        Storage::put($path, (string) $thumb->encode());
    }
}
