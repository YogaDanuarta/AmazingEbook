<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<header>
    @guest
        <nav class="d-flex align-items-center position-relative py-2" style="background-color: #AFCAE8">
            <a class="navbar-brand text-decoration-none text-black" href="/"
                style="font-weight: bold; position: absolute; left: 45%; color: black; font-size: 1.5rem;">Amazing
                E-Book</a>
            <div class="nav-button d-flex" style="margin-left: auto; margin-right: 50px; gap: 10px;">
                <button type="button" class="btn" style="background-color: #FADF54;">
                    <a href="/login" style="text-decoration: none; color: black;">{{ __('lang.login') }}</a>
                </button>
                <button type="button" class="btn" style="background-color: #FADF54;">
                    <a href="/register" style="text-decoration: none; color: black;">{{ __('lang.signup') }}</a>
                </button>
            </div>
        </nav>
    @endguest

    @auth
        <nav class="navbar justify-content-between navbar-light" style="background-color: #AFCAE8">
            <a class="navbar-brand text-decoration-none text-black" href="/"
                style="font-weight: bold; position: absolute; left: 45%; color: black;">Amazing
                E-Book</a>
            <div class="nav-button d-flex" style="margin-left: auto; margin-right: 50px; gap: 10px;">
                <button type="button" class="btn" style="background-color: #FADF54;">
                    <a href="/logout" style="text-decoration: none; color: black;">{{ __('lang.logout') }}</a>
                </button>
            </div>
        </nav>
        @if (Auth::user()->role_id == 1)
            <nav class="navbar justify-content-evenly navbar-light" style="background-color: #FADF54; font-weight: bold">
                <a href="/" style="color: black;">{{ __('lang.home') }}</a>
                <a href="/cart" style="color: black;">{{ __('lang.cart') }}</a>
                <a href="/profile" style="color: black;">{{ __('lang.profile') }}</a>
                <a href="/accountmaintenance" style="color: black;">{{ __('lang.accountmaintenance') }}</a>
            </nav>
        @elseif(Auth::user()->role_id == 2)
            <nav class="navbar justify-content-evenly navbar-light" style="background-color: #FADF54; font-weight: bold">
                <a href="/" style="color: black;">{{ __('lang.home') }}</a>
                <a href="/cart" style="color: black;">{{ __('lang.cart') }}</a>
                <a href="/profile" style="color: black;">{{ __('lang.profile') }}</a>
            </nav>
        @endif
    @endauth

</header>