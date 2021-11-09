@extends('layouts.main')

@section('title', 'Home')


@section('cdn-section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css">
@endsection


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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{$comic->id}}</td>
                        <td><a href="{{ route('comics.show', $comic->id )}}" class="link_name">{{strtoupper($comic->title)}}</a></td>
                        <td>{{$comic->author}}</td>
                        <td>{{date("d-m-Y",strtotime($comic->publication_date))}}</td>
                        <td><a href="{{ route('comics.edit', $comic->id )}}"><i  class="fas fa-edit"></a></i></td>
                    </tr> 
                    @endforeach             
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection