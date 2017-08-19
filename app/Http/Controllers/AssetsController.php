<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class AssetsController extends Controller
{
    public function index($img, $h =null,$w =null){
        $url = "http://ktimez.com/uploads/featured/";

        if(!is_null($h) && !is_null($w)){
            $cachedImage = Image::cache(function($image) use ($url,$img,$h,$w) { 
            $image->make($url.$img)->resize($h,$w);
        }, 1, false);
            return response()->make($cachedImage, 200, ['Content-Type' => 'image/jpeg']);
        }
        $cachedImage = Image::cache(function($image) use ($url,$img) { return $image->make($url.$img)->resize(301,201);}, 1, false);
        return response()->make($cachedImage, 200, ['Content-Type' => 'image/jpeg']);
    }
}
