@extends('layouts.main')

@section('title', $comic->title)

@section('content')

<div class="container p-5">
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card mb-3">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text">{{$comic->author}}</p>
                      <p class="card-text">{{$comic->publication_date}}</p>
                      <p class="card-text">{{$comic->description}}</p>
                      <p class="card-text"><small class="text-muted">Last updated {{}}</small></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection