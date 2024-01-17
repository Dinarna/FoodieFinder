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
                    <header>Drag & Drop to Upload File</header>
                    <span>OR</span>
                    <button>Browse File</button>
                    <input type="file" hidden>
                </div>

                <!-- Input Box (formerly Search Bar) -->
                <div class="input-box">
                    <input type="text" placeholder="Input here using English" />
                    <button class="button">Search</button>
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Page -->
@endsection
