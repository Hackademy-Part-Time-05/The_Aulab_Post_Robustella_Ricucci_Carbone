<x-layout>


<div class="row d-flex container-fluid my-5">
    <div class="col-4 ps-5">
        <img src="{{$user->image}}" class="rounded float-start" alt="...">
    </div>
    <div class="col-8 pe-5">

        <label for="name">Username:</label>
        <h5>{{$user->name}}</h5>
        <label for="name">Indirizzo E-mail:</label>
        <h5>{{$user->email}}</h5>
        <label for="name">Ruolo:</label>
        <h5>
            @if ($user->is_admin)
                Amministratore;
            @endif
            @if ($user->is_revisor)
                Revisore;
            @endif
            @if ($user->is_writer)
                Redattore;
            @endif
        </h5>
        <div>
            <button type="button" class="btn btn-outline-primary d-flex mt-4">Modifica Profilo</button>
        </div>
    </div>
</div>
</x-layout>
