<nav class="navbar navbar-expand-lg bg-dark text-white px-4">
      <div class="container-fluid">
          <a class="navbar-brand bg-dark text-white" href="/">The Aulab Post</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              </li>
            </ul>
          </div> -->
      </div>
      <div class="container-fluid d-flex p-2 justify-content-end">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Benvenuto {{Auth::user()->name}}</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
            <a class="dropdown-item dropdown-custom-profile" href="/user/profile">Profilo</a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        @if(Auth::user()->is_admin)
          <li>
            <a class="dropdown-item dropdown-custom-standard-labels" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
          </li>
        @endif
  
        @if(Auth::user()->is_writer)
          <li>
            <a class="dropdown-item dropdown-custom-standard-labels" href="{{ route('writer.dashboard') }}">Dashboard Redattore</a>
          </li>
        @endif

        @if(Auth::user()->is_revisor)
          <li>
            <a class="dropdown-item dropdown-custom-standard-labels" href="{{ route('revisor.dashboard') }}">Dashboard Revisore</a>
          </li>
        @endif
        <li>
            <a class="dropdown-item dropdown-custom-exit" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a></li>
            <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
            @csrf
            </form>
        </ul>
      </li>
      <li class="nav-item">
        <a type="button" class="btn btn-light mx-2" href="{{route('article.create')}}"><i class="fa-solid fa-pen pen-navbar mx-1 pe-2"></i>Scrivi un articolo</a>
      </li>
      @endauth
      @guest
      <li>
      <a type="button" class="btn btn-outline-light mx-2" href="{{ route('register') }}">Registrati</a>
      </li>
      <li>
        <a class="mx-2 btn btn-warning" href="{{ route('login') }}">Accedi</a>
      </li>
      @endguest
      <!-- @guest
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Benvenuto!</a>
        </li>
      @endguest -->
    </div>
    <form class="d-flex w-75" method="GET" action="{{route('article.search')}}">
      <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Cerca</button>
    </form>

</nav>