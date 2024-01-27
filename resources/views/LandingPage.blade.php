@extends('layouts.layout')

@section('content')
    <!-- ======= Page Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Recommendation Recipe</h2>
                <p>Discover a world of culinary delights tailored to your dietary preferences. From vibrant vegetarian
                    options to plant-based vegan choices, fresh pescatarian selections, gluten-free delights, and
                    satisfying low-carb alternatives — our menu has something for everyone. Indulge in diverse flavors
                    that celebrate health without compromising on taste. Bon appétit!</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 portfolio-container">
                @if(count($recipes) > 0)
                    @foreach($recipes as $recipe)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ $recipe['image'] }}" class="img-fluid" alt="{{ $recipe['title'] }}" style="width: 100%; height: 100%;">
                                <div class="portfolio-info">
                                    <h4>
                                        <a href="{{ route('recipe.show', ['id' => $recipe['id']]) }}" title="{{ $recipe['title'] }}">
                                            {{ $recipe['title'] }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- End Item -->
                    @endforeach
                @else
                    <p>No recipes found.</p>
                @endif
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Page ======= -->
@endsection
