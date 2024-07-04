<nav class="navbar navbar-expand-lg fs-5">

    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('homepage') }}">{{ env('APP_NAME') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Chi siamo</a>
                </li>
            </ul>

            @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Benvenuto
                            {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf</form>
                </ul>
            @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Registrati</a>
                    </li>
                </ul>
            @endauth

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>

        </div>

    </div>

</nav>
