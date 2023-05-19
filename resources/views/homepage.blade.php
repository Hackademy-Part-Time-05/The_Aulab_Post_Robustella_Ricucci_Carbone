<x-layout>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>        
    @endif

<div class="container container-fluid my-5">
    <div class="row justify-content-around">
        @foreach($articles as $article)
            <div class="col-3 col-md-4 col-sm-4">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body p-0">
                    <h5 class="card-title p-3">{{$article->title}}</h5>
                    <p class="card-text px-3">{{$article->subtitle}}</p>
                    <div class="card-footer py-3">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-warning container">Leggi</a>
                        <div class="text-body-secondary text-muted py-2 d-flex justify-content-center">Redatto il {{$article->created_at->format('d/m/y')}} da <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></div>
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted d-flex justify-content-center fst-italic text-capitalize py-1">{{$article->category->name}}</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
 </div>
</x-layout>