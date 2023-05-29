<x-layout>

    <div class="container-fluid p-5 header text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per: {{$query}}
            </h1>
        </div>
    </div>

    <div class="container container-fluid my-5">
    <div class="row justify-content-around">
        @foreach($articles as $article)
            <div class="col-3 col-md-4 col-sm-4">
                <div class="card">
                    <a href="{{route('article.show', compact('article'))}}"><img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="..."></a>
                    <div class="card-body p-0">
                    <h5 class="card-title p-3">{{$article->title}}</h5>
                    <p class="card-text px-3">{{$article->subtitle}}</p>
                    <div class="card-footer py-3">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-warning container">Leggi</a>
                        <div class="text-body-secondary text-muted pt-4 text-center">Redatto il {{$article->created_at->format('d/m/y')}} da <a class="writer-link" href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></div>
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted d-flex justify-content-center fst-italic text-capitalize py-1">{{$article->category->name}}</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <span class="text-muted small fst-italic">- tempo di lettura {{$article->readDuration()}} min</span>
</x-layout>