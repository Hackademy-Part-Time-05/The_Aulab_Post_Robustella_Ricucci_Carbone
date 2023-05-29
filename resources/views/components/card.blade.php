<div class="card mb-4">
    <div class="rounded-4 rounded-top-4">
        <a href="{{route('article.show', compact('article'))}}"><img src="{{Storage::url($article->image)}}" class="card-img-top" alt="..."></a>
    </div>
    <div class="card-body p-0">
        <div class="card-title-subtitle">
            <h5 class="card-title p-3">{{$article->title}}</h5>
            <p class="card-text px-3 ellipsis">{{$article->subtitle}}</p>
        </div>
    </div>
    <div class="card-footer py-3">
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-warning container">Leggi</a>
        <div class="text-body-secondary text-muted pt-4 text-center">Redatto il {{$article->created_at->format('d/m/y')}} da <a class="writer-link" href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></div>
        <p class="text-muted small text-center">Tempo di lettura {{$article->readDuration()}} min</p>
        <p class="small fst-italic text-capitalize text-center">
            @foreach($article->tags as $tag)
                #{{$tag->name}}
            @endforeach
            @if($article->category)
                <div class="d-flex justify-content-center">
                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize text-center">{{$article->category->name}}</a>
                </div>
            @else 
                <div class="d-flex justify-content-center small text-muted fst-italica text-capitalize">
                    Non categorizzato
                </div> 
            @endif   
        </p>
    </div>
</div>