<x-layout>

    <x-Main_China>
        <div class="text parallax">
            <h2>I nostri annunci</h2>
            <h1>{{ env('APP_NAME') }}</h1>
        </div>
    </x-Main_China>

    <div class="container mt-5 mb-5">
        <div class="row">

            @forelse ($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center mb-3 cardCustom">
                        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(2000, 2000) : 'https://picsum.photos/300'}}" class="card-img-top"
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
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono stati creati ancora annunci
                    </h3>
                </div>
            @endforelse

        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$articles->links()}}
    </div>

</x-layout>
