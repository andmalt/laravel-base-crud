
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
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-9 d-flex justify-content-between align-items-center ">
                                <label for="title" class="form-label col-12 col-md-8 col-lg-3">Titolo fumetto</label>
                                <input class="form-control " type="text" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}" required>
                                <div class="form-text m-3 col-12 col-md-10 col-lg-4">Inserisci il titolo del nuovo fumetto</div>       
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 d-flex justify-content-between align-items-center ">
                                <label for="author" class="form-label col-12 col-md-8 col-lg-3">Autore fumetto</label>
                                <input class="form-control " type="text" id="author" name="author" placeholder="Autore" value="{{ $comic->author }}" required>
                                <div class="form-text m-3 col-12 col-md-10 col-lg-4">Inserisci l'autore del nuovo fumetto</div>       
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 d-flex justify-content-between align-items-center ">
                                <label for="image" class="form-label col-12 col-md-8 col-lg-3">Immagine fumetto</label>
                                <input class="form-control " type="text" id="image" name="image" placeholder="Immagine" value="{{ $comic->image_url }}" required>
                                <div class="form-text m-3 col-12 col-md-10 col-lg-4">Inserisci immagine link</div>       
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 d-flex justify-content-between align-items-center ">
                                <label for="image" class="form-label col-12 col-md-8 col-lg-3">Immagine fumetto</label>
                                <input class="form-control " type="text" id="image" name="image" placeholder="Immagine" value="{{ $comic->image_url }}" required>
                                <div class="form-text m-3 col-12 col-md-10 col-lg-4">Inserisci immagine link</div>       
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
