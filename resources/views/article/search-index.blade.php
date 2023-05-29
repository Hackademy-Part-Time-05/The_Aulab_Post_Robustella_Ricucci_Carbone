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
                    <x-card :$article />
                </div>
        @endforeach
    </div>
    </div>

</x-layout>