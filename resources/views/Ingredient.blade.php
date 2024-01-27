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
                    <input type="text" name="query" placeholder="Input here using English" />
                    <button class="button" type="submit" >Add</button>
                </div>

                <!-- Ingredient List Card -->
                <div class="ingredient-list-container">
                    <div class="ingredient-card">
                        <h2>Ingredient</h2>
                        <form action="{{ route('LandingPage') }}" method="POST">
                            @csrf
                            <ul id="ingredient-list">
                                <!-- Add more dummy data as needed -->
                            </ul>
                            <div class="search-button-container">
                                <input class="search-button" type="submit" name="searchButton" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom CSS -->
    <style>
        /* Add this CSS for styling */
        #ingredient-list li {
            list-style: none;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
        }

        .delete-button {
            background-color: #ff5050;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function () {
            // Handler for button click event
            $('.input-box button').on('click', function () {
                // Get the input value
                var inputValue = $('.input-box input').val();

                // Generate a unique name for the input element based on a timestamp (or use any other method)
                var inputName = 'ingredient_' + Date.now();

                // Append the input value to the ingredient list with a delete button
                $('#ingredient-list').append('<li><span name="' + inputName + '">' + inputValue + '</span><button class="delete-button">Delete</button></li>');

                // Clear the input field
                $('.input-box input').val('');

                // Animate the search button to move down
                $('.search-button-container').animate({ marginTop: '20px' }, 300);
            });
        // Handler for delete button click event
        $('#ingredient-list').on('click', '.delete-button', function () {
            $(this).closest('li').remove();
        });

        // Handler for form submission
        $('form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Collect values from the ingredient list
            var ingredientArray = [];
            $('#ingredient-list li').each(function () {
                var name = $(this).find('span').attr('name');
                var value = $(this).find('span').text();
                ingredientArray.push({ name: name, value: value });
            });

            // Add the array to a hidden input field in the form
            var hiddenInput = '<input type="hidden" name="ingredient_array" value=\'' + JSON.stringify(ingredientArray) + '\'>';
            $(this).append(hiddenInput);

            // Submit the form
            $(this).unbind('submit').submit(); // Unbind the current submit handler to prevent recursion
        });
    });
    </script>
@endsection
