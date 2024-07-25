<x-layout>

    @if ($article->images->count() > 0)
    <div id="carouselExampleDark" class="carousel carousel-dark slide carouselCustom">
        {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div> --}}

        <div class="carousel-inner">
            @foreach ($article->images as $key => $image )
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img src="{{ $image->getUrl(2000, 2000)}}" class="d-block w-100 imgCustom" alt="Immagine {{$key + 1}} dell'articolo {{ $article->title }}">
                    <div class="carousel-caption d-flex flex-column align-items-center">
                        <h5>{{$article->title}}</h5>
                        <h5>{{$article->price}}</h5>
                        <p>{{$article->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($article->images->count()>1)
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>
    @else
    <img src="https://picsum.photos/3000" alt="nessuna immagine inserita dall'utente" class="d-block w-100 imgCustom">
    <p class="text-center">Nessuna fotografia inserita</p>
    @endif

</x-layout>
