<x-layout>

    <div class="container-fluid p-5 header text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-6">
                {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <a href="{{route('article.show', compact('article'))}}"><img src="{{Storage::url($article->image)}}" class="card-img-top" alt="..."></a>
                <div class="text-center mt-4">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                        <p class="text-muted small text-center">Tempo di lettura {{$article->readDuration()}} min</p>
                    </div>
                </div>
                <hr>
                <p>{!! nl2br($article->body) !!}</p>
                <div class="text-center mt-3">
                    <a href="{{route('article.index')}}" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left me-2"></i>Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        @if(Auth::user() && Auth::user()->is_revisor)
            @if(!$article->is_accepted)
                <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white mx-3 mb-5"><i class="fa-solid fa-check me-2"></i>Accetta articolo</a>
            @endif
            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white mx-3 mb-5"><i class="fa-solid fa-xmark me-2"></i>Rifiuta articolo</a>
        @endif
    </div>
</x-layout>