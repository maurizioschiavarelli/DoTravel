<x-layout>

    <x-Main_China>

        <div class="text parallax">
            <h2>China month</h2>
            <h1>{{ env('APP_NAME') }}</h1>
        </div>

    </x-Main_China>

    <h2 class="text-center mt-3">SELEZIONA LA CATEGORIA</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($categories as $category)
                <div class="col-4 col-lg-3 col-sm-3 mt-3">
                    <a href="{{ route('byCategory', ['category' => $category]) }}">
                        <p class="categorySelect">{{ $category->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <h2 class="text-center mt-3">DAI UN OCCHIATA ALLE NOSTRE ESPERIENZE PIU GETTONATE</h2>
    <div class="container mt-5">
        <div class="row">

            @forelse ($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center mb-3 cardCustom">
                        <img src="https://picsum.photos/200" class="card-img-top"
                            alt="Cover dell'articolo {{ $article->title }}">
                        <div class="card-body">
                            <p class="card-title">{{ $article->title }}</p>
                            <p class="card-subtitle">{{ $article->price }}</p>
                            <div class="d-flex justify-content-evenly align-items-center mt-5">
                                <a href="{{ route('article.show', compact('article')) }}">Mostra</a>
                                <a
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $article->category->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h3>
                        Non sono stati creati ancora annunci per questa categoria
                    </h3>
                </div>
            @endforelse

        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/Img_carousel/carousel_img1.png') }}" class="d-block w-100 imgCustom"
                    alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h5>Sea and Mountains</h5>
                    <p>Viaggi alla scoperta delle migliori spiagge e dei migliori panorami del mondo</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/Img_carousel/carousel_img2.jpg') }}" class="d-block w-100 imgCustom"
                    alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h5>China mounth</h5>
                    <p>Mese della cina, esplora aree incontaminate</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/Img_carousel/carousel_img3.png') }}" class="d-block w-100 imgCustom"
                    alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h5>Farm collection</h5>
                    <p>Stupende escursioni nelle campagne italiane</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</x-layout>
