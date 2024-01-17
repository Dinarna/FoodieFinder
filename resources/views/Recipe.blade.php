@extends('layouts.layout')
@section('content')

 <!-- Recommendation Recipe Section -->
 <section id="portfolio">
     <div class="container" data-aos="fade-up">
         <div class="section-header">
         </div>

         <div class="recipe-container">
             <button id="back-btn" onclick="goBack()">&laquo; Previous</button>
             <ul class="recipe-list">
                 <!-- Repeat the following li structure for each recipe -->
                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/branding-1.jpg" alt="Dried Cherry-Almond Scones">
                     <div>
                         <h2>Dried Cherry-Almond Scones</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 1/2 teaspoon almond extract, 1/2 cup chopped toasted almonds, 1 tablespoon
                             baking powder, 1/2 teaspoon baking soda, 1 cup dried cherries, 2 large eggs, 500g Plain
                             flour, sifted, 1/2 tsp Salt, 2 tbsp Sugar, 6 tablespoons unsalted butter, cut into pieces,
                             2/3 cup buttermik, 2/3 cup buttermik</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>
                 <!-- Repeat the above li structure for other recipes -->
                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/branding-1.jpg" alt="Creamy Porcini Mushroom Polenta">
                     <div>
                         <h2>Creamy Porcini Mushroom Polenta</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 1 tablespoon butter, 1 cup porcini mushrooms (dried or fresh), 1/2 cup heavy
                             cream (or until desired consistency), 1 cup grated Parmesan cheese (or more to taste), 1
                             cup polenta, Salt to taste, 4 cups water</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>

                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/app-1.jpg" alt="Garlic Lime Grilled Chicken Salad">
                     <div>
                         <h2>Garlic Lime Grilled Chicken Salad</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 8 ounces of cooked refrigerated black beans, 1/2 teaspoon black pepper, 1 1/2
                             pounds of thin chicken breast, 1/2 teaspoon cilantro, 3/4 teaspoon cumin, 8 ounces of
                             frozen corn, 1 teaspoon minced garlic, 3/4 teaspoon kosher salt, 2 limes, shredded Mexican
                             cheese, 2 tablespoons olive oil, 1 teaspoon minced onions, 1 orange, 3/4 teaspoon oregano,
                             2 red peppers, 1 bag romaine lettuce, 1 tablespoons vinegar</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>

                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/product-1.jpg" alt="Oreo Mini Cheesecake">
                     <div>
                         <h2>Oreo Mini Cheesecake</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 250g Cream cheese, 150g Whipping cream, 1 tsp Vanilla extract, 2 Eggs (70g
                             each), separated, a pinch of cream of tartar, 60g Sugar, 1 tube of Oreo (137g)</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>

                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/branding-1.jpg" alt="Black Lentil and Couscous Salad">
                     <div>
                         <h2>Black Lentil and Couscous Salad</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 2 cups couscous, cooked, 2 cups black lentils, cooked, 1 teaspoon ground cumin,
                             1/2 teaspoon cayenne pepper, 1/2 teaspoon paprika, cup almond flakes, toasted, cup raisins,
                             3 tablespoons fresh parsley, chopped, 2 1/2 tablespoons fresh mint, chopped, 1/4 cup olive
                             oil, 1/4 cup apple cider vinegar, 2 tablespoons Dijon mustard, 1 Zest of orange, 1/2 Juice
                             of orange, 3 tablespoons honey, 3 ounces feta</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>

                 <li class="recipe-item">
                     <img src="import/assets/img/portfolio/books-1.jpg" alt="Avocado Chicken Parmigiana">
                     <div>
                         <h2>Avocado Chicken Parmigiana</h2>
                         <p class="nutrition-info">Nutrition: ...</p>
                         <p>Ingredients: 220 grams (1/2 pound) Chicken breast fillet, halved lengthways, 30 grams (1/4
                             cup) All-purpose flour, 1 Egg, lightly beaten, 100 grams (1 3/4 cup) Dried breadcrumbs,
                             Olive oil, 4 tablespoons Tomato pasta sauce, 1/2 Avocado, sliced, 2 tablespoons Parmesan
                             cheese, Salad leaves, to serve</p>
                         <a href="#" class="custom-btn">VIEW RECIPE</a>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </section>
 <!-- End Recommendation Recipe Section -->

 @endsection
