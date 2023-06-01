<x-layout>
    <div class="container-fluid p-5 header text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-start vorder rounded p-2 shadow">
            <div class="col-12 col-md-6 p-5">
                <h2>Lavora come revisore</h2>
                <p>Siamo alla ricerca di revisori appassionati e meticolosi per unirsi al nostro team. Come revisore, sarai responsabile di controllare e perfezionare gli articoli pubblicati sul nostro sito. La tua attività principale sarà quella di garantire che i contenuti siano grammaticalmente corretti, coerenti e privi di errori. Sarai coinvolto nel processo di editing, collaborando con i redattori e fornendo feedback costruttivi per migliorare la qualità dei contenuti. Se hai un occhio attento per i dettagli, una solida conoscenza della lingua e la passione per la scrittura di qualità, ci piacerebbe sentire la tua candidatura.</p>
                <h2>Lavora come redattore</h2>
                <p>Sei appassionato di scrittura e desideri far parte di un team creativo? Stiamo cercando redattori talentuosi per arricchire il nostro sito con articoli di qualità. Come redattore, avrai l'opportunità di creare contenuti coinvolgenti e informativi per il nostro pubblico. Sarai coinvolto nella ricerca e nella scrittura di articoli su una varietà di argomenti, seguendo linee guida specifiche. Collaborerai con il team per sviluppare idee e garantire che i contenuti soddisfino gli standard richiesti. Se ami la scrittura e desideri far parte di un progetto stimolante, non esitare a candidarti come redattore.</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="p-5 d-flex flex-column justify-content-start" action="{{route('careers.submit')}}" method="post">
                    @csrf
                    
                    <h2>Invia la tua candidatura</h2>
                    <div class="mb-3"> 
                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <div>
                        <label for="message" class="form-label">Parlaci di te</label>
                    </div>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control careers-form">{{old('message')}}</textarea>
                </div>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-warning">Invia la candidatura</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</x-layout>

