<header>
    <h2>
        sono l'header
    </h2>
    <br>
    <div>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('post') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
        @endif
    </div>

</header>
