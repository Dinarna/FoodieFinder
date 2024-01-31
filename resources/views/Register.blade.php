<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="{{ asset('import/assets/css/login.css') }}" rel="stylesheet">
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{route('login')}}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password"
                        type="password"
                        name="password"
                        required autocomplete="current-password" placeholder="Password"/>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                    <input type="submit" value="Login" class="btn solid"/>
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                    <br>
                    <p class="social-text">Or Sign in with google</p>
                    <div class="social-media">
                        <a href="{{ route('google-auth') }}" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form method="POST" action="{{ route('register') }}"class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password_confirmation"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Current Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up"/>
                    <p class="social-text">Or Sign up with google</p>
                    <div class="social-media">
                        <a href="{{ route('google-auth') }}" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome back! </h3>
                    <p>
                        We're thrilled to have you back on board. Get ready to embark on another journey of delicious
                        and nutritious discoveries. Let's explore a world of healthy choices together
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>

                <img src="import/assets/img/login/icon_login.png" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Welcome to a world of wholesome flavors! Signing up is the first step towards a healthier,
                        tastier you. Join us on a culinary adventure where every bite is a step towards well-being.
                        Let's get started on your nourishing journey!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="import/assets/img/login/icon_sign_up.png" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="{{ asset('import/assets/js/app.js') }}"></script>
</body>

</html>
