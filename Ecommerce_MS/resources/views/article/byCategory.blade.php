<x-layout>

    <x-Main_China>
        <div class="text parallax">
            <h2>I nostri annunci</h2>
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

    <div class="container mt-5 mb-5">
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
                                <a href="">{{ $article->category->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>
                        Non sono stati creati ancora annunci per questa categoria
                    </h3>
                </div>
            @endforelse

        </div>
    </div>

</x-layout>
