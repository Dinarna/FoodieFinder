@extends('layouts.layout')

@section('content')
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
            </div>
            <div class="row gy-4 Nutriens-container">
                <div class="container">
                    <h1 class="form-title">Search By Nutriens</h1>
                    <form action="#">
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="carbohydrates">Carbohydrates</label>
                                <input type="text" id="carbohydrates" name="carbohydrates"
                                    placeholder="Enter Carbohydrates By gram" />
                            </div>
                            <div class="user-input-box">
                                <label for="protein">Protein</label>
                                <input type="text" id="protein" name="protein" placeholder="Enter Protein By gram" />
                            </div>
                            <div class="user-input-box">
                                <label for="calcium">Calcium</label>
                                <input type="text" id="calcium" name="calcium"
                                    placeholder="Enter Calcium By milligrams" />
                            </div>
                            <div class="user-input-box">
                                <label for="calories">Sugar</label>
                                <input type="text" id="calories" name="calories" placeholder="Enter Sugar By gram" />
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <input type="submit" value="Search" href="Recipe.html">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Page ======= -->
@endsection
