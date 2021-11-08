@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-9">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col-3">#</th>
                        <th scope="col-3"> Titolo </th>
                        <th scope="col-3">Autore</th>
                        <th scope="col-3">Data di pubblicazione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td><a href="{{ route('comics.show', $comic->id )}}" class="link_name">{{strtoupper($comic->title)}}</a></td>
                        <td>{{$comic->author}}</td>
                        <td>{{date("d-m-Y",strtotime($comic->publication_date))}}</td>
                    </tr> 
                    @endforeach             
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection