<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar_h p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('comics.index')}}">Comics Fanpage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ request()->routeIs('comics.index') ? 'active' : '' }}" href="{{route('comics.index')}}">Comics</a>
          <a class="nav-link {{ request()->routeIs('comics.create') ? 'active' : '' }}" href="{{route('comics.create')}}">New comics</a>
        </div>
      </div>
    </div>
  </nav>