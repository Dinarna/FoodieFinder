@extends('layouts.layout')

@section('content')
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
            </div>
            <div class="row gy-4 Nutriens-container">
                <div class="container">
                    <h1 class="form-title">Search By Nutriens</h1>
                    <form action="{{ route('nutrients') }}" method="POST">
                        @csrf
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="carbohydrates">Carbohydrates</label>
                                <input type="text" id="carbohydrates" name="carbohydrates"
                                    placeholder="Enter Max Carbohydrates By gram" />
                            </div>
                            <div class="user-input-box">
                                <label for="protein">Protein</label>
                                <input type="text" id="protein" name="protein" placeholder="Enter Max Protein By gram" />
                            </div>
                            <div class="user-input-box">
                                <label for="fat">Fat</label>
                                <input type="text" id="fat" name="fat"
                                    placeholder="Enter Max Fat By milligrams" />
                            </div>
                            <div class="user-input-box">
                                <label for="calories">Calories</label>
                                <input type="text" id="calories" name="calories" placeholder="Enter Max Calories By gram" />
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <input type="submit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Page ======= -->
@endsection
