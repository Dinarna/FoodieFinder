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
                    <div></div>
                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <div class="flex">
                    <button type="button" onclick="init()">Open Camera</button>
                    <button type="button" onclick="closeCamera()">Close Camera</button>
                    </div>
                    <div id="webcam-container"></div>
                    <div id="label-container" hidden></div>
                    <button type="button" onclick="predictAndAdd()">Scan</button>
                </div>

                <!-- Input Box (formerly Search Bar) -->
                <div class="input-box">
                    <input type="text" name="query" placeholder="Input here using English" />
                    <button class="button" type="submit">Add</button>
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
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script>
        $(document).ready(function () {
            // Handler for button click event
            $('.input-box button').on('click', function () {
                // Get the input value
                var inputValue = $('.input-box input').val();

                // Generate a unique name for the input element based on a timestamp (or use any other method)
                var inputName = 'ingredient_' + Date.now();

                // Append the input value to the ingredient list with a delete button
                $('#ingredient-list').append('<li style="position: relative; padding-right: 40px;">' +
                             '<span name="' + inputName + '">' + inputValue + '</span>' +
                             '<button class="delete-button btn btn-danger" style="position: absolute; right: 0;">Delete</button></li>');
                // $('#ingredient-list').append('<li><span name="' + inputName + '">' + inputValue + '</span><button class="delete-button ">Delete</button></li>');

                // Clear the input field
                $('.input-box input').val('');

                // Animate the search button to move down
                $('.search-button-container').animate({marginTop: '20px'}, 300);
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
                    ingredientArray.push({name: name, value: value});
                });

                // Add the array to a hidden input field in the form
                var hiddenInput = '<input type="hidden" name="ingredient_array" value=\'' + JSON.stringify(ingredientArray) + '\'>';
                $(this).append(hiddenInput);

                // Submit the form
                $(this).unbind('submit').submit(); // Unbind the current submit handler to prevent recursion
            });
        });

        let model, webcam, labelContainer, maxPredictions;

        // Load the image model and setup the webcam
        async function init() {
            const URL = "./my_model/";
            const modelURL = URL + "model.json";
            const metadataURL = URL + "metadata.json";

            // Load the model and metadata
            model = await tmImage.load(modelURL, metadataURL);
            maxPredictions = model.getTotalClasses();

            // Convenience function to setup a webcam
            const flip = true; // whether to flip the webcam
            webcam = new tmImage.Webcam(695, 490, flip); // width, height, flip
            await webcam.setup(); // request access to the webcam
            await webcam.play();
            window.requestAnimationFrame(loop);

            // append elements to the DOM
            document.getElementById("webcam-container").appendChild(webcam.canvas);
            labelContainer = document.getElementById("label-container");
            for (let i = 0; i < maxPredictions; i++) { // and class labels
                labelContainer.appendChild(document.createElement("div"));
            }
        }
        // Fungsi untuk memberhentikan kamera dan membersihkan sumber daya
        async function stopCamera() {
        if (webcam) {
            webcam.stop(); // Memberhentikan kamera
            webcam = null; // Mengosongkan webcam
            document.getElementById("webcam-container").innerHTML = "";
        }
        }

        // Panggil fungsi stopCamera() saat kamera tidak lagi diperlukan
        function closeCamera() {
        stopCamera();
        // Lakukan tindakan lain yang diperlukan setelah menutup kamera
        }
        async function loop() {
            webcam.update(); // update the webcam frame
            await predict();
            window.requestAnimationFrame(loop);
        }

        // Run the webcam image through the image model and display predictions
        async function predict() {
            // Predict can take in an image, video, or canvas HTML element
            const prediction = await model.predict(webcam.canvas);
            for (let i = 0; i < maxPredictions; i++) {
                const classPrediction =
                    prediction[i].className + ": " + prediction[i].probability.toFixed(2);
                labelContainer.childNodes[i].innerHTML = classPrediction;
            }
        }

        // Function to predict and add ingredient
        async function predictAndAdd() {
            const prediction = await model.predict(webcam.canvas);
            // Get the highest probability prediction
            const highestPrediction = prediction.reduce((prev, current) => (prev.probability > current.probability) ? prev : current);
            // Add the predicted label to the ingredient list
            const predictedIngredient = highestPrediction.className;
            // Append the predicted ingredient to the ingredient list with a delete button
            $('#ingredient-list').append('<li style="position: relative; padding-right: 40px;">' +
                                     '<span>' + predictedIngredient + '</span>' +
                                     '<button class="delete-button btn btn-danger" style="position: absolute; right: 0;">Delete</button></li>');        }
    </script>
@endsection
