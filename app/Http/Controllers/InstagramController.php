<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramController extends Controller
{
    public function index()
    {
        $response = Http::get(config('services.unsplash.api_url').'photos', ['client_id' => config('services.unsplash.access_key')]);

        $photos = $response->json();

        //dump($photos);

        return view('instagram.index', ['photos' => $photos]);
    }
}
