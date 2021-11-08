@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11 col-lg-10">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Titolo </th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data di pubblicazione</th>
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