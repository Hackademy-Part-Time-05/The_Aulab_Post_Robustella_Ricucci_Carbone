<x-layout>
    <div class="container-fluid p-5 header text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Inserisci un articolo
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('article.store') }}" class="card p-5 shadow" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" rows="7" cols="30" class="form-control">{{ old('body') }}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-warning">Inserisci un articolo</button>
                        <a href="{{ route('homepage') }}" class="btn btn-outline-dark">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>