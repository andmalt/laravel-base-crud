@extends('layouts.main')

@section('title', 'Home')


@section('cdn-section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css">
@endsection


@section('content')


<div class="container pt-5 p-md-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11 col-lg-10">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"> Titolo </th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data di pubblicazione</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td scope="row"></td>
                        <td><a href="{{ route('comics.show', $comic->id )}}" class="link_name">{{strtoupper($comic->title)}}</a></td>
                        <td>{{$comic->author}}</td>
                        <td>{{date("d-m-Y",strtotime($comic->publication_date))}}</td>
                        <td><a href="{{ route('comics.edit', $comic->id )}}"><i  class="fas fa-edit"></a></i></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf

                                @method('delete')
                                <button type="submit" id="delete"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach             
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection