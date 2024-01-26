<!--navbar section -->
<header class="header">
    <div class="logo"><a href="/Home"><img src="import/assets/img/Logo FoodieFinder.png" height="36"></a>
    </div>

    <input type="checkbox" id="check">
    <label for="check" class="icons">
        <i class="bx bx-menu" id="menu-icon"></i>
        <i class="bx bx-x" id="close-icon"></i>
    </label>

    <nav class="navbar">
        <a href="/Ingredient" style="--i:0">Search By Ingredients</a>
        <a href="/Nutrients" style="--i:1">Search By Nutrients</a>
        <div class="icons3" style="--i:2">
            <a href="Profile.html"class="bx bxs-user-circle" style="--i:2"></a>
        </div>
    </nav>

    <form action="{{ route('logout') }}" method="POST">
    <div class="icons2" id="profileDropdown">
        <i class="bx bxs-user-circle" id="profileIcon"></i>
        <div class="dropdown-content" id="dropdownContent">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </div>
    </div>
</form>
</header>
<!-- End Navbar -->
