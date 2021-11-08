
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 p-4">
            <div class="card border-dark mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1>{{ $request->routeIs('comics.edit') ? "Modifica $comic->name" : "Inserisci un nuovo fumetto" }}</h1>
                        <a class="btn btn-dark" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
                </div>
                <div class="card-body text-dark">
                    <form action="{{  $request->routeIs('comics.edit') ? route('comics.update', $comic) : route('comics.store') }}" method="post">
                        
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
