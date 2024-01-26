@extends('layouts.layout')
@section('content')

    <!-- ======= Page Section ======= -->
    <section id="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
            </div>
            <button id="back-btn" onclick="goBack()">&laquo; Previous</button>
            <div class="row gy-4 Nutriens-container detailrecipe">
                <div class="container detailrecipe">
                    <h1 class="form-title larger-title">Delicious Recipe</h1>

                    <div class="recipe-info">
                        <!-- Left column with photo and nutrition information -->
                        <div class="left-column">
                            <img src="import/assets/img/portfolio/branding-1.jpg" alt="Recipe Photo"
                                class="recipe-img detailrecipe" />
                            <ul class="nutrition-info detailrecipe">
                                <h4>Nutrients:</h4>
                                <li>Calories: 300</li>
                                <li>Protein: 15g</li>
                                <li>Fat: 10g</li>
                                <li>Carbohydrates: 25g</li>
                                <li>Fiber: 5g</li>
                                <li>Sugar: 10g</li>
                            </ul>
                        </div>

                        <!-- Right column with recipe details -->
                        <div class="right-column detailrecipe">
                            <p class="recipe-description detailrecipe">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p class="cooking-time detailrecipe">Cooking Time: 30 minutes</p>
                            <p class="origin detailrecipe">Origin: Country Name</p>

                            <!-- Ingredients List -->
                            <div class="ingredients-list detailrecipe">
                                <h3 class="section-title">Ingredients:</h3>
                                <ul>
                                    <li>Ingredient 1: 1 cup</li>
                                    <li>Ingredient 2: 200g</li>
                                    <li>Ingredient 3: 2 cloves of garlic, minced</li>
                                    <li>Ingredient 4: Salt and pepper to taste</li>
                                    <!-- Add more ingredients as needed -->
                                </ul>
                            </div>

                            <!-- Instructions -->
                        <div class="instructions detailrecipe">
                                <h3 class="section-title">Instructions:</h3>
                                <ol>
                                    <li>Step 1: Lorem ipsum dolor sit amet.</li>
                                    <li>Step 2: Consectetur adipiscing elit.</li>
                                    <li>Step 3: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Step 4: Ut enim ad minim veniam.</li>
                                    <!-- Add more steps as needed -->
                                </ol>
                            </div>

                            <!-- Tips -->
                            <div class="tips detailrecipe">
                                <h3 class="section-title">Tips:</h3>
                                <p>Tip 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Tip 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <!-- Add more tips as needed -->
                            </div>

                            <!-- Serving Suggestions -->
                            <div class="serving-suggestions detailrecipe">
                                <h3 class="section-title">Serving Suggestions:</h3>
                                <p>Serve with a side of salad or rice for a complete meal.</p>
                                <!-- Add more serving suggestions as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page -->

@endsection
