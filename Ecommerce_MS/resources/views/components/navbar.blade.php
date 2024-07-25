<nav>
    <a href="{{route('homepage')}}" class="logo">DoTravel</a>
    <ul>
        @auth
            <li><a href="{{route('article.index')}}">TUTTI GLI ITINERARI</a></li>
            <li><a href="{{route('article.create')}}">CREA ARTICOLO</a></li>
            <li><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">LOGOUT</a></li>
            <form action="{{route('logout')}}" method="post" class="d-none" id="form-logout">@csrf</form>
        @else
            <li><a href="{{route('login')}}">LOGIN</a></li>
            <li><a href="{{route('register')}}">REGISTRATI</a></li>
        @endauth
            {{-- <li class="search"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
            <li class="dropdown"><a href=""><i class="fa-solid fa-bars"></i></a></li> --}}
    </ul>
</nav>


