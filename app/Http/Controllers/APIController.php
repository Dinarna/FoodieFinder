<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function index()
    {
        $apiKey = env("SPOONACULAR_KEY"); // Ganti dengan kunci API Spoonacular Anda

        $response = Http::get('https://api.spoonacular.com/recipes/random', [
            'apiKey' => $apiKey,
            'number' => 9

        ]);

        $recipes = $response->json()['recipes'];


        return view('LandingPage', compact('recipes'));
    }
}
