<header>

    <ul class="nav bg-primary">
        <div class="container d-flex justify-content-end">
            <li class="nav-item">
                <a class="nav-link active text-light" href="#" aria-current="page">DC POWER</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADDITIONAL DC SITES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </div>
    </ul>
    <div class="container d-flex py-3 ">
        <img class="me-5" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <nav class="nav justify-content-center align-items-center">
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'character' ? 'nav-active' :''}}" href="{{route('character')}}" aria-current="page">CHARACTER</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'comics' ? 'nav-active' :''}}" href="{{route('comics')}}">COMICS</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'movies' ? 'nav-active' :''}}" href="{{route('movies')}}">MOVIES</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'tv' ? 'nav-active' :''}}" href="{{route('tv')}}" aria-current="page">TV</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'games' ? 'nav-active' :''}}" href="{{route('games')}}">GAMES</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'collect' ? 'nav-active' :''}}" href="{{route('collect')}}">COLLECTIBLES</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'videos' ? 'nav-active' :''}}" href="{{route('videos')}}" aria-current="page">VIDEOS</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'fans' ? 'nav-active' :''}}" href="{{route('fans')}}">FANS</a>
        <a class="nav-link text-dark fw-bold {{Route::currentRouteName() === 'news' ? 'nav-active' :''}}" href="{{route('news')}}">NEWS</a>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    SHOP
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
    </nav>

    </div>




</header>