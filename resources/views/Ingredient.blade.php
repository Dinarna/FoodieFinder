@extends('layouts.layout')
@section('content')
    <!-- ======= Page Section ======= -->
    <section>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
            </div>
            <div class="row gy-4 ingredient-container">
                <!-- Drag Area -->
                <div class="drag-area">
                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <button>Open Camera</button>
                    <input type="file" hidden>
                </div>

                <!-- Input Box (formerly Search Bar) -->
                <div class="input-box">
                    <form action="{{ route('LandingPage') }}" method="POST">
                        @csrf
                        <input type="text" name="query" placeholder="Input here using English" />
                        <button class="button" type="submit" >Add</button>
                    </form>
                </div>

                <!-- Ingredient List Card -->
                <div class="ingredient-list-container">
                    <div class="ingredient-card">
                        <h2>Ingredient</h2>
                        <ul class="ingredient-list">
                            <span>Carrots<button class="delete-button">Delete</button></span>
                            <span>Broccoli<button class="delete-button">Delete</button></span>
                            <span>Chicken<button class="delete-button">Delete</button></span>
                            <!-- Add more dummy data as needed -->
                        </ul>
                    </div>
                    <div class="search-button-container">
                        <button class="search-button">Search</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Page -->
@endsection
