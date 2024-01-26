<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function handleSearch(Request $request)
    {
        $apiKey = env('SPOONACULAR_KEY'); // Replace with your Spoonacular API key
        $apiUrl = "https://api.spoonacular.com/recipes/complexSearch";

        $response = Http::get($apiUrl, [
            'apiKey' => $apiKey,
            'query' => $request->input('query'),
            // Add other parameters as needed for the Spoonacular API
        ]);

        $recipes = $response->json()['results'];

        return view('LandingPage', compact('recipes'));
    }

    public function recipeByNutrients(Request $request)
    {
        $apiKey = env('SPOONACULAR_KEY'); // Replace with your Spoonacular API key
        $apiUrl = "https://api.spoonacular.com/recipes/findByNutrients";
        $maxCarbs = $request->input('carbohydrates', 0);
        $maxProtein = $request->input('protein', 0);
        $maxFat = $request->input('fat', 0);
        $maxCalories = $request->input('calories', 0);

        $response = Http::get($apiUrl, [
            'apiKey' => $apiKey,
            'maxCarbs' => $maxCarbs,
            'maxProtein' => $maxProtein,
            'maxFat' => $maxFat,
            'maxCalories' => $maxCalories

            // Add other parameters as needed for the Spoonacular API
        ]);

        $recipes = $response->json();


        return view('Recipe', compact('recipes'));
    }
    public function show($id)
    {
        $apiKey = env('SPOONACULAR_KEY');
        $response = Http::get("https://api.spoonacular.com/recipes/{$id}/analyzedInstructions", [
            'apiKey' => $apiKey
        ]);

        if ($response->successful()) {
            $instructions = $response->json();
            // Lakukan apapun yang Anda inginkan dengan data instruksi
            return view('DetailRecipe', ['instructions' => $instructions]);
        } else {
            // Tangani jika terjadi kesalahan saat mengambil data dari API
            return back()->withError('Failed to fetch recipe instructions.');
        }
    }
}
