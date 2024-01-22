<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function handleSearch(Request $request)
    {
        $apiKey = '6210af4414e74fd997a6423f66330df4'; // Replace with your Spoonacular API key
        $apiUrl = "https://api.spoonacular.com/recipes/complexSearch";

        $response = Http::get($apiUrl, [
            'apiKey' => $apiKey,
            'query' => $request->input('query'),
            // Add other parameters as needed for the Spoonacular API
        ]);

        $recipes = $response->json()['results'];

        return view('LandingPage', compact('recipes'));
    }
}
