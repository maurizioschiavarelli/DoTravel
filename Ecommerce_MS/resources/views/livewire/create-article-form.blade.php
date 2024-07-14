@if (session()->has('success'))
    <div class="alert alert-success text-center createArticleFormSuccess">{{ session('success') }}</div>
@endif

<form wire:submit="store" class="formCreateArticles">

    <div class="mb-4">
        <label for="title" class="form-label">Nome articolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
        <div class="form-text">Inserisci il nome dell'articolo</div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="form-label">Descrizione dell'articolo</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.blur="description">
        <div class="form-text">Inserisci la descrizione dell'articolo</div>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="price" class="form-label">Prezzo dell'articolo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.blur="price">
        <div class="form-text">Inserisci il prezzo dell'articolo</div>
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <select class="form-select mb-4" id="category" class="@error('category') is-invalid @enderror" wire:model.blur="category">
            <option value="">Seleziona una categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        @error('category')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </select>

    <button type="submit" class="btn btn-primary mb-4">Crea annuncio</button>

</form>
