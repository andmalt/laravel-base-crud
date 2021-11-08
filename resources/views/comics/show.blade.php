@extends('layouts.main')

@section('title', $comic->title)

@section('content')

<div class="container p-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="">
                <div class="card mb-3">
                    <img src="{{ $comic->image_url}}" class="card-img-top img-fluid img_card" alt="{{$comic->title}} image">
                    <div class="card-body">
                      <h5 class="card-title"><strong>{{strtoupper($comic->title)}}</strong></h5>
                      <p class="card-text"><strong>Autore:</strong>  {{$comic->author}}</p>
                      <p class="card-text"><strong>Data di pubblicazione:</strong>   {{date("d-m-Y",strtotime($comic->publication_date))}}</p>
                      <p class="card-text"><strong>Descrizione:</strong>  {{$comic->description}}</p>
                      <p class="card-text"><small class="text-muted">Last updated {{date("H:i:s d-m-Y",strtotime($comic->updated_at))}}</small></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection