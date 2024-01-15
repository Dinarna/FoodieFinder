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

            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Vegetarian</li>
                    <li data-filter=".filter-product">Vegan</li>
                    <li data-filter=".filter-branding">Pescatarian</li>
                    <li data-filter=".filter-books">Gluten-Free</li>
                    <li data-filter=".filter-books">Low Carb</li>
                </ul><!-- End Filters -->
            </div>

            <div class="row gy-4 portfolio-container">

                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap" href="">
                        <img src="import/assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Item -->
</section>
<!-- ======= End Page ======= -->
@endsection
