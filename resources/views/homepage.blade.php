<x-layout>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>        
    @endif
    
    <x-carousel :$articlescarousel />

    <!-- Cards -->
    <div class="container container-fluid my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
                <div class="col-3 col-md-4 col-sm-4">
                    <x-card :$article />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>