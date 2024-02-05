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
            <a href="{{ route('logout') }}" class="bi bi-box-arrow-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Log out
            </a>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

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
