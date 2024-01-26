<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function index()
    {
        $apiKey = '6210af4414e74fd997a6423f66330df4'; // Ganti dengan kunci API Spoonacular Anda

        $response = Http::get('https://api.spoonacular.com/recipes/random', [
            'apiKey' => $apiKey,
            'number' => 9
            
        ]);

        $recipes = $response->json()['recipes'];


        return view('LandingPage', compact('recipes'));
    }
}
