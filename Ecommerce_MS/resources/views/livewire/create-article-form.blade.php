@if (session()->has('success'))
    <div class="alert alert-success text-center createArticleFormSuccess">{{ session('success') }}</div>
@endif

<form wire:submit="store" class="formCreateArticles">

    <div class="mb-4">
        <label for="title" class="form-label">Nome articolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">
        <div class="form-text">Inserisci il nome dell'articolo</div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="form-label">Descrizione dell'articolo</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
            wire:model.blur="description">
        <div class="form-text">Inserisci la descrizione dell'articolo</div>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="price" class="form-label">Prezzo dell'articolo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">
        <div class="form-text">Inserisci il prezzo dell'articolo</div>
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <select class="form-select mb-4" id="category" class="@error('category') is-invalid @enderror"
        wire:model.blur="category">
        <option value="">Seleziona una categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        @error('category')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </select>

    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple
            class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
        <label for="">Inserisci un immagine</label>
    </div>

    @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview:</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                                style="background-image: url({{ $image->temporaryUrl() }})"></div>
                            <button type="button" class="btn mt-1 btn-danger"
                                wire:click="removeImage({{ $key }})">X</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <button type="submit" class="btn btn-primary mb-4">Crea annuncio</button>

</form>
