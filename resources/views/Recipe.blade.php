
@extends('layouts.layout')

@section('content')
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
            </div>
            <div class="row gy-4 Nutriens-container">
                <div class="container">
                    <h1 class="form-title">Recipes</h1>
                    <div class="recipe-container">
                        <ul class="recipe-list">
                            @foreach ($recipes as $recipe)
                                <li class="recipe-item">
                                    <img src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}">
                                    <div>
                                        <h2>{{ $recipe['title'] }}</h2>
                                        <p class="nutrition-info">Nutrition: Calories: {{ $recipe['calories'] }}, Protein: {{ $recipe['protein'] }}, Fat: {{ $recipe['fat'] }}, Carbs: {{ $recipe['carbs'] }}</p>
                                        {{-- <a href="{{ route('recipe.show', ['id' => $recipe['id']]) }}" class="custom-btn">VIEW RECIPE</a> --}}
                                        <a href="https://spoonacular.com/{{$recipe['title']}}-{{$recipe['id']}}" target="_blank" class="custom-btn">VIEW RECIPE</a>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Page ======= -->
@endsection
