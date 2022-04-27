<header>
    <div class="line-blu">
        <div class="container-line">
            <ul>
                <li><a href="#">DC POWER VISA</a></li>
                <li><a href="#">ADDITIONAL DC SITES</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="logo">
        <img src="./images/dc-logo.png" alt="logo DC" />
        </div>
        <div class="header-menu">
        <ul>
            <li class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a>
            </li>
            <li class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">COMICS</a>
            </li>
            <li class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
            </li>
            <li class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
            </li>
            <li class="{{ Route::current()->getName() == 'games' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'games' ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
            </li>
            <li class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }}">
                <a class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
            </li>
            <li>
                <a href="#">VIDEOS</a>
            </li>
            <li>
                <a href="#">FANS</a>
            </li>
            <li>
                <a href="#">NEWS</a>
            </li>
            <li>
                <a href="#">SHOP</a>
            </li>
        </ul>
        </div>
    </div>
</header>
